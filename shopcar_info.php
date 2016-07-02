<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>购物车</title>
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
<tr><td colspan="7" align="Center">我的购物车</tr>
<tr><td>商品编号</td><td>商品名称</td><td>图片</td><td>数量</td><td>价格</td><td colspan="2">操作</td></tr>
<?php 
 require_once("conn/Conn_DB.php");  //包含数据库链接文件  
if($_GET["P_ID"]!="")
  {
  	 $pid = $_GET["P_ID"];  //商品编号
     $str = "select * from  Product_Info where P_ID =".$pid;
     $arr = mysql_query( $str);  //执行SQL语句
     $result = mysql_fetch_array($arr); //获取查询结果
     $a = array($result["P_ID"],$result["P_Name"],$result["P_Image"],'1',$result["P_VPrice"]);
      
     session_start(); 
     if($_SESSION['car'] == "")  //创建购物车SESSION变量  
       $car_arr=array();
     else 
       $car_arr = (array)$_SESSION['car'];
     array_push($car_arr,$a);
     $_SESSION['car'] = $car_arr;
  }
?>
<?php 
  if($_SESSION['car']!= "")  //显示购物车SESSION信息
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
  	  echo "<td><a  class='a1' href='action/shopcar_do.php?type=2'>更新数量</a></td>";
  	  echo "<td><a  class='a1' href='action/shopcar_do.php?type=3'>删除</a></td>";
      echo"</tr>";
    }
  ?>
  <tr><td colspan="7"><a  class="a1" href="action/shopcar_do.php?type=1">清空购物车</a> 
       <a class="a1"  href="index_content.php">继续购物</a>
       <a class="a1" href="member_order_add.php">提交订单</a>
</td></tr>
 <?php 
 }
 else 
 {
	echo "<tr><td colspan='7' align='center'>当前购物车为空！</td></tr>";
 }
?>
</table>
</td></tr></table>
</body>
</html>
