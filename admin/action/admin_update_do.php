<?php 
  /* ����Ա��Ϣ�޸Ĵ���ҳ */ 
 require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�  
 if($_POST["txt_password"]!= "" )
 {
   $aid = $_POST["txt_id"];           //����Ա���
   $password = $_POST["txt_password"];//����
   $tel = $_POST["txt_tel"];          //��ϵ�绰
   $qq = $_POST["txt_qq"];            //QQ
   $email = $_POST["txt_email"];      //Email
   $str = "update Admin_Info set A_Password='$password',A_Tel='$tel',A_QQ='$qq',A_Email='$email' where A_ID=".$aid;
   // echo $str; //��������ڵ��ԣ������ѯ���
    
    $update = mysql_query($str);  //ִ��SQL���
    if($update)                   //�ж�ִ�н�� 
    {
      echo "<script>alert('����Ա��Ϣ�޸ĳɹ���');window.location.href='../admin_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����Ա��Ϣ�޸�ʧ�ܣ�');window.location.href='../admin_update.php?A_ID=".$aid."'</script>";     
    }    
  }
  else 
  {
    echo "<script>alert('���������Ա���룡');window.location.href='../admin_update.php?A_ID=".$aid."'</script>";     
  }
 ?>