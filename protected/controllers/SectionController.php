<?php

class SectionController extends Controller
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
		$room_id = 1;
		$room = Room::model()->findByPk($room_id);
		$section = new Section();
		$data['section'] = $section;
		$data['room_name'] = $room->name;
		if (isset($_POST['Section'])) {
			$section->attributes = $_POST['Section'];
			$section->room_id = $room->id;
			if ($section->validate()) {
				if ($section->save()) {

				}
			}
		}
		$this->render('add', $data);
	}

	public function actionEdit()
	{
		$section_id = 1;
		$person = new Person();
		$section = Section::model()->findByPk($section_id);
		$room = Room::model()->findByPk($section->room_id);
		$data['section'] = $section;
		$data['person'] = $person;
		$data['room_name'] = $room->name;
		if (isset($_POST['Section'])) {
			$section->attributes = $_POST['Section'];
			if ($section->validate()) {
				if ($section->update()) {

				}
			}
		}
		$this->renderPartial('edit', $data,true);
	}

}