<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>��Ʒ������</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="" method="post">
<table border="1">
 <tr><td>���</td><td>�������</td><td>�������</td><td>�����</td><td>�༭</td><td>ɾ��</td></tr>
 <?php   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ� 
  $str = "select * from  Product_Type order by PT_ParentID , PT_ID" ; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
 <tr>
   <td> <?php echo $result["PT_ID"];?> </td>   
   <td> <?php echo $result["PT_ParentID"];?> </td>
   <td> <?php echo $result["PT_Name"];?> </td>
   <td> <?php echo $result["PT_Intro"];?> </td>
   <td> <a href="producttype_update.php?PT_ID=<?php echo $result["PT_ID"];?>">�༭</a></td>
   <td> <a href="action/producttype_delete_do.php?PT_ID=<?php echo $result["PT_ID"];?>">ɾ��</a></td>
 </tr>
<?php }   ?>
</table>
</form>
</body>
</html>
