<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	  <meta property="qc:admins" content="37506410676305615511676375636" />
	  <meta property="wb:webmaster" content="7206ea21bdd1b620" />
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport"
	        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	  <meta name="format-detection" content="telephone=no">
	  <meta name="renderer" content="webkit">
	  <meta http-equiv="Cache-Control" content="no-siteapp"/>
	  <link rel="alternate icon" type="image/png" href="/lib/image/32moonsun.png">
	  <link rel="stylesheet" href="/lib/assets/css/amazeui.min.css"/>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/lib/assets/js/polyfill/rem.min.js"></script>
<script src="/lib/assets/js/polyfill/respond.min.js"></script>
<script src="/lib/assets/js/amazeui.legacy.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/lib/assets/js/jquery.min.js"></script>
<script src="/lib/assets/js/amazeui.js"></script>
<!--<![endif]-->
	   <style>
    .get {
      background: #1E5B94;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

   
    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
      background: #2d3e50;
    }
    .list-left{
    	width: 120px;
		float: left;
		margin-right: 10px;
    }
  </style>
</head>
<body>
<header class="am-topbar am-topbar-fixed-top" >
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="#">chyy</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-secondary am-show-sm-only"
            data-am-collapse="{target: '#collapse-head'}"><span class="am-sr-only">导航切换</span> <span
        class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <!--<li class="am-active"><a href="#">首页</a></li>-->
        <li><a href="/index.php" data-am-popover="{content: '首页', trigger: 'hover focus'}"><span class="am-icon-home"></span>首页</a></li>
        <li><a href="#" data-am-popover="{content: '我的资料', trigger: 'hover focus'}">关于我</a></li>
        <li><a href="#" data-am-popover="{content: '兴趣广泛', trigger: 'hover focus'}">兴趣</a></li>
        <li><a href="#" data-am-popover="{content: '各种吐槽', trigger: 'hover focus'}">吐槽</a></li>
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            分享 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">技术分享</li>
            <li><a href="#">1. php</a></li>
            <li><a href="#">2. css</a></li>
            <li><a href="#">3. html</a></li>
            <li><a href="#">4. javascript</a></li>
            <li><a href="#">5. linux</a></li>
          </ul>
        </li>
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            休闲 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">娱乐</li>
            <li><a href="#">1. 八卦</a></li>
            <li><a href="#">2. 音乐</a></li>
            <li><a href="#">3. 游戏</a></li>
            <li><a href="#">4. 动漫</a></li>
          </ul>
        </li>
        
        <li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            盛世华夏 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">“中国有礼仪之大，故称夏；有服章之美，谓之华。”</li>
            <li><a href="#">1. 史籍</a></li>
            <li><a href="#">2. 汉服</a></li>
            
          </ul>
        </li>
        <li><a href="#" data-am-popover="{content: '“中国有礼仪之大，故称夏；有服章之美，谓之华。”', trigger: 'hover focus'}">给我留言</a></li>
      </ul>

      <div class="am-topbar-right">
        <button id="zc" class="am-btn am-btn-secondary am-topbar-btn am-btn-sm" data-am-modal="{target: '#doc-modal-2'}"><span class="am-icon-pencil"></span> 注册</button>
      </div>

      <div class="am-topbar-right">
        <button id="zc"  class="am-btn am-btn-primary am-topbar-btn am-btn-sm" data-am-modal="{target: '#doc-modal-1'}"><span class="am-icon-user"></span> 登录</button>
      </div>
    </div>
  </div>
