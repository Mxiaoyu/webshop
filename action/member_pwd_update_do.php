<?php 
  /* ��Ա�����޸Ĵ���ҳ */
 require_once("../conn/Conn_DB.php");   //�������ݿ������ļ�
 if( $_POST["txt_password"] == ""  )
 {
   echo "<script>alert('������ԭ���룡');window.location.href='../member_pwd_update.php'</script>";     
 }
 else if( $_POST["txt_newpassword1"] == "" )
 {
 	echo "<script>alert('�����������룡');window.location.href='../member_pwd_update.php'</script>"; 
 }
 else if( $_POST["txt_newpassword1"]!= $_POST["txt_newpassword2"])
 {
 	echo "<script>alert('��������������벻һ�£�');window.location.href='../member_pwd_update.php'</script>"; 
 }
 else
 {
 	$mid = $_POST["txt_id"];                   //��Ա��� 
    $password = $_POST["txt_password"];        //ԭ����
    $newpassword = $_POST["txt_newpassword1"]; //������
    $str = "select * from Member_Info where M_ID=$mid and M_Password='$password'"; //��ѯԭ�����Ƿ���ȷ
    $result = mysql_query($str);      //ִ��SQL���
    if( mysql_num_rows($result) >0 )  //���صĽ����������0����ʾԭ������ȷ
    {
       $str = "update Member_Info set M_Password='$newpassword' where M_ID=$mid";  //��������
       $update = mysql_query($str); //ִ��SQL���
       if($update)         
       {
    	 echo "<script>alert('��ϲ���������޸ĳɹ���');window.location.href='../member_info.php'</script>";
       }
       else
       {
         echo "<script>alert('�Բ��������޸�ʧ�ܣ�');window.location.href='../member_pwd_update.php'</script>";
       }
    }
    else
    {
      echo "<script>alert('�Բ���ԭ�������');window.location.href='../member_pwd_update.php'</script>";
    }
 }
 ?>