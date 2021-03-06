<div class="ten columns ">

	<ul class="buttons">
		<li>
			<a id="add_room" class="add_btn" href="<?php echo Yii::app()->request->baseUrl; ?>/room/add">Add Room</a>
		</li>
		<li>
			<a id="add_person" href="<?php echo Yii::app()->request->baseUrl;?>/person/add" class="add_btn">Add Person</a>
		</li>
		<li>
			<a id="add_project" href="<?php echo Yii::app()->request->baseUrl;?>/project/addProject" class="add_btn">Add Project</a>
		</li>
		<li>
			<a href="#" class="add_btn go">Go</a>
		</li>
	</ul>
<?php $this->renderPartial('slider',array('room_list'=>$room_list)); ?>
</div>
<div class="six columns ">
	<div id="example-one">

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
        			<!-- <li><input type="text" class="search" placeholder="Search"></li> -->
        			<li>
        				<table>
        					<tbody>
        						<tr class="table_head">
        							<th class="item_one">Name</th>
        							<th class="item_two">Edit</th>
        							<th class="item_two">Delete</th>
        						</tr>
        						<?php 
        						foreach($persons as $key =>$value){
        						echo"
        						<tr class='odd'>
        							<td class='item_one'>".$value['name']."</td>
        							<td class='item_two'><i class='icon_edit'></i></td>
        							<td class='item_two'><i class='icon_delete'></i></td>
        						</tr>";
								}
        						?>
        					</tbody>
        				</table>
        			</li>
        		 </ul>
        		 
        		 <ul id="room" class="hide">
        		 	<!-- <li><input type="text" class="search" placeholder="Search"></li> -->
        		    <li>
        				<table>
        					<tbody>
        						<tr class="table_head">
        							<th class="item_one">Name</th>
        							<th class="item_two">Edit</th>
        							<th class="item_two">Delete</th>
        						</tr>
        						<?php 
        						foreach($rooms as $key =>$value){
        						echo"
        						<tr class='odd'>
        							<td class='item_one'>".$value['name']."</td>
        							<td class='item_two'><i class='icon_edit'></i></td>
        							<td class='item_two'><i class='icon_delete'></i></td>
        						</tr>";
								}
        						?>
        					</tbody>
        				</table>
        			</li>
        		</ul>
                 <ul id="project" class="hide">
                 	<!-- <li><input type="text" class="search" placeholder="Search"></li> -->
                	<li>
        				<table>
        					<tbody>
        						<tr class="table_head">
        							<th class="item_one">Name</th>
        							<th class="item_two">Edit</th>
        							<th class="item_two">Delete</th>
        						</tr>
        						<?php 
        						foreach($projects as $key =>$value){
        						echo"
        						<tr class='odd'>
        							<td class='item_one'>".$value['name']."</td>
        							<td class='item_two'><a href = 'javascript:void(0)' value ='".$value['id']."' id = 'project_edit_".$value['id']."' class = 'project_edit'><i  class='icon_edit' value ='".$value['id']."'></i></a></td>
        							<td class='item_two'><a href = 'javascript:void(0)' value ='".$value['id']."' id = 'project_delete_".$value['id']."' class = 'project_delete'><i class='icon_delete' value ='".$value['id']."'></i></a></td>
        						</tr>";
								}
        						?>
        					</tbody>
        				</table>
        			</li>
                 </ul>
        	 </div> <!-- END List Wrap -->
         
         </div> <!-- END Organic Tabs (Example One) -->
         </div>
        </div>
        
<script type = 'text/javascript'>
$('.project_edit').click(function(e){
	var project_id = $(this).attr('value');
	alert(project_id);
});

$('.project_delete').click(function(e){
	var project_id = $(this).attr('value');
	if(confirm('Are you sure want to delete this project ?')){
		  $.ajax({
        	type:"POST",
        	cache:false,
        	url:"project/deleteproject",
        	 data : { 'id' : project_id},
        	success: function (data) {
        		alert(data.success);
        	}
      	});
	}
});
</script>
