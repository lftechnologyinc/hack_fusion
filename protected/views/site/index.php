<div class="ten columns ">
          		<ul class="buttons">
          			<li>
          				<a class="add_btn" href="#">Add Room</a>
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
        	 </div> <!-- END List Wrap -->
         
         </div> <!-- END Organic Tabs (Example One) -->
         </div>
        </div>