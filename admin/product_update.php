<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�༭��Ʒ��Ϣ</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="action/product_update_do.php" method="post"  enctype="multipart/form-data">
<?php   
 if($_GET["P_ID"] != "" )
 {
   require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�  
   $pid= $_GET["P_ID"];    //��ȡ���ݵ���Ʒ��� 
   $str = "select * from Product_Info where P_ID=".$pid; //��ѯ���
   $arr = mysql_query($str);  //ִ��SQL���
   $result = mysql_fetch_array($arr);  //��ȡ��ѯ��� 
   $parentid2 = $result['PT_Id'];  //������Ÿ�ֵ������$parentid2,���ڶ�λ��������������ѡ����
?>
<table border="1" width="100%">
  <tr><td colspan="2" align="center">�༭��Ʒ��Ϣ  </td></tr>
  <tr>
     <td><font color="red">*</font>�������</td>
     <td><?php include 'select_producttype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>��Ʒ���ƣ�</td>
     <td><input type="text" name="txt_name" value="<?php echo $result['P_Name'] ?>"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>��ƷͼƬ��</td>
     <td><input type="file" name="txt_image"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>��Ա�ۣ�</td>
     <td><input type="text" name="txt_vprice" value="<?php echo $result['P_VPrice'] ?>"/></td>
  </tr>
  <tr>
     <td>�г��ۣ�</td>
     <td><input type="text" name="txt_mprice" value="<?php echo $result['P_MPrice'] ?>"/></td>
  </tr>
  <tr>
     <td>���</td>
     <td><input type="text" name="txt_model" value="<?php echo $result['P_Model'] ?>"/></td>
  </tr>
  <tr>
     <td>Ʒ�ƣ�</td>
     <td><input type="text" name="txt_brand" value="<?php echo $result['P_Brand'] ?>"/></td>
  </tr>
  <tr>
     <td>��飺</td>
     <td>
      <textarea name="txt_intro" rows="8" cols="30"><?php echo $result['P_Intro'] ?></textarea>
      <img src='../<?php echo $result["P_Image"];?>' width="130" height="130"/>
      <input type="hidden" name="txt_image2"  value='<?php echo $result["P_Image"];?>'/>
     </td>
  </tr>
  <tr>
     <td>��������</td>
     <td><input type="text" name="txt_sellnum" value="<?php echo $result['P_SellNum'] ?>"/></td>
  </tr>
  <tr>
     <td>�������</td>
     <td><input type="text" name="txt_storenum" value="<?php echo $result['P_StoreNum'] ?>"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<?php echo $result['P_ID'] ?>"/>
       <input type="submit" value="����"/>
     </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('��ѡ��Ҫ�༭����Ʒ��Ϣ��');window.location.href='product_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
