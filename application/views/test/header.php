
<!-- start pre_output -->


<!-- end pre_output -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta http-equiv="x-pjax-version" content="v7">
    <link rel="apple-touch-icon" href="images/logo.jpg">
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://bbs.pku.edu.cn/v2/mobile/home.php">
    <script type="text/javascript">
        window.login = false;
        window.username = "guest";
    </script>

    <!-- start _stylesheets_and_scripts.php-->
    <link rel="stylesheet" href="../../statics/bbs/libs/css/all.css">
    <script>
        if (typeof(window.console) == 'undefined')
            window.console = {};
        if (typeof(window.console.log) == 'undefined')
            window.console.log = function(a){};
    </script>
    <script src="../../statics/bbs/libs/config.js"></script>
    <script src="../../statics/bbs/libs/crypto-js.js"></script>
    <script src="../../statics/bbs/libs/jquery-1.11.3.min.js"></script>
    <script src="../../statics/bbs/libs/jquery.pjax.js"></script>
    <script src="../../statics/bbs/libs/jquery.ba-resize.min.js"></script>
    <script src="../../statics/bbs/libs/underscore-min.js"></script>
    <script src="../../statics/bbs/libs/jquery.gridly.js"></script>
    <script src="../../statics/bbs/libs/jquery.transit.js"></script>
    <script src="../../statics/bbs/libs/rangy-core.js"></script>
    <script src="../../statics/bbs/libs/rangy-selectionsaverestore.js"></script>
    <script src="../../statics/bbs/libs/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../statics/bbs/libs/Sortable.min.js"></script>
    <script src="../../statics/bbs/libs/jquery.selection.js"></script>
    <script src="../../statics/bbs/libs/strophe.min.js"></script>
    <script src="../../statics/bbs/libs/highlight.pack.js"></script>
    <script src="../../statics/bbs/libs/highslide-with-gallery.js"></script>
    <script src="../../statics/bbs/libs/bdwm.min.js"></script>
    <script src="../../statics/bbs/libs/all.min.js"></script>
    <link rel="stylesheet" href="../../statics/bbs/libs/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../statics/bbs/libs/css/github.css">
    <link rel="stylesheet" href="../../statics/bbs/libs/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="../../statics/bbs/libs/css/highslide.css" />
    <!--[if lt IE 7]>
    <link rel="stylesheet" href="../../statics/bbs/libs/css/highslide-ie6.css" />
    <![endif]-->
    <link rel="stylesheet" href="../../statics/bbs/libs/css/bdwm.min.css">

    <!-- end _stylesheets_and_scripts.php-->

    <!-- start meta -->
    <title>小羽毛</title>
    <meta name="description" content="知识分享平台。"/>

    <!-- end meta -->
    <script>
        var isShownWelcome = false;
    </script>
</head>
<body>
<div style="margin:0 auto;width:0px;height:0px;overflow:hidden;"><img src="images/logo.jpg"></div> <!-- for wechat thumb -->
<nav id="left-nav">
    <div id="logo"><a href="home.php"><img src="/v2/uploads/logo_OaWGYT.gif"></a></div>
    <div id="user-info">
        <div class="have-login">
            <div class="portrait-container">
                <img class="portrait pic" src="images/user/portrait-neu.png">
            </div>
            <p class="username " >
                <a class="user-list-trigger" data-action="user-list-trigger"></a>
                <span data-role="login-username">guest</span>
                <span class="triangle"></span>
                <span class="btn-list"  style="display: none">
          <a class="btn-goto-homepage" href="user.php?uid=15265">个人主页</a>
          <a href="modify-profile.php">修改帐号</a>
          <a class="btn-logout">退出</a>
        </span>
            </p>
            <ul id="detail-list">
                <li data-role="login-nickname">昵称：小羽毛儿</li>
                <li data-role="login-rankname">等级：高级站友</li>
                <li data-role="login-numposts">文章：1552</li>
            </ul>
            <a href="refill-form.php" class="sub-button red">
                <span>重填注册单</span>
            </a>
        </div>
        <div class="not-login">
            <form id="loginform">
                <div class="portrait-container">
                    <img class="portrait pic" src="../../statics/img/home/icon-weidenglu.png">
                </div>
                <div class="input-wrapper">
                    <input type="text" placeholder="用户名 / username" name="username" id="username">
                </div>
                <div class="input-wrapper">
                    <input type="password" placeholder="密码 / password" name="password">
                </div>
                <div class="input-wrapper">
                    <input type="checkbox" name="keepalive" data-role="keepalive" id="form-remember-checkbox">
                    <label for="form-remember-checkbox">下次自动登录</label>
                </div>
                <div class="btn-group">
                    <a class="btn" id="btn-login">登录</a>
                    <a class="btn" id="btn-register" data-no-pjax href="register.php" target="_blank">注册</a>
                </div>
                <a class="white-link" data-no-pjax href="reset-password-req.php">找回密码</a>
            </form>
        </div>
    </div>
    <div id="link-buttons">
        <a href="home.php" id="tab_home"><img src="../../statics/img/home/iconfont-home.png">首页</a>
        <a href="favorite.php" id="tab_favorite"><img src="../../statics/img/home/icon-shoucangjia.png">版面收藏夹</a>
        <a href="zone.php" id="tab_zone"><img src="../../statics/img/home/iconfont-fenlei.png">版面目录</a>
        <a href="favorite-collection.php" id="tab_favorite_collection"><img src="../../statics/img/home/icon-jinghuaqu.png">精华区收藏夹</a>
        <a href="friend.php" id="tab_friend"><img src="../../statics/img/home/iconfont-haoyou.png">关注/粉丝</a>
    </div>
</nav>

<nav id="top-nav">
    <div class="wrapper">
        <div class="inner-wrapper">
            <div class="search-box"></div>
            <div class="top-right-links">
                <a href="help.php">帮助中心</a>
            </div>
        </div>
    </div>
</nav>
