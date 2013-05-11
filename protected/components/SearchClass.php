<?php 
class SearchClass {
	public static function search($searchParameter,$tableName){
		$sql = "SELECT name FROM `".$tableName."` WHERE name LIKE '".$searchParameter."%' ";
		$result = Yii::app()->db->createCommand($sql)->queryAll();
		return($result);
	}
}
