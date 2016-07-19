<?php
	include_once ('../gc_functions.php');
	$gc = new GC_Functions();
	
	$weGET = $_GET['get'];
	
	if($weGET == "series"){
		$showSeries = $gc->jsonAllSeries();
	}else
	if($weGET == "episode1"){
		$showEpisodes = $gc->jsonAllEpisodes(1);
	}else
	if($weGET == "episode2"){
		$showEpisodes = $gc->jsonAllEpisodes(2);
	}else
	if($weGET == "episode3"){
		$showEpisodes = $gc->jsonAllEpisodes(3);
	}else
	if($weGET == "episode4"){
		$showEpisodes = $gc->jsonAllEpisodes(4);
	}else
	if($weGET == "episode5"){
		$showEpisodes = $gc->jsonAllEpisodes(5);
	}else
	if($weGET == "episode6"){
		$showEpisodes = $gc->jsonAllEpisodes(6);
	}else
	if($weGET == "episode7"){
		$showEpisodes = $gc->jsonAllEpisodes(7);
	}else
	if($weGET == "jan"){
		$showEvents = $gc->jsonAllEvents("jan");
	}else
	if($weGET == "feb"){
		$showEvents = $gc->jsonAllEvents("feb");
	}else
	if($weGET == "mar"){
		$showEvents = $gc->jsonAllEvents("mar");
	}else
	if($weGET == "apr"){
		$showEvents = $gc->jsonAllEvents("apr");
	}else
	if($weGET == "may"){
		$showEvents = $gc->jsonAllEvents("may");
	}else
	if($weGET == "jun"){
		$showEvents = $gc->jsonAllEvents("jun");
	}else
	if($weGET == "jul"){
		$showEvents = $gc->jsonAllEvents("jul");
	}else
	if($weGET == "aug"){
		$showEvents = $gc->jsonAllEvents("aug");
	}else
	if($weGET == "sep"){
		$showEvents = $gc->jsonAllEvents("sep");
	}else
	if($weGET == "oct"){
		$showEvents = $gc->jsonAllEvents("oct");
	}else
	if($weGET == "nov"){
		$showEvents = $gc->jsonAllEvents("nov");
	}else
	if($weGET == "dec"){
		$showEvents = $gc->jsonAllEvents("dec");
	}else
	if($weGET == "plan"){
		$showPlan = $gc->jsonAllReadingPlan();
	}else
	if($weGET == "news"){
		$showPlan = $gc->jsonAllNews();
	}else
	if($weGET == "webpages"){
		$showPlan = $gc->jsonAllWebpages();
	}
?>