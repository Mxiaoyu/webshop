<?php 
  /* ��Աע�ᴦ��ҳ */
 require_once("../conn/Conn_DB.php");   //�������ݿ������ļ�
 if( $_POST["txt_username"]!= "" && $_POST["txt_password"]!= "" )
 {
  $username = $_POST["txt_username"];  //�û���
  $password = $_POST["txt_password"];  //����
  $question = $_POST["txt_question"];  //���뱣������
  $answer = $_POST["txt_answer"];      //���� �����
  $card = $_POST["txt_card"];          //���֤��
  $tel = $_POST["txt_tel"];            //��ϵ�绰
  $qq = $_POST["txt_qq"];              //QQ
  $email = $_POST["txt_email"];        //Email
  $address = $_POST["txt_address"];    //��ַ
  $code = $_POST["txt_code"];          //��������
  $createtime = date('Y-m-d H:i:s');;  //ע������  
  $str = "insert into Member_Info (M_Name,M_Password,M_Question,M_Answer,M_Card,M_Tel,M_QQ,M_Email,M_Address,M_Code,M_Money,M_Blance,M_CreateTime,M_Status) values('$username','$password','$question','$answer','$card','$tel','$qq','$email','$address','$code',0,0,'$createtime',1)"; 
  $insert = mysql_query($str);         //ִ��SQL���
  if($insert)         
  {
  	 echo "<script>alert('��ϲ������Աע��ɹ���');window.location.href='../member_info.php'</script>";
  }
  else
  {
    echo "<script>alert('�Բ��𣬻�Աע��ʧ�ܣ�');window.location.href='../member_register.php'</script>";
  }  
 }
 else 
 {
   echo "<script>alert('�������û��������룡');window.location.href='../member_register.php'</script>";     
 }
 ?>