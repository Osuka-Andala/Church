<?php
class DB_Functions {
	private $db_conx;
    function __construct() {
        include_once ('db_conx.php');
        $this->db_conx = DBC::connect();
    }
    function __destruct() {}
	
    /**
     * Start SERIES ------------------------------------------------------------
     */
    public function getAllSeries() {
	$sql = "Select * From series";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveSeries() {
	$sql = "Select * From series Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllSeries($heading, $thumbnail, $banner, $visible, $id) {
	$sql = "Update series Set SERIES_HEADING='$heading', "
                . "SERIES_THUMBNAIL='$thumbnail', SERIES_BANNER='$banner', "
                . "isActive='$visible' WHERE id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
	
    public function getAllEpisodes($seriesID) {
	$sql = "Select * From episodes Where SERIES_ID = '$seriesID'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveEpisodes($seriesID) {
	$sql = "Select * From episodes Where SERIES_ID = '$seriesID' And isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllEpisodes($title, $noImg, $sDate, $week, $eDate, $vid, $pastor, $audio, $desc, $img, $webpage, $visible, $id) {
	$sql = "Update episodes Set EPISODE_TITLE='$title', EPISODE_NUMBER_IMAGE='$noImg', EPISODE_START_DATE='$sDate', "
                . "EPISODE_WEEK='$week', EPISODE_END_DATE='$eDate', EPISODE_VIDEO='$vid', EPISODE_PASTOR='$pastor', EPISODE_AUDIO='$audio', "
                . "EPISODE_DESCRIPTION='$desc', EPISODE_IMAGE='$img', EPISODE_WEBPAGE='$webpage', isActive='$visible' WHERE id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End SERIES --------------------------------------------------------------
     */
    
    /**
     * Start EVENTS ------------------------------------------------------------
     */
    public function getAllEvents($month) {
	$sql = "Select * From events Where EVENT_MONTH = '$month'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveEvents($month) {
	$sql = "Select * From events Where EVENT_MONTH = '$month' And isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllEvents($day, $img, $monthImg, $banner, $title, $mapImg, $desc, $mapCoor, $sDate, $eDate, $dateTime, $url, $loc, $notes, $signup, $email, $number, $visible, $id) {
	$sql = "Update events Set EVENT_DAY='$day', EVENT_IMAGE='$img', EVENT_MONTH_IMAGE='$monthImg', EVENT_BANNER='$banner', EVENT_TITLE='$title', EVENT_MAP_IMAGE='$mapImg', "
                . "EVENT_DESCRIPTION='$desc', EVENT_MAP_COORDINATES='$mapCoor', EVENT_START_DATE='$sDate', EVENT_END_DATE='$eDate', EVENT_DATE_TIME='$dateTime', EVENT_URL='$url', "
                . "EVENT_LOCATION='$loc', EVENT_NOTES='$notes', EVENT_SIGN_UP='$signup', EVENT_EMAIL='$email', EVENT_PHONE='$number', isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End EVENTS --------------------------------------------------------------
     */
    
    /**
     * Start READDING PLAN -----------------------------------------------------
     */
    public function getReadingPlan() {
	$sql = "Select * From bible";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveReadingPlan() {
	$sql = "Select * From bible Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateReadingPlan($weekDay, $day, $img, $title, $verse, $audio, $desc, $visible, $id) {
	$sql = "Update bible Set READING_WEEK_DAY='$weekDay', READING_DATE='$day', READING_PLAN_IMAGE='$img', READING_PLAN_TITLE='$title', READING_PLAN_VERSE='$verse', "
                . "READING_PLAN_AUDIO='$audio', READING_PLAN='$desc', isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End READDING PLAN -------------------------------------------------------
     */
    
    /**
     * Start NEWS --------------------------------------------------------------
     */
    public function getAllNews() {
	$sql = "Select * From news";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function getActiveNews() {
	$sql = "Select * From news Where isActive = 'y'";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllNews($title, $img, $dTime, $url, $desc, $visible, $id) {
	$sql = "Update news Set NEWS_IMAGE='$img', NEWS_TITLE='$title', NEWS_DATE_TIME='$dTime', NEWS_URL='$url', NEWS_DESCRIPTION='$desc', isActive='$visible' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End NEWS ----------------------------------------------------------------
     */
    
    /**
     * Start WEBPAGES --------------------------------------------------------------
     */
    public function getAllWebpages() {
	$sql = "Select * From webpages";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    public function updateAllWebpages($about, $signUp, $camp, $minis, $con, $giv, $inspi, $home, $wallp, $more, $dev, $bible, $vidStream, $id) {
	$sql = "Update webpages Set CHURCH_ABOUT_PAGE='$about', CHURCH_SIGN_UP_PAGE='$signUp', CHURCH_CAMPUSES_PAGE='$camp', "
                . "CHURCH_MINISTRIES_PAGE='$minis', CHURCH_CONTACTS_PAGE='$con', CHURCH_GIVING_PAGE='$giv', "
                . "CHURCH_INSPIRATIONS_PAGE ='$inspi', CHURCH_HOME_PAGE='$home', CHURCH_WALLPAPERS_PAGE='$wallp', "
                . "CHURCH_MORE_PAGE='$more', CHURCH_DEVELOPERS_PAGE='$dev', CHURCH_BIBLE_PAGE='$bible', CHURCH_VIDEO_STREAM_URL = '$vidStream' Where id='$id' LIMIT 1";
        $result = mysqli_query($this->db_conx,$sql);
        return $result;
    }
    /**
     * End WEBPAGES ----------------------------------------------------------------
     */
    
}

?>