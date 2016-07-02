<?php 
  /* 会员信息删除处理页 */ 
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件 
  if($_GET['M_ID']!= "" &&  $_GET["Type"]!= "")
  {
 	$mid = $_GET['M_ID'];  //获取传递的会员编号
 	$type = $_GET["Type"];         //获取传递的操作类型
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update Member_Info set M_Status=1 where M_ID=".$mid;  //更新语句
        break;
      case "2":
        $str = "update Member_Info set M_Status=2 where M_ID=".$mid;  //更新语句
        break;      
      case "3":
        $str = "delete from Member_Info where M_ID=".$mid;  //删除语句
        break;
    }
    $i = mysql_query($str); //执行SQL语句
    if($i)                  //判断执行结果      
    {
      echo "<script>alert('操作成功！');window.location.href='../member_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('操作失败！');window.location.href='../member_manager.php'</script>";
    }
  }
  else 
  {
 	 echo "<script>alert('请重新选择要操作的会员信息！');window.location.href='../member_manager.php'</script>";
  }
?>