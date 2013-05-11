<script>
	$(document).ready(function(){
		var base_url = $('#base_url').val();
		var section_id = $('#section_id').val();
		load_person_list_belong_to_section(section_id);

		function load_person_list_belong_to_section(section_id)
		{
			$.ajax({
				data:{section_id:section_id},
				url:base_url+'/person/personBySectioon',
				method:'POST',
				success:function(response){
					$('#person_list').html(response);
				}
			});
		}

		$(document).on('click','.delete_person',function(){
			var person_id = $(this).attr('id');
			var person_name = $(this).attr('data-name');
			$.ajax({
				data:{person_id:person_id},
				url:base_url+'/person/deletePerson',
				method:'POST',
				dataType:'json',
				success:function(response){
					$('#Person_name').append('<option value="'+person_id+'">'+person_name+'</option>')
					load_person_list_belong_to_section(section_id);
				}
			});
		})

		$("#add_person_link").on("click", function(event){
			var person_id = $('#Person_name').val();

			$.ajax({
				data:{person_id:person_id,section_id:section_id},
				url:base_url+'/person/ajaxAdd',
				method:'POST',
				dataType:'json',
				success:function(response){
					$("#Person_name option[value='"+person_id+"']").remove();
					load_person_list_belong_to_section(section_id);
				}
			});
		});

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
<h1>New Section:<?php echo $room_name; ?></h1>
<input type="hidden" name="base_url" id="base_url" value="<?php echo Yii::app()->request->baseUrl; ?>"/>
<input type="hidden" name="section_id" id="section_id" value="<?php echo $section->id ?>"/>
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
	<?php echo $form->textField($section, 'size', array('PlaceHolder' => 'Enter Section Size')); ?>
	<?php echo CHtml::submitButton('create section', array('class' => '')); ?>
</p>
<p>
	<?php echo $form->labelEx($person, 'Add Member'); ?>
	<?php echo CHtml::activeDropDownList($person, 'name', Common::person(), $htmlOptions = array('class' => 'required width-100')); ?>
	<a href="javascript:void(0);" id="add_person_link">Add Person</a>
</p>
<div id="person_list">

</div>
<?php $this->endWidget(); ?>