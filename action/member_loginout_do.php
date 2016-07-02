<?php  
   session_start();
  /* 会员退出处理页 */
   unset($_SESSION['member']);           
    echo "<script>alert('您已安全退出系统！');window.location = '../index_content.php';</script>";
 ?>
