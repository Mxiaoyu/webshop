<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>文章列表页</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
  </head>
<body style="margin:0px 0px 0px 0px; text-align:center">
<table border="1" cellspacing="0" cellpadding="0" style="width:100%">
<tr><td width="250px">
<?php require ('sub_newslist1.php');
      require ('sub_newslist2.php'); 
      require ('sub_productlist3.php');?> </td>
<td valign="top" width="750px">
<table border="1" cellspacing="0" cellpadding="0" style="width:100%">
<?php 
  require_once("conn/Conn_DB.php");  //包含数据库链接文件  
  if($_GET["NT_ID"]!= "")
  {
  	$ntid = $_GET["NT_ID"];  //文章类别编号
    $str = "select * from  News_Info where NT_ID =".$ntid." and N_Status=1 order by N_CreateTime desc";
    $arr = mysql_query( $str);  //执行SQL语句
    while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
    {
?>
   <tr><td>
    <a class="a1" href="news_info.php?N_ID=<?php echo $result["N_ID"];?>"><?php echo $result["N_Title"];?> </a>
   </td></tr>  
   <tr><Td><?php echo $result["N_Intro"];?></Td></tr>
<?php
   } 
 }
 ?>
</table>
</td></tr></table>
 </body>
 </html>
