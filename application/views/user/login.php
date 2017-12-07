<?php echo validation_errors();?>

<?php echo form_open('user/login'); //返回所有的表单错误信息，如果没有错误信息，返回空字符串?>

<label for="username">用户名</label>
    <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
    <br/>
<label for="password">密码</label>
<input type="password" name="password" value="<?php echo set_value('password'); ?>">
    <input type="submit" name="lsub" value="登录">
</form>
<a href="register">注册</a>