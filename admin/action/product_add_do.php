 <?php 
 /* ��Ʒ��Ϣ��Ӵ���ҳ */  
  require_once("../../conn/Conn_DB.php");   //�������ݿ������ļ�
 if($_POST["txt_name"]!="" && $_FILES["txt_image"]!="" && $_POST["txt_vprice"]!="" ) //�жϱ��� ��Ϣ
 {
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //��Ʒ����
   $image = $_FILES["txt_image"];     //ͼƬ
   $intro = $_POST["txt_intro"];      //����
   $mprice = $_POST["txt_mprice"];    //�г���
   $vprice = $_POST["txt_vprice"];    //�̳Ǽ�
   $model = $_POST["txt_model"];      //���
   $brand = $_POST["txt_brand"];      //Ʒ��
   $sellnum = $_POST["txt_sellnum"];  //������
   $storenum = $_POST["txt_storenum"];//�����
   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   //�ϴ�ͼƬ
  if($image['size'] > 0 && $image['size'] < 1024 * 8000)
  {
	$dir = '../../upload/';   //���ñ���Ŀ¼
	$name2 = $image['name'];  //��ȡ�ϴ��ļ����ļ���
	$rand = rand(0,8000000);  //����һ����0��8000000֮��������
	$name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	$path = $dir.$name2;      //��ϳ������ı���·����Ŀ¼+�ļ�����
	if(!is_dir($dir))         //���û�и�Ŀ¼
	{
		mkdir($dir);          //�򴴽���Ŀ¼
	}
	$i = move_uploaded_file($image['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
	if($i == true)   //����ϴ��ɹ�������ʾ
	{
	  $path = substr($path,6,strlen($path)-6);  //�޸�·��
	  $str = "insert into Product_Info (PT_ID,P_Name,P_Image,P_Model,P_Brand,P_Intro,P_MPrice,P_VPrice,P_SellNum,P_StoreNum,P_Hits,P_CreateTime,P_Status) values (
	          $ptid,'$name','$path','$model','$brand','$intro',$mprice,$vprice,$sellnum,$storenum,1,'$createtime',1)";
	  // echo $str; //��������ڵ��ԣ������ѯ���
	  $insert = mysql_query($str); //ִ��SQL���
	  echo mysql_error();          //��������ڵ��ԣ����������Ϣ
	  if($insert)                 //�ж�ִ�н��
	  {
	    echo "<script>alert('��Ʒ��Ϣ��ӳɹ���'); window.location='../product_add.php';</script>";
	  }
	  else
	  {
		echo "<script>alert('��Ʒ��Ϣ���ʧ�ܣ�'); window.location='../product_add.php';</script>";
	  }	
    }
	else
	{
	  echo "<script>alert('�ļ��ϴ�ʧ��');</script>";
	}
  }
  else 
  {
  	echo"<script>alert('�ļ���С��������վҪ��')</script>";  	
  }  
 }
 else
 {
   echo "<script>alert('����д��Ʒ���ơ�ͼƬ�ͼ۸�'); window.location='../product_add.php';</script>";
 }
 ?>
</body>
</html>