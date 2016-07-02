 <?php 
 /* 商品信息添加处理页 */  
  require_once("../../conn/Conn_DB.php");   //包含数据库链接文件
 if($_POST["txt_name"]!="" && $_FILES["txt_image"]!="" && $_POST["txt_vprice"]!="" ) //判断必填 信息
 {
   $ptid = $_POST["txt_parentid"];    //类别编号
   $name  = $_POST["txt_name"];       //商品名称
   $image = $_FILES["txt_image"];     //图片
   $intro = $_POST["txt_intro"];      //介绍
   $mprice = $_POST["txt_mprice"];    //市场价
   $vprice = $_POST["txt_vprice"];    //商城价
   $model = $_POST["txt_model"];      //规格
   $brand = $_POST["txt_brand"];      //品牌
   $sellnum = $_POST["txt_sellnum"];  //销售量
   $storenum = $_POST["txt_storenum"];//库存量
   $createtime = date('Y-m-d H:i:s'); //发布时间

   //上传图片
  if($image['size'] > 0 && $image['size'] < 1024 * 8000)
  {
	$dir = '../../upload/';   //设置保存目录
	$name2 = $image['name'];  //获取上传文件的文件名
	$rand = rand(0,8000000);  //生成一个从0到8000000之间的随机数
	$name2 = $rand.date('YmdHis').$name2;  //重新组合文件名
	$path = $dir.$name2;      //组合成完整的保存路径（目录+文件名）
	if(!is_dir($dir))         //如果没有该目录
	{
		mkdir($dir);          //则创建该目录
	}
	$i = move_uploaded_file($image['tmp_name'],$path);  //复制文件，实现上传功能
	if($i == true)   //如果上传成功给出提示
	{
	  $path = substr($path,6,strlen($path)-6);  //修改路径
	  $str = "insert into Product_Info (PT_ID,P_Name,P_Image,P_Model,P_Brand,P_Intro,P_MPrice,P_VPrice,P_SellNum,P_StoreNum,P_Hits,P_CreateTime,P_Status) values (
	          $ptid,'$name','$path','$model','$brand','$intro',$mprice,$vprice,$sellnum,$storenum,1,'$createtime',1)";
	  // echo $str; //本语句用于调试，输出查询语句
	  $insert = mysql_query($str); //执行SQL语句
	  echo mysql_error();          //本语句用于调试，输出错误信息
	  if($insert)                 //判断执行结果
	  {
	    echo "<script>alert('商品信息添加成功！'); window.location='../product_add.php';</script>";
	  }
	  else
	  {
		echo "<script>alert('商品信息添加失败！'); window.location='../product_add.php';</script>";
	  }	
    }
	else
	{
	  echo "<script>alert('文件上传失败');</script>";
	}
  }
  else 
  {
  	echo"<script>alert('文件大小不符合网站要求')</script>";  	
  }  
 }
 else
 {
   echo "<script>alert('请填写商品名称、图片和价格！'); window.location='../product_add.php';</script>";
 }
 ?>
</body>
</html>