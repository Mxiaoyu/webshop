<?php 
  /* ��Ա��Ϣ�޸Ĵ���ҳ */
  require_once("../conn/Conn_DB.php");   //�������ݿ������ļ�
 if( $_POST["txt_id"]!="" )
 {
   $mid = $_POST["txt_id"];         //��Ա���
   $card = $_POST["txt_card"];      //���֤��
   $tel = $_POST["txt_tel"];        //��ϵ�绰
   $qq = $_POST["txt_qq"];          //QQ
   $email = $_POST["txt_email"];    //Email
   $address = $_POST["txt_address"];//��ַ
   $code = $_POST["txt_code"];      //��������
   $str = "update Member_Info set M_Card='$card',M_Tel='$tel',M_QQ='$qq',M_Email='$email',M_Address='$address',M_Code='$code' where M_ID=$mid";
   $update = mysql_query($str);     //ִ��SQL���
   if($update)         
   {
     echo "<script>alert('��ϲ������Ա��Ϣ�޸ĳɹ���');window.location.href='../member_info.php'</script>";
   }
   else
   {
     echo "<script>alert('�Բ��𣬻�Ա��Ϣ�޸�ʧ�ܣ�');window.location.href='../member_update.php'</script>";
   }
 }
 else 
 {
   echo "<script>alert('������ѡ���޸Ļ�Ա��Ϣ��');window.location.href='../member_update.php'</script>";     
 }
 ?>