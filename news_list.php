<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>�����б�ҳ</title>
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
  require_once("conn/Conn_DB.php");  //�������ݿ������ļ�  
  if($_GET["NT_ID"]!= "")
  {
  	$ntid = $_GET["NT_ID"];  //���������
    $str = "select * from  News_Info where NT_ID =".$ntid." and N_Status=1 order by N_CreateTime desc";
    $arr = mysql_query( $str);  //ִ��SQL���
    while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
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
