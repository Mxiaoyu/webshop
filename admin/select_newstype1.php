<select name="txt_parentid">
  <option value='0'>顶级类别</option>
 <?php 
  require_once("../conn/Conn_DB.php");  //包含数据库链接文件
  static $line="├";  //声明静态变量
  GetNewsType('0');  //调用函数

  function GetNewsType($parentid) //定义函数，加载类别
  {
    global $line;  //声明全局静态变量
    $str = "select * from News_Type where NT_ParentID=".$parentid; //查询语句
    $arr = mysql_query($str); //执行SQL语句
    if($arr != null)
    {
      while ($result = mysql_fetch_array($arr))
      {
        echo "<option value='".$result['NT_ID']."'>".$line.$result['NT_Name']."</option>"; 
        $line.="─┴";
        GetNewsType($result['NT_ID']);  //递归调用
        $line  = substr($line,0,strlen($line) -4);	
      }
    }
  }  
?>
</select>