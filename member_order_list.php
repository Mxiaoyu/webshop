<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>查看订单</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">查看订单</td></tr>
<tr><td colspan="2"><?php  include 'action/session_member_check.php';?></td></tr>
<tr>
  <td><?php  include_once ('sub_member_menu.php'); ?></td>
  <td>
   <table border="1">
   <tr><td>编号</td><td>订单编号</td><td>商品数量</td><td>订单金额</td><td>收货人</td><td>收货地址</td><td>联系电话</td><td>备注</td><td>订单日期</td><td>状态</td><td>查看</td></tr>
   <?php   
  require_once("conn/Conn_DB.php");    //包含数据库链接文件
  $str = "select * from  Order_Info where M_Name='$membername' order by O_CreateTime desc";
  $arr = mysql_query( $str );  //执行SQL语句
 while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
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
     		       echo '<font color=red>待发货</font>';
     		       break;
     	      case '1':
     		       echo '<font color=blue>已发货</font>';
     		       break;
     	      case '2':
     		       echo '已结算';
     		       break;
            }
           ?> 
    </td>
    <td><a href="member_order_info.php?O_Num=<?php echo $result["O_Num"];?>">详细信息</a></td>
  </tr>
<?php }   ?>
 </table>
</td></tr></table>
</body>
</html>
