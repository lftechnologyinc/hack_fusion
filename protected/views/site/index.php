<script>
$(document).ready(function(){
		$('#add_room').fancybox({
			'transitionIn'	:	'elastic',
			'transitionOut'	:	'elastic',
			'autoScale'         : true,
			'autoDimensions'    : false,
			'type'              : 'iframe',
			'speedIn'		:	600,
			'speedOut'       :	200,
			'overlayShow'	:	false
		});
})
</script>
<div class="ten columns ">
          		<ul class="buttons">
          			<li>
						<a id="add_room" class="add_btn" href="<?php echo Yii::app()->request->baseUrl;?>/room/add">Add Room</a>
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
        						<?php
        						foreach($projects as $key =>$value){
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