<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>订单管理</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php   include 'action/session_check.php'; //登录判断  ?>   
订单管理<br/>
<table border="1">
<tr> 
   <td>编号</td><td>订单编号</td><td>会员</td><td>商品数量</td><td>订单金额</td><td>收货人</td>
   <td>收货地址</td><td>联系电话</td><td>备注</td><td>订单日期</td><td>状态</td><td colspan="3">操作</td>
</tr>
 <?php   
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
  $str = "select * from  Order_Info order by O_CreateTime desc" ; //查询语句
  $arr = mysql_query( $str );  //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
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
    <td><a href="action/order_action_do.php?Type=1&O_Num=<?php echo $result["O_Num"];?>">发货</a></td>
    <td><a href="action/order_action_do.php?Type=2&O_Num=<?php echo $result["O_Num"];?>">结算</a></td>
    <td><a href="order_info.php?O_Num=<?php echo $result["O_Num"];?>">详细信息</a></td>
  </tr>
<?php }   ?>
 </table>
</body>
</html>
