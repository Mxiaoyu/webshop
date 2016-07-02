<?php 
  /* 订单发货处理页 */
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件
  if($_GET['O_Num']!= "" &&  $_GET["Type"]!= "")
  {
 	$onum = $_GET['O_Num'];
    $type = $_GET["Type"];         //获取传递的操作类型
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update Order_Info set O_Status=1 where O_Num='$onum'";  //更新语句
        break;
      case "2":
        $str = "update Order_Info set O_Status=2 where O_Num='$onum'";  //更新语句
        break;
    }
    $i = mysql_query($str); //执行SQL语句
    if($i)                  //判断执行结果        
    {
      echo "<script>alert('操作成功！');window.location.href='../order_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('操作失败！');window.location.href='../order_manager.php'</script>";
     }
   }
   else 
   {
 	 echo "<script>alert('请重新选择要操作的订单信息！');window.location.href='../order_manager.php'</script>";
   }
?>