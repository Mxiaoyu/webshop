<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>文章内容页</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
  </head>
<body style="margin:0px 0px 0px 0px; text-align:center">
<table border="1" cellspacing="0" cellpadding="0" style="width:100%">
<tr><td width="250px">
<?php require ('sub_newslist1.php');
      require ('sub_newslist2.php'); 
      require ('sub_productlist3.php');?> </td>
<td valign="top" width="750px">
  <table border="1" cellspacing="0" cellpadding="0" width="100%">
 <?   
  require_once("conn/Conn_DB.php");  //包含数据库链接文件  
  if($_GET["N_ID"]!="")
 {
   $nid = $_GET["N_ID"];  //文章编号
   $str = "select * from News_Info where N_ID =".$nid;  //查询语句
   $arr = mysql_query($str);  //执行SQL语句
   $result = mysql_fetch_array($arr);  //获取查询结果
 ?> 
   <tr><td style="text-align:center; font-size:16px; color:orange; height:40px; font-weight:bold;"> 
         <?php echo $result["N_Title"];?>  
   </td></tr>
    <tr><td align="center">
              发布时间： <?php echo $result["N_CreateTime"];?>  点击率： <?php echo $result["N_Hits"];?> 
   </td></tr>
   <tr><td> <?php echo $result["N_Contents"];?>  </td></tr>
   <tr><td align="center">  <a class="a1" href="javascript:history.back(-1);" target="_self">返回</a> </td></tr>
<?php
  } 
?> 
</table>
</td></tr></table>
 </body>
 </html>
