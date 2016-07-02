<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑管理员信息</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="action/admin_update_do.php" method="post">
<?php   
if($_GET["A_ID"] !="" )
{
  require_once("../conn/Conn_DB.php");//包含数据库链接文件
  $aid = $_GET["A_ID"];               //获取传递的管理员编号
  $str = "select * from Admin_Info where A_ID=".$aid;  //查询语句
  $arr = mysql_query($str);         //执行SQL语句
  $result=mysql_fetch_array($arr);  //获取查询结果   
?>
<table border="1">
  <tr><td colspan="2" align="center">编辑管理员信息</td></tr>
  <tr>
     <td>用户名：</td>
     <td><?php echo $result['A_UserName'] ?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>密码：</td>
     <td><input type="password" name="txt_password" value="<?php echo $result['A_Password'] ?>"/></td>
  </tr>
  <tr>
     <td>联系电话：</td>
     <td><input type="text" name="txt_tel" value="<?php echo $result['A_Tel'] ?>"/></td>
  </tr>
  <tr>
     <td>QQ：</td>
     <td><input type="text" name="txt_qq" value="<?php echo $result['A_QQ'] ?>"/></td>
  </tr>
<tr>
     <td>邮箱：</td>
     <td><input type="text" name="txt_email" value="<?php echo $result['A_Email'] ?>"/></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="hidden" name="txt_id" value="<?php echo $result['A_ID'] ?>"/>
        <input type="submit" value="保存"/>
     </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的管理员信息！');window.location.href='admin_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
