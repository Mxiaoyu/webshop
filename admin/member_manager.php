<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>��Ա��Ϣ����</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
��Ա��Ϣ����<br/>
<table border="1">
    <tr>
      <td>���</td><td>��Ա����</td><td>���֤��</td><td>��ϵ�绰</td><td>QQ</td><td>����</td>
      <td>��ϵ��ַ</td><td>��������</td><td>�����ܶ�</td><td>���</td><td>ע������</td><td>״̬</td>
      <td colspan="4">����</td>
    </tr>
 <?php   
   require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�
   $str = "select * from  Member_Info order by M_CreateTime desc"; //��ѯ���
   $arr = mysql_query($str );              //ִ��SQL���
   while($result = mysql_fetch_array($arr))//������ѯ�����ÿһ��
  {
?>
  <tr>
    <td> <?php echo $result["M_ID"];?>    </td>
    <td> <?php echo $result["M_Name"];?>  </td>
    <td> <?php echo $result["M_Card"];?>  </td>
    <td> <?php echo $result["M_Tel"];?>   </td>
    <td> <?php echo $result["M_QQ"];?>    </td>
    <td> <?php echo $result["M_Email"];?> </td>
    <td> <?php echo $result["M_Address"];?></td>
    <td> <?php echo $result["M_Code"];?>  </td>
    <td> <?php echo $result["M_Money"];?> </td>
    <td> <?php echo $result["M_Blance"];?></td>
    <td> <?php echo $result["M_CreateTime"];?></td>
    <td> <?php echo $result["M_Status"]=='1'? '<font color=blue>����</font>':'<font color=red>����</font>';?>  </td>
    <td><a href="action/member_action_do.php?Type=1&M_ID=<?php echo $result["M_ID"];?>">����</a></td>
    <td><a href="action/member_action_do.php?Type=2&M_ID=<?php echo $result["M_ID"];?>">����</a></td>
    <td><a href="action/member_action_do.php?Type=3&M_ID=<?php echo $result["M_ID"];?>">ɾ��</a></td>
    <td><a href="member_info.php?M_ID=<?php echo $result["M_ID"];?>">��ϸ��Ϣ</a></td>
  </tr>
<?php }  ?>
 </table>
</body>
</html>
