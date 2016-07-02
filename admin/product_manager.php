<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>商品信息管理</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="" method="post">
<table border="1">
<tr>
  <td>编号</td><td>所属类别</td><td>商品名称</td><td>图片</td><td>会员价</td><td>状态</td>
  <td>发布时间</td><td colspan="3">操作</td>
</tr>
 <?php   
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件  
  $str = "select p.*,pt.PT_ID,pt.PT_Name from  Product_Info p,Product_Type pt where p.PT_ID = pt.PT_ID order by P_CreateTime desc"; //查询语句
  $arr = mysql_query( $str );  //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
  {
?>
  <tr>
    <td> <?php echo $result["P_ID"];?> </td>
    <td> <?php echo $result["PT_Name"];?> </td>   
    <td> <?php echo $result["P_Name"];?> </td>
    <td> <img src='../<?php echo $result["P_Image"];?>' width="39" height="39"/> </td>
    <td> <?php echo $result["P_VPrice"];?>  </td>
    <td> <?php echo $result["P_Status"]=='1'? '<font color=blue>已发布</font>':'<font color=red>未发布</font>';?>  </td>
    <td> <?php echo $result["P_CreateTime"];?> </td>
    <td> <a href="action/product_action_do.php?Type=1&P_ID=<?php echo $result["P_ID"];?>">发布</a></td>
    <td> <a href="action/product_action_do.php?Type=2&P_ID=<?php echo $result["P_ID"];?>">放入回收站</a></td>
    <td> <a href="product_update.php?P_ID=<?php echo $result["P_ID"];?>">编辑</a></td>
  </tr>
<?php }   ?>
 </table>
</form>
</body>
</html>
