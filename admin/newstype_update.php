<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�༭�������</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="action/newstype_update_do.php" method="post" >
<?php   
 if($_GET["NT_ID"] !="" )
 {
  require_once("../conn/Conn_DB.php");   //�������ݿ������ļ� 
  $ntid= $_GET["NT_ID"];          //��ȡ���ݵ������
  $str = "select * from News_Type where NT_ID=".$ntid; //��ѯ���
  $arr = mysql_query($str);  //ִ��SQL���
  $result = mysql_fetch_array($arr); //��ȡ��ѯ���   
  $parentid2 = $result["NT_ParentID"]; //����������Ÿ�ֵ������$parentid2,���ڶ�λ��������������ѡ����
?>
<table border="1" width="100%">
  <tr><td colspan="2" align="center">�༭������� </td></tr>
  <tr>
     <td><font color="red">*</font>�������</td>
     <td><?php include 'select_newstype2.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>�������</td>
     <td><input type="text" name="txt_name"  value="<?php echo $result['NT_Name'] ?>"/>
     </tD>
  </tr>
  <tr>
     <td>��飺 </td>
    <td><textarea name="txt_intro" rows="8" cols="30"><?php echo $result['NT_Intro'] ?></textarea></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="hidden" name="txt_id" value="<?php echo $result['NT_ID'] ?>"/>
        <input type="submit" value="����"/>
     </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('��ѡ��Ҫ�༭���������');window.location.href='newstype_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
