<?php 
 /* 管理员信息添加处理页 */ 
 require_once("../../conn/Conn_DB.php");   //包含数据库链接文件  
 if( $_POST["txt_username"]!="" && $_POST["txt_password"]!="" ) //判断用户名密码是否为空
 {
  $username = $_POST["txt_username"];  //用户名
  $password = $_POST["txt_password"];  //密码
  $tel = $_POST["txt_tel"];            //联系电话
  $qq = $_POST["txt_qq"];              //QQ
  $email = $_POST["txt_email"];        //Email
    
  $str = "insert into Admin_Info (A_UserName,A_Password,A_Tel,A_QQ,A_Email) values('$username','$password','$tel','$qq','$email')";
  // echo $str; //本语句用于调试，输出查询语句
    
  $insert = mysql_query($str);  //执行SQL语句
  if($insert)                   //判断执行结果
  {
  	echo "<script>alert('管理员信息添加成功！');window.location.href='../admin_add.php'</script>";
  }
  else
  {
    echo "<script>alert('管理员信息添加失败！');window.location.href='../admin_add.php'</script>";
  } 
 }
 else 
 {
 echo "<script>alert('请输入用户名和密码！');window.location.href='../admin_add.php'</script>";     
 }
 ?>