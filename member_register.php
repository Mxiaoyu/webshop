<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��Աע��</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
<script type="text/ecmascript" src="./js/md5.js"></script>
<script type='text/javascript'>
function encrypt()
{
var pwd=document.getElementById("pwd").value;
var hash = hex_md5(pwd);
document.getElementById("pwd").value=hash;
document.getElementById("register_form").submit()
}
</script>
</head>
<body style="margin:0px 0px 0px 0px;">
<form name="form1" id="register_form", action="action/member_register_do.php" method="post">
<table align="center" border="1" width="300px">
  <tr><td colspan="2" align="center">��Աע�� </td></tr>
  <tr>
     <td><font color="red">*</font>�û�����</td>
     <td><input type="text" name="txt_username"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>���룺</td>
     <td><input id="pwd", type="password" name="txt_password"/></td>
  </tr>
  <tr>
     <td>���뱣�����⣺</td>
     <td><input type="text" name="txt_question"/></td>
  </tr>
  <tr>
     <td>���뱣���𰸣�</td>
     <td><input type="text" name="txt_answer"/></td>
  </tr>
  <tr>
     <td>���֤�ţ�</td>
     <td><input type="text" name="txt_card"/></td>
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
     <td>��ϵ��ַ��</td>
     <td><input type="text" name="txt_address"/></td>
  </tr>
  <tr>
     <td>�������룺</td>
     <td><input type="text" name="txt_code"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <button type="button" value="ע��" onclick="encrypt()">ȷ��</button>
     </td>
  </tr>
</table>
</form>
</body>
</html>
