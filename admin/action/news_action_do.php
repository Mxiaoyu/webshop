<?php 
  /* 文章信息删除处理页 */
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件  
  if( $_GET["N_ID"]!= ""  &&  $_GET["Type"]!= "")
  {
    $nid = $_GET["N_ID"];         //获取传递的文章编号
    $type = $_GET["Type"];         //获取传递的操作类型
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update News_Info set N_Status=1 where N_ID=".$nid;  //更新语句
        break;
      case "2":
        $str = "update News_Info set N_Status=2 where N_ID=".$nid;  //更新语句
        break;
      case "3":
        $str = "delete from News_Info where N_ID=".$nid;  //删除语句
        break;      
    }
    $i = mysql_query($str);  //执行SQL语句
    if($i)                   //判断执行结果
    {
      echo "<script>alert('操作成功！');window.location.href='../news_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('操作失败！');window.location.href='../news_manager.php'</script>";
    }
  }
  else 
  {
    echo "<script>alert('请选择要操作的文章信息！');window.location.href='../news_manager.php'</script>";     
  }
?>