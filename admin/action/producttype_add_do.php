<?php 
 /* ��Ʒ�����Ӵ���ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
 if( $_POST["txt_name"]!= "" )  //�ж�������� �Ƿ�Ϊ��
 {
  $name = $_POST["txt_name"];       //�������
  $parentid = $_POST["txt_parentid"];//�������
  $intro = $_POST["txt_intro"];     //�����
  $str = "insert into Product_Type (PT_ParentID,PT_Name,PT_Intro) values($parentid,'$name','$intro')";  //�������
  $insert = mysql_query($str); //ִ��SQL���
  if($insert)                  //�ж�ִ�н��
  {
    echo "<script>alert('��Ʒ�����ӳɹ���');window.location.href='../producttype_add.php'</script>";
  }
  else
  {
    echo "<script>alert('��Ʒ������ʧ�ܣ�');window.location.href='../producttype_add.php'</script>";
  }
 }
 else 
 {
   echo "<script>alert('��������Ʒ������ƣ�');window.location.href='../producttype_add.php'</script>";     
 }
 ?>