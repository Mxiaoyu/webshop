<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��ӹ���Ա��Ϣ</title>
 </head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form name="form1" action="action/admin_add_do.php" method="post">
<table border="1" width="300px">
  <tr><td colspan="2" align="center">��ӹ���Ա��Ϣ</td></tr>
  <tr>
     <td><font color="red">*</font>�û�����</td>
     <td><input type="text" name="txt_username"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>���룺</td>
     <td><input type="password" name="txt_password"/></td>
  </tr>
  <tr>
     <td>��ϵ�绰��</td>
     <td><input type="text" name="txt_tel"/></td>
  </tr>
  <tr>
     <td>QQ��</td>
     <td><input type="text" name="txt_qq"/></td>
  </tr>
  <tr>
     <td>���䣺</td>
     <td><input type="text" name="txt_email"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="submit" value="���"/>
     </td>
  </tr>
</table>
</form>
</body>
</html>