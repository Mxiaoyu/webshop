<?php
/* �������ݿ������� */
class ConnDB
{
    //������Ա����
    private $host;     //MySQL��������ַ
    private $username; //���ݿ��û���
    private $password; //���ݿ�����
    private $charset;  //���ݿ�����ʽ
    private $dbname;   //���ݿ�����
    
    //���캯����ʵ����ĳ�ʼ��
    public function ConnDB ($host1, $username1, $password1, $dbname1, $charset1) 
    {
        $this->host = $host1;        //������ֵ��ֵ����Ա����
        $this->username = $username1; 
        $this->password = $password1; 
        $this->dbname = $dbname1;
        $this->charset = $charset1; 
    }
    
    //��Ա������ʵ�����ݿ�����
    public function getConn () 
    {
        $conn = mysql_connect($this->host, $this->username, $this->password);  //����MySQL������
        mysql_select_db($this->dbname, $conn);  //ѡ�����ݿ�
        mysql_query('set names ' . $this->charset); //�������ݿ�����ʽ
        return $conn; //�������Ӿ��
    }
}

$conndb=new ConnDB("localhost","root","123","webshop_db", "gbk");//���ݿ�������ʵ����
$conn=$conndb->getConn();	//��ȡ���Ӿ��	
?>
