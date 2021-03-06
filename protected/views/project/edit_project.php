<script>
$(document).ready(function(){
	$("#edit_project_form").validate({
								rules: {
									'Project[name]':{
									required:true,
									lettersonly:true
									},
									'Person[name]':{
									required:true,
									lettersonly:true
									}
								},
								messages: {
									'Project[name]':{
									required:'Required',
									lettersonly:'Text only'
									},
									'Person[name]':{
									required:'Required',
									lettersonly:'Text only'
									}
								}
							});
});
</script>
<?php
$form = $this -> beginWidget('CActiveForm', array('id' => 'edit_project_form', 'htmlOptions' => array('class' => 'content p0 width-100', 'autocomplete' => 'off'), ));
?>

<P><div><?php echo $form->errorSummary($projectModel);?></div></p>
<p>
	<?php echo $form->labelEx($projectModel,'Project Name');?>
	<?php echo $form->textField($projectModel,'name'); ?>
	<?php echo CHtml::submitButton('Update', array('class' => '')); ?>
</p>


<P><div><?php echo $form->errorSummary($personModel);?></div></p>
<p>
	<?php echo $form->labelEx($personModel,'Members Name');?>
	<?php echo $form->textField($personModel,'name'); ?>
	<?php echo CHtml::submitButton('Add', array('class' => '')); ?>
</p>


<?php $this->endWidget(); ?>