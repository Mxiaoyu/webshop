<?php 
  /* ������Ϣɾ������ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�  
  if( $_GET["N_ID"]!= ""  &&  $_GET["Type"]!= "")
  {
    $nid = $_GET["N_ID"];         //��ȡ���ݵ����±��
    $type = $_GET["Type"];         //��ȡ���ݵĲ�������
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update News_Info set N_Status=1 where N_ID=".$nid;  //�������
        break;
      case "2":
        $str = "update News_Info set N_Status=2 where N_ID=".$nid;  //�������
        break;
      case "3":
        $str = "delete from News_Info where N_ID=".$nid;  //ɾ�����
        break;      
    }
    $i = mysql_query($str);  //ִ��SQL���
    if($i)                   //�ж�ִ�н��
    {
      echo "<script>alert('�����ɹ���');window.location.href='../news_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����ʧ�ܣ�');window.location.href='../news_manager.php'</script>";
    }
  }
  else 
  {
    echo "<script>alert('��ѡ��Ҫ������������Ϣ��');window.location.href='../news_manager.php'</script>";     
  }
?>