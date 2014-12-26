<?php
//第三方登录 
class OauthAction extends Action {
	public $app_id='101180627';
    public $app_key='8ebf02b8317c9daa53e7733e18356879';
    public $callback="http://www.chenyueyang.com.cn/index.php/Oauth/qq_callback";
    public $sina_weibo_id='63285544';
    public $sina_weibo_key='a823369516563d8eab8280324c0fd743';
    public $sina_weibo_callback = "http://www.chenyueyang.com.cn/index.php/Oauth/weibocallback";
   //qq登录
    public function qq_login(){
    	 vendor('sdk.qq.oauthclass');

    	 $code=md5(uniqid(rand(), TRUE));
			$url = "https://graph.qq.com/oauth2.0/authorize?response_type=code&client_id=" 
			. $this->app_id . "&redirect_uri=" . urlencode($this->callback)
			. "&state=" . $code
			. "&scope=".$this->app_key;

        	redirect($url);
    }
    public function qq_callback(){
    	$inputs=$_GET;
    	echo "<pre>";
    	var_dump($inputs);
    	//获取access token
    	echo "123";
    	
    	$access_token=OauthAction::get_access_token($inputs,$this->app_id,$this->app_key,$this->callback);
    	$open_id =OauthAction::get_openid($inputs, $access_token['access_token']);//获取用户标示id
		
		//获取用户基本资料
		$data = OauthAction::get_user_info($access_token['access_token'], $this->app_id, $open_id);
    echo "<pre>";
    var_dump($access_token);
    var_dump($open_id);
    var_dump($data);
    }
   
