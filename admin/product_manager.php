<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��Ʒ��Ϣ����</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="" method="post">
<table border="1">
<tr>
  <td>���</td><td>�������</td><td>��Ʒ����</td><td>ͼƬ</td><td>��Ա��</td><td>״̬</td>
  <td>����ʱ��</td><td colspan="3">����</td>
</tr>
 <?php   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
  $str = "select p.*,pt.PT_ID,pt.PT_Name from  Product_Info p,Product_Type pt where p.PT_ID = pt.PT_ID order by P_CreateTime desc"; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result["P_ID"];?> </td>
    <td> <?php echo $result["PT_Name"];?> </td>   
    <td> <?php echo $result["P_Name"];?> </td>
    <td> <img src='../<?php echo $result["P_Image"];?>' width="39" height="39"/> </td>
    <td> <?php echo $result["P_VPrice"];?>  </td>
    <td> <?php echo $result["P_Status"]=='1'? '<font color=blue>�ѷ���</font>':'<font color=red>δ����</font>';?>  </td>
    <td> <?php echo $result["P_CreateTime"];?> </td>
    <td> <a href="action/product_action_do.php?Type=1&P_ID=<?php echo $result["P_ID"];?>">����</a></td>
    <td> <a href="action/product_action_do.php?Type=2&P_ID=<?php echo $result["P_ID"];?>">�������վ</a></td>
    <td> <a href="product_update.php?P_ID=<?php echo $result["P_ID"];?>">�༭</a></td>
  </tr>
<?php }   ?>
 </table>
</form>
</body>
</html>
