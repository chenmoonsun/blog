<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta property="qc:admins" content="37506410676305615511676375636" />
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
      <img src="/lib/image/weibo_login.png"/>
      <img src="/lib/image/qq_login.png"/>
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
  <div class="am-list-news-hd am-cf">
    <!--带更多链接-->
    <a href="###">
      <h2>分享</h2>

      <span class="am-list-news-more am-fr">更多 &raquo;</span>
    </a>
  </div>
   <article class="blog-main">
      <h3 class="am-article-title blog-title">
        <a href="#">Google fonts 的字體（display 篇）</a>
      </h3>
      <h4 class="am-article-meta blog-meta">by <a href="">open</a> posted on 2014/06/17 under <a href="#">字体</a></h4>

      <div class="am-g blog-content">
        <div class="am-u-lg-7">
          <p><!-- 本demo来自 http://blog.justfont.com/ -->你自信滿滿的跟客戶進行第一次 demo。秀出你精心設計的內容時，你原本期許客戶冷不防地掉下感動的眼淚。</p>

          <p>因為那實在是太高級了。</p>

          <p>除了各項基本架構幾乎完美無缺之外，內文是高貴的，有著一些距離感的，典雅的襯線字體。不是 Times New
            Roman，而是很少有人見過的，你精心挑選過的字體，凸顯你品味的高超。而且它並沒有花上你與業主一毛錢，或許這也非常重要。</p>
        </div>
        <div class="am-u-lg-5">
          <p><img src="http://f.cl.ly/items/451O3X0g47320D203D1B/不夠活潑.jpg"></p>
        </div>
      </div>
      <div class="am-g">
        <div class="am-u-sm-12">
          <p>看著自己的作品，你的喜悅之情溢於言表，差點就要說出我要感謝我的父母之類的得獎感言。但在你對面的客戶先是一點表情也沒有，又瞬間轉為陰沉，抿了抿嘴角冷冷的說……</p>

          <p>「我要一種比較跳的感覺懂嗎？」</p>
        </div>
      </div>
    </article>
    
  </div>

  <div class="am-u-md-4 blog-sidebar">
    <div class="am-panel-group">
     <section class="am-panel am-panel-default">
        <div class="am-panel-hd"><span class="am-icon-tag"></span>公告</div>
        <div class="am-panel-bd">
          <p>欢迎欢迎欢迎宁桓宇</p>
          
        </div>
      </section>
      <section class="am-panel am-panel-default">
        <div class="am-panel-hd"><span class="am-icon-bookmark"></span>关于作者</div>
        <div class="am-panel-bd">
          <p>斯蒂芬斯蒂芬斯蒂芬圣诞节了看法几十块卡洛斯剪短发克里斯蒂积分善良劫匪速度快来福将克里斯蒂积分上看到了来看是骄傲的分开了三季度交罚款了十大减肥速度快累死了快放假速度快</p>
          <a class="am-btn am-btn-success am-btn-sm" href="#">查看更多 →</a>
        </div>
      </section>

      <section class="am-panel am-panel-default">
      <div data-am-widget="tabs" class="am-tabs am-tabs-d2">
  <ul class="am-tabs-nav am-cf">
    <li class="am-active">
      <a href="[data-tab-panel-0]"><div class="am-panel-hd">Ta的文章</div></a>
    </li>
    <li class="">
      <a href="[data-tab-panel-1]"><div class="am-panel-hd">推荐文章</div></a>
    </li>
    <li class="">
      <a href="[data-tab-panel-2]"><div class="am-panel-hd">其他文章</div></a>
    </li>
  </ul>
  <div class="am-tabs-bd">
    <div data-tab-panel-0 class="am-tab-panel am-active">
        <ul class="am-list blog-list">
          <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
          <li><a href="#">[but]服貿最前線？－再訪桃園機場</a></li>
          <li><a href="#">到日星鑄字行學字型</a></li>
          <li><a href="#">glyph font vs. 漢字（上）</a></li>
          <li><a href="#">浙江民間書刻體上線</a></li>
          <li><a href="#">[極短篇] Android v.s iOS，誰的字體好讀？</a></li>
          <li><a href="#">glyph font vs. 漢字（上）</a></li>
          <li><a href="#">浙江民間書刻體上線</a></li>
          <li><a href="#">[極短篇] Android v.s iOS，誰的字體好讀？</a></li>
        </ul>
    </div>
    <div data-tab-panel-1 class="am-tab-panel ">
        <ul class="am-list blog-list">
          <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
          <li><a href="#">[but]服貿最前線？－再訪桃園機場</a></li>
          <li><a href="#">到日星鑄字行學字型</a></li>
          <li><a href="#">glyph font vs. 漢字（上）</a></li>
          <li><a href="#">浙江民間書刻體上線</a></li>
          <li><a href="#">[極短篇] Android v.s iOS，誰的字體好讀？</a></li>
        </ul>
    </div>
  <div data-tab-panel-2 class="am-tab-panel ">
      <ul class="am-list blog-list">
          <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
          <li><a href="#">[but]服貿最前線？－再訪桃園機場</a></li>
          <li><a href="#">到日星鑄字行學字型</a></li>
          
        </ul>
  </div>
</div>
</div>
        
      </section>

      <section class="am-panel am-panel-default">
        <div class="am-panel-hd">最近访客</div>
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