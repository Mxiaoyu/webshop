<table border="1" width="100%", style="text-align:center">
<tr><td colspan="4">
<?php   	
  require_once("conn/Conn_DB.php");  //�������ݿ������ļ�  
  $ptid = 8;  //��Ʒ�����
  $str = "select * from  Product_Type where PT_ID =".$ptid; //��ѯ���
  $arr = mysql_query($str ); //ִ��SQL���
  $result = mysql_fetch_array($arr);  //��ȡ��ѯ���
  echo $result['PT_Name'];   //��ʾ��Ʒ�������
?>
</td></tr>
 <?php   
  $str = "select * from  product_info where PT_ID =".$ptid." and P_Status=1 order by P_CreateTime desc  limit 1";  //��ѯ���
  $arr = mysql_query( $str);  //ִ��SQL���
  $i=1;  //����������������Ʒ������ʾ
  while($result = mysql_fetch_array($arr))   //������ѯ�����ÿһ��
 {
   if($i == 1 || $i%1 == 0) echo "<tr>";
   echo "<td align='center'>";
?>
<table border="1" style="text-align:center">
  <tr><td><img src='<?php echo $result["P_Image"];?>' width="130px" height="130px"/>  </td></tr>
  <tr><td> <?php echo $result["P_Name"];?>  </td></tr>
  <tr><td> �г��ۣ� <?php echo $result["P_MPrice"];?>��Ա�ۣ� <?php echo $result["P_VPrice"];?>  </td></tr>
  <tr> <td><a class="a1" href="product_info.php?P_ID=<?php echo $result["P_ID"];?>">�鿴</a>
   <a class="a1" href="shopcar_info.php?P_ID=<?php echo $result["P_ID"];?>">���빺�ﳵ</a></td></tr>
  </table>
<?php
  echo " </td>" ;
  if($i%1 == 0) echo "</tr>";
  $i++;
 }
?>
 </table>
