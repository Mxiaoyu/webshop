 <table border="1" cellspacing="0" cellpadding="0" width="100%">
<tr><td>
<?php   	
  require_once("conn/Conn_DB.php");  //包含数据库链接文件  
  $ntid = 8;  //文章类别编号
  $str = "select * from News_Type where NT_ID =".$ntid; //查询语句
  $arr = mysql_query( $str ); //执行SQL语句
  $result = mysql_fetch_array($arr);  //获取查询结果
  echo $result['NT_Name'];  //显示文章类别名称
?>
</td></tr>
 <?php   
  $str = "select * from  News_Info where NT_ID =".$ntid."  and N_Status=1 order by N_CreateTime desc";  //查询语句
  $arr = mysql_query( $str);  //执行SQL语句
  while($result = mysql_fetch_array($arr)) //遍历查询结果的每一行
  {
?>
  <tr><td width="300px">
     <a class="a1" href="news_info.php?N_ID=<?php echo $result["N_ID"];?>"><?php echo $result["N_Title"];?></a>
  </td></tr>
<?php
 }
?>
 </table>
