<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>�ύ����</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
</head>
<body style="margin:0px 0px 0px 0px;">  
<table border="1" style="width:100%">
<tr><td>�ύ����</td></tr>
<tr><td><?php include 'action/session_member_check.php';?></td></tr>
<tr><td>
<table border="1" width="100%">
<?php 
 if($_SESSION['car']!="")  //�жϹ��ﳵ
 {
  $arr2 = (array)$_SESSION['car'];  //�����ﳵSESSION������ֵ���������
  $p_nums = 0;  //�����������洢������Ʒ����
  $o_money = 0; //�����������洢�������
  foreach ($arr2 as $key1=> $value1 )  //�������ﳵ����
  { 
  	echo "<tr>";
  	echo "<td>". $value1[0]."</td>";
  	echo "<td>". $value1[1]."</td>";
  	echo "<td><img src='". $value1[2]."' width='39' height='39'/></td>";
  	echo "<td>". $value1[3]."</td>";
  	echo "<td>". $value1[4]."</td>";
    echo"</tr>";
    $p_nums += (int)$value1[3];    //������Ʒ�����ۼ�
    $o_money += (float)$value1[4]; //��������ۼ�
  }
?>
</table>
</td></tr>
<tr><td>
<form name="form1" action="action/member_order_add_do.php" method="post">
<table border="1" width="100%">
  <tr><td>��Ա��д��</td>
      <td> <?php echo $membername;?><input type="hidden" name="txt_username" value="<?php echo $membername;?>"/></td>
  </tr>
  <tr><td>��Ʒ������</td>
      <td> <?php echo $p_nums;?><input type="hidden" name="txt_pnums" value="<?php echo $p_nums;?>"/></td>
  </tr>
  <tr><td>������</td>
      <td> <?php echo $o_money;?><input type="hidden" name="txt_omoney" value="<?php echo $o_money;?>"/></td>
  </tr>
  <tr><td><font color="red">*</font>�ջ��ˣ�</td>
      <td> <input type="text" name="txt_taker"/></td>
  </tr>
  <tr><td><font color="red">*</font>�ջ���ַ��</td>
      <td> <input type="text" name="txt_address"/></td>
  </tr>
  <tr><td><font color="red">*</font>��ϵ�绰��</td>
      <td> <input type="text" name="txt_tel"/></td>
  </tr>
  <tr><td><font color="red">*</font>���ʽ��</td>
      <td> <select name="txt_paymethod">
      <option value="��������">��������</option>
      <option value="֧��������">֧��������</option>
      <option value="���ÿ�����">���ÿ�����</option>
         </select>
      </td>
  </tr>
  <tr><td>��ע��</td>
      <td> <textarea name="txt_remark" cols="60" rows="4"></textarea></td>
  </tr>
  <tr><td colspan="2"><input type="submit" value="�ύ"> </td></tr>
 </table>
 </form>
<?php 
  }
  else 
  {
    echo "<script>alert('��ǰ���ﳵΪ�գ�����ѡ��Ҫ�������Ʒ��Ϣ��');window.location.href='index_content.php'</script>";
  }
?>
</td></tr></table>
</body>
</html>
