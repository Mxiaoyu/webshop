<?php 
  /* ������������ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
  if($_GET['O_Num']!= "" &&  $_GET["Type"]!= "")
  {
 	$onum = $_GET['O_Num'];
    $type = $_GET["Type"];         //��ȡ���ݵĲ�������
    $str ="";
    switch ($type)
    {
      case "1":
        $str = "update Order_Info set O_Status=1 where O_Num='$onum'";  //�������
        break;
      case "2":
        $str = "update Order_Info set O_Status=2 where O_Num='$onum'";  //�������
        break;
    }
    $i = mysql_query($str); //ִ��SQL���
    if($i)                  //�ж�ִ�н��        
    {
      echo "<script>alert('�����ɹ���');window.location.href='../order_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('����ʧ�ܣ�');window.location.href='../order_manager.php'</script>";
     }
   }
   else 
   {
 	 echo "<script>alert('������ѡ��Ҫ�����Ķ�����Ϣ��');window.location.href='../order_manager.php'</script>";
   }
?>