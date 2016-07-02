<?php 
  /* 管理员信息删除处理页 */ 
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件  
  if( $_GET["A_ID"]!="")
  {
   $aid = $_GET["A_ID"];  //获取传递的管理员编号
   $str = "delete from Admin_Info where A_ID=".$aid;  //删除语句
   $delete = mysql_query($str); //执行SQL语句
    if($delete)         //判断执行结果
    {
      echo "<script>alert('管理员信息删除成功！');window.location.href='../admin_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('管理员信息删除失败！');window.location.href='../admin_manager.php'</script>";
    }
  }
  else 
  {
   echo "<script>alert('请选择要删除的管理员信息！');window.location.href='../admin_manager.php'</script>";     
  }
 ?>