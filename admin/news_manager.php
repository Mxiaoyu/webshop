<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>������Ϣ����</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="" method="post">
<table border="1">
  <tr>
    <td>���</td><td>�������</td><td>���±���</td><td>״̬</td><td>����ʱ��</td>
    <td>����</td><td>�������վ</td><td>�༭</td><td>ɾ��</td>
   </tr>
 <?php   
  include("../conn/Conn_DB.php");    //�������ݿ������ļ� 
  $str = "select n.*,nt.NT_Name from  News_Info n,News_Type nt where n.NT_ID = nt.NT_ID order by N_CreateTime desc"; //��ѯ���
  $arr = mysql_query( $str );                //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result["N_ID"];?>   </td>
    <td> <?php echo $result["NT_Name"];?></td>   
    <td> <?php echo $result["N_Title"];?></td>
    <td> <?php echo $result["N_Status"]=='1'? '<font color=blue>�ѷ���</font>':'<font color=red>δ����</font>';?>  </td>
    <td> <?php echo $result["N_CreateTime"];?></td>
    <td><a href="action/news_action_do.php?Type=1&N_ID=<?php echo $result["N_ID"];?>">����</a></td>
    <td><a href="action/news_action_do.php?Type=2&N_ID=<?php echo $result["N_ID"];?>">�������վ</a></td>
    <td><a href="news_update.php?N_ID=<?php echo $result["N_ID"];?>">�༭</a></td>
    <td><a href="action/news_action_do.php?Type=3&N_ID=<?php echo $result["N_ID"];?>">ɾ��</a></td>
  </tr>
<?php }  ?>
 </table>
 </form>
</body>
</html>
