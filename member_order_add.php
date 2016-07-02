<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>提交订单</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td>提交订单</td></tr>
<tr><td><?php include 'action/session_member_check.php';?></td></tr>
<tr><td>
<table border="1" width="100%">
<?php 
 if($_SESSION['car']!="")  //判断购物车
 {
  $arr2 = (array)$_SESSION['car'];  //将购物车SESSION变量赋值给数组变量
  $p_nums = 0;  //声明变量，存储订单商品数量
  $o_money = 0; //声明变量，存储订单金额
  foreach ($arr2 as $key1=> $value1 )  //遍历购物车数组
  { 
  	echo "<tr>";
  	echo "<td>". $value1[0]."</td>";
  	echo "<td>". $value1[1]."</td>";
  	echo "<td><img src='". $value1[2]."' width='39' height='39'/></td>";
  	echo "<td>". $value1[3]."</td>";
  	echo "<td>". $value1[4]."</td>";
    echo"</tr>";
    $p_nums += (int)$value1[3];    //订单商品数量累加
    $o_money += (float)$value1[4]; //订单金额累加
  }
?>
</table>
</td></tr>
<tr><td>
<form name="form1" action="action/member_order_add_do.php" method="post">
<table border="1" width="100%">
  <tr><td>会员编写：</td>
      <td> <?php echo $membername;?><input type="hidden" name="txt_username" value="<?php echo $membername;?>"/></td>
  </tr>
  <tr><td>商品数量：</td>
      <td> <?php echo $p_nums;?><input type="hidden" name="txt_pnums" value="<?php echo $p_nums;?>"/></td>
  </tr>
  <tr><td>订单金额：</td>
      <td> <?php echo $o_money;?><input type="hidden" name="txt_omoney" value="<?php echo $o_money;?>"/></td>
  </tr>
  <tr><td><font color="red">*</font>收货人：</td>
      <td> <input type="text" name="txt_taker"/></td>
  </tr>
  <tr><td><font color="red">*</font>收货地址：</td>
      <td> <input type="text" name="txt_address"/></td>
  </tr>
  <tr><td><font color="red">*</font>联系电话：</td>
      <td> <input type="text" name="txt_tel"/></td>
  </tr>
  <tr><td><font color="red">*</font>付款方式：</td>
      <td> <select name="txt_paymethod">
      <option value="货到付款">货到付款</option>
      <option value="支付宝付款">支付宝付款</option>
      <option value="信用卡付款">信用卡付款</option>
         </select>
      </td>
  </tr>
  <tr><td>备注：</td>
      <td> <textarea name="txt_remark" cols="60" rows="4"></textarea></td>
  </tr>
  <tr><td colspan="2"><input type="submit" value="提交"> </td></tr>
 </table>
 </form>
<?php 
  }
  else 
  {
    echo "<script>alert('当前购物车为空，请先选择要购买的商品信息！');window.location.href='index_content.php'</script>";
  }
?>
</td></tr></table>
</body>
</html>
