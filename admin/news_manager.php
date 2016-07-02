<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>文章信息管理</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="" method="post">
<table border="1">
  <tr>
    <td>编号</td><td>所属类别</td><td>文章标题</td><td>状态</td><td>发布时间</td>
    <td>发布</td><td>放入回收站</td><td>编辑</td><td>删除</td>
   </tr>
 <?php   
  include("../conn/Conn_DB.php");    //包含数据库链接文件 
  $str = "select n.*,nt.NT_Name from  News_Info n,News_Type nt where n.NT_ID = nt.NT_ID order by N_CreateTime desc"; //查询语句
  $arr = mysql_query( $str );                //执行SQL语句
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
  {
?>
  <tr>
    <td> <?php echo $result["N_ID"];?>   </td>
    <td> <?php echo $result["NT_Name"];?></td>   
    <td> <?php echo $result["N_Title"];?></td>
    <td> <?php echo $result["N_Status"]=='1'? '<font color=blue>已发布</font>':'<font color=red>未发布</font>';?>  </td>
    <td> <?php echo $result["N_CreateTime"];?></td>
    <td><a href="action/news_action_do.php?Type=1&N_ID=<?php echo $result["N_ID"];?>">发布</a></td>
    <td><a href="action/news_action_do.php?Type=2&N_ID=<?php echo $result["N_ID"];?>">放入回收站</a></td>
    <td><a href="news_update.php?N_ID=<?php echo $result["N_ID"];?>">编辑</a></td>
    <td><a href="action/news_action_do.php?Type=3&N_ID=<?php echo $result["N_ID"];?>">删除</a></td>
  </tr>
<?php }  ?>
 </table>
 </form>
</body>
</html>
