<?php 
 /* ����Ա��Ϣ��Ӵ���ҳ */ 
 require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�  
 if( $_POST["txt_username"]!="" && $_POST["txt_password"]!="" ) //�ж��û��������Ƿ�Ϊ��
 {
  $username = $_POST["txt_username"];  //�û���
  $password = $_POST["txt_password"];  //����
  $tel = $_POST["txt_tel"];            //��ϵ�绰
  $qq = $_POST["txt_qq"];              //QQ
  $email = $_POST["txt_email"];        //Email
    
  $str = "insert into Admin_Info (A_UserName,A_Password,A_Tel,A_QQ,A_Email) values('$username','$password','$tel','$qq','$email')";
  // echo $str; //��������ڵ��ԣ������ѯ���
    
  $insert = mysql_query($str);  //ִ��SQL���
  if($insert)                   //�ж�ִ�н��
  {
  	echo "<script>alert('����Ա��Ϣ��ӳɹ���');window.location.href='../admin_add.php'</script>";
  }
  else
  {
    echo "<script>alert('����Ա��Ϣ���ʧ�ܣ�');window.location.href='../admin_add.php'</script>";
  } 
 }
 else 
 {
 echo "<script>alert('�������û��������룡');window.location.href='../admin_add.php'</script>";     
 }
 ?>