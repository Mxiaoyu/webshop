<?php 
  /* ������Ϣ��Ӵ���ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ� 
  if( $_POST["txt_title"]!= "" && $_POST["txt_parentid"]!= "" )  //�ж����±��⼰������Ŀ�Ƿ�Ϊ��
 {
  $ntid = $_POST["txt_parentid"];    //���������
  $title = $_POST["txt_title"];      //���±���
  $intro = $_POST["txt_intro"];      //ժҪ
  $contents = $_POST["txt_contents"];//����
  $createtime = date('Y-m-d H:i:s'); //��������
    
  $str = "insert into News_Info (NT_ID,N_Title,N_Intro,N_Contents,N_Hits,N_CreateTime,N_Status) values($ntid,'$title','$intro','$contents',1,'$createtime',1)";
  // echo $str; //��������ڵ��ԣ������ѯ���
    
  $insert = mysql_query($str); //ִ��SQL���
  if($insert)                  //�ж�ִ�н��  
  {
  	echo "<script>alert('������Ϣ��ӳɹ���');window.location.href='../news_add.php'</script>";
  }
  else
  {
    echo "<script>alert('������Ϣ���ʧ�ܣ�');window.location.href='../news_add.php'</script>";
  }  
 }
 else 
 {
   echo "<script>alert('�����������±��ⲻ��Ϊ�գ�');window.location.href='../news_add.php'</script>";     
 }
 ?>