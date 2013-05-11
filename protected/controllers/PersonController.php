<?php

class PersonController extends Controller
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

	public function actionAdd()
	{
		$person = new Person();
		$data['person'] = $person;
		if (isset($_POST['Person'])) {
			$person->attributes = $_POST['Person'];
			if ($person->validate()) {
				if ($person->save()) {

				}
			}
		}
		$this->render('add', $data);
	}

	public function actionEdit()
	{
		$person_id = 1;
		$person = Person::model()->findByPk($person_id);
		$data['person'] = $person;
		if (isset($_POST['Person'])) {
			$person->attributes = $_POST['Person'];
			if ($person->validate()) {
				if ($person->update()) {

				}
			}
		}
		$this->render('edit', $data);
	}

	public function actionAjaxAdd()
	{
		$person_id = $_POST['person_id'];
		$data = Person::model()->findByPk($person_id);
		$data['section_id'] = $_POST['section_id'];
		$array = array();
		if ($data->update()) {
			$array = array('status' => 'success', 'message' => 'Person added successfully');
		} else {
			$array = array('status' => 'success', 'message' => 'Person added successfully');
		}

		echo json_encode($array);
	}

	public function actionPersonBySectioon()
	{
		$section_id = $_POST['section_id'];
		$persons = Person::model()->findAll(array(
			'condition' => 'section_id = "'.$section_id.'"',
				));
		foreach($persons as $person):
			echo "<p>".$person->name."<a href='javascript:void(0);' id='".$person->id."' class='delete_person' data-name='".$person->name."'>Delete</a></p>";
		endforeach;
	}

	public function actionDeletePerson()
	{
		$person_id = $_POST['person_id'];
		$person = Person::model()->findByPk($person_id);
		$person->section_id = 0;
		if($person->update())
		{
			$array = array('status'=>'success','message'=>'Deleted successfully');
		}
		else
		{
			$array = array('status'=>'fail','message'=>'Does not deleted successfully');
		}
		echo json_encode($array);
	}
}