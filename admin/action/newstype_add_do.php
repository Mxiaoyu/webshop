<?php 
  /* ���������Ӵ���ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
  if( $_POST["txt_name"]!= "" )
  {
    $name = $_POST["txt_name"];        //�������
    $parentid = $_POST["txt_parentid"];//�������
    $intro = $_POST["txt_intro"];      //�����
    $str = "insert into News_Type (NT_ParentID,NT_Name,NT_Intro) values($parentid,'$name','$intro')";  //�������
    $insert = mysql_query($str);  //ִ��SQL���
    if($insert)                   //�ж�ִ�н��
    {
      echo "<script>alert('���������ӳɹ���');window.location.href='../newstype_add.php'</script>";
    }
    else
    {
      echo "<script>alert('����������ʧ�ܣ�');window.location.href='../newstype_add.php'</script>";
    }
  }
  else 
  {
    echo "<script>alert('����������������ƣ�');window.location.href='../newstype_add.php'</script>";     
  }
 ?>