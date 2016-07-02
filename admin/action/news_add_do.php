<?php 
  /* 文章信息添加处理页 */
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件 
  if( $_POST["txt_title"]!= "" && $_POST["txt_parentid"]!= "" )  //判断文章标题及所属栏目是否为空
 {
  $ntid = $_POST["txt_parentid"];    //所属类别编号
  $title = $_POST["txt_title"];      //文章标题
  $intro = $_POST["txt_intro"];      //摘要
  $contents = $_POST["txt_contents"];//内容
  $createtime = date('Y-m-d H:i:s'); //发布日期
    
  $str = "insert into News_Info (NT_ID,N_Title,N_Intro,N_Contents,N_Hits,N_CreateTime,N_Status) values($ntid,'$title','$intro','$contents',1,'$createtime',1)";
  // echo $str; //本语句用于调试，输出查询语句
    
  $insert = mysql_query($str); //执行SQL语句
  if($insert)                  //判断执行结果  
  {
  	echo "<script>alert('文章信息添加成功！');window.location.href='../news_add.php'</script>";
  }
  else
  {
    echo "<script>alert('文章信息添加失败！');window.location.href='../news_add.php'</script>";
  }  
 }
 else 
 {
   echo "<script>alert('所属类别和文章标题不能为空！');window.location.href='../news_add.php'</script>";     
 }
 ?>