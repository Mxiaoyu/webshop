<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑商品类别</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="action/producttype_update_do.php" method="post" >
<?   
if($_GET["PT_ID"] !="" )
{
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
  $ntid= $_GET["PT_ID"];  //获取传递的类别编号
  $str = "select * from Product_Type where PT_ID=".$ntid;  //查询语句
  $arr = mysql_query($str);  //执行SQL语句
  $result = mysql_fetch_array($arr);  //获取查询结果   
  $parentid2 = $result["PT_ParentID"]; //将父级类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<table border="1" width="100%">
  <tr><td colspan="2" align="center">编辑商品类别 </td></tr>
  <tr>
     <td><font color="red">*</font>父级类别</td>
     <td><?php include 'select_producttype2.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>类别名称</td>
     <td><input type="text" name="txt_name"  value="<? echo $result['PT_Name'] ?>"/></td>
  </tr>
  <tr>
     <td>简介： </td>
    <td><textarea name="txt_intro" rows="8" cols="30"><? echo $result['PT_Intro'] ?></textarea></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['PT_ID'] ?>"/>
       <input type="submit" value="保存"/>
     </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的商品类别！');window.location.href='producttype_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>