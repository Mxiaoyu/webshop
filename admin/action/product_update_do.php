 <?php   
  /* ��Ʒ��Ϣ�޸Ĵ���ҳ */  
  require_once("../../conn/Conn_DB.php");  
  if($_POST["txt_name"]!= "" && $_POST["txt_vprice"]!= "" && ($_FILES["txt_image"]!= "" || $_POST["txt_image2"]!= ""))
  {
   $pid = $_POST["txt_id"];           //��Ʒ���
   $ptid = $_POST["txt_parentid"];    //�����
   $name  = $_POST["txt_name"];       //��Ʒ����
   $image = $_FILES["txt_image"];     //ͼƬ
   $image2 = $_FILES["txt_image2"];     //ͼƬ2
   $intro = $_POST["txt_intro"];      //����
   $mprice = $_POST["txt_mprice"];    //�г���
   $vprice = $_POST["txt_vprice"];    //�̳Ǽ�
   $model = $_POST["txt_model"];      //���
   $brand = $_POST["txt_brand"];      //Ʒ��
   $sellnum = $_POST["txt_sellnum"];  //������
   $storenum = $_POST["txt_storenum"];//�����
   $createtime = date('Y-m-d H:i:s'); //����ʱ��

   if($image['name']!= "")  //�����ѡ��ͼƬ����ʹ����ͼƬ
   { 
     //�ϴ�ͼƬ
     if($image['size'] > 0 && $image['size'] < 1024 * 8000)
     {
	   $dir = '../../upload/';           //���ñ���Ŀ¼
	   $name2 = $image['name'];     //��ȡ�ϴ��ļ����ļ���
	   $rand = rand(0,8000000);  //����һ����0��8000000֮��������
	   $name2 = $rand.date('YmdHis').$name2;  //��������ļ���
	   $path = $dir.$name2;   //��ϳ������ı���·����Ŀ¼+�ļ�����
	   if(!is_dir($dir))    //���û�и�Ŀ¼
	   {
		 mkdir($dir);    //�򴴽���Ŀ¼
	   }
	   $i= move_uploaded_file($image['tmp_name'],$path);  //�����ļ���ʵ���ϴ�����
	   if($i == true)  //����ϴ��ɹ�������ʾ
	   {
		 $path = substr($path,6,strlen($path)-6);
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
   else //���û��ѡ��ͼƬ����ʹ��ԭͼƬ
   {
  	 $path = $image2;
   }
   $str = "update Product_Info set PT_ID=$ptid,P_Name='$name',P_Image='$path',P_Model='$model',P_Brand='$brand',P_Intro='$intro',P_MPrice=$mprice,P_VPrice=$vprice,P_SellNum=$sellnum,P_StoreNum=$storenum,P_CreateTime='$createtime' where P_ID=".$pid;
   // echo $str; //��������ڵ��ԣ������ѯ���
   $update = mysql_query($str);  //ִ��SQL���
   echo mysql_error();           //��������ڵ��ԣ����������Ϣ
   if( $update )                 //�ж�ִ�н��
   {
	 echo "<script>alert('��Ʒ��Ϣ�޸ĳɹ���'); window.location='../product_manager.php';</script>";
   }
   else
   {
	 echo "<script>alert('��Ʒ��Ϣ�޸�ʧ�ܣ�'); window.location='../product_update.php?P_ID=".$pid."';</script>";
   }	
 }
 else
 {
   echo "<script>alert('����д��Ʒ���ơ�ͼƬ�ͼ۸�'); window.location='../product_update.php?P_ID=".$pid."';</script>";
 }
 ?>