<?php

class SiteController extends Controller
{
	public $layout = "//layouts/main";
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$sql_project = 'SELECT name FROM project';
		$sqlprovider = new CSqlDataProvider($sql_project);
		$projectLists = $sqlprovider-> getData();
		$data['projects'] = $projectLists;


		$sql_persons = 'SELECT name FROM person';
		$sqlprovider_person = new CSqlDataProvider($sql_persons);
		$personLists = $sqlprovider_person-> getData();
		$data['persons'] = $personLists;

		$sql_rooms = 'SELECT name FROM room';;
		$sqlprovider_rooms = new CSqlDataProvider($sql_rooms);
		$roomLists = $sqlprovider_rooms-> getData();
		$data['rooms'] = $roomLists;

		$data['room_list'] = Room::model()->findAll();

		$this->render('index',$data);
		//$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	public function actionAssign()
     {
        $site_model = new SiteModel();

        $room_info = $site_model->get_room_data();
        $project_info =  $site_model->get_project_data();

        $assign_room = array();
        for($rm = 0; $rm < count($project_info); $rm++)
        {
            $project_id = $project_info[$rm]['id'];
            $people_num = $site_model->get_project_people_num($project_id);

            for($i=0; $i< count($room_info); $i++)
            {
               $section_num = 1;
               foreach($room_info[$i]['section'] as $section)
               {
                  if($people_num == $section['size'])
                  {
                     array_push($assign_room, array('room_id'=> $room_info[$i]['id'], 'section_id'=>$section['id'], 'section_num'=>$section_num, 'project_id'=>$project_id, 'check_type'=>'room_section'));
                     break;
                  }
                  $section_num++;
               }
            }

            for($i=0; $i< count($room_info); $i++)
            {
               $total_seat = 0;
               $section_ids = array();
               foreach($room_info[$i]['section'] as $section)
               {
                  array_push($section_ids, $section['id']);
                  $total_seat = $total_seat + (int) $section['size'];
               }
               if($people_num == $total_seat)
               {
                  array_push($assign_room, array('room_id'=> $room_info[$i]['id'], 'section_id'=>$section_ids, 'section_num'=>'all', 'project_id'=>$project_id, 'check_type'=>'room'));
               }
            }


        }

        echo '<pre>';
        print_r($assign_room);
        exit;
        print_r($room_info);
        print_r($project_info);
     }
}