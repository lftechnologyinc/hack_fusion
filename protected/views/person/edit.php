<script>
	$(document).ready(function(){
		$("#add_room_form").validate({
			rules: {
				'Person[name]':{
					required:true
				}
			},
			messages: {
				'Person[name]':{
					required:'Required'
				}
			}
		});
	});
</script>
<h1>Edit Person</h1>
<?php
$form = $this->beginWidget('CActiveForm', array(
	'id' => 'add_room_form',
	'htmlOptions' => array(
		'class' => 'content p0 width-100',
		'autocomplete' => 'off'
	),
		));
?>
<P><div><?php echo $form->errorSummary($person); ?></div></p>
<p>
	<?php echo $form->labelEx($person, 'Room Name'); ?>
	<?php echo $form->textField($person, 'name'); ?>
	<?php echo CHtml::submitButton('create room', array('class' => '')); ?>
</p>
<?php $this->endWidget(); ?>