<?php
class GC_Functions {
	function __construct() {}
	function __destruct() {}
	
	public function jsonAllSeries(){
		include_once ('db_functions.php');
		$db = new DB_Functions();
		$series = $db->getActiveSeries();
		$emparray = array();
		while($row =mysqli_fetch_assoc($series))
		{
			$emparray[] = $row;
		}
		echo json_encode($emparray);
	}
	
	public function jsonAllEpisodes($index){
		include_once ('db_functions.php');
		$db = new DB_Functions();
		$episodes = $db->getActiveEpisodes($index);
		$emparray = array();
		while($row =mysqli_fetch_assoc($episodes))
		{
			$emparray[] = $row;
		}
		echo json_encode($emparray);
	}
	
	public function jsonAllEvents($month){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $events = $db->getActiveEvents($month);
            $emparray = array();
            while($row =mysqli_fetch_assoc($events))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllReadingPlan(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $plan = $db->getActiveReadingPlan();
            $emparray = array();
            while($row =mysqli_fetch_assoc($plan))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray, JSON_UNESCAPED_SLASHES);
	}
	
	public function jsonAllNews(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $news = $db->getActiveNews();
            $emparray = array();
            while($row =mysqli_fetch_assoc($news))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
	
	public function jsonAllWebpages(){
            include_once ('db_functions.php');
            $db = new DB_Functions();
            $pages = $db->getAllWebpages();
            $emparray = array();
            while($row =mysqli_fetch_assoc($pages))
            {
                $emparray[] = $row;
            }
            echo json_encode($emparray);
	}
}
?>