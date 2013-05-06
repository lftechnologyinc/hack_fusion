<?php

class RoomController extends Controller
{

	public $layout = "//layouts/popup";

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	public function actionAdd()
	{
		$room = new Room();
		$data['room'] = $room;
		if (isset($_POST['Room'])) {
			$room->attributes = $_POST['Room'];
			if ($room->validate()) {
				if ($room->save()) {

				}
			}
		}
		$this->render('add', $data);
	}

	public function actionEdit()
	{
		$room_id = 1;
		$room = Room::model()->findByPk($room_id);
		$data['room'] = $room;
		if (isset($_POST['Room'])) {
			$room->attributes = $_POST['Room'];
			if ($room->validate()) {
				if ($room->update()) {

				}
			}
		}
		$this->render('edit', $data);
	}
	
	public function actionListData(){
		$sql = 'SELECT name FROM project';
		$tableName = 'project';
		$sqlprovider = new CSqlDataProvider($sql);
		$projectLists = $sqlprovider-> getData();
		
		$data['projects'] = $projectLists;
		if(isset($_POST['search'])){
			$searchCriteria = $_POST['search'];
			$search = new SearchClass;
			$result = $search::search($searchCriteria,$tableName);
			$data['projects'] = $result;
		}
		$this->render('index',$data);
	}

}