<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>��Ʒ�б�ҳ</title>
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
  if($_GET["PT_ID"]!="")
  {
  	$ptid= $_GET["PT_ID"];  //��Ʒ�����
    $str = "select * from  Product_Info where PT_ID =".$ptid." and P_Status=1 order by P_CreateTime desc";
    $arr = mysql_query( $str);  //ִ��SQL���
    $i=1;  //����������������Ʒ������ʾ
    while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
    {
      if($i == 1 || $i%5 == 0) echo "<tr>";
      echo "<td align='center'>";
  ?>
      <table border="1" style="text-align:center">
        <tr><td><img src='<?php echo $result["P_Image"];?>' width="130px" height="130px"/>  </td></tr>
        <tr><td> <?php echo $result["P_Name"];?>  </td></tr>
        <tr><td> �г��ۣ� <?php echo $result["P_MPrice"];?>
                                             ��Ա�ۣ� <?php echo $result["P_VPrice"];?>  </td></tr>
        <tr><td><a class="a1" href="product_info.php?P_ID=<?php echo $result["P_ID"];?>">�鿴</a>
                <a class="a1" href="shopcar_info.php?P_ID=<?php echo $result["P_ID"];?>">���빺�ﳵ</a></td></tr>
      </table>
  <?php
      echo " </td>" ;
      if($i%4==0) echo "</tr>";
      $i++;
    }
  } 
   ?>
</table>
</table>
 </body>
 </html>
