<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>��������ҳ</title>
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
  require_once("conn/Conn_DB.php");  //�������ݿ������ļ�  
  if($_GET["N_ID"]!="")
 {
   $nid = $_GET["N_ID"];  //���±��
   $str = "select * from News_Info where N_ID =".$nid;  //��ѯ���
   $arr = mysql_query($str);  //ִ��SQL���
   $result = mysql_fetch_array($arr);  //��ȡ��ѯ���
 ?> 
   <tr><td style="text-align:center; font-size:16px; color:orange; height:40px; font-weight:bold;"> 
         <?php echo $result["N_Title"];?>  
   </td></tr>
    <tr><td align="center">
              ����ʱ�䣺 <?php echo $result["N_CreateTime"];?>  ����ʣ� <?php echo $result["N_Hits"];?> 
   </td></tr>
   <tr><td> <?php echo $result["N_Contents"];?>  </td></tr>
   <tr><td align="center">  <a class="a1" href="javascript:history.back(-1);" target="_self">����</a> </td></tr>
<?php
  } 
?> 
</table>
</td></tr></table>
 </body>
 </html>
