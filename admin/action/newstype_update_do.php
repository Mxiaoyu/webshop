<?php 
  /* ��������޸Ĵ���ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
  if( $_POST["txt_name"]!= "" )
  {
 	$ntid = $_POST["txt_id"];          //�����
    $name = $_POST["txt_name"];        //�������
    $parentid = $_POST["txt_parentid"];//�������
    $intro = $_POST["txt_intro"];      //�����
    $str = "update News_Type set NT_ParentID=$parentid,NT_Name='$name',NT_Intro='$intro' where NT_ID=".$ntid;  //�������
    $update = mysql_query($str); //ִ��SQL���
    if($update)                  //�ж�ִ�н��
    {
  	  echo "<script>alert('��������޸ĳɹ���');window.location.href='../newstype_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('��������޸�ʧ�ܣ�');window.location.href='../newstype_update.php?NT_ID=".$ntid."'</script>";
    }  
  }
  else 
  {
    echo "<script>alert('����������������ƣ�');window.location.href='../newstype_update.php?NT_ID=".$ntid."'</script>";     
  }
 ?>