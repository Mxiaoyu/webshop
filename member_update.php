<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>会员中心</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">会员中心</td></tr>
<tr><td colspan="2"><?php include 'action/session_member_check.php';?></td></tr>
<tr><td><?php include_once ('sub_member_menu.php'); ?></td>
  <td>
<?php 
  require_once("conn/Conn_DB.php"); //包含数据库链接文件  
  $str = "select * from Member_Info where M_Name ='".$membername."'";
  $arr = mysql_query( $str);  //执行SQL语句
  $result = mysql_fetch_array($arr); //获取查询结果
 ?> 
 <form name="form1" action="action/member_update_do.php" method="post">
<table align="center" border="1" width="300px">
  <tr><td colspan="2" align="center">修改会员信息 </td></tr>
  <tr>
     <td>用户名：</td>
     <td><?php echo $result['M_Name'];?></td>
  </tr>
  <tr>
     <td>身份证号：</td>
     <td><input type="text" name="txt_card" value="<?php echo $result['M_Card'];?>"/> </td>
  </tr>
  <tr>
     <td>联系电话：</td>
     <td><input type="text" name="txt_tel" value="<?php echo $result['M_Tel'];?>"/> </td>
  </tr>
  <tr>
     <td>QQ：</td>
     <td><input type="text" name="txt_qq" value="<?php echo $result['M_QQ'];?>" /></td>
  </tr>
  <tr>
     <td>邮箱：</td>
     <td><input type="text" name="txt_email" value="<?php echo $result['M_Email'];?>" /></td>
  </tr>
  <tr>
     <td>联系地址：</td>
     <td><input type="text" name="txt_address" value="<?php echo $result['M_Address'];?>" /></td>
  </tr>
  <tr>
     <td>邮政编码：</td>
     <td><input type="text" name="txt_code" value="<?php echo $result['M_Code'];?>" /></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
       <input type="hidden" name="txt_id" value="<? echo $result['M_ID'] ?>"/>
       <input type="submit" value="保存"/>
     </td>
  </tr>
</table>
</form>
</td></tr></table>
</body>
</html>