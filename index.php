<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>С�Ա���ҳ</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
  <script type="text/javascript">
	function ShowMenu(divID, menuItem)
	{
	//	if (document.all)
	//	{
			switch (menuItem)
			{
				case '��ҵ':
				{		
					SubMenu.innerHTML = "<a href = 'product_list.php?PT_ID=3', target='mainframe'> ̨������ </a> <br/> <a href = 'product_list.php?PT_ID=4', target='mainframe'> ��½���� </a> <br/> <a href = 'product_list.php?PT_ID=6', target='mainframe'> ����Һ  </a> <br/>";
					break;	
				}
				case '�Ҿ�':
				{
					SubMenu.innerHTML = "<a href = 'product_list.php?PT_ID=5', target='mainframe'> ɳ���̳� </a> <br/> <a href = 'product_list.php?PT_ID=7', target='mainframe'> ���� </a> <br/> <a href = 'product_list.php?PT_ID=9', target='mainframe'> ����  </a> <br/>";
					break;
				}
			}
			//���ò˵���ʾλ��
		SubMenu.style.left = document.body.scrollLeft + event.clientX - event.offsetX;
		SubMenu.style.top = document.body.scrollTop + event.clientY - event.offsetY + 16 ;
		SubMenu.style.display = "block";	
	   }
//	}
	function HideMenu()
	{
		//if (document.all)
	//	{
			//���ò˵���ʾλ��
			SubMenu.style.display = "none";	
	//	}			
	}
	
//	if (document.all)
//	{
		document.onmousemove = HideMenu;
//	}	
    </script>
</head>
<body>
<div id="content">
 <table border="0" cellpadding="0" cellspacing="0" width="960px">
  <!-- ��һ�� LOGO -->
  <tr><td><img src="images/logo.png" /></td></tr>
  <!-- �ڶ��� �˵� -->
  <tr>
   <td class="td_menu">
    <table border="0" cellpadding="0" cellspacing="0" class="table_menu">
      <tr>
         <td><a href="index_content.php" target="mainframe">��ҳ</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '��ҵ');  event.cancelBubble = true; return true;">��ҵ�̳�</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '�Ҿ�');  event.cancelBubble = true; return true;">�Ҿ�չ��</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', 'Ьҵ');  event.cancelBubble = true; return true;">ƤЬר��</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '��ͯ');  event.cancelBubble = true; return true;">��ͯ�ֹ�</a></td>
         <td>������Ʒ</td><td>�����˶�</td><td>������</td>
         <td>�ʻ���</td><td><a href = 'member_info.php' target='mainframe'>��Ա����</a></td>
         <td><a href = 'news_list.php?NT_ID=1' target='mainframe'>�̳�����</a></td>
         <td>�ͷ�����</td>
        </tr>
     </table>
   </td>
 </tr>
<tr><td>
  <iframe name="mainframe" frameborder="0" src="index_content.php" style="width:100%; height:730px;"></iframe>
</td></tr>
<tr><td align="center">��Ȩ���� Copyright ? 2016-2018 �����������</td></tr>
</table>
<div id="SubMenu" class="submenucss" onmousemove="event.cancelBubble = true; return true;" style="position: absolute; display: none;  width: 80px; height: 70px;"></div>
</div>
</body>
</html>
