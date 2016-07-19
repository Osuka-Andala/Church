<?php
	include_once ('../includes/db_functions.php');
	$db = new DB_Functions();
	//Update All Series
	$message = "Nothing updated";
	if(isset($_POST["update_news"])){
            if(isset($_POST["id"])){
                $title = $_POST["title"];
                $img = $_POST["image"];
                $dTime = $_POST["date_time"];
                $url = $_POST["url"];
                $desc = $_POST["description"];
                $id = $_POST["id"];
                if(isset($_POST["series_visible"])){
                        $updateseries = $db->updateAllNews($title, $img, $dTime, $url, $desc, 'y', $id);
                        $message = $title." - Updated successfully";
                }else{
                        $updateseries = $db->updateAllSeries($heading, $thumbnail, $banner, 'n', $id);
                        $message = $title." - Updated successfully";
                }
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
                <li class="active"><a href="news.php"><span class="icon-exclamation-sign"></span> Announcements</a>
                </li>
                <li><a href="../pages/pages.php"><span class="iconfa-align-justify"></span> Webpages</a>
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
                <li class="active">Announcements</li>
            </ul>
        </div><!--breadcrumbs-->
        <div class="pagetitle">
        	<h1>Announcements</h1> <span>Here you update news</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner">
            	<h4 class="widgettitle">Update Announcements <span style="float:right"><?php echo $message; ?></span></h4>
                <div class="widgetcontent">
                    <ol class="devices">
                    <?php
                        $allNews = $db->getAllNews();
                        while ($row = mysqli_fetch_array($allNews)) {
                            ?>
                        <li>
                            <form id="<?php echo $row["id"] ?>" class="stdform" name="" method="post">
                                <input name="id" type="hidden" value="<?php echo $row["id"] ?>">
                                <p>
                                    <label>Title</label>
                                    <span class="field"><input type="text" name="title" class="input-large" value="<?php echo $row["NEWS_TITLE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Image url</label>
                                    <span class="field"><input type="text" name="image" class="input-xxlarge" value="<?php echo $row["NEWS_IMAGE"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Date time</label>
                                    <span class="field"><input type="text" name="date_time" class="input-large" value="<?php echo $row["NEWS_DATE_TIME"] ?>" /></span>
                                </p> 
                                <p>
                                    <label>News url</label>
                                    <span class="field"><input type="text" name="url" class="input-xxlarge" value="<?php echo $row["NEWS_URL"] ?>" /></span>
                                </p>
                                <p>
                                    <label>Description</label>
                                    <span class="field">
                                    	<textarea id="autoResizeTA" name="description" cols="80" rows="5" class="span5" style="resize: vertical">
											<?php echo $row["NEWS_DESCRIPTION"] ?>
                                        </textarea>
                                    </span>
                                </p>
                                <p>
                                    <span class="formwrapper">
                                    	<?php
											if($row["isActive"] == 'y'){
												?>
												<input type="checkbox" name="series_visible" checked /> Make visible On App<br />
										<?php	
                                            }else{
												?>
												<input type="checkbox" name="series_visible" /> Make visible On App<br />
										<?php	
                                            }
										?>
                                    </span>
                                </p>              
                                <p class="stdformbutton">
                                    <button name="update_news" class="btn btn-primary">Update</button>
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
