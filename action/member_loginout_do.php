<?php  
   session_start();
  /* ��Ա�˳�����ҳ */
   unset($_SESSION['member']);           
    echo "<script>alert('���Ѱ�ȫ�˳�ϵͳ��');window.location = '../index_content.php';</script>";
 ?>
