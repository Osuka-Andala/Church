<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>GlobalChurch Admin Panel</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="prettify/prettify.css" type="text/css" />
<script type="text/javascript" src="prettify/prettify.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>

<body>

<div class="mainwrapper">
	
    <!-- START OF LEFT PANEL -->
    <div class="leftpanel">
    	
        <div class="logopanel">
        	<h1><a href="index.php">GlobalChurch <span>v1.0</span></a></h1>
        </div><!--logopanel-->
        
        <div class="datewidget">GlobalChurch - Admin Panel</div>
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
            	<li class="nav-header">Main Navigation</li>
            	<li class="active"><a href="index.php"><span class="icon-home"></span> Welcome</a></li>
                <li class="dropdown"><a href=""><span class="iconfa-eye-open"></span> Series</a>
                	<ul style="display: none;">
                    	<li><a href="series/all_series.php">All Series</a></li>
                    	<li><a href="series/series1.php">Series 1</a></li>
                    	<li><a href="series/series2.php">Series 2</a></li>
                    	<li><a href="series/series3.php">Series 3</a></li>
                    	<li><a href="series/series4.php">Series 4</a></li>
                    	<li><a href="series/series5.php">Series 5</a></li>
                    	<li><a href="series/series6.php">Series 6</a></li>
                    	<li><a href="series/series7.php">Series 7</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-calendar"></span> Events</a>
                	<ul style="display: none;">
                        <li><a href="events/jan.php">January</a></li>
                    	<li><a href="events/feb.php">February</a></li>
                    	<li><a href="events/mar.php">March</a></li>
                    	<li><a href="events/apr.php">April</a></li>
                    	<li><a href="events/may.php">May</a></li>
                    	<li><a href="events/jun.php">June</a></li>
                    	<li><a href="events/jul.php">July</a></li>
                    	<li><a href="events/aug.php">August</a></li>
                    	<li><a href="events/sep.php">September</a></li>
                    	<li><a href="events/oct.php">October</a></li>
                    	<li><a href="events/nov.php">November</a></li>
                    	<li><a href="events/dec.php">December</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href=""><span class="iconfa-book"></span> Bible</a>
                	<ul style="display: none;">
                        <li><a href="bible/read.php">Reading Plan</a></li>
                    </ul>
                </li>
                <li><a href="news/news.php"><span class="iconfa-exclamation-sign"></span> Announcements</a>
                </li>
                <li><a href="pages/pages.php"><span class="iconfa-align-justify"></span> Webpages</a>
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
                <li class="active">Welcome</li>
            </ul>
        </div><!--breadcrumbwidget-->
      <div class="pagetitle">
        	<h1>Welcome</h1> <span>This is a GlobalChurch Admin panel...</span>
        </div><!--pagetitle-->
        
        <div class="maincontent">
        	<div class="contentinner content-dashboard">
            	<div class="alert alert-info">
                	<button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Welcome!</strong> This is a GlobalChurch Admin Panel for both Android and iOS Apps.
                </div><!--alert-->
                
                <div class="row-fluid">
                	<div class="span8">
                    	<ul class="widgeticons row-fluid">
                            <li class="one_fifth"><a href="bible/read.php"><img src="img/gemicon/reports.png" alt="" /><span>Bible</span></a></li>
                            <li class="one_fifth"><a href="news/news.php"><img src="img/gemicon/edit.png" alt="" /><span>News</span></a></li>
                            <li class="one_fifth"><a href="events/jan.php"><img src="img/gemicon/calendar.png" alt="" /><span>Events</span></a></li>
                            <li class="one_fifth"><a href="series/all_series.php"><img src="img/gemicon/archive.png" alt="" /><span>Series</span></a></li>
                            <li class="one_fifth last"><a href="pages/pages.php"><img src="img/gemicon/notify.png" alt="" /><span>Web Pages</span></a></li>
                        </ul>
                        
                        <br />
                        
                        <h4 class="widgettitle"><center>Images worth thousand words</center></h4>
                        <div class="widgetcontent">
                            <div style="float:left; width: 50%;">
                                <a href="http://codecanyon.net/item/church-app-full-android-app/16128367" target="_blank"><img src="http://rockstarmediastore.co.za/gc/images_android/index_01.jpg" alt="android" /></a>
                            </div>
                            <div style="float:right; width: 50%">
                                <a href="http://codecanyon.net/item/church-app-full-ios-app/15369337" target="_blank"><img src="http://rockstarmediastore.co.za/gc/images_android/index_03.jpg" alt="ios" /></a>
                            </div>
                        </div><!--widgetcontent-->
                        
                        
                        
                    </div><!--span8-->
                    <div class="span4">
                    	<h4 class="widgettitle nomargin">Some Simple Instructions</h4>
                        <div class="widgetcontent bordered">
                        	It is very easy to use this admin panel. Here you can update/hide data to your apps.
                                The left panel is the navigation, very useful. The series tab contains all series and their episodes.
                                You have a maximum series of 7 and each series has a maximum episodes of 6, it's just downhill from there.
                        </div><!--widgetcontent-->
                        
                    	<h4 class="widgettitle nomargin">Some Interesting Instructions</h4>
                        <div class="widgetcontent bordered">
                        	Expand Series, click All Series and you will be presented with 7 series.
                                Make changes to the first series and hit the update button.<br><br>
                                The checkbox 'Make visible On App' will hide the series when selected.
                                This functionality is handy, you can use it to hide all past events and more.
                        </div><!--widgetcontent-->
                        
                    </div><!--span4-->
                </div><!--row-fluid-->
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
<script type="text/javascript">
jQuery(document).ready(function(){
								
		// basic chart
		var flash = [[0, 2], [1, 6], [2,3], [3, 8], [4, 5], [5, 13], [6, 8]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
	
			
		var plot = jQuery.plot(jQuery("#chartplace2"),
			   [ { data: flash, label: "Flash(x)", color: "#fb6409"}, { data: html5, label: "HTML5(x)", color: "#096afb"} ], {
				   series: {
					   lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
					   points: { show: true }
				   },
				   legend: { position: 'nw'},
				   grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
				   yaxis: { min: 0, max: 15 }
				 });
		
		var previousPoint = null;
		jQuery("#chartplace2").bind("plothover", function (event, pos, item) {
			jQuery("#x").text(pos.x.toFixed(2));
			jQuery("#y").text(pos.y.toFixed(2));
			
			if(item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
						
					jQuery("#tooltip").remove();
					var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
						
					showTooltip(item.pageX, item.pageY,
									item.series.label + " of " + x + " = " + y);
				}
			
			} else {
			   jQuery("#tooltip").remove();
			   previousPoint = null;            
			}
		
		});
		
		jQuery("#chartplace2").bind("plotclick", function (event, pos, item) {
			if (item) {
				jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
				plot.highlight(item.series, item.datapoint);
			}
		});


		// bar graph
		var d2 = [];
		for (var i = 0; i <= 10; i += 1)
			d2.push([i, parseInt(Math.random() * 30)]);
			
		var stack = 0, bars = true, lines = false, steps = false;
		jQuery.plot(jQuery("#bargraph2"), [ d2 ], {
			series: {
				stack: stack,
				lines: { show: lines, fill: true, steps: steps },
				bars: { show: bars, barWidth: 0.6 }
			},
			grid: { hoverable: true, clickable: true, borderColor: '#bbb', borderWidth: 1, labelMargin: 10 },
			colors: ["#06c"]
		});
		
		// calendar
		jQuery('#calendar').datepicker();


});
</script>
</body>
</html>
