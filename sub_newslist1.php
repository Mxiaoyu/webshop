 <table border="1" cellspacing="0" cellpadding="0" width="100%">
<tr><td>
<?php   	
  require_once("conn/Conn_DB.php");  //�������ݿ������ļ�  
  $ntid = 1;  //���������
  $str = "select * from News_Type where NT_ID =".$ntid; //��ѯ���
  $arr = mysql_query( $str ); //ִ��SQL���
  $result = mysql_fetch_array($arr);  //��ȡ��ѯ���
  echo $result['NT_Name'];  //��ʾ�����������
?>
</td></tr>
 <?php   
  $str = "select * from  News_Info where NT_ID =".$ntid."  and N_Status=1 order by N_CreateTime desc";  //��ѯ���
  $arr = mysql_query( $str);  //ִ��SQL���
  while($result = mysql_fetch_array($arr)) //������ѯ�����ÿһ��
  {
?>
  <tr><td width="300px">
     <a class="a1" href="news_info.php?N_ID=<?php echo $result["N_ID"];?>"><?php echo $result["N_Title"];?></a>
  </td></tr>
<?php
 }
?>
 </table>
