<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
 <title>商品类别管理</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="" method="post">
<table border="1">
 <tr><td>编号</td><td>父级编号</td><td>类别名称</td><td>类别简介</td><td>编辑</td><td>删除</td></tr>
 <?php   
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件 
  $str = "select * from  Product_Type order by PT_ParentID , PT_ID" ; //查询语句
  $arr = mysql_query( $str );  //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
  {
?>
 <tr>
   <td> <?php echo $result["PT_ID"];?> </td>   
   <td> <?php echo $result["PT_ParentID"];?> </td>
   <td> <?php echo $result["PT_Name"];?> </td>
   <td> <?php echo $result["PT_Intro"];?> </td>
   <td> <a href="producttype_update.php?PT_ID=<?php echo $result["PT_ID"];?>">编辑</a></td>
   <td> <a href="action/producttype_delete_do.php?PT_ID=<?php echo $result["PT_ID"];?>">删除</a></td>
 </tr>
<?php }   ?>
</table>
</form>
</body>
</html>
