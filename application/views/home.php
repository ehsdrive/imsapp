<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<base href="<?php echo base_url();?>"/>
<link href="css/login-style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div class="main-wapper-div">
<div class="waper-div">

<div class="fixed-div-main">
<div class="login-main">
<div class="">
<h4>User Login</h4>
<div class="login-bg-div">
<form name="login" action="<?php echo site_url('site/login');?>" method="post">
<input name="username" type="text" class="username" value="User Name" onkeydown="if(this.value=='User Name') this.value=''" onblur="if(this.value=='') this.value='User Name'" onfocus="if(this.value=='User Name') this.value=''" autocomplete="off" /><br />
<input name="password" type="password" class="password" value="Password" onkeydown="if(this.value=='Password') this.value=''" onblur="if(this.value=='') this.value='Password'" onfocus="if(this.value=='Password') this.value=''" autocomplete="off"  /><br /><br />
<input name="" type="submit" value="SIGN IN" />
</form>
</div>
</div>
</div>
</div>

</div>

</div>
    </body>
</html>

