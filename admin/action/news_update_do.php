<?php 
  /* ������Ϣ�޸Ĵ���ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
  if( $_POST["txt_title"]!="" && $_POST["txt_id"]!="" )  //�ж����±���ͱ��
  {
 	$nid = $_POST["txt_id"];           //���±��
    $ntid = $_POST["txt_parentid"];    //���������
    $title = $_POST["txt_title"];      //���±���
    $intro = $_POST["txt_intro"];      //ժҪ
    $contents = $_POST["txt_contents"];//����
    $createtime = date('Y-m-d H:i:s'); //��������
    
    $str = "update News_Info set NT_ID=$ntid,N_Title='$title',N_Intro='$intro',N_Contents='$contents',N_CreateTime='$createtime' where N_ID=".$nid;
    $update = mysql_query($str); //ִ��SQL���
    if($update)                  //�ж�ִ�н��
    {
      echo "<script>alert('������Ϣ�޸ĳɹ���');window.location.href='../news_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('������Ϣ�޸�ʧ�ܣ�');window.location.href='../news_update.php?N_ID=".$nid."'</script>";
    }
  }
  else 
  {
    echo "<script>alert('�����������±��ⲻ��Ϊ�գ�');window.location.href='../news_update.php?N_ID=".$nid."'</script>";     
  }
 ?>