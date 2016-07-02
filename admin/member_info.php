<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>会员中心</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>   
<?php 
require_once("../conn/Conn_DB.php"); //包含数据库链接文件
if($_GET['M_ID']!="")
{
  $mid = $_GET['M_ID']; 
  $str="select * from Member_Info where M_ID=$mid";  //查询语句
  $arr = mysql_query( $str);         //执行SQL语句
  $result = mysql_fetch_array($arr); //获取查询结果   
 ?> 
<table align="center" border="1">
  <tr><td colspan="2" align="center">会员基本信息  </td></tr>
  <tr>
     <td>用户名：</td>
     <td><?php echo $result["M_Name"];?></td>
  </tr>
  <tr>
     <td>密码：</td>
     <td><?php echo $result["M_Password"];?></td>
  </tr>
  <tr>
     <td>密码保护问题：</td>
     <td><?php echo $result["M_Question"];?></td>
  </tr>
  <tr>
     <td>密码保护答案：</td>
     <td><?php echo $result["M_Answer"];?></td>
  </tr>
  <tr>
     <td>身份证号：</td>
     <td><?php echo $result["M_Card"];?></td>
  </tr>
  <tr>
     <td>联系电话：</td>
     <td><?php echo $result["M_Tel"];?></td>
  </tr>
  <tr>
     <td>QQ：</td>
     <td><?php echo $result["M_QQ"];?></td>
  </tr>
  <tr>
     <td>邮箱：</td>
     <td><?php echo $result["M_Email"];?></td>
  </tr>
  <tr>
     <td>联系地址：</td>
     <td><?php echo $result["M_Address"];?></td>
  </tr>
  <tr>
     <td>邮政编码：</td>
     <td><?php echo $result["M_Code"];?></td>
  </tr>
  <tr>
     <td>消费金额：</td>
     <td><?php echo $result["M_Money"];?></td>
  </tr>
   <tr>
     <td>余额：</td>
     <td><?php echo $result["M_Blance"];?></td>
  </tr>
   <tr>
     <td>注册时间：</td>
     <td><?php echo $result["M_CreateTime"];?></td>
  </tr>
  <tr><td colspan="2" align="center">  <a class="a1" href="javascript:history.back(-1);" target="_self">返回</a> </td></tr>
</table>
<?php 
 }
 else 
 {
  echo "<script>window.location.href='member_manager.php'</script>";
 }
?>
</body>
</html>