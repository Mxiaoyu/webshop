<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�鿴����</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">�鿴����</td></tr>
<tr><td colspan="2"><?php  include 'action/session_member_check.php';?></td></tr>
<tr>
  <td><?php  include_once ('sub_member_menu.php'); ?></td>
  <td>
   <table border="1">
   <tr><td>���</td><td>�������</td><td>��Ʒ����</td><td>�������</td><td>�ջ���</td><td>�ջ���ַ</td><td>��ϵ�绰</td><td>��ע</td><td>��������</td><td>״̬</td><td>�鿴</td></tr>
   <?php   
  require_once("conn/Conn_DB.php");    //�������ݿ������ļ�
  $str = "select * from  Order_Info where M_Name='$membername' order by O_CreateTime desc";
  $arr = mysql_query( $str );  //ִ��SQL���
 while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
 {
?>
  <tr>
    <td> <?php echo $result["O_ID"];?>   </td>
    <td> <?php echo $result["O_Num"];?>  </td>   
    <td> <?php echo $result["P_Nums"];?> </td>
    <td> <?php echo $result["O_Money"];?></td>
    <td> <?php echo $result["O_Taker"];?></td>
    <td> <?php echo $result["O_Address"];?></td>
    <td> <?php echo $result["O_Tel"];?>    </td>
    <td> <?php echo $result["O_Remark"];?> </td>
    <td> <?php echo $result["O_CreateTime"];?></td>
    <td> <?php switch ($result["O_Status"])
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
    <td><a href="member_order_info.php?O_Num=<?php echo $result["O_Num"];?>">��ϸ��Ϣ</a></td>
  </tr>
<?php }   ?>
 </table>
</td></tr></table>
</body>
</html>
