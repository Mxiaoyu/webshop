<?php 
  /* ��Ա��Ϣɾ������ҳ */ 
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ� 
  if($_GET['M_ID']!= "" &&  $_GET["Type"]!= "")
  {
 	$mid = $_GET['M_ID'];  //��ȡ���ݵĻ�Ա���
 	$type = $_GET["Type"];         //��ȡ���ݵĲ�������
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update Member_Info set M_Status=1 where M_ID=".$mid;  //�������
        break;
      case "2":
        $str = "update Member_Info set M_Status=2 where M_ID=".$mid;  //�������
        break;      
      case "3":
        $str = "delete from Member_Info where M_ID=".$mid;  //ɾ�����
        break;
    }
    $i = mysql_query($str); //ִ��SQL���
    if($i)                  //�ж�ִ�н��      
    {
      echo "<script>alert('�����ɹ���');window.location.href='../member_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����ʧ�ܣ�');window.location.href='../member_manager.php'</script>";
    }
  }
  else 
  {
 	 echo "<script>alert('������ѡ��Ҫ�����Ļ�Ա��Ϣ��');window.location.href='../member_manager.php'</script>";
  }
?>