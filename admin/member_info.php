<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��Ա����</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>   
<?php 
require_once("../conn/Conn_DB.php"); //�������ݿ������ļ�
if($_GET['M_ID']!="")
{
  $mid = $_GET['M_ID']; 
  $str="select * from Member_Info where M_ID=$mid";  //��ѯ���
  $arr = mysql_query( $str);         //ִ��SQL���
  $result = mysql_fetch_array($arr); //��ȡ��ѯ���   
 ?> 
<table align="center" border="1">
  <tr><td colspan="2" align="center">��Ա������Ϣ  </td></tr>
  <tr>
     <td>�û�����</td>
     <td><?php echo $result["M_Name"];?></td>
  </tr>
  <tr>
     <td>���룺</td>
     <td><?php echo $result["M_Password"];?></td>
  </tr>
  <tr>
     <td>���뱣�����⣺</td>
     <td><?php echo $result["M_Question"];?></td>
  </tr>
  <tr>
     <td>���뱣���𰸣�</td>
     <td><?php echo $result["M_Answer"];?></td>
  </tr>
  <tr>
     <td>���֤�ţ�</td>
     <td><?php echo $result["M_Card"];?></td>
  </tr>
  <tr>
     <td>��ϵ�绰��</td>
     <td><?php echo $result["M_Tel"];?></td>
  </tr>
  <tr>
     <td>QQ��</td>
     <td><?php echo $result["M_QQ"];?></td>
  </tr>
  <tr>
     <td>���䣺</td>
     <td><?php echo $result["M_Email"];?></td>
  </tr>
  <tr>
     <td>��ϵ��ַ��</td>
     <td><?php echo $result["M_Address"];?></td>
  </tr>
  <tr>
     <td>�������룺</td>
     <td><?php echo $result["M_Code"];?></td>
  </tr>
  <tr>
     <td>���ѽ�</td>
     <td><?php echo $result["M_Money"];?></td>
  </tr>
   <tr>
     <td>��</td>
     <td><?php echo $result["M_Blance"];?></td>
  </tr>
   <tr>
     <td>ע��ʱ�䣺</td>
     <td><?php echo $result["M_CreateTime"];?></td>
  </tr>
  <tr><td colspan="2" align="center">  <a class="a1" href="javascript:history.back(-1);" target="_self">����</a> </td></tr>
</table>
<?php 
 }
 else 
 {
  echo "<script>window.location.href='member_manager.php'</script>";
 }
?>
</body>
</html>