<?php 
  /* 文章信息修改处理页 */
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件
  if( $_POST["txt_title"]!="" && $_POST["txt_id"]!="" )  //判断文章标题和编号
  {
 	$nid = $_POST["txt_id"];           //文章编号
    $ntid = $_POST["txt_parentid"];    //所属类别编号
    $title = $_POST["txt_title"];      //文章标题
    $intro = $_POST["txt_intro"];      //摘要
    $contents = $_POST["txt_contents"];//内容
    $createtime = date('Y-m-d H:i:s'); //发布日期
    
    $str = "update News_Info set NT_ID=$ntid,N_Title='$title',N_Intro='$intro',N_Contents='$contents',N_CreateTime='$createtime' where N_ID=".$nid;
    $update = mysql_query($str); //执行SQL语句
    if($update)                  //判断执行结果
    {
      echo "<script>alert('文章信息修改成功！');window.location.href='../news_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('文章信息修改失败！');window.location.href='../news_update.php?N_ID=".$nid."'</script>";
    }
  }
  else 
  {
    echo "<script>alert('所属类别和文章标题不能为空！');window.location.href='../news_update.php?N_ID=".$nid."'</script>";     
  }
 ?>