</header>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">登录
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      <div class="am-g">
  <div class="am-u-lg-10 am-u-sm-centered">
    
    <div class="am-btn-group" >
     <!-- <a href="#" class="am-btn am-btn-secondary am-btn-sm"><i class="am-icon-github am-icon-sm"></i> Github</a>
      <a href="#" class="am-btn am-btn-success am-btn-sm"><i class="am-icon-google-plus-square am-icon-sm"></i> Google+</a>
      <a href="#" class="am-btn am-btn-primary am-btn-sm"><i class="am-icon-stack-overflow am-icon-sm"></i> stackOverflow</a>-->
      <a href="/index.php/Oauth/qq_login"><img src="/lib/image/qq_login.png"/></a>
      <a href="/index.php/Oauth/weibologin"><img src="/lib/image/weibo_login.png"/></a>
      <a href="/index.php/Oauth/qq_login"><img src="/lib/image/qq_login.png"/></a>
    </div>
    <p>嗨！你可以选择以上合作网站帐号直接登录本站</p>
    <form method="post" class="am-form">
      <label for="email">邮箱:</label>
      <input type="email" name="" id="email" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="" id="password" value="">
      <br>
      <label for="remember-me">
        <input id="remember-me" type="checkbox">
        记住密码
      </label>
      <br />
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr">
      </div>
    </form>
    <hr>
    <p>© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
  </div>
</div>
    </div>
  </div>
</div>
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">注册
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
    <div class="am-modal-bd">
      注册框。
    </div>
  </div>
</div>

<script type="text/javascript">
var browser=navigator.appName;
var b_version=navigator.appVersion;
var version=parseFloat(b_version);
var width=document.body.scrollWidth;
$('.am-topbar-fixed-top').css('max-width',width-17);
</script>

	<title>陈月阳</title>
</head>
<body>
	<div class="get" style="position:relative;"> <a href="javascript: void(0)" style="position:absolute;top:10px;right:20px;background-color: red;" class="am-close am-close-spin" onclick="closeget()">&times;</a>
  <div class="am-g">
    <div class="am-u-lg-12">
      <h1 class="get-title">恶，人之本性。因人性有恶，才有法度。天下人生而好利，才有财货土地之争夺。生而贪欲，才有盗贼暴力与杀戮。生而有奢望，才有声色犬马。人性之恶 必以律法而后正。以法治防范恶意；以法治疏导人性；人性才能向善有序。----《大秦帝国之裂变》--卫鞅</h1>

      <p>
        诸子百家
      </p>

    </div>
  </div>
</div>

<div class="am-g am-g-fixed blog-g-fixed" style="max-width:1200px;">
  <div class="am-u-md-8">
   		<div data-am-widget="list_news" class="am-list-news am-list-news-default">
   		<div data-am-widget="slider" class="am-slider am-slider-c1" data-am-slider='{&quot;directionNav&quot;:false}'>
  <ul class="am-slides">
    <li>
      <img src="http://cn.bing.com/az/hprichv/LondonTrainStation_GettyRR_139321755_ZH-CN742316019.jpg">
      <div class="am-slider-desc">远方 有一个地方 那里种有我们的梦想</div>
    </li>
    <li>
      <img src="http://s.cn.bing.net/az/hprichbg/rb/CardinalsBerries_ZH-CN10679090179_1366x768.jpg">
      <div class="am-slider-desc">某天 也许会相遇 相遇在这个好地方</div>
    </li>
    <li>
      <img src="http://s.cn.bing.net/az/hprichbg/rb/QingdaoJiaozhou_ZH-CN10690497202_1366x768.jpg">
      <div class="am-slider-desc">不要太担心 只因为我相信 终会走过这条遥远的道路</div>
    </li>
    <li>
      <img src="http://s.cn.bing.net/az/hprichbg/rb/FennecFox_ZH-CN13720911949_1366x768.jpg">
      <div class="am-slider-desc">OH PARA PARADISE 是否那么重要 你是否那么地遥远</div>
    </li>
  </ul>
