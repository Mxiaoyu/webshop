<?php 
  /* �������ɾ������ҳ */
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
  if( $_GET["NT_ID"]!= "")
  {
    $ntid = $_GET["NT_ID"];     //��ȡ���ݵ����������
    $str = "select * from News_Type where NT_ParentID=".$ntid;  //��ѯ���
    $arr = mysql_query($str);   //ִ��SQL���
    if (mysql_num_rows($arr)>0) //�жϲ�ѯ����������ж��Ƿ��������
    {
      echo "<script>alert('����������������ɾ�������');window.location.href='../producttype_manager.php'</script>";
    }
    else 
    {
      $str = "delete from News_Type where NT_ID=".$ntid;  //ɾ�����
      $delete = mysql_query($str); //ִ��SQL���
      if($delete)                  //�ж�ִ�н��
      {
    	echo "<script>alert('�������ɾ���ɹ���');window.location.href='../newstype_manager.php'</script>";
      }
      else
      {
        echo "<script>alert('�������ɾ��ʧ�ܣ�');window.location.href='../newstype_manager.php'</script>";
      }
    }
  }
  else 
  {
    echo "<script>alert('��ѡ��Ҫɾ�����������');window.location.href='../newstype_manager.php'</script>";     
  }
 ?>