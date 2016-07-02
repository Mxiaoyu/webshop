<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>添加商品信息</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="action/product_add_do.php" method="post"  enctype="multipart/form-data">
<table border="1" width="100%">
  <tr><td colspan="2" align="center">添加商品信息  </td></tr>
    <tr>
     <td><font color="red">*</font>所属类别</td>
     <td><?php include 'select_producttype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>商品名称：</td>
     <td><input type="text" name="txt_name"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>商品图片：</td>
     <td><input type="file" name="txt_image"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>会员价：</td>
     <td><input type="text" name="txt_vprice"/></td>
  </tr>
  <tr>
     <td>市场价：</td>
     <td><input type="text" name="txt_mprice"/></td>
  </tr>
  <tr>
     <td>规格：</td>
     <td><input type="text" name="txt_model"/></td>
  </tr>
  <tr>
     <td>品牌：</td>
     <td><input type="text" name="txt_brand"/></td>
  </tr>
  <tr>
     <td>简介： </td>
    <td><textarea name="txt_intro" rows="8" cols="30"></textarea></td>
  </tr>
  <tr>
     <td>销售量：</td>
     <td><input type="text" name="txt_sellnum"/></td>
  </tr>
    <tr>
     <td>库存量：</td>
     <td><input type="text" name="txt_storenum"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="submit" value="保存"/>
     </td>
  </tr>
</table>
</form>
</body>
</html>