<select name="txt_parentid">
<?php 
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件
  static $line="├";  //声明静态变量
  GetNewsType('0');  //调用函数

  function GetNewsType($parentid) //定义函数，加载类别
  {
    global $line;  //声明全局静态变量
    global $parentid2;
        $str = "select * from News_Type where NT_ParentID=".$parentid; //查询语句
    $arr = mysql_query($str); //执行SQL语句
    if($arr != null)
    {
      while ($result = mysql_fetch_array($arr))
      {
        echo "<option value='".$result['NT_ID']."'".($parentid2 == $result['NT_ID']? "selected":"")." >".$line.$result['NT_Name']."</option>"; 
        $line .= "─┴";
        GetNewsType($result['NT_ID']);  //递归调用
        $line  = substr($line,0,strlen($line) -4); 	
      }
    }
  }
?>
</select>