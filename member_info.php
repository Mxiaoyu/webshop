<?php session_start(); ?>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��Ա����</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td colspan="2">��Ա����</td></tr>
<tr><td colspan="2"> <?php require_once("action/session_member_check.php"); ?></td></tr>
<tr>
  <td><?php include_once ('sub_member_menu.php'); ?></td>
  <td>
<?php 
  require_once("conn/Conn_DB.php"); //�������ݿ������ļ� 
  $str="select * from Member_Info where M_Name ='".$membername."'";  //��ѯ���
  $arr = mysql_query( $str);  //ִ��SQL���
  $result = mysql_fetch_array($arr);  //��ȡ��ѯ���
 ?> 
<table align="center" border="1" width="300px">
  <tr><td colspan="2" align="center">��Ա������Ϣ </td></tr>
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
</table>
</td>
</tr>
</table>
</body>
</html>
