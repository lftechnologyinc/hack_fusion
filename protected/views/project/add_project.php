<script>
$(document).ready(function(){
	$("#add_project_form").validate({
								rules: {
									'Project[name]':{
									required:true,
									lettersonly:true
									}
								},
								messages: {
									'Project[name]':{
									required:'Required',
									lettersonly:'Text only'
									}
								}
							});
});
</script>
<h1>New Project</h1>
<div><?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];}?></div>
<?php
$form = $this -> beginWidget('CActiveForm', array('id' => 'add_project_form', 'htmlOptions' => array('class' => 'content p0 width-100', 'autocomplete' => 'off'), ));
?>

<p>
<?php
echo $form -> errorSummary($projectModel);
echo $form->label($projectModel,'name');
echo $form -> textField($projectModel, 'name', array('tabindex' => 1));

 echo CHtml::submitButton('Create Project', array('name' => 'create', 'id' => 'submit'));

 ?>
	</p>

<?php $this->endWidget(); ?>