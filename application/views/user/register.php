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
