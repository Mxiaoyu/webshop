<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>����������</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="" method="post">
<table border="1">
<tr><td>���</td><td>�������</td><td>�������</td><td>�����</td><td>�༭</td><td>ɾ��</td></tr>
 <?php   
  require_once("../conn/Conn_DB.php");   //�������ݿ������ļ� 
  $str = "select * from  News_Type order by NT_ParentID , NT_ID"; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result["NT_ID"];?>  </td>   
    <td> <?php echo $result["NT_ParentID"];?>  </td>
    <td> <?php echo $result["NT_Name"];?>  </td>
    <td> <?php echo $result["NT_Intro"];?>  </td>
    <td><a href="newstype_update.php?NT_ID=<?php echo $result["NT_ID"];?>">�༭</a></td>
    <td><a href="action/newstype_delete_do.php?NT_ID=<?php echo $result["NT_ID"];?>">ɾ��</a></td>
  </tr>
<?php }  ?>
</table>
</form>
</body>
</html>
