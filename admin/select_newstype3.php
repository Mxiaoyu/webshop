<select name="txt_parentid">
<?php 
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�
  static $line="��";  //������̬����
  GetNewsType('0');  //���ú���

  function GetNewsType($parentid) //���庯�����������
  {
    global $line;  //����ȫ�־�̬����
    global $parentid2;
        $str = "select * from News_Type where NT_ParentID=".$parentid; //��ѯ���
    $arr = mysql_query($str); //ִ��SQL���
    if($arr != null)
    {
      while ($result = mysql_fetch_array($arr))
      {
        echo "<option value='".$result['NT_ID']."'".($parentid2 == $result['NT_ID']? "selected":"")." >".$line.$result['NT_Name']."</option>"; 
        $line .= "����";
        GetNewsType($result['NT_ID']);  //�ݹ����
        $line  = substr($line,0,strlen($line) -4); 	
      }
    }
  }
?>
</select>