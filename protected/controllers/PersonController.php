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

}