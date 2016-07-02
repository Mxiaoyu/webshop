<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>会员信息管理</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
会员信息管理<br/>
<table border="1">
    <tr>
      <td>编号</td><td>会员名称</td><td>身份证号</td><td>联系电话</td><td>QQ</td><td>邮箱</td>
      <td>联系地址</td><td>邮政编码</td><td>消费总额</td><td>余额</td><td>注册日期</td><td>状态</td>
      <td colspan="4">操作</td>
    </tr>
 <?php   
   require_once("../conn/Conn_DB.php");  //包含数据库链接文件
   $str = "select * from  Member_Info order by M_CreateTime desc"; //查询语句
   $arr = mysql_query($str );              //执行SQL语句
   while($result = mysql_fetch_array($arr))//遍历查询结果的每一行
  {
?>
  <tr>
    <td> <?php echo $result["M_ID"];?>    </td>
    <td> <?php echo $result["M_Name"];?>  </td>
    <td> <?php echo $result["M_Card"];?>  </td>
    <td> <?php echo $result["M_Tel"];?>   </td>
    <td> <?php echo $result["M_QQ"];?>    </td>
    <td> <?php echo $result["M_Email"];?> </td>
    <td> <?php echo $result["M_Address"];?></td>
    <td> <?php echo $result["M_Code"];?>  </td>
    <td> <?php echo $result["M_Money"];?> </td>
    <td> <?php echo $result["M_Blance"];?></td>
    <td> <?php echo $result["M_CreateTime"];?></td>
    <td> <?php echo $result["M_Status"]=='1'? '<font color=blue>启用</font>':'<font color=red>禁用</font>';?>  </td>
    <td><a href="action/member_action_do.php?Type=1&M_ID=<?php echo $result["M_ID"];?>">启用</a></td>
    <td><a href="action/member_action_do.php?Type=2&M_ID=<?php echo $result["M_ID"];?>">禁用</a></td>
    <td><a href="action/member_action_do.php?Type=3&M_ID=<?php echo $result["M_ID"];?>">删除</a></td>
    <td><a href="member_info.php?M_ID=<?php echo $result["M_ID"];?>">详细信息</a></td>
  </tr>
<?php }  ?>
 </table>
</body>
</html>
