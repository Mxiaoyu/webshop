<?php 
  /* 文章类别修改处理页 */
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件
  if( $_POST["txt_name"]!= "" )
  {
 	$ntid = $_POST["txt_id"];          //类别编号
    $name = $_POST["txt_name"];        //类别名称
    $parentid = $_POST["txt_parentid"];//父级编号
    $intro = $_POST["txt_intro"];      //类别简介
    $str = "update News_Type set NT_ParentID=$parentid,NT_Name='$name',NT_Intro='$intro' where NT_ID=".$ntid;  //更新语句
    $update = mysql_query($str); //执行SQL语句
    if($update)                  //判断执行结果
    {
  	  echo "<script>alert('文章类别修改成功！');window.location.href='../newstype_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('文章类别修改失败！');window.location.href='../newstype_update.php?NT_ID=".$ntid."'</script>";
    }  
  }
  else 
  {
    echo "<script>alert('请输入文章类别名称！');window.location.href='../newstype_update.php?NT_ID=".$ntid."'</script>";     
  }
 ?>