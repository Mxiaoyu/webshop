<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��Ա����</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">��Ա����</td></tr>
<tr><td colspan="2"><?php include 'action/session_member_check.php';?></td></tr>
<tr><td><?php include_once ('sub_member_menu.php'); ?></td>
  <td>
<?php 
  require_once("conn/Conn_DB.php"); //�������ݿ������ļ�  
  $str = "select * from Member_Info where M_Name ='".$membername."'";
  $arr = mysql_query( $str);  //ִ��SQL���
  $result = mysql_fetch_array($arr); //��ȡ��ѯ���
 ?> 
 <form name="form1" action="action/member_update_do.php" method="post">
<table align="center" border="1" width="300px">
  <tr><td colspan="2" align="center">�޸Ļ�Ա��Ϣ </td></tr>
  <tr>
     <td>�û�����</td>
     <td><?php echo $result['M_Name'];?></td>
  </tr>
  <tr>
     <td>���֤�ţ�</td>
     <td><input type="text" name="txt_card" value="<?php echo $result['M_Card'];?>"/> </td>
  </tr>
  <tr>
     <td>��ϵ�绰��</td>
     <td><input type="text" name="txt_tel" value="<?php echo $result['M_Tel'];?>"/> </td>
  </tr>
  <tr>
     <td>QQ��</td>
     <td><input type="text" name="txt_qq" value="<?php echo $result['M_QQ'];?>" /></td>
  </tr>
  <tr>
     <td>���䣺</td>
     <td><input type="text" name="txt_email" value="<?php echo $result['M_Email'];?>" /></td>
  </tr>
  <tr>
     <td>��ϵ��ַ��</td>
     <td><input type="text" name="txt_address" value="<?php echo $result['M_Address'];?>" /></td>
  </tr>
  <tr>
     <td>�������룺</td>
     <td><input type="text" name="txt_code" value="<?php echo $result['M_Code'];?>" /></td>
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