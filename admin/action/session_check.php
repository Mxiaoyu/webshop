<?php
session_start();
 /* 系统登陆判断页 */
if($_SESSION['user'] == "")  //登陆判断,如果没有登陆，跳转到登陆页面
{
  // echo "<script>alert('登陆超时，请重新登陆!'); window.location.href='login.php';</script>";
}
?>
