<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�༭����Ա��Ϣ</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="action/admin_update_do.php" method="post">
<?php   
if($_GET["A_ID"] !="" )
{
  require_once("../conn/Conn_DB.php");//�������ݿ������ļ�
  $aid = $_GET["A_ID"];               //��ȡ���ݵĹ���Ա���
  $str = "select * from Admin_Info where A_ID=".$aid;  //��ѯ���
  $arr = mysql_query($str);         //ִ��SQL���
  $result=mysql_fetch_array($arr);  //��ȡ��ѯ���   
?>
<table border="1">
  <tr><td colspan="2" align="center">�༭����Ա��Ϣ</td></tr>
  <tr>
     <td>�û�����</td>
     <td><?php echo $result['A_UserName'] ?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>���룺</td>
     <td><input type="password" name="txt_password" value="<?php echo $result['A_Password'] ?>"/></td>
  </tr>
  <tr>
     <td>��ϵ�绰��</td>
     <td><input type="text" name="txt_tel" value="<?php echo $result['A_Tel'] ?>"/></td>
  </tr>
  <tr>
     <td>QQ��</td>
     <td><input type="text" name="txt_qq" value="<?php echo $result['A_QQ'] ?>"/></td>
  </tr>
<tr>
     <td>���䣺</td>
     <td><input type="text" name="txt_email" value="<?php echo $result['A_Email'] ?>"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="hidden" name="txt_id" value="<?php echo $result['A_ID'] ?>"/>
        <input type="submit" value="����"/>
     </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('��ѡ��Ҫ�༭�Ĺ���Ա��Ϣ��');window.location.href='admin_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
