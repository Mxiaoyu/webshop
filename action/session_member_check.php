<?php
  /* ��Ա��½�ж�ҳ */
session_start();
if($_SESSION['member'] == "")  //��½�ж����û�е�½������ת����½ҳ��
{
    echo "<script> window.location.href='member_login.php';</script>";
}
else 
{
	$membername = $_SESSION['member'];
	echo "С�Ա���ӭ�㣡". $membername;
}
?>