    //获取access token
    function get_access_token($inputs, $appid, $appkey, $callback)
	{	
		  $url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&client_id=".$this->app_id."&client_secret=".$this->app_key."&code=".$inputs['code']."&redirect_uri=".urlencode($this->callback);
            $str = $this->visit_url($url);//访问url获得返回值
            parse_str($str,$arr);
            return $arr;
	}
	//获取open_id
	function get_openid($inputs,$access_token)
	{
		$graph_url = "https://graph.qq.com/oauth2.0/me?access_token=" . $access_token;
	
		$str  = file_get_contents($graph_url);
		if (strpos($str, "callback") !== false)
		{
			$lpos = strpos($str, "(");
			$rpos = strrpos($str, ")");
			$str  = substr($str, $lpos + 1, $rpos - $lpos -1);
		}
	
		$user = json_decode($str);
		if (isset($user->error))
		{
			//echo "<h3>error:</h3>" . $user->error;
			//echo "<h3>msg  :</h3>" . $user->error_description;
			exit;
		}
	
		//debug
		//echo("Hello " . $user->openid);
	
		//set openid to session
		return $user->openid;
		//var_dump();
	}
	 /**
         * 请求URL地址，得到返回字符串
         * @param $url qq提供的api接口地址
         * */
        public function visit_url($url){
            static $cache = 0;
            //判断是否之前已经做过验证
            if($cache === 1){
                $str = $this->curl($url);
            }elseif($cache === 2){
                $str = $this->openssl($url);
            }else{
                //是否可以使用cURL
                if(function_exists('curl_init')){
                    $str = $this->curl($url);
                    $cache = 1;
                    //是否可以使用openssl
                }elseif(function_exists('openssl_open') && ini_get("allow_fopen_url")=="1"){
                    $str = $this->openssl($url);
                    $cache = 2;
                }else{
                    die('请开启php配置中的php_curl或php_openssl');
                }
            }
            return $str;
        }
      /**
         * 通过curl取得页面返回值
         * 需要打开配置中的php_curl
         * */
        private function curl($url){
            $ch = curl_init();
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);//允许请求的内容以文件流的形式返回
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);//禁用https
            curl_setopt($ch,CURLOPT_URL,$url);//设置请求的url地址
            $str = curl_exec($ch);//执行发送
            curl_close($ch);
            return $str;
        }
        /**
         * 通过file_get_contents取得页面返回值
         * 需要打开配置中的allow_fopen_url和php_openssl
         * */
        private function openssl($url){
            $str = file_get_contents($url);//取得页面内容
            return $str;
        }
	//获取用户信息
	function get_user_info($access_token, $appid, $open_id)
	{
		$get_user_info = "https://graph.qq.com/user/get_user_info?"
			. "access_token=" . $access_token
			. "&oauth_consumer_key=" . $appid
			. "&openid=" . $open_id
			. "&format=json";
	
		$info = file_get_contents($get_user_info);
		$arr = json_decode($info, true);
	
		return $arr;
	}




	 //新浪
        public function weibologin(){
            session_start();
           Vendor('sdk.sina.OauthException');
            //require('lib/thinkphp/extend/vendor/sdk/sina/oauthexception.php');
            $o = new SaeTOAuthV2($this->sina_weibo_id,$this->sina_weibo_key);
            $code_url = $o->getAuthorizeURL($this->sina_weibo_callback);
            redirect($code_url);

        }
        public function weibocallback(){
            session_start();
             //vendor('sdk.sina.OauthException');
             //$o = new SaeTOAuthV2($this->sina_weibo_id,$this->sina_weibo_key);
            if (isset($_REQUEST['code'])) {
            $keys = array();
             $keys['code'] = $_REQUEST['code'];
             $keys['redirect_uri'] = $this->sina_weibo_callback;
            try {
            $token = OauthAction::getAccessToken( 'code', $keys ) ;
            } catch (OAuthException $e) {
            }
            }
            
           //echo '<pre>';
           //var_dump($token);
           //exit();
           
            if ($token) {
            $_SESSION['token'] = $token;
            setcookie( 'weibojs_'.$this->sina_weibo_id, http_build_query($token) );
            }
            redirect('oauth/getuser');
        }
        public function getuser(){
            session_start();
           // Vendor('sdk.sina.OauthException');
            $sina_weibo_appid=$this->sina_weibo_id;
            $sina_weibo_appkey=$this->sina_weibo_key;
            $sina_access_token=$_SESSION['token']['access_token'];
            $c = new SaeTClientV2($sina_weibo_appid,$sina_weibo_appkey,$sina_access_token);
            $ms  = $c->home_timeline(); // done
            $uid_get = $c->get_uid();
            $uid = $uid_get['uid'];
            $user_message = $c->show_user_by_id($uid);
            
              $user_name="wb_".$user_message['id'];
              
               //$user_name="wb_".$token['uid'];
               /*echo '<pre>' ;
               echo $this->config->item("WB_AKEY");
               var_dump($_SESSION['token']);
              echo '<hr>';
               var_dump($c);
               echo '<hr>';
                var_dump($user_message);
                echo '<hr>';
                var_dump($uid_get);
                echo '<hr>';
                var_dump($user_message);
                exit();*/
                $arruser=array(
                'user_name'=>$user_name,
                'nickname'=>$user_message['name'],
                'portrait'=>$user_message['profile_image_url']
            );
             echo "<pre>";
             var_dump($arruser);
            //$this->oauthlogin($user_name,$arruser);
            
        }
    /**
	 * Set API URLS
	 */
	/**
	 * @ignore
	 */
	function accessTokenURL()  { return 'https://api.weibo.com/oauth2/access_token'; }
	/**
	 * @ignore
	 */
	function authorizeURL()    { return 'https://api.weibo.com/oauth2/authorize'; }

    /**新浪微博
	 * authorize接口
	 *
	 * 对应API：{@link http://open.weibo.com/wiki/Oauth2/authorize Oauth2/authorize}
	 *
	 * @param string $url 授权后的回调地址,站外应用需与回调地址一致,站内应用需要填写canvas page的地址
	 * @param string $response_type 支持的值包括 code 和token 默认值为code
	 * @param string $state 用于保持请求和回调的状态。在回调时,会在Query Parameter中回传该参数
	 * @param string $display 授权页面类型 可选范围: 
	 *  - default		默认授权页面		
	 *  - mobile		支持html5的手机		
	 *  - popup			弹窗授权页		
	 *  - wap1.2		wap1.2页面		
	 *  - wap2.0		wap2.0页面		
	 *  - js			js-sdk 专用 授权页面是弹窗，返回结果为js-sdk回掉函数		
	 *  - apponweibo	站内应用专用,站内应用不传display参数,并且response_type为token时,默认使用改display.授权后不会返回access_token，只是输出js刷新站内应用父框架
	 * @return array
	 */
	function getAuthorizeURL( $url, $response_type = 'code', $state = NULL, $display = NULL ) {
		$params = array();
		$params['client_id'] = $this->sina_weibo_id;
		$params['redirect_uri'] = $url;
		$params['response_type'] = $response_type;
		$params['state'] = $state;
		$params['display'] = $display;
		return $this->authorizeURL() . "?" . http_build_query($params);
	}
	/**新浪微博
	 * access_token接口
	 *
	 * 对应API：{@link http://open.weibo.com/wiki/OAuth2/access_token OAuth2/access_token}
	 *
	 * @param string $type 请求的类型,可以为:code, password, token
	 * @param array $keys 其他参数：
	 *  - 当$type为code时： array('code'=>..., 'redirect_uri'=>...)
	 *  - 当$type为password时： array('username'=>..., 'password'=>...)
	 *  - 当$type为token时： array('refresh_token'=>...)
	 * @return array
	 */
	function getAccessToken( $type = 'code', $keys ) {
		$params = array();
		$params['client_id'] = $this->sina_weibo_id;
		$params['client_secret'] = $this->sina_weibo_key;
		if ( $type === 'token' ) {
			$params['grant_type'] = 'refresh_token';
			$params['refresh_token'] = $keys['refresh_token'];
		} elseif ( $type === 'code' ) {
			$params['grant_type'] = 'authorization_code';
			$params['code'] = $keys['code'];
			$params['redirect_uri'] = $keys['redirect_uri'];
		} elseif ( $type === 'password' ) {
			$params['grant_type'] = 'password';
			$params['username'] = $keys['username'];
			$params['password'] = $keys['password'];
		} else {
			//throw new OAuthException("wrong auth type");
			die("wrong auth type");
		}

		$response = $this->oAuthRequest($this->accessTokenURL(), 'POST', $params);
		$token = json_decode($response, true);
		if ( is_array($token) && !isset($token['error']) ) {
			$this->access_token = $token['access_token'];
			//$this->refresh_token = $token['refresh_token'];
		} else {
			//throw new OAuthException("get access token failed." . $token['error']);
			die("get access token failed." . $token['error']);
		}
		return $token;
	}

 }