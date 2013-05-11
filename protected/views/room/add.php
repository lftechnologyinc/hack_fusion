<script>
$(document).ready(function(){
	$("#add_instructor_form").validate({
								rules: {
									'Instructor[first_name]':{
									required:true,
									lettersonly:true
									}
								},
								messages: {
									'Instructor[first_name]':{
									required:'Required',
									lettersonly:'Text only'
									}
								}
							});
});
</script>
<?php
			$form = $this->beginWidget('CActiveForm', array(
				'id' => 'add_instructor_form',
				'htmlOptions' => array(
					'class' => 'content p0 width-100',
					'autocomplete' => 'off'
				),
					));
			?>

<?php $this->endWidget(); ?>