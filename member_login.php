<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>会员登陆</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
<script type="text/ecmascript" src="./js/md5.js"></script>
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
function encrypt()
{
var pwd=document.getElementById("pwd").value;
var hash = hex_md5(pwd);
document.getElementById("pwd").value=hash;
document.getElementById("login_form").submit()
}
</script>
</head>
<body onLoad="javascript:form1.txt_username.focus()">
<form name="form1" id="login_form", action="action/member_login_do.php" method="post">
 <table border="1" align="center">
   <tr><td colspan="2" align="center"> 会员登陆</td></tr>
   <tr>
      <td>用户名：</td>
      <td><input type="text" name="txt_username" /></td>
   </tr>
   <tr>
      <td>密码：</td>
      <td><input type="password" name="txt_pwd" id="pwd"/> </td>
 <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'></td>
      <td>Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td>
    </tr>
   <tr>
      <td>验证码:</td>
      <td><input type="text", name="captcha_code" /></td>
   </tr>
      <td colspan="2"  align="center">
        <button type="button" value="登陆", onclick="encrypt()" >登录</button> <a href="member_register.php" target="_self">注册</a>
      </td>
   </tr>
 </table>
</form>
</body>
</html>
