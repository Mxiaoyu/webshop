<select name="txt_parentid">
   <option value='0'>�������</option>
<?php 
  require_once("../conn/Conn_DB.php");  //�������ݿ������ļ�
  static $line="��";  //������̬����
  GetProductType('0');  //���ú���

  function GetProductType($parentid) //���庯�����������
  {
    global $line;  //����ȫ�־�̬����
    $str = "select * from Product_Type where PT_ParentID=".$parentid;
    $arr = mysql_query($str); //ִ��SQL���
    if($arr != null)
    {
      while ($result = mysql_fetch_array($arr))
      {
        echo "<option value='".$result['PT_ID']."'>".$line.$result['PT_Name']."</option>"; 
        $line .= "����";
        GetProductType($result['PT_ID']);  //�ݹ����
        $line  = substr($line,0,strlen($line) -4);	
      }
    }
  }
?>
</select>