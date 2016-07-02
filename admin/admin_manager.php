<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>管理员信息管理</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="" method="post">
<table border="1">
<tr>
  <td>编号</td><td>用户名</td><td>密码</td><td>联系电话</td>
  <td>QQ</td><td>邮箱</td><td>编辑</td><td>删除</td>
</tr>
<?php   
  require_once("../conn/Conn_DB.php");   //包含数据库链接文件 
  $str = "select * from  Admin_Info order by A_ID"; //查询语句
  $arr = mysql_query($str);                 //执行SQL语句
  while($result = mysql_fetch_array($arr))  //遍历查询结果的每一行
  {
?>
  <tr>
    <td> <?php echo $result["A_ID"];?> </td>   
    <td> <?php echo $result["A_UserName"];?> </td>
    <td> <?php echo $result["A_Password"];?> </td>
    <td> <?php echo $result["A_Tel"];?> </td>
    <td> <?php echo $result["A_QQ"];?> </td>
    <td> <?php echo $result["A_Email"];?> </td>
    <td><a href="admin_update.php?A_ID=<?php echo $result["A_ID"];?>">编辑</a></td>
    <td><a href="action/admin_delete_do.php?A_ID=<?php echo $result["A_ID"];?>">删除</a></td>
  </tr>
<?php }  ?>
 </table>
 </form>
</body>
</html>
