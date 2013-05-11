<script>
	$(document).ready(function(){
		$("#add_room_form").validate({
			rules: {
				'Room[name]':{
					required:true
				}
			},
			messages: {
				'Room[name]':{
					required:'Required'
				}
			}
		});
	});
</script>
<?php
$form = $this->beginWidget('CActiveForm', array(
	'id' => 'add_room_form',
	'htmlOptions' => array(
		'class' => 'content p0 width-100',
		'autocomplete' => 'off'
	),
		));
?>
<p>
	<?php echo $form->labelEx($room, 'Room Name'); ?>
	<?php echo $form->textField($room, 'name'); ?>
	<?php echo CHtml::submitButton('create room', array('class' => '')); ?>
</p>
<?php $this->endWidget(); ?>