<?php

class ProjectController extends Controller
{
	public $layout = "//layouts/main";


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
	
	public function actionAddProject(){
		$projectModel = new Project();
		
		if (isset($_POST['Project'])) {
			$projectModel->name = $_POST['Project']['name'];
			$projectModel->save();
		}
		$this->render('add_project',array('projectModel' => $projectModel));
	}
	
	public function actionEditProject(){
		$personId = $projectId = '';
		$personModel = Person::model()->findByPk($personId);
		$projectModel = Project::model()->findByPk($projectId);
		$data['projectModel'] = $projectModel;
		$data['personModel'] = $personModel;
		$this->render('edit_project',$data);
	}

}