<?php
	include_once ('../includes/db_functions.php');
	$db = new DB_Functions();
	//Update All Series
	$message = "Nothing updated";
	if(isset($_POST["update_webpages"])){
            if(isset($_POST["id"])){
                $about = $_POST["about"];
                $signUp = $_POST["sign_up"];
                $camp = $_POST["campuses"];
                $minis = $_POST["ministries"];
                $con = $_POST["contacts"];
                $giv = $_POST["giving"];
                $inspi = $_POST["inspirations"];
                $home = $_POST["home"];
                $wallp = $_POST["wallpapers"];
                $more = $_POST["more"];
                $dev = $_POST["developers"];
                $bible = $_POST["bible"];
                $vidStream = $_POST["video_stream"];
                $id = $_POST["id"];
                $updatepages = $db->updateAllWebpages($about, $signUp, $camp, $minis, $con, $giv, $inspi, $home, $wallp, $more, $dev, $bible, $vidStream, $id);
                $message = "Webpages Updated successfully";
            }
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>GlobalChurch Admin Panel</title>
<link rel="stylesheet" href="../css/style.default.css" type="text/css" />
<link rel="stylesheet" href="../prettify/prettify.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="../css/bootstrap-timepicker.min.css" type="text/css" />
<script type="text/javascript" src="../prettify/prettify.js"></script>
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="../js/charCount.js"></script>
<script type="text/javascript" src="../js/ui.spinner.min.js"></script>
<script type="text/javascript" src="../js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<script type="text/javascript" src="../js/forms.js"></script>
</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	<h1><a href="../index.php">GlobalChurch <span>v1.0</span></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">GlobalChurch - Admin Panel</div>
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
            	<li><a href="../index.php"><span class="iconfa-home"></span> Welcome</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-eye-open"></span> Series</a>
                	<ul style="display: none;">
                    	<li><a href="../series/all_series.php">All Series</a></li>
                    	<li><a href="../series/series1.php">Series 1</a></li>
                    	<li><a href="../series/series2.php">Series 2</a></li>
                    	<li><a href="../series/series3.php">Series 3</a></li>
                    	<li><a href="../series/series4.php">Series 4</a></li>
                    	<li><a href="../series/series5.php">Series 5</a></li>
                    	<li><a href="../series/series6.php">Series 6</a></li>
                    	<li><a href="../series/series7.php">Series 7</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-calendar"></span> Events</a>
                	<ul style="display: none;">
                        <li><a href="../events/jan.php">January</a></li>
                    	<li><a href="../events/feb.php">February</a></li>
                    	<li><a href="../events/mar.php">March</a></li>
                    	<li><a href="../events/apr.php">April</a></li>
                    	<li><a href="../events/may.php">May</a></li>
                    	<li><a href="../events/jun.php">June</a></li>
                    	<li><a href="../events/jul.php">July</a></li>
                    	<li><a href="../events/aug.php">August</a></li>
                    	<li><a href="../events/sep.php">September</a></li>
                    	<li><a href="../events/oct.php">October</a></li>
                    	<li><a href="../events/nov.php">November</a></li>
                    	<li><a href="../events/dec.php">December</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> Bible</a>
                    <ul style="display: none;">
                    	<li><a href="../bible/read.php">Reading Plan</a></li>
                    </ul>
                </li>
                <li><a href="../news/news.php"><span class="iconfa-exclamation-sign"></span> Announcements</a>
                </li>
                <li class="active"><a href="pages.php"><span class="icon-align-justify"></span> Webpages</a>
                </li>
             </ul>
        </div><!--leftmenu-->
        
    </div><!--mainleft-->
    <!-- END OF LEFT PANEL -->
    
    <!-- START OF RIGHT PANEL -->
    <div class="rightpanel">
    	<div class="headerpanel">
        	<a href="" class="showmenu"></a>
            
    	</div><!--headerpanel-->
        <div class="breadcrumbwidget">
        	<ul class="skins">
                <li>&nbsp;</li> 
                <li class="fixed"><a href="" class="skin-layout fixed"></a></li>
                <li class="wide"><a href="" class="skin-layout wide"></a></li>
            </ul><!--skins-->
        	<ul class="breadcrumb">
                <li><a href="../index.php">Welcome</a> <span class="divider">/</span></li>
                <li class="active">Web Pages</li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Web Pages</h1> <span>Here you update church Web Pages</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            	<h4 class="widgettitle">Update Web Pages <span style="float:right"><?php echo $message; ?></span></h4>
                <div class="widgetcontent">
                    <ol class="devices">
                    <?php
                        $webpages = $db->getAllWebpages();
                        while ($row = mysqli_fetch_array($webpages)) {
                            ?>
                        <li>
                            <form id="<?php echo $row["id"] ?>" class="stdform" name="" method="post">
                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">             
                                <p>
                                    <label>Church Home Page</label>
                                    <span class="field"><input type="text" name="home" class="input-xxlarge" value="<?php echo $row["CHURCH_HOME_PAGE"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>Church About Page</label>
                                    <span class="field"><input type="text" name="about" class="input-xxlarge" value="<?php echo $row["CHURCH_ABOUT_PAGE"] ?>" /></span>
                                </p>    
                                <p>
                                    <label>Church Sign Up Page</label>
                                    <span class="field"><input type="text" name="sign_up" class="input-xxlarge" value="<?php echo $row["CHURCH_SIGN_UP_PAGE"] ?>" /></span>
                                </p>    
                                <p>
                                    <label>Church Campuses Page</label>
                                    <span class="field"><input type="text" name="campuses" class="input-xxlarge" value="<?php echo $row["CHURCH_CAMPUSES_PAGE"] ?>" /></span>
                                </p>       
                                <p>
                                    <label>Church Ministries Page</label>
                                    <span class="field"><input type="text" name="ministries" class="input-xxlarge" value="<?php echo $row["CHURCH_MINISTRIES_PAGE"] ?>" /></span>
                                </p>      
                                <p>
                                    <label>Church Contacts Page</label>
                                    <span class="field"><input type="text" name="contacts" class="input-xxlarge" value="<?php echo $row["CHURCH_CONTACTS_PAGE"] ?>" /></span>
                                </p>       
                                <p>
                                    <label>Church Giving Page</label>
                                    <span class="field"><input type="text" name="giving" class="input-xxlarge" value="<?php echo $row["CHURCH_GIVING_PAGE"] ?>" /></span>
                                </p>           
                                <p>
                                    <label>Church Inspirations Page</label>
                                    <span class="field"><input type="text" name="inspirations" class="input-xxlarge" value="<?php echo $row["CHURCH_INSPIRATIONS_PAGE"] ?>" /></span>
                                </p>             
                                <p>
                                    <label>Church Wallpapers Page</label>
                                    <span class="field"><input type="text" name="wallpapers" class="input-xxlarge" value="<?php echo $row["CHURCH_WALLPAPERS_PAGE"] ?>" /></span>
                                </p>             
                                <p>
                                    <label>Church More Page</label>
                                    <span class="field"><input type="text" name="more" class="input-xxlarge" value="<?php echo $row["CHURCH_MORE_PAGE"] ?>" /></span>
                                </p>              
                                <p>
                                    <label>Church Developers Page</label>
                                    <span class="field"><input type="text" name="developers" class="input-xxlarge" value="<?php echo $row["CHURCH_DEVELOPERS_PAGE"] ?>" /></span>
                                </p>                  
                                <p>
                                    <label>Church Bible Page</label>
                                    <span class="field"><input type="text" name="bible" class="input-xxlarge" value="<?php echo $row["CHURCH_BIBLE_PAGE"] ?>" /></span>
                                </p>                   
                                <p>
                                    <label>Church Video Live Stream</label>
                                    <span class="field"><input type="text" name="video_stream" class="input-xxlarge" value="<?php echo $row["CHURCH_VIDEO_STREAM_URL"] ?>" /></span>
                                </p>   
                                <p class="stdformbutton">
                                    <button name="update_webpages" class="btn btn-primary">Update</button>
                                    <!--button type="reset" class="btn">Reset Button</button-->
                                </p>
                            </form>
                            <hr>
                            <br>
                        </li>
                    <?php }?> 
                    </ol>
                    </div><!--widgetcontent-->
            </div><!--contentinner-->
        </div><!--maincontent-->
        
    </div><!--mainright-->
    <!-- END OF RIGHT PANEL -->
    
    <div class="clearfix"></div>
    
    <div class="footer">
    	<div class="footerleft">GlobalChurch Admin Template v1.0</div>
    	<div class="footerright">&copy; 2016 - GlobalChurch</div>
    </div><!--footer-->

    
</div><!--mainwrapper-->
</body>
</html>
