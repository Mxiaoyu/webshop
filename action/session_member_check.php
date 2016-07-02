<?php
  /* »áÔ±µÇÂ½ÅÐ¶ÏÒ³ */
session_start();
if($_SESSION['member'] == "")  //µÇÂ½ÅÐ¶ÏÈç¹ûÃ»ÓÐµÇÂ½£¬ÔòÌø×ªµ½µÇÂ½Ò³Ãæ
{
    echo "<script> window.location.href='member_login.php';</script>";
}
else 
{
	$membername = $_SESSION['member'];
	echo "Ð¡ÌÔ±¦»¶Ó­Äã£¡". $membername;
}
?>
