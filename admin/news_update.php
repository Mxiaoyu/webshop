<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�༭������Ϣ</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="action/news_update_do.php" method="post" >
<?php   
if($_GET["N_ID"] !="" ) 
{
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ� 
  $nid = $_GET["N_ID"];     //��ȡ���ݵĹ���Ա���
  $str = "select * from News_Info where N_ID=".$nid;  //��ѯ���
  $arr = mysql_query($str);  //ִ��SQL���
  $result = mysql_fetch_array($arr);   //��ȡ��ѯ���
  $parentid2 = $result["NT_ID"];  //������Ÿ�ֵ������$parentid2,���ڶ�λ��������������ѡ����
?>
<table border="1" width="100%">
  <tr><td colspan="2" align="center">�༭������Ϣ </td></tr>
  <tr>
     <td><font color="red">*</font>�������</td>
     <td><?php include 'select_newstype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>���±��⣺</td>
     <td><input type="text" name="txt_title"  value="<?php echo $result['N_Title'] ?>"/></td>
  </tr>
  <tr>
     <td>����ժҪ</td>
     <td> <textarea name="txt_intro" rows="8" cols="30"><?php echo $result['N_Intro'] ?></textarea>
     </tD>
  </tr>
  <tr>
     <td><font color="red">*</font>���ݣ� </td>
     <td><textarea name="txt_contents" rows="16" cols="50"><?php echo $result['N_Contents'] ?></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
     <input type="hidden" name="txt_id" value="<?php echo $result['N_ID'] ?>"/>
     <input type="submit" value="����"/>
    </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('��ѡ��Ҫ�༭��������Ϣ��');window.location.href='news_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
