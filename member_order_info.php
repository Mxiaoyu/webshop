<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>查看订单详细信息</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">查看订单详细信息</td></tr>
<tr><td colspan="2"><?php include 'action/session_member_check.php';?></td></tr>
<tr>
  <td><?php include_once ('sub_member_menu.php'); ?></td>
  <td>
    <table border="1">
   <?php   
  require_once("conn/Conn_DB.php");  //包含数据库链接文件 
  if($_GET['O_Num']!= "")
  {
 	$onum = $_GET['O_Num'];  //获取传递的订单编号
 	$str = "select * from  Order_Info where M_Name='$membername' and O_Num='$onum' order by O_CreateTime desc" ;
    $arr = mysql_query($str);  //执行SQL语句
    $result = mysql_fetch_array($arr);   //获取查询结果
 ?>
  <tr><td>订单编号</td> <td> <?php echo $result["O_Num"];?>  </td></tr>
  <tr><td>商品数量</td> <td> <?php echo $result["P_Nums"];?> </td></tr>
  <tr><td>订单金额</td> <td> <?php echo $result["O_Money"];?></td></tr>
  <tr><td>收货人</td>   <td> <?php echo $result["O_Taker"];?></td></tr>
  <tr><td>收货地址</td> <td> <?php echo $result["O_Address"];?></td></tr>
  <tr><td>联系电话</td> <td> <?php echo $result["O_Tel"];?>    </td></tr>
  <tr><td>备注</td>     <td> <?php echo $result["O_Remark"];?> </td></tr>
  <tr><td>订单日期</td> <td> <?php echo $result["O_CreateTime"];?></td></tr>
  <tr><td>状态</td>     <td> <?php echo $result["O_Status"]=='1'? '<font color=blue>已发货</font>':'<font color=red>待发货</font>';?>  </td></tr>
 </table>
 <table border="1">
<tr><td>商品编号</td><td>商品名称</td><td>商品图片></td><td>单价</td><td>数量</td><td>折扣</td><td>小计价格</td></tr>
 <?php
  $str2 = "select op.*,p.P_Name,p.P_Image from  Order_Product op, Product_Info p  where op.P_ID = p.P_ID and O_Num='$onum' order by OP_ID"; 
  $arr2 = mysql_query($str2 );              //执行SQL语句
 while($result2 = mysql_fetch_array($arr2)) //遍历查询结果的每一行
 {
?>
  <tr>
    <td> <?php echo $result2["P_ID"];?>  </td>
    <td> <?php echo $result2["P_Name"];?></td>
    <td> <img src='<?php echo $result2["P_Image"];?>' width="39" height="39"/>  </td>
    <td> <?php echo $result2["P_UnitPrice"];?>  </td>   
    <td> <?php echo $result2["P_Nums"];?></td>
    <td> <?php echo $result2["P_Flod"];?></td>
    <td> <?php echo $result2["P_Price"];?></td>
  </tr>
<?php
  }  
 }
?>
 <tr><td colspan="7">  <a class="a1" href="javascript:history.back(-1);" target="_self">返回</a> </td></tr>
</table>
</td>
</tr>
</table>
</body>
</html>
