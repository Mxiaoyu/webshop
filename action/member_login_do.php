<?php 
session_start();
  /* ��Ա��½����ҳ */
 require_once("../conn/Conn_DB.php");   //�������ݿ������ļ�

 if ($_POST["captcha_code"] == "")
     echo "<script>alert('��������֤�룡');window.location.href='../member_login.php'</script>";

 if( $_POST["txt_username"]!= "" && $_POST["txt_pwd"]!= "" )
 {
	// code for check server side validation
	if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
     echo "<script>alert('��֤�����');window.location.href='../member_login.php'</script>";
	}		

   $name = $_POST["txt_username"];   //��ȡ�ύ���û���
   $pwd = $_POST["txt_pwd"];         //��ȡ�ύ������
   $str = "select * from Member_Info where M_Name = '$name' and M_Password = '$pwd'"; //��ѯ���
   $result = mysql_query($str);      //ִ��SQL���
   if( mysql_num_rows($result) >0 )  //�鿴���صĲ�ѯ�������
   {
	$_SESSION['member'] = $_POST['txt_username'];           
    echo "<script> window.location.href='../member_info.php';</script>";
   }
   else
   {
     echo "<script>alert('�û������������');window.location.href='../member_login.php'</script>";
   }
 }
 else 
 {
   echo "<script>alert('�������û��������룡');window.location.href='../member_login.php'</script>";
 }
 ?>
