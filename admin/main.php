<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��̨�̳���վ����ƽ̨</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php $_SESSION["user"]="admin" ?>
<?php  include 'action/session_check.php'; //��¼�ж�  ?>  
<table border="1" style="width:100%">
<tr><td colspan="2">��̨�̳���վ����ƽ̨</td></tr>
<tr><td colspan="2"></td></tr>
<tr><td width="100px" valign="top">
	<a href="member_manager.php" target="mainframe">��Ա��Ϣ����</a>     <br/>
	<a href="admin_add.php" target="mainframe">��ӹ���Ա</a>            <br/>
	<a href="admin_manager.php" target="mainframe">����Ա����</a>        <br/><br/>
	<a href="producttype_add.php" target="mainframe">�����Ʒ���</a>    <br/>
	<a href="producttype_manager.php" target="mainframe">��Ʒ������</a><br/>
	<a href="product_add.php" target="mainframe">�����Ʒ��Ϣ</a>        <br/>
	<a href="product_manager.php" target="mainframe">��Ʒ��Ϣ����</a>    <br/><br/>
	<a href="newstype_add.php" target="mainframe">����������</a>       <br/>
	<a href="newstype_manager.php" target="mainframe">����������</a>   <br/>
	<a href="news_add.php" target="mainframe">���������Ϣ</a>           <br/>
	<a href="news_manager.php" target="mainframe">������Ϣ����</a>       <br/><br/>
	<a href="order_manager.php" target="mainframe">������Ϣ����</a>      <br/><br/>
	<a href="../index.php" target="_blank">��վǰ̨��ҳ</a>
	</td>
	<td>
	  <iframe name="mainframe" style="width:100%; height:500px" ></iframe>  <!-- iframe��� -->
	</td>
</tr>
</table>
</body>
</html>
