<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>���ﳵ</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
  </head>
<body style="margin:0px 0px 0px 0px; text-align:center">
<table border="1" cellspacing="0" cellpadding="0" style="width:100%">
<tr><td width="250px">
<?php 
session_start();
require ('sub_newslist1.php');
      require ('sub_newslist2.php'); 
      require ('sub_productlist3.php');?> </td>
<td valign="top" width="750px">
<table border="1" cellspacing="0" cellpadding="0" style="width:100%">
<tr><td colspan="7" align="Center">�ҵĹ��ﳵ</tr>
<tr><td>��Ʒ���</td><td>��Ʒ����</td><td>ͼƬ</td><td>����</td><td>�۸�</td><td colspan="2">����</td></tr>
<?php 
 require_once("conn/Conn_DB.php");  //�������ݿ������ļ�  
if($_GET["P_ID"]!="")
  {
  	 $pid = $_GET["P_ID"];  //��Ʒ���
     $str = "select * from  Product_Info where P_ID =".$pid;
     $arr = mysql_query( $str);  //ִ��SQL���
     $result = mysql_fetch_array($arr); //��ȡ��ѯ���
     $a = array($result["P_ID"],$result["P_Name"],$result["P_Image"],'1',$result["P_VPrice"]);
      
     session_start(); 
     if($_SESSION['car'] == "")  //�������ﳵSESSION����  
       $car_arr=array();
     else 
       $car_arr = (array)$_SESSION['car'];
     array_push($car_arr,$a);
     $_SESSION['car'] = $car_arr;
  }
?>
<?php 
  if($_SESSION['car']!= "")  //��ʾ���ﳵSESSION��Ϣ
  {
    $arr2 = (array)$_SESSION['car'];
    foreach ($arr2 as $key1=> $value1 )
    { 
  	  echo "<tr>";
      echo "<td>". $value1[0]."</td>";
  	  echo "<td>". $value1[1]."</td>";
  	  echo "<td><img src='". $value1[2]."' width='39' height='39'/></td>";
  	  echo "<td><input type='text' name='txt_num".$value1[0]."']' value='". $value1[3]."'/></td>";
  	  echo "<td>". $value1[4]."</td>";
  	  echo "<td><a  class='a1' href='action/shopcar_do.php?type=2'>��������</a></td>";
  	  echo "<td><a  class='a1' href='action/shopcar_do.php?type=3'>ɾ��</a></td>";
      echo"</tr>";
    }
  ?>
  <tr><td colspan="7"><a  class="a1" href="action/shopcar_do.php?type=1">��չ��ﳵ</a> 
       <a class="a1"  href="index_content.php">��������</a>
       <a class="a1" href="member_order_add.php">�ύ����</a>
</td></tr>
 <?php 
 }
 else 
 {
	echo "<tr><td colspan='7' align='center'>��ǰ���ﳵΪ�գ�</td></tr>";
 }
?>
</table>
</td></tr></table>
</body>
</html>
