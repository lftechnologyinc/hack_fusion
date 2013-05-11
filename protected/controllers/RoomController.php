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

}