<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����Ա��Ϣ����</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="" method="post">
<table border="1">
<tr>
  <td>���</td><td>�û���</td><td>����</td><td>��ϵ�绰</td>
  <td>QQ</td><td>����</td><td>�༭</td><td>ɾ��</td>
</tr>
<?php   
  require_once("../conn/Conn_DB.php");   //�������ݿ������ļ� 
  $str = "select * from  Admin_Info order by A_ID"; //��ѯ���
  $arr = mysql_query($str);                 //ִ��SQL���
  while($result = mysql_fetch_array($arr))  //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result["A_ID"];?> </td>   
    <td> <?php echo $result["A_UserName"];?> </td>
    <td> <?php echo $result["A_Password"];?> </td>
    <td> <?php echo $result["A_Tel"];?> </td>
    <td> <?php echo $result["A_QQ"];?> </td>
    <td> <?php echo $result["A_Email"];?> </td>
    <td><a href="admin_update.php?A_ID=<?php echo $result["A_ID"];?>">�༭</a></td>
    <td><a href="action/admin_delete_do.php?A_ID=<?php echo $result["A_ID"];?>">ɾ��</a></td>
  </tr>
<?php }  ?>
 </table>
 </form>
</body>
</html>
