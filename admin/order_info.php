<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�鿴������ϸ��Ϣ</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
�鿴������ϸ��Ϣ<br/>
<table border="1">
 <?php   
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�
 if($_GET['O_Num']!="")
 {
   $onum = $_GET['O_Num'];  //��ȡ���ݵĶ������
   $str = "select * from  Order_Info where O_Num='$onum' order by O_CreateTime desc"; //��ѯ���
   $arr = mysql_query( $str );  //ִ��SQL���
   $result = mysql_fetch_array($arr);   //��ȡ��ѯ���
?>
  <tr><td>�������</td><td> <?php echo $result["O_Num"];?>   </td></tr>
  <tr><td>��Ʒ����</td><td> <?php echo $result["P_Nums"];?>  </td></tr>
  <tr><td>�������</td><td> <?php echo $result["O_Money"];?>  </td></tr>
  <tr><td>�ջ���</td>  <td> <?php echo $result["O_Taker"];?>  </td></tr>
  <tr><td>�ջ���ַ</td><td> <?php echo $result["O_Address"];?></td></tr>
  <tr><td>��ϵ�绰</td><td> <?php echo $result["O_Tel"];?>    </td></tr>
  <tr><td>��ע</td>    <td> <?php echo $result["O_Remark"];?> </td></tr>
  <tr><td>��������</td><td> <?php echo $result["O_CreateTime"];?></td></tr>
  <tr><td>״̬</td>    <td> 
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
    </td></tr>
 </table>
 <table border="1">
<tr><td>��Ʒ���</td><td>��Ʒ����</td><td>��ƷͼƬ</td><td>����</td><td>����</td><td>�ۿ�</td><td>С�Ƽ۸�</td></tr>
 <?php 
  $str2 = "select op.*,p.P_Name,p.P_Image from  Order_Product op, Product_Info p  where op.P_ID = p.P_ID and O_Num='$onum' order by OP_ID"; //��ѯ���
  $arr2 = mysql_query( $str2 );  //ִ��SQL���
  while($result2 = mysql_fetch_array($arr2))   //������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result2["P_ID"];?> </td>
    <td> <?php echo $result2["P_Name"];?> </td>
    <td> <img src='../<?php echo $result2["P_Image"];?>' width="39" height="39"/> </td>
    <td> <?php echo $result2["P_UnitPrice"];?> </td>   
    <td> <?php echo $result2["P_Nums"];?> </td>
    <td> <?php echo $result2["P_Flod"];?> </td>
    <td> <?php echo $result2["P_Price"];?></td>
  </tr>
<?php 
  }  
 } 
?>
 </table>
<a class="a1" href="javascript:history.back(-1);" target="_self">����</a>
</body>
</html>
