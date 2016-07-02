<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>闽台商城网站管理平台</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php $_SESSION["user"]="admin" ?>
<?php  include 'action/session_check.php'; //登录判断  ?>  
<table border="1" style="width:100%">
<tr><td colspan="2">闽台商城网站管理平台</td></tr>
<tr><td colspan="2"></td></tr>
<tr><td width="100px" valign="top">
	<a href="member_manager.php" target="mainframe">会员信息管理</a>     <br/>
	<a href="admin_add.php" target="mainframe">添加管理员</a>            <br/>
	<a href="admin_manager.php" target="mainframe">管理员管理</a>        <br/><br/>
	<a href="producttype_add.php" target="mainframe">添加商品类别</a>    <br/>
	<a href="producttype_manager.php" target="mainframe">商品类别管理</a><br/>
	<a href="product_add.php" target="mainframe">添加商品信息</a>        <br/>
	<a href="product_manager.php" target="mainframe">商品信息管理</a>    <br/><br/>
	<a href="newstype_add.php" target="mainframe">添加文章类别</a>       <br/>
	<a href="newstype_manager.php" target="mainframe">文章类别管理</a>   <br/>
	<a href="news_add.php" target="mainframe">添加文章信息</a>           <br/>
	<a href="news_manager.php" target="mainframe">文章信息管理</a>       <br/><br/>
	<a href="order_manager.php" target="mainframe">订单信息管理</a>      <br/><br/>
	<a href="../index.php" target="_blank">网站前台首页</a>
	</td>
	<td>
	  <iframe name="mainframe" style="width:100%; height:500px" ></iframe>  <!-- iframe框架 -->
	</td>
</tr>
</table>
</body>
</html>
