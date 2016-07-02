<?php 
session_start();
  /* 会员登陆处理页 */
 require_once("../conn/Conn_DB.php");   //包含数据库链接文件

 if ($_POST["captcha_code"] == "")
     echo "<script>alert('请输入验证码！');window.location.href='../member_login.php'</script>";

 if( $_POST["txt_username"]!= "" && $_POST["txt_pwd"]!= "" )
 {
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
     echo "<script>alert('验证码错误！');window.location.href='../member_login.php'</script>";
	}		

   $name = $_POST["txt_username"];   //获取提交的用户名
   $pwd = $_POST["txt_pwd"];         //获取提交的密码
   $str = "select * from Member_Info where M_Name = '$name' and M_Password = '$pwd'"; //查询语句
   $result = mysql_query($str);      //执行SQL语句
   if( mysql_num_rows($result) >0 )  //查看返回的查询结果行数
   {
	$_SESSION['member'] = $_POST['txt_username'];           
    echo "<script> window.location.href='../member_info.php';</script>";
   }
   else
   {
     echo "<script>alert('用户名或密码错误！');window.location.href='../member_login.php'</script>";
   }
 }
 else 
 {
   echo "<script>alert('请输入用户名和密码！');window.location.href='../member_login.php'</script>";
 }
 ?>
