<table border="1" width="100%", style="text-align:center">
<tr><td colspan="4">
<?php   	
  require_once("conn/Conn_DB.php");  //包含数据库链接文件  
  $ptid = 3;  //商品类别编号
  $str = "select * from  Product_Type where PT_ID =".$ptid; //查询语句
  $arr = mysql_query($str ); //执行SQL语句
  $result = mysql_fetch_array($arr);  //获取查询结果
  echo $result['PT_Name'];   //显示商品类别名称
?>
</td></tr>
 <?php   
  $str = "select * from  product_info where PT_Id =".$ptid." and P_Status=1 order by P_CreateTime desc  limit 6";  //查询语句
  $arr = mysql_query( $str);  //执行SQL语句
  $i=1;  //声明变量，用于商品分行显示
  while($result = mysql_fetch_array($arr))   //遍历查询结果的每一行
 {
   if($i == 1 || $i%4 == 0) echo "<tr>";
   echo "<td align='center'>";
?>
<table border="1" style="text-align:center">
  <tr><td><img src='<?php echo $result["P_Image"];?>' width="130px" height="130px"/>  </td></tr>
  <tr><td> <?php echo $result["P_Name"];?>  </td></tr>
  <tr><td> 市场价： <?php echo $result["P_MPrice"];?>会员价： <?php echo $result["P_VPrice"];?>  </td></tr>
  <tr> <td><a class="a1" href="product_info.php?P_ID=<?php echo $result["P_ID"];?>">查看</a>
   <a class="a1" href="shopcar_info.php?P_ID=<?php echo $result["P_ID"];?>">放入购物车</a></td></tr>
  </table>
<?php
  echo " </td>" ;
  if($i%3 == 0) echo "</tr>";
  $i++;
 }
?>
 </table>
