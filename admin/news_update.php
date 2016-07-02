<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>编辑文章信息</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="action/news_update_do.php" method="post" >
<?php   
if($_GET["N_ID"] !="" ) 
{
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件 
  $nid = $_GET["N_ID"];     //获取传递的管理员编号
  $str = "select * from News_Info where N_ID=".$nid;  //查询语句
  $arr = mysql_query($str);  //执行SQL语句
  $result = mysql_fetch_array($arr);   //获取查询结果
  $parentid2 = $result["NT_ID"];  //将类别编号赋值给变量$parentid2,用于定位所属类别下拉框的选中项
?>
<table border="1" width="100%">
  <tr><td colspan="2" align="center">编辑文章信息 </td></tr>
  <tr>
     <td><font color="red">*</font>所属类别</td>
     <td><?php include 'select_newstype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>文章标题：</td>
     <td><input type="text" name="txt_title"  value="<?php echo $result['N_Title'] ?>"/></td>
  </tr>
  <tr>
     <td>文章摘要</td>
     <td> <textarea name="txt_intro" rows="8" cols="30"><?php echo $result['N_Intro'] ?></textarea>
     </tD>
  </tr>
  <tr>
     <td><font color="red">*</font>内容： </td>
     <td><textarea name="txt_contents" rows="16" cols="50"><?php echo $result['N_Contents'] ?></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
     <input type="hidden" name="txt_id" value="<?php echo $result['N_ID'] ?>"/>
     <input type="submit" value="保存"/>
    </td>
  </tr>
</table>
<?php 
 }
 else 
 {
   echo "<script>alert('请选择要编辑的文章信息！');window.location.href='news_manager.php'</script>";     
 }
 ?>
</form>
</body>
</html>
