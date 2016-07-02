<?php 
  /* 购物车处理页 */
if($_GET['type']=='1') //清空购物车
{
	$_SESSION['car']="";
   echo "<script> window.location.href='../shopcar_info.php';</script>";
}
?>