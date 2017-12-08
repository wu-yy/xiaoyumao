<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="../../statics/img/favicon.ico">

    <title>小羽毛<?php echo $title;?></title>
    <!--核心bootstarp框架 -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../statics/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

</head>
<body>



<?php echo validation_errors();?>

<?php echo form_open('user/register'); //返回所有的表单错误信息，如果没有错误信息，返回空字符串?>

<label for="username">用户名</label>
<input  type="text" name="username" value="<?php echo set_value('username'); ?>"/>
<br/>
<label for="email">邮箱</label>
<input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
<br/>

<label for="password">密码</label>
<input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
<br/>
<label for="repassword">重复密码</label>
<input type="password" name="repassword" value="<?php echo set_value('repassword'); ?>"/>
<br/>
<input type="submit" name="submit" value="注册"/>
</form>


<p><a href="<?php echo site_url('welcome/index'); ?>">View Home</a></p>
<?php echo 'News archive XXM!'; ?>
<em>&copy;2017</em>

</body>

</html>