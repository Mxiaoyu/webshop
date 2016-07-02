<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑商品信息</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="action/product_update_do.php" method="post"  enctype="multipart/form-data">
<?php   
 if($_GET["P_ID"] != "" )
 {
   require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
   $pid= $_GET["P_ID"];    //获取传递的商品编号 
   $str = "select * from Product_Info where P_ID=".$pid; //查询语句
   $arr = mysql_query($str);  //执行SQL语句
   $result = mysql_fetch_array($arr);  //获取查询结果 
   $parentid2 = $result['PT_Id'];  //将类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<table border="1" width="100%">
  <tr><td colspan="2" align="center">编辑商品信息  </td></tr>
  <tr>
     <td><font color="red">*</font>所属类别</td>
     <td><?php include 'select_producttype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>商品名称：</td>
     <td><input type="text" name="txt_name" value="<?php echo $result['P_Name'] ?>"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>商品图片：</td>
     <td><input type="file" name="txt_image"/></td>
  </tr>
  <tr>
     <td><font color="red">*</font>会员价：</td>
     <td><input type="text" name="txt_vprice" value="<?php echo $result['P_VPrice'] ?>"/></td>
  </tr>
  <tr>
     <td>市场价：</td>
     <td><input type="text" name="txt_mprice" value="<?php echo $result['P_MPrice'] ?>"/></td>
  </tr>
  <tr>
     <td>规格：</td>
     <td><input type="text" name="txt_model" value="<?php echo $result['P_Model'] ?>"/></td>
  </tr>
  <tr>
     <td>品牌：</td>
     <td><input type="text" name="txt_brand" value="<?php echo $result['P_Brand'] ?>"/></td>
  </tr>
  <tr>
     <td>简介：</td>
     <td>
      <textarea name="txt_intro" rows="8" cols="30"><?php echo $result['P_Intro'] ?></textarea>
      <img src='../<?php echo $result["P_Image"];?>' width="130" height="130"/>
      <input type="hidden" name="txt_image2"  value='<?php echo $result["P_Image"];?>'/>
     </td>
  </tr>
  <tr>
     <td>销售量：</td>
     <td><input type="text" name="txt_sellnum" value="<?php echo $result['P_SellNum'] ?>"/></td>
  </tr>
  <tr>
     <td>库存量：</td>
     <td><input type="text" name="txt_storenum" value="<?php echo $result['P_StoreNum'] ?>"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<?php echo $result['P_ID'] ?>"/>
       <input type="submit" value="保存"/>
     </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的商品信息！');window.location.href='product_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
