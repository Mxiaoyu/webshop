<?php 
  /* 会员信息修改处理页 */
  require_once("../conn/Conn_DB.php");   //包含数据库链接文件
 if( $_POST["txt_id"]!="" )
 {
   $mid = $_POST["txt_id"];         //会员编号
   $card = $_POST["txt_card"];      //身份证号
   $tel = $_POST["txt_tel"];        //联系电话
   $qq = $_POST["txt_qq"];          //QQ
   $email = $_POST["txt_email"];    //Email
   $address = $_POST["txt_address"];//地址
   $code = $_POST["txt_code"];      //邮政编码
   $str = "update Member_Info set M_Card='$card',M_Tel='$tel',M_QQ='$qq',M_Email='$email',M_Address='$address',M_Code='$code' where M_ID=$mid";
   $update = mysql_query($str);     //执行SQL语句
   if($update)         
   {
     echo "<script>alert('恭喜您，会员信息修改成功！');window.location.href='../member_info.php'</script>";
   }
   else
   {
     echo "<script>alert('对不起，会员信息修改失败！');window.location.href='../member_update.php'</script>";
   }
 }
 else 
 {
   echo "<script>alert('请重新选择修改会员信息！');window.location.href='../member_update.php'</script>";     
 }
 ?>