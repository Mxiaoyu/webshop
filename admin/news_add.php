<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>添加文章信息</title>
</head>
<body style="margin:0px 0px 0px 0px;">  
<?php  include 'action/session_check.php'; //登录判断  ?>  
<form action="action/news_add_do.php" method="post" >
<table border="1" width="100%">
  <tr><td colspan="2" align="center">添加文章信息</td></tr>
  <tr>
     <td><font color="red">*</font>所属类别</td>
     <td><?php include 'select_newstype3.php';?></td>
  </tr>
  <tr>
     <td><font color="red">*</font>文章标题：</td>
     <td><input type="text" name="txt_title"/></td>
  </tr>
  <tr>
     <td>文章摘要</td>
     <td> <textarea name="txt_intro" rows="8" cols="30"></textarea></td>
  </tr>
  <tr>
     <td><font color="red">*</font>内容： </td>
    <td><textarea name="txt_contents" rows="16" cols="50"></textarea></td>
  </tr>
  <tr>
     <td colspan="2" align="center">
        <input type="submit" value="保存"/>
     </td>
  </tr>
</table>
</form>
</body>
</html>