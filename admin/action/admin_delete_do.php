<?php 
  /* ����Ա��Ϣɾ������ҳ */ 
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�  
  if( $_GET["A_ID"]!="")
  {
   $aid = $_GET["A_ID"];  //��ȡ���ݵĹ���Ա���
   $str = "delete from Admin_Info where A_ID=".$aid;  //ɾ�����
   $delete = mysql_query($str); //ִ��SQL���
    if($delete)         //�ж�ִ�н��
    {
      echo "<script>alert('����Ա��Ϣɾ���ɹ���');window.location.href='../admin_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����Ա��Ϣɾ��ʧ�ܣ�');window.location.href='../admin_manager.php'</script>";
    }
  }
  else 
  {
   echo "<script>alert('��ѡ��Ҫɾ���Ĺ���Ա��Ϣ��');window.location.href='../admin_manager.php'</script>";     
  }
 ?>