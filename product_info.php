<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>��Ʒ����ҳ</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px; text-align:center">
<table border="1" cellspacing="0" cellpadding="0" style="width:100%">
<tr><td width="250px">
<?php  require ('sub_newslist1.php');
      require ('sub_newslist2.php'); 
      require ('sub_productlist3.php');?> </td>
<td valign="top" width="750px">
<table border="1" cellspacing="0" cellpadding="0" width="100%">
 <?php    
    require_once("conn/Conn_DB.php");  //�������ݿ������ļ�  
  if($_GET["P_ID"]!="")
  {
   $pid = $_GET["P_ID"];  //��Ʒ���
   $str = "select * from Product_Info where P_ID =".$pid;  //��ѯ���
   $arr = mysql_query( $str);  //ִ��SQL���
   $result = mysql_fetch_array($arr);  //��ȡ��ѯ���
 ?> 
  <tr><td rowspan="4" width="300px"><img src='<?php echo $result["P_Image"];?>' width="250px" height="250px"/>  </td>
  <td width="450px"> <?php echo $result["P_Name"];?>  </td></tr>
  <tr><td> �г��ۣ� <?php echo $result["P_MPrice"];?>
                             ��Ա�ۣ� <?php echo $result["P_VPrice"];?>  </td></tr>
   <tr> <td>  <?php echo $result["P_CreateTime"];?>  </td></tr>
   <tr> <td><a class="a1" href="shopcar_info.php?P_ID=<?php echo $result["P_ID"];?>">���빺�ﳵ</a></td></tr>
    <tr><td colspan="2">��Ʒ��ϸ����</td></tr>
    <tr><td colspan="2"> <?php echo $result["P_Intro"];?>  </td></tr>
    <tr><td colspan="2"> <a class="a1" href="javascript:history.back(-1);" target="_self">����</a> </td></tr>
<?php 
   } 
?> 
</table>
</td></tr></table>
 </body>
 </html>
