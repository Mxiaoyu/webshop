<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>�޸�����</title>
 <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">�޸�����</td></tr>
<tr><td colspan="2"><?php include 'action/session_member_check.php';?></td></tr>
<tr><td><?php include_once ('sub_member_menu.php'); ?></td>
<td>
<?php 
 require_once("conn/Conn_DB.php");   //�������ݿ������ļ� 
 $str = "select * from Member_Info where M_Name ='".$membername."'"; 
 $arr = mysql_query( $str);         //ִ��SQL���
 $result = mysql_fetch_array($arr); //��ȡ��ѯ���
 ?> 
 <form name="form1" action="action/member_pwd_update_do.php" method="post">
<table align="center" border="1" width="300px">
  <tr><td colspan="2" align="center">�޸�����</td></tr>
  <tr>
     <td>�û�����</td>
     <td><?php echo $result['M_Name'];?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>����ԭ���룺</td>
     <td><input type="password" name="txt_password"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>���������룺</td>
     <td><input type="password" name="txt_newpassword1"/></td>
  </tr>
    <tr>
     <td><font color="red">*</font>ȷ�������룺</td>
     <td><input type="password" name="txt_newpassword2"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['M_ID'] ?>"/>
       <input type="submit" value="����"/>
     </td>
  </tr>
</table>
</form>
</td></tr></table>
</body>
</html>