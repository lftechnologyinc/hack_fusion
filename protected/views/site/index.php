<script>
	$(document).ready(function(){
		$('#add_room').fancybox({
			'transitionIn'      : 'elastic',
			'transitionOut'     : 'elastic',
			'autoSize'         : false,
			'autoDimensions'    : false,
			'speedIn'           : 10,
			"height":300,
			'speedOut'          : 200,
			'overlayShow'       : false,
			'type'              : 'iframe',
			'live'              : true
		});

		$('#add_person').fancybox({
			'transitionIn'      : 'elastic',
			'transitionOut'     : 'elastic',
			'autoSize'         : false,
			'autoDimensions'    : false,
			'speedIn'           : 10,
			"height":300,
			'speedOut'          : 200,
			'overlayShow'       : false,
			'type'              : 'iframe',
			'live'              : true
		});

		$('#add_project').fancybox({
			'transitionIn'      : 'elastic',
			'transitionOut'     : 'elastic',
			'autoSize'         : false,
			'autoDimensions'    : false,
			'speedIn'           : 10,
			"height":300,
			'speedOut'          : 200,
			'overlayShow'       : false,
			'type'              : 'iframe',
			'live'              : true
		});
	})
</script>
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
<section class="slider" style="clear: both;height: 330px;margin-top: 70px;overflow-y: scroll; background:#FFF">
                                <div class="flexslider">
                                  <ul class="slides">
                                    <li>
                                                        <div style="clear: both; display: block; float: left; width: 100%;">
                                                                <div style="float:left; margin-top:10px">
                                                                        <i class="icon_edit"></i>
                                                                        <i class="icon_delete" style="margin-left:15px"></i>
                                                                </div>
                                                                <div style="float:right; margin:15px 2px">
                                                                        <a class="add_btn" href="#">Add Section</a>
                                                                </div>
                                                                <h1 align="center" style="line-height:12px">Developer's Room</h1>
                                                        </div>
                                                        <div style="margin-top:15px; float:left; width:100%">
                                                                <div style="float:left;">
                                                                        <h2>Section 1</h2>
                                                                </div>
                                                                <div style="float:right; margin-top:10px">
                                                                        <i class="icon_edit"></i>
                                                                        <i class="icon_delete" style="margin-left:15px"></i>
                                                                </div>
                                                        </div>
                                                        <hr class="divider">
                                                        <ul class="list_people">
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                        </ul>
                                        </li>
                                        <li>
                                                        
                                                        <div style="clear: both; display: block; float: left; width: 100%;">
                                                                <div style="float:left; margin-top:10px">
                                                                        <i class="icon_edit"></i>
                                                                        <i class="icon_delete" style="margin-left:15px"></i>
                                                                </div>
                                                                <div style="float:right; margin:15px 2px">
                                                                        <a class="add_btn" href="#">Add Section</a>
                                                                </div>
                                                                <h1 align="center" style="line-height:12px">Developer's Room</h1>
                                                        </div>
                                                        <div style="margin-top:15px; float:left; width:100%">
                                                                <div style="float:left;">
                                                                        <h2>Section 1</h2>
                                                                </div>
                                                                <div style="float:right; margin-top:10px">
                                                                        <i class="icon_edit"></i>
                                                                        <i class="icon_delete" style="margin-left:15px"></i>
                                                                </div>
                                                        </div>
                                                        <hr class="divider">
                                                        <ul class="list_people">
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                                <li>
                                                                        <img src="images/avtar.png">
                                                                        <h2>Bala Maharjan</h2>
                                                                </li>
                                                        </ul>
                                        </li>

                                        
                                  </ul>
                                </div>
                              </section>
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
							foreach ($projects as $key => $value) {
								echo"
        						<tr class='odd'>
        							<td class='item_one'>" . $value['name'] . "</td>
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