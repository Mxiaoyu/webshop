<?php session_start(); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>会员中心</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">会员中心</td></tr>
<tr><td colspan="2"> <?php require_once("action/session_member_check.php"); ?></td></tr>
<tr>
  <td><?php include_once ('sub_member_menu.php'); ?></td>
  <td>
<?php 
  require_once("conn/Conn_DB.php"); //包含数据库链接文件 
  $str="select * from Member_Info where M_Name ='".$membername."'";  //查询语句
  $arr = mysql_query( $str);  //执行SQL语句
  $result = mysql_fetch_array($arr);  //获取查询结果
 ?> 
<table align="center" border="1" width="300px">
  <tr><td colspan="2" align="center">会员基本信息 </td></tr>
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
</table>
</td>
</tr>
</table>
</body>
</html>
