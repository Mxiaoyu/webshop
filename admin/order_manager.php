<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>��������</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php   include 'action/session_check.php'; //��¼�ж�  ?>   
��������<br/>
<table border="1">
<tr> 
   <td>���</td><td>�������</td><td>��Ա</td><td>��Ʒ����</td><td>�������</td><td>�ջ���</td>
   <td>�ջ���ַ</td><td>��ϵ�绰</td><td>��ע</td><td>��������</td><td>״̬</td><td colspan="3">����</td>
</tr>
 <?php   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
  $str = "select * from  Order_Info order by O_CreateTime desc" ; //��ѯ���
  $arr = mysql_query( $str );  //ִ��SQL���
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result["O_ID"];?>  </td>
    <td> <?php echo $result["O_Num"];?> </td>
    <td> <?php echo $result["M_Name"];?> </td>
    <td> <?php echo $result["P_Nums"];?> </td>
    <td> <?php echo $result["O_Money"];?> </td>
    <td> <?php echo $result["O_Taker"];?> </td>
    <td> <?php echo $result["O_Address"];?> </td>
    <td> <?php echo $result["O_Tel"];?> </td>
    <td> <?php echo $result["O_Remark"];?> </td>
    <td> <?php echo $result["O_CreateTime"];?> </td>
    <td>
    <?php switch ($result["O_Status"])
       {
     	case '0':
     		echo '<font color=red>������</font>';
     		break;
     	case '1':
     		echo '<font color=blue>�ѷ���</font>';
     		break;
     	case '2':
     		echo '�ѽ���';
     		break;
       }
     ?> 
     </td>
    <td><a href="action/order_action_do.php?Type=1&O_Num=<?php echo $result["O_Num"];?>">����</a></td>
    <td><a href="action/order_action_do.php?Type=2&O_Num=<?php echo $result["O_Num"];?>">����</a></td>
    <td><a href="order_info.php?O_Num=<?php echo $result["O_Num"];?>">��ϸ��Ϣ</a></td>
  </tr>
<?php }   ?>
 </table>
</body>
</html>
