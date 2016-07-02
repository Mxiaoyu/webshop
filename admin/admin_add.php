<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>添加管理员信息</title>
 </head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form name="form1" action="action/admin_add_do.php" method="post">
<table border="1" width="300px">
  <tr><td colspan="2" align="center">添加管理员信息</td></tr>
  <tr>
     <td><font color="red">*</font>用户名：</td>
     <td><input type="text" name="txt_username"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>密码：</td>
     <td><input type="password" name="txt_password"/></td>
  </tr>
  <tr>
     <td>联系电话：</td>
     <td><input type="text" name="txt_tel"/></td>
  </tr>
  <tr>
     <td>QQ：</td>
     <td><input type="text" name="txt_qq"/></td>
  </tr>
  <tr>
     <td>邮箱：</td>
     <td><input type="text" name="txt_email"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="submit" value="添加"/>
     </td>
  </tr>
</table>
</form>
</body>
</html>