</div>
  <!--列表标题-->
  <div class="am-list-news-hd am-cf">
    <!--带更多链接-->
    <a href="###">
      <h2>分享</h2>
      <span class="am-list-news-more am-fr">更多 &raquo;</span>
    </a>
  </div>

  <div class="am-list-news-bd">
    <ul class="am-list">
      <!--缩略图在标题左边-->
      <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
        <div class="am-col col-sm-4 am-list-thumb list-left">
          <a href="http://www.douban.com/online/11614662/">
            <img style="max-height:120px;" class="am-img-circle" src="/lib/image/1 (5).jpg" alt="我很囧，你保重....晒晒旅行中的那些囧！"
            />
          </a>
        </div>
        <div class="am-col col-sm-8 am-list-main">
          <h3 class="am-list-item-hd">
            <a href="<?php echo U('Article/show') ;?>" target="_bank">我很囧，你保重....晒晒旅行中的那些囧！</a>
          </h3>
          <div class="am-list-item-text">囧人囧事囧照，人在囧途，越囧越萌。标记《带你出发，陪我回家》http://book.douban.com/subject/25711202/为“想读”“在读”或“读过”，有机会获得此书本活动进行3个月，每月送出三本书。会有不定期bonus！</div>
          <p class="am-list-date" style="margin-top: 0.8rem;margin-bottom: 0.4rem;">标签：php</p>
          <p class="am-list-date" style="margin-top: 0rem;margin-bottom: 0rem;">
          	<time>2012/12/18</time>
          	<span>阅读(99)</span>
			<span>评论(99)</span>
			<a  class="am-btn am-btn-success" style="padding: 0.3rem;float:right;cursor:pointer;">&nbsp;&nbsp;阅读全文》</a>
			<!--<span style="float:right;cursor:pointer;">阅读全文》</span>-->
          </p>
        </div>
      </li>
       <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
        <div class="am-col col-sm-4 am-list-thumb list-left">
          <a href="http://www.douban.com/online/11614662/">
            <img style="max-height:120px;" src="/lib/image/1 (5).jpg" alt="我很囧，你保重....晒晒旅行中的那些囧！"
            />
          </a>
        </div>
        <div class="am-col col-sm-8 am-list-main">
          <h3 class="am-list-item-hd">
            <a href="http://www.douban.com/online/11614662/">我很囧，你保重....晒晒旅行中的那些囧！</a>
          </h3>
          <div class="am-list-item-text">囧人囧事囧照，人在囧途，越囧越萌。标记《带你出发，陪我回家》http://book.douban.com/subject/25711202/为“想读”“在读”或“读过”，有机会获得此书本活动进行3个月，每月送出三本书。会有不定期bonus！</div>
          <p class="am-list-date" style="margin-top: 0.8rem;margin-bottom: 0.4rem;">标签：php</p>
          <p class="am-list-date" style="margin-top: 0rem;margin-bottom: 0rem;">
          	<time>2012/12/18</time>
          	<span>阅读(99)</span>
			<span>评论(99)</span>
			<a  class="am-btn am-btn-success" style="padding: 0.3rem;float:right;cursor:pointer;">&nbsp;&nbsp;阅读全文》</a>
          </p>
        </div>
      </li>
       <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
        <div class="am-col col-sm-4 am-list-thumb list-left">
          <a href="http://www.douban.com/online/11614662/">
            <img style="max-height:120px;" src="/lib/image/1 (5).jpg" alt="我很囧，你保重....晒晒旅行中的那些囧！"
            />
          </a>
        </div>
        <div class="am-col col-sm-8 am-list-main">
          <h3 class="am-list-item-hd">
            <a href="http://www.douban.com/online/11614662/">我很囧，你保重....晒晒旅行中的那些囧！</a>
          </h3>
          <div class="am-list-item-text">囧人囧事囧照，人在囧途，越囧越萌。标记《带你出发，陪我回家》http://book.douban.com/subject/25711202/为“想读”“在读”或“读过”，有机会获得此书本活动进行3个月，每月送出三本书。会有不定期bonus！</div>
          <p class="am-list-date" style="margin-top: 0.8rem;margin-bottom: 0.4rem;">标签：php</p>
          <p class="am-list-date" style="margin-top: 0rem;margin-bottom: 0rem;">
          	<time>2012/12/18</time>
          	<span>阅读(99)</span>
			<span>评论(99)</span>
			<button type="button" class="am-btn am-btn-success" style="padding: 0.3rem;float:right;cursor:pointer;">&nbsp;&nbsp;阅读全文》</button>
          </p>
        </div>
      </li>
      <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
        <div class="am-col col-sm-4 am-list-thumb list-left">
          <a href="http://www.douban.com/online/11624755/">
            <img style="max-height:120px;" src="/lib/image/1 (5).jpg" alt="我最喜欢的一张画" />
          </a>
        </div>
        <div class="am-col col-sm-8 am-list-main">
          <h3 class="am-list-item-hd">
            <a href="http://www.douban.com/online/11624755/">我最喜欢的一张画</a>
          </h3>
          <div class="am-list-item-text">你最喜欢的艺术作品，告诉大家它们的------名图画，色彩，交织，撞色，线条雕塑装置当代古代现代作品的照片美我最喜欢的画群296795413进群发画，少说多发图，</div>
           <p class="am-list-date" style="margin-top: 0.8rem;margin-bottom: 0.4rem;">标签：php</p>
         	 <p class="am-list-date" style="margin-top: 0rem;margin-bottom: 0rem;">
	          	<time>2012/12/18</time>
	          	<span>阅读(99)</span>
				<span>评论(99)</span>
				<button type="button" class="am-btn am-btn-success" style="padding: 0.3rem;float:right;cursor:pointer;">&nbsp;&nbsp;阅读全文》</button>
          </p>
        </div>
      </li>
      <li class="am-g am-list-item-desced">
        <div class="am-col am-list-main">
          <h3 class="am-list-item-hd">
            <a href="http://www.douban.com/online/11645411/">“你的旅行，是什么颜色？” 晒照片，换北欧梦幻极光之旅！</a>
          </h3>
          <div class="am-list-item-text">还在苦恼圣诞礼物再也玩儿不出新意？快来抢2013最炫彩的跨国圣诞礼物！【参与方式】1.关注“UniqueWay无二之旅”豆瓣品牌小站http://brand.douban.com/uniqueway/2.上传一张**本人**在旅行中色彩最浓郁、最丰富的照片（色彩包含取景地、周边事物、服装饰品、女生彩妆等等，发挥你们无穷的创意想象力哦！^^）一定要有本人出现喔！3.
            在照片下方，附上一句旅行宣言作为照片说明。 成功参与活动！* 听他们刚才说，上传照片的次</div>
        </div>
      </li>
    </ul>
  </div>
