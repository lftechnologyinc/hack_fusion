<?php

class ProjectController extends Controller
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
	
	public function actionAddProject(){
		$projectModel = new Project();
		
		if (isset($_POST['Project'])) {
			$projectModel->name = $_POST['Project']['name'];
			$projectModel->save();
		}
		$this->render('add_project',array('projectModel' => $projectModel));
	}
	
	public function actionEditProject(){
		$project_id = $person_id = 1;
		$projectModel = Project::model()->findByPk($project_id);
		$personModel = Person::model()->findByPk($person_id);
		$data['projectModel'] = $projectModel;
		$data['personModel'] = $personModel;
		if (isset($_POST['Project']) && isset($_POST['Person'])) {
			$projectModel->attributes = $_POST['Project'];
			if ($projectModel->validate()) {
				if (!$projectModel->update()) {
					$projectModel->addError('Falied to Update');
				}
			}
			$personModel->attributes = $_POST['Person'];
			if ($personModel->validate()) {
				if (!$personModel->update()) {
					$personModel->addError('Falied to Update');
				}
			}
		
		}
		$this->render('edit_project', $data);
		}
}