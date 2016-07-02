<?php 
  /* 会员注册处理页 */
 require_once("../conn/Conn_DB.php");   //包含数据库链接文件
 if( $_POST["txt_username"]!= "" && $_POST["txt_password"]!= "" )
 {
  $username = $_POST["txt_username"];  //用户名
  $password = $_POST["txt_password"];  //密码
  $question = $_POST["txt_question"];  //密码保存问题
  $answer = $_POST["txt_answer"];      //密码 保存答案
  $card = $_POST["txt_card"];          //身份证号
  $tel = $_POST["txt_tel"];            //联系电话
  $qq = $_POST["txt_qq"];              //QQ
  $email = $_POST["txt_email"];        //Email
  $address = $_POST["txt_address"];    //地址
  $code = $_POST["txt_code"];          //邮政编码
  $createtime = date('Y-m-d H:i:s');;  //注册日期  
  $str = "insert into Member_Info (M_Name,M_Password,M_Question,M_Answer,M_Card,M_Tel,M_QQ,M_Email,M_Address,M_Code,M_Money,M_Blance,M_CreateTime,M_Status) values('$username','$password','$question','$answer','$card','$tel','$qq','$email','$address','$code',0,0,'$createtime',1)"; 
  $insert = mysql_query($str);         //执行SQL语句
  if($insert)         
  {
  	 echo "<script>alert('恭喜您，会员注册成功！');window.location.href='../member_info.php'</script>";
  }
  else
  {
    echo "<script>alert('对不起，会员注册失败！');window.location.href='../member_register.php'</script>";
  }  
 }
 else 
 {
   echo "<script>alert('请输入用户名和密码！');window.location.href='../member_register.php'</script>";     
 }
 ?>