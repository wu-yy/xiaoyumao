<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="../../statics/img/favicon.ico">

    <title><?php  echo $title;?></title>
    <!--核心bootstarp框架 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../statics/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!--Custom style for this template-->

    <link href="../../statics/css/login/signin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?php echo validation_errors();?>

<div class="container">
    <?php echo form_open('user/login',"class='form-signin'"); //返回所有的表单错误信息，如果没有错误信息，返回空字符串?>
   <h2 class="form-signin-heading">请登录</h2>
    <label for="username" class="sr-only">用户名</label>
        <input type="text" name="username"  class="form-control" placeholder="用户名"  value="<?php echo set_value('username'); ?>" required autofocus/>
    <label for="password" class="sr-only">密码</label>
    <input type="password" name="password" class="form-control" placeholder="密码" value="<?php echo set_value('password'); ?>" required>
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me">记住我
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="lsub">登录</button>
    </form>

</div>
<div class="form-register">
    <a href="register" class="align-center">注册</a>
</div>
<div class="form-register">
    <p><a href="<?php echo site_url('welcome/index'); ?>">View Home</a></p>
    <?php echo 'Develpo by xiaoyumao!'; ?>
    <em>&copy;2017</em>
</div>

</body>
</html>