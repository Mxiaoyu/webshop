<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <title>小淘宝主页</title>
  <link href="images/style.css" rel="Stylesheet" type="text/css" />
  <script type="text/javascript">
	function ShowMenu(divID, menuItem)
	{
	//	if (document.all)
	//	{
			switch (menuItem)
			{
				case '酒业':
				{		
					SubMenu.innerHTML = "<a href = 'product_list.php?PT_ID=3', target='mainframe'> 台湾名酒 </a> <br/> <a href = 'product_list.php?PT_ID=4', target='mainframe'> 大陆名酒 </a> <br/> <a href = 'product_list.php?PT_ID=6', target='mainframe'> 五梁液  </a> <br/>";
					break;	
				}
				case '家居':
				{
					SubMenu.innerHTML = "<a href = 'product_list.php?PT_ID=5', target='mainframe'> 沙发商场 </a> <br/> <a href = 'product_list.php?PT_ID=7', target='mainframe'> 桌子 </a> <br/> <a href = 'product_list.php?PT_ID=9', target='mainframe'> 床柜  </a> <br/>";
					break;
				}
			}
			//设置菜单显示位置
		SubMenu.style.left = document.body.scrollLeft + event.clientX - event.offsetX;
		SubMenu.style.top = document.body.scrollTop + event.clientY - event.offsetY + 16 ;
		SubMenu.style.display = "block";	
	   }
//	}
	function HideMenu()
	{
		//if (document.all)
	//	{
			//设置菜单显示位置
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
  <!-- 第一行 LOGO -->
  <tr><td><img src="images/logo.png" /></td></tr>
  <!-- 第二行 菜单 -->
  <tr>
   <td class="td_menu">
    <table border="0" cellpadding="0" cellspacing="0" class="table_menu">
      <tr>
         <td><a href="index_content.php" target="mainframe">首页</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '酒业');  event.cancelBubble = true; return true;">酒业商场</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '家居');  event.cancelBubble = true; return true;">家居展厅</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '鞋业');  event.cancelBubble = true; return true;">皮鞋专柜</a></td>
         <td><a href="#" onmousemove="ShowMenu('SubMenu', '儿童');  event.cancelBubble = true; return true;">儿童乐购</a></td>
         <td>生活用品</td><td>户外运动</td><td>爱车族</td>
         <td>鲜花坊</td><td><a href = 'member_info.php' target='mainframe'>会员中心</a></td>
         <td><a href = 'news_list.php?NT_ID=1' target='mainframe'>商场公告</a></td>
         <td>客服中心</td>
        </tr>
     </table>
   </td>
 </tr>
<tr><td>
  <iframe name="mainframe" frameborder="0" src="index_content.php" style="width:100%; height:730px;"></iframe>
</td></tr>
<tr><td align="center">版权所有 Copyright ? 2016-2018 电子商务课设</td></tr>
</table>
<div id="SubMenu" class="submenucss" onmousemove="event.cancelBubble = true; return true;" style="position: absolute; display: none;  width: 80px; height: 70px;"></div>
</div>
</body>
</html>
