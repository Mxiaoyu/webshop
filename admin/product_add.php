<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�����Ʒ��Ϣ</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<form action="action/product_add_do.php" method="post"  enctype="multipart/form-data">
<table border="1" width="100%">
  <tr><td colspan="2" align="center">�����Ʒ��Ϣ  </td></tr>
    <tr>
     <td><font color="red">*</font>�������</td>
     <td><?php include 'select_producttype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>��Ʒ���ƣ�</td>
     <td><input type="text" name="txt_name"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>��ƷͼƬ��</td>
     <td><input type="file" name="txt_image"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>��Ա�ۣ�</td>
     <td><input type="text" name="txt_vprice"/></td>
  </tr>
  <tr>
     <td>�г��ۣ�</td>
     <td><input type="text" name="txt_mprice"/></td>
  </tr>
  <tr>
     <td>���</td>
     <td><input type="text" name="txt_model"/></td>
  </tr>
  <tr>
     <td>Ʒ�ƣ�</td>
     <td><input type="text" name="txt_brand"/></td>
  </tr>
  <tr>
     <td>��飺 </td>
    <td><textarea name="txt_intro" rows="8" cols="30"></textarea></td>
  </tr>
  <tr>
     <td>��������</td>
     <td><input type="text" name="txt_sellnum"/></td>
  </tr>
    <tr>
     <td>�������</td>
     <td><input type="text" name="txt_storenum"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="submit" value="����"/>
     </td>
  </tr>
</table>
</form>
</body>
</html>