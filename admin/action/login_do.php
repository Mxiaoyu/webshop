<?php 
  /* ϵͳ��½����ҳ */ 
 require_once("../../conn/Conn_DB.php");  //�������ݿ������ļ�  
 if( $_POST["txt_username"]!="" && $_POST["txt_pwd"]!="" )  //�ж��û��������Ƿ�Ϊ��
 {
  $name = $_POST["txt_username"];  //��ȡ�ύ���û���
  $pwd = $_POST["txt_pwd"];        //��ȡ�ύ������
  
  mysql_query("set names utf8");
   
  $str = "select * from Admin_Info where A_UserName='$name' and A_Password='$pwd'"; //��ѯ���
  // echo $str; //��������ڵ��ԣ������ѯ���
    
  $result = mysql_query($str);     //ִ��SQL���
  if( mysql_num_rows($result) >0 ) //�жϷ��ؼ�¼������
  {
    session_start();               //��½�ɹ�������SESSIONֵ
	$_SESSION['user'] = $_POST['txt_username'];           
    echo "<script> window.location.href='../main.php';</script>";  //��ת������ƽ̨��ҳ
  }
  else   //��½ʧ�ܣ�������ʾ�Ի��򣬷��ص�½ҳ
  {
    echo "<script>alert('�û������������');window.location.href='../login.php'</script>"; 
  }
 }
 else  //�û�������Ϊ�գ�������ʾ�Ի��򣬷��ص�½ҳ
 {
    echo "<script>alert('�������û��������룡');window.location.href='../login.php'</script>";
 }
 ?>