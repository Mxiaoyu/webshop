<?php 
  /* �����ύ����ҳ */
session_start();
 require_once("../conn/Conn_DB.php");   //�������ݿ������ļ� 
 if( $_POST["txt_taker"]!="" && $_POST["txt_address"]!="" && $_POST["txt_tel"]!="" && $_POST["txt_paymethod"]!="" )
 {
  $taker = $_POST["txt_taker"];        //�ջ���
  $address = $_POST["txt_address"];    //�ջ���ַ
  $tel = $_POST["txt_tel"];            //��ϵ�绰
  $paymethod = $_POST["txt_paymethod"];//���ʽ
  $username = $_POST["txt_username"];  //��Ա��
  $pnums = $_POST["txt_pnums"];        //��Ʒ����
  $omoney = $_POST["txt_omoney"];      //�������
  $remark = $_POST["txt_remark"];      //��ע
  $onum = date('YmdHis').$username;    //���ɶ�����
  $createtime = date('Y-m-d H:i:s');;  //�����ύ����
  //��ӵ�������Ϣ��
  $str = "insert into Order_Info (M_Name,O_Num,P_Nums,O_Money,O_Taker,O_Address,O_Tel,O_Paymethod,O_CreateTime,O_Status,O_Remark) 
          values('$username','$onum',$pnums,$omoney,'$taker','$address','$tel','$paymethod','$createtime',0,'$remark')";
  $insert = mysql_query($str);  //ִ��SQL���
    
  //��ӵ�������Ʒ��ϸ��
  if($_SESSION['car']!="")
  {
    $arr2 = (array)$_SESSION['car'];
    foreach ($arr2 as $key1=> $value1 )
    { 
  	  $pid = $value1[0];        //��Ʒ���
  	  $p_unitprice = $value1[4];//����
  	  $p_nums = $value1[3];     //����
  	  $p_price = $value1[4];    //С�Ƽ۸�
      $str2 = "insert into Order_Product (O_Num,P_ID,P_UnitPrice,P_Nums,P_Flod,P_Price) 
                values('$onum',$pid,$p_unitprice,$p_nums,1,$p_price)";    
      $insert2 = mysql_query($str2);   //ִ��SQL���
    }
  }
  if($insert  && $insert2)  //������ű�����ݶ�����ɹ�         
  {
     $_SESSION['car'] = "";  //��չ��ﳵ
     echo "<script>alert('��ϲ���������ύ�ɹ���');window.location.href='../index_content.php'</script>";
  }
  else
  {
     echo "<script>alert('�Բ��𣬶����ύʧ�ܣ�');window.location.href='../member_order_add.php'</script>";
  } 
 }
 else 
 {
   echo "<script>alert('�������*�ŵı�����Ϣ��');window.location.href='../member_order_add.php'</script>";     
 }
 ?>
