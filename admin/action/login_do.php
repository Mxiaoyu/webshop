<?php 
  /* 系统登陆处理页 */ 
 require_once("../../conn/Conn_DB.php");  //包含数据库链接文件  
 if( $_POST["txt_username"]!="" && $_POST["txt_pwd"]!="" )  //判断用户名密码是否为空
 {
  $name = $_POST["txt_username"];  //获取提交的用户名
  $pwd = $_POST["txt_pwd"];        //获取提交的密码
  
  mysql_query("set names utf8");
   
  $str = "select * from Admin_Info where A_UserName='$name' and A_Password='$pwd'"; //查询语句
  // echo $str; //本语句用于调试，输出查询语句
    
  $result = mysql_query($str);     //执行SQL语句
  if( mysql_num_rows($result) >0 ) //判断返回记录的行数
  {
    session_start();               //登陆成功，设置SESSION值
	$_SESSION['user'] = $_POST['txt_username'];           
    echo "<script> window.location.href='../main.php';</script>";  //跳转到管理平台主页
  }
  else   //登陆失败，弹出提示对话框，返回登陆页
  {
    echo "<script>alert('用户名或密码错误！');window.location.href='../login.php'</script>"; 
  }
 }
 else  //用户名密码为空，弹出提示对话框，返回登陆页
 {
    echo "<script>alert('请输入用户名和密码！');window.location.href='../login.php'</script>";
 }
 ?>