<?php 
  /* 会员密码修改处理页 */
 require_once("../conn/Conn_DB.php");   //包含数据库链接文件
 if( $_POST["txt_password"] == ""  )
 {
   echo "<script>alert('请输入原密码！');window.location.href='../member_pwd_update.php'</script>";     
 }
 else if( $_POST["txt_newpassword1"] == "" )
 {
 	echo "<script>alert('请输入新密码！');window.location.href='../member_pwd_update.php'</script>"; 
 }
 else if( $_POST["txt_newpassword1"]!= $_POST["txt_newpassword2"])
 {
 	echo "<script>alert('两次输入的新密码不一致！');window.location.href='../member_pwd_update.php'</script>"; 
 }
 else
 {
 	$mid = $_POST["txt_id"];                   //会员编号 
    $password = $_POST["txt_password"];        //原密码
    $newpassword = $_POST["txt_newpassword1"]; //新密码
    $str = "select * from Member_Info where M_ID=$mid and M_Password='$password'"; //查询原密码是否正确
    $result = mysql_query($str);      //执行SQL语句
    if( mysql_num_rows($result) >0 )  //返回的结果行数大于0，表示原密码正确
    {
       $str = "update Member_Info set M_Password='$newpassword' where M_ID=$mid";  //更新密码
       $update = mysql_query($str); //执行SQL语句
       if($update)         
       {
    	 echo "<script>alert('恭喜您，密码修改成功！');window.location.href='../member_info.php'</script>";
       }
       else
       {
         echo "<script>alert('对不起，密码修改失败！');window.location.href='../member_pwd_update.php'</script>";
       }
    }
    else
    {
      echo "<script>alert('对不起，原密码错误！');window.location.href='../member_pwd_update.php'</script>";
    }
 }
 ?>