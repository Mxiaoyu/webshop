<?php 
  /* 管理员信息修改处理页 */ 
 require_once("../../conn/Conn_DB.php");   //包含数据库链接文件  
 if($_POST["txt_password"]!= "" )
 {
   $aid = $_POST["txt_id"];           //管理员编号
   $password = $_POST["txt_password"];//密码
   $tel = $_POST["txt_tel"];          //联系电话
   $qq = $_POST["txt_qq"];            //QQ
   $email = $_POST["txt_email"];      //Email
   $str = "update Admin_Info set A_Password='$password',A_Tel='$tel',A_QQ='$qq',A_Email='$email' where A_ID=".$aid;
   // echo $str; //本语句用于调试，输出查询语句
    
    $update = mysql_query($str);  //执行SQL语句
    if($update)                   //判断执行结果 
    {
      echo "<script>alert('管理员信息修改成功！');window.location.href='../admin_manager.php'</script>";
    }
    else
    {
      echo "<script>alert('管理员信息修改失败！');window.location.href='../admin_update.php?A_ID=".$aid."'</script>";     
    }    
  }
  else 
  {
    echo "<script>alert('请输入管理员密码！');window.location.href='../admin_update.php?A_ID=".$aid."'</script>";     
  }
 ?>