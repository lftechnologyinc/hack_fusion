<script>
	$(document).ready(function(){
		$("#add_room_form").validate({
			rules: {
				'Section[size]':{
					required:true
				}
			},
			messages: {
				'Section[size]':{
					required:'Required'
				}
			}
		});
	});
</script>
<h1>New Section:<?php echo $room_name;?></h1>
<?php
$form = $this->beginWidget('CActiveForm', array(
	'id' => 'add_room_form',
	'htmlOptions' => array(
		'class' => 'content p0 width-100',
		'autocomplete' => 'off'
	),
		));
?>
<P><div><?php echo $form->errorSummary($section); ?></div></p>
<p>
	<?php echo $form->labelEx($section, 'Section Size'); ?>
	<?php echo $form->textField($section, 'size',array('PlaceHolder'=>'Enter Section Size')); ?>
	<?php echo CHtml::submitButton('create section', array('class' => '')); ?>
</p>
<?php $this->endWidget(); ?>