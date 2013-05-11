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
			?>
	<!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>
	<body class="home page page-template page-template-template-home-php">
	<div class="everything">
		<!-- START: HEADER -->
      <div id="wrapper">
        		<?php echo $content; ?>
        </div>
    </div>
    <!-- end of everything -->
</body>
</html>