<?php 
/* ��Ʒ����޸Ĵ���ҳ */
  require_once("../../conn/Conn_DB.php");  //�������ݿ������ļ�  
  if( $_POST["txt_name"]!= "" )   //�ж�������� �Ƿ�Ϊ��
  {
 	$ptid = $_POST["txt_id"];        //�����
    $name = $_POST["txt_name"];       //�������
    $parentid = $_POST["txt_parentid"];//�������
    $intro = $_POST["txt_intro"];     //�����
    $str = "update Product_Type set PT_ParentID=$parentid,PT_Name='$name',PT_Intro='$intro' where PT_ID=".$ptid;  //�������
    $update = mysql_query($str); //ִ��SQL���
    if($update)                  //�ж�ִ�н��
    {
  	  echo "<script>alert('��Ʒ����޸ĳɹ���');window.location.href='../producttype_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('��Ʒ����޸�ʧ�ܣ�');window.location.href='../producttype_update.php?PT_ID=".$ptid."'</script>";
    }  
  }
  else 
  {
    echo "<script>alert('��������Ʒ������ƣ�');window.location.href='../producttype_update.php?PT_ID=".$ptid."'</script>";     
  }
 ?>