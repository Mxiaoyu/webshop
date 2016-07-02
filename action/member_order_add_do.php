<?php 
  /* 订单提交处理页 */
session_start();
 require_once("../conn/Conn_DB.php");   //包含数据库链接文件 
 if( $_POST["txt_taker"]!="" && $_POST["txt_address"]!="" && $_POST["txt_tel"]!="" && $_POST["txt_paymethod"]!="" )
 {
  $taker = $_POST["txt_taker"];        //收货人
  $address = $_POST["txt_address"];    //收货地址
  $tel = $_POST["txt_tel"];            //联系电话
  $paymethod = $_POST["txt_paymethod"];//付款方式
  $username = $_POST["txt_username"];  //会员名
  $pnums = $_POST["txt_pnums"];        //商品数量
  $omoney = $_POST["txt_omoney"];      //订单金额
  $remark = $_POST["txt_remark"];      //备注
  $onum = date('YmdHis').$username;    //生成订单号
  $createtime = date('Y-m-d H:i:s');;  //订单提交日期
  //添加到订单信息表
  $str = "insert into Order_Info (M_Name,O_Num,P_Nums,O_Money,O_Taker,O_Address,O_Tel,O_Paymethod,O_CreateTime,O_Status,O_Remark) 
          values('$username','$onum',$pnums,$omoney,'$taker','$address','$tel','$paymethod','$createtime',0,'$remark')";
  $insert = mysql_query($str);  //执行SQL语句
    
  //添加到订单商品详细表
  if($_SESSION['car']!="")
  {
    $arr2 = (array)$_SESSION['car'];
    foreach ($arr2 as $key1=> $value1 )
    { 
  	  $pid = $value1[0];        //商品编号
  	  $p_unitprice = $value1[4];//单价
  	  $p_nums = $value1[3];     //数量
  	  $p_price = $value1[4];    //小计价格
      $str2 = "insert into Order_Product (O_Num,P_ID,P_UnitPrice,P_Nums,P_Flod,P_Price) 
                values('$onum',$pid,$p_unitprice,$p_nums,1,$p_price)";    
      $insert2 = mysql_query($str2);   //执行SQL语句
    }
  }
  if($insert  && $insert2)  //如果两张表的数据都插入成功         
  {
     $_SESSION['car'] = "";  //清空购物车
     echo "<script>alert('恭喜您，订单提交成功！');window.location.href='../index_content.php'</script>";
  }
  else
  {
     echo "<script>alert('对不起，订单提交失败！');window.location.href='../member_order_add.php'</script>";
  } 
 }
 else 
 {
   echo "<script>alert('请输入带*号的必填信息！');window.location.href='../member_order_add.php'</script>";     
 }
 ?>
