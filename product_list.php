<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charsetgb2312" />
  <title>商品列表页</title>
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
  if($_GET["PT_ID"]!="")
  {
  	$ptid= $_GET["PT_ID"];  //商品类别编号
    $str = "select * from  Product_Info where PT_ID =".$ptid." and P_Status=1 order by P_CreateTime desc";
    $arr = mysql_query( $str);  //执行SQL语句
    $i=1;  //声明变量，用于商品分行显示
    while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
    {
      if($i == 1 || $i%5 == 0) echo "<tr>";
      echo "<td align='center'>";
  ?>
      <table border="1" style="text-align:center">
        <tr><td><img src='<?php echo $result["P_Image"];?>' width="130px" height="130px"/>  </td></tr>
        <tr><td> <?php echo $result["P_Name"];?>  </td></tr>
        <tr><td> 市场价： <?php echo $result["P_MPrice"];?>
                                             会员价： <?php echo $result["P_VPrice"];?>  </td></tr>
        <tr><td><a class="a1" href="product_info.php?P_ID=<?php echo $result["P_ID"];?>">查看</a>
                <a class="a1" href="shopcar_info.php?P_ID=<?php echo $result["P_ID"];?>">放入购物车</a></td></tr>
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
