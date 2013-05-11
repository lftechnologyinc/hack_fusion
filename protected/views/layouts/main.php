<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-US" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-US" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-US"> <!--<![endif]-->

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php
			/**
			 * register css and js
			 */
			$script = Yii::app()->clientScript;
			$script->registerCssFile(Yii::app()->request->baseUrl . '/css/skeleton.css');
			$script->registerCssFile(Yii::app()->request->baseUrl . '/css/reset.css');
			$script->registerCssFile(Yii::app()->request->baseUrl . '/css/default.css');
			$script->registerCssFile(Yii::app()->request->baseUrl . '/css/superfish.css');

			$script->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.js');
			$script->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.validate.js');
			$script->registerScriptFile(Yii::app()->request->baseUrl . '/source/jquery.fancybox.js?v=2.1.4');
			$script->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery.validate.js');
			$script->registerScriptFile(Yii::app()->request->baseUrl . '/js/organictabs.jquery.js');
			$script->registerScriptFile(Yii::app()->request->baseUrl . '/js/home.js');
			?>
	<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
	<body class="home page page-template page-template-template-home-php">
	<div class="everything">
		<!-- START: HEADER -->
		<div class="header_container">
			<header id="header" class="container">
				<div class="logo_and_menu">
					<!-- START: LOGO & SLOGAN -->
					<div class="logo five columns">
						<a href="index.html" tabindex="-1" style="text-indent: 0px;">
							<h1 class="logo" style="top: 24px; left: 0px; background: none; font-size: 12px;">Shuffle</h1>
						</a>
						<div class="slogan" style="background: none; font-family: 'Georgia'; font-style: italic; font-size: 12px; color: #cccccc;">Project on Room Management</div>
					</div>
					<nav id="menu" class="eleven columns">
						<!-- PRIMARY MENU (NORMAL BROWSERS) [ add class="selected" on the current <a> ]-->
					    <ul id="menulava" class="sf-menu">
					        <li class="menu-item">
					            <a href="index.html" class="selected">Home</a>
					        </li>
					        <li class="menu-item">
					            <a href="#">Menu Two</a>
					        </li>
					    </ul>
					</nav>
				</div>
			</header>
			<div class="header-shadow"></div>
		</div>
		<div id="wrapper" class="container">
		  <div class="ten columns ">
          		<ul class="buttons">
          			<li>
          				<a class="add_btn" href="#">Add Room</a>
          			</li>
          			<li>
          				<a href="#" class="add_btn">Add Person</a>
          			</li>
          			<li>
          				<a href="#" class="add_btn">Add Project</a>
          			</li>
          			<li>
          				<a href="#" class="add_btn">Go</a>
          			</li>
          		</ul>
         </div>
         <div class="six columns ">
          <div id="example-one">
        			
        	<ul class="nav">
                <li><a href="#people" class="current">People</a></li>
                <li><a href="#room">Room</a></li>
                <li class="last"><a href="#project">Projects</a></li>
            </ul>
        	
        	<div class="list-wrap">
        	
        		<ul id="people">
        			<li><input type="text" class="search" placeholder="Search"></li>
        			<li>
        				<table>
        					<tbody>
        						<tr class="table_head">
        							<th class="item_one">Name</th>
        							<th class="item_two">Edit</th>
        							<th class="item_two">Delete</th>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        					</tbody>
        				</table>
        			</li>
        		 </ul>
        		 
        		 <ul id="room" class="hide">
        		 	<li><input type="text" class="search" placeholder="Search"></li>
        		    <li>
        				<table>
        					<tbody>
        						<tr class="table_head">
        							<th class="item_one">Name</th>
        							<th class="item_two">Edit</th>
        							<th class="item_two">Delete</th>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        					</tbody>
        				</table>
        			</li>
        		</ul>
                 <ul id="project" class="hide">
                 	<li><input type="text" class="search" placeholder="Search"></li>
                	<li>
        				<table>
        					<tbody>
        						<tr class="table_head">
        							<th class="item_one">Name</th>
        							<th class="item_two">Edit</th>
        							<th class="item_two">Delete</th>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="odd">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        						<tr class="even">
        							<td class="item_one">Shyam Sundar Awal</td>
        							<td class="item_two"><i class="icon_edit"></i></td>
        							<td class="item_two"><i class="icon_delete"></i></td>
        						</tr>
        					</tbody>
        				</table>
        			</li>
                 </ul>
        	 </div> <!-- END List Wrap -->
         
         </div> <!-- END Organic Tabs (Example One) -->
         </div>
        </div>
        </div>

        <div class="copys">
            <div class="container">
                <div class="copys_left eight columns">
                    © Copyrights 2013
                </div>

                <div class="copys_right eight columns">
                    <ul id="footer_menu" class="footer_menu">
                        <li class="menu-item">
                            <a href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end of everything -->
</body>
</html>