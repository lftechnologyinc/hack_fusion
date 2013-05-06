<?php 
class SiteModel extends CFormModel
{
   public function get_room_data()
   {
      $rooms = Room::model()->findAll();
      $room_info = array();
      for($i=0; $i< count($rooms); $i++)
      {
         $room_section = $rooms[$i]->sections;
         $section_info = array();
         foreach($room_section as $section)
         {
            array_push($section_info, $section->attributes);
         }

         array_push($room_info, array('id'=>$rooms[$i]->id, 'name'=>$rooms[$i]->name, 'section'=>$section_info));
      }
      
      return $room_info;
   }
   
   public function get_project_data()
   {
      $projects = Project::model()->findAll();
      $project_info = array();
      for($i=0; $i<count($projects); $i++)
      {
         $people_in_project = $projects[$i]->projectPeople;
         $people_ids = array();
         foreach($people_in_project as $people)
         {
            array_push($people_ids, $people->person_id);
         }

         array_push($project_info, array('id'=> $projects[$i]->id, 'name'=> $projects[$i]->name, 'people_ids'=> $people_ids));
      }
      
      return $project_info;
   }
   
   public function get_max_than($num=NULL)
   {
      $project_list = $this->get_project_data();
      $people_num = $num;
      if($num == NULL)
      {
         $people_num = 0;
      }
      else 
      {
         $people_num = $num;
      }
      
      foreach($project_list as $project)
      {
         if(count($project['people_ids']) > $people_num)
         {
            $people_num = count($project['people_ids']);
         }
      }
      echo $people_num;
      return $people_num;
   }
   
   public function get_project_people_num($project_id)
   {
      $project_peoples = ProjectPerson::model()->findAll(
              array('condition'=>'project_id=:project_id', 
                  'params'=>array(':project_id'=>$project_id))
              );
      
      return count($project_peoples);
   }
}