</div>
  </div>

  <div class="am-u-md-4 blog-sidebar">
    <div class="am-panel-group">
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">关于我</div>
        <div class="am-panel-bd">
          <p>前所未有的中文云端字型服务，让您在 web 平台上自由使用高品质中文字体，跨平台、可搜寻，而且超美。云端字型是我们的事业，推广字型学知识是我们的志业。从字体出发，关心设计与我们的生活，justfont blog
            正是為此而生。</p>
          <a class="am-btn am-btn-success am-btn-sm" href="#">查看更多 →</a>
        </div>
      </section>
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">今日推荐</div>
        <ul class="am-list blog-list">
          <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
          <li><a href="#">[but]服貿最前線？－再訪桃園機場</a></li>
          <li><a href="#">到日星鑄字行學字型</a></li>
          <li><a href="#">glyph font vs. 漢字（上）</a></li>
          <li><a href="#">浙江民間書刻體上線</a></li>
          <li><a href="#">[極短篇] Android v.s iOS，誰的字體好讀？</a></li>
        </ul>
      </section>

      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">团队成员</div>
        <div class="am-panel-bd">
          <ul class="am-avg-sm-4 blog-team">
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230159_kjTmC.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
            </li>
            <li><img class="am-thumbnail"
                     src="http://img4.duitang.com/uploads/blog/201406/15/20140615230159_kjTmC.thumb.224_0.jpeg" alt=""/>
            </li>
          </ul>
        </div>
      </section>
    </div>
  </div>

</div>

<script type="text/javascript">
	function closeget(){
		$('.get').remove();
	}

</script>
<footer class="footer">
  <p>© 2014 <p>
</footer>

</body>
</html>