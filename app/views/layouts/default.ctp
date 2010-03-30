<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="generator" content="HTML Tidy for Linux (vers 6 November 2007), see www.w3.org" />
	<title>RAYCOM SPORTS<?php echo ' | '.$title_for_layout?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en" />
	<meta name="keywords" content="raycom, sports" />
	<meta name="description" content="raycom sports" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="icon" href="favicon.ico" type="image/gif" />
	<!-- Include external files and scripts here (See HTML helper for more info.) -->
	<?php 
		echo $scripts_for_layout;
		echo $html->css('reset');
		echo $html->css('style');
		$agent = strtolower($_SERVER['HTTP_USER_AGENT']); 
		if (eregi("mac", $agent))
		{			
			echo $html->css('mac');
		}
		elseif ( eregi("msie 7", $agent))
		{
			echo $html->css('ie7.css');
		}
		elseif ( eregi("msie 6", $agent))
		{
			echo $html->css('ie6.css');
			echo $javascript->link('supersleight');
		}			
		echo $javascript->link('jquery-1.3.2');
		echo $javascript->link('jquery.timers');
		echo $javascript->link('quick-carousel');
		echo $javascript->link('swfobject');
		echo $javascript->link('jquery.dataTables');
		echo $javascript->link('base');
		echo $javascript->link('cufon-yui');
		echo $javascript->link('BankGothic_Lt_BT_400.font');									
	?>
	<script type="text/javascript" charset="utf-8">
		//<![CDATA[             
		  // Flash news ticker  
		  var flashvars = {
						  xml_path: "/dbticker.php"
		  };
		  var params = {
						  menu: "false",
						  wmode: "transparent"
		  };
		  var attributes = {
						  id: "myId",
						  name: "myId"
		  };              
		  // Add the flash ticker
		  swfobject.embedSWF("/templates/scully_rewrap_home/swf/text_scroller.swf", "flash_ticker", "975", "40","9.0.0", "", flashvars, params, attributes); 
		//]]>             
	</script>
</head>
<body>
	<div id="bg_wrapper">
		<div id="wrapper">
			<!-- HEADER -->
			<div id="header"><a class="logo" href="/index.php"></a>
			  <div class="bannergroup banneritem" id="top_ad">
				<!-- begin ad tag-->
				<script language="JavaScript" type="text/javascript">
					//<![CDATA[
							if (typeof ord=='undefined') {ord=Math.random()*10000000000000000;}
							document.write('<iframe src="http://ad.doubleclick.net/adi/wn.loc.raysport/home;pos=top;sz=728x90;ord=' + ord + '?" width="728" height="90" marginwidth="0" marginheight="0" frameborder="0" scrolling="no">');
							if (navigator.userAgent.indexOf("Gecko")==-1)
							{
									document.write('<script language="JavaScript" src="http://ad.doubleclick.net/adj/wn.loc.raysport/home;pos=top;sz=728x90;abr=!ie;ord=' + ord + '?" type="text/javascript"><\/script>');
							}
							document.write('<\/iframe>');
					//]]>                                           
				</script>
				<!-- End ad tag -->
				<div class="clr"></div>
			  </div>
			  <ul id="menulist_root" class="mainlevel">
				<li id="menuitem_1"><a href="/index.php/ACC-Information/raycom-schedule-a-local-listings.html" class="mainlevel" id="menulink_1" name="menulink_1">Upcoming Games</a>
				  <ul id="menulist_1">
					<li id="menuitem_1_1"><a href="/index.php/ACC-Information/raycom-schedule-a-local-listings.html" class="sublevel" id="menulink_1_1" name="menulink_1_1">Raycom Schedule &amp; Local Listings</a></li>
					<li id="menuitem_1_2"><a href="/index.php/ACC-Information/acc-basketball-tournament-central.html" class="sublevel" id="menulink_1_2" name="menulink_1_2">ACC Basketball Tournament Central 2010</a></li>
					<li id="menuitem_1_3"><a href="http://raycom.swarmcast.net/" target="_blank" class="sublevel" id="menulink_1_3" name="menulink_1_3">Watch Live Online</a></li>
					<li id="menuitem_1_4"><a href="http://www.accfootballcharlotte.com/" target="_blank" class="sublevel" id="menulink_1_4" name="menulink_1_4">ACC Football Championship Game</a></li>
					<li id="menuitem_1_5"><a href="http://meinekecarcarebowl.com/" target="_blank" class="sublevel" id="menulink_1_5" name="menulink_1_5">Meineke Car Care Bowl</a></li>
					<li id="menuitem_1_6"><a href="http://www.theacc.com/" target="_blank" class="sublevel" id="menulink_1_6" name="menulink_1_6">theACC.com - Official Site</a></li>
				  </ul>
				</li>
				<li id="menuitem_2"><a href="/index.php/Features/havoline-highlights.html" class="mainlevel" id="menulink_2" name="menulink_2">Video Channels</a>
				  <ul id="menulist_2">
					<li id="menuitem_2_1"><a href="http://www.raycomsports.com/" class="sublevel" id="menulink_2_1" name="menulink_2_1">Top Video</a></li>
					<li id="menuitem_2_2"><a href="/index.php/Features/havoline-highlights.html" class="sublevel" id="menulink_2_2" name="menulink_2_2">ACC Highlights by Havoline</a></li>
					<li id="menuitem_2_3"><a href="/index.php/Features/g-mans-corner.html" class="sublevel" id="menulink_2_3" name="menulink_2_3">G-Man's Corner</a></li>
					<li id="menuitem_2_4"><a href="/index.php/Features/acc-road-trip.html" class="sublevel" id="menulink_2_4" name="menulink_2_4">Pep Boys - ACC Road Trip</a></li>
					<li id="menuitem_2_5"><a href="/index.php/Features/decades.html" class="sublevel" id="menulink_2_5" name="menulink_2_5">GMC - Players of the Decades</a></li>
					<li id="menuitem_2_6"><a href="/index.php/Features/this-week-in-acc-history.html" class="sublevel" id="menulink_2_6" name="menulink_2_6">Marines - This Week in ACC History</a></li>
					<li id="menuitem_2_7"><a href="/index.php/Features/football-saturdays-in-the-south.html" class="sublevel" id="menulink_2_7" name="menulink_2_7">Football Saturdays In The South</a></li>
					<li id="menuitem_2_8"><a href="/index.php/Features/champion-how-you-play.html" class="sublevel" id="menulink_2_8" name="menulink_2_8">Champion - How you play</a></li>
				  </ul>
				</li>
				<li id="menuitem_3"><a href="http://raycom.swarmcast.net/" target="_blank" class="mainlevel" id="menulink_3" name="menulink_3">Live Streaming</a></li>
				<li id="menuitem_4"><a href="http://www.raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=319&amp;Itemid=385" class="mainlevel" id="menulink_4" name="menulink_4">Team Pages</a>
				  <ul id="menulist_4">
					<li id="menuitem_4_1"><a href="/index.php/Team-Pages/boston-college.html" class="sublevel" id="menulink_4_1" name="menulink_4_1">Boston College</a></li>
					<li id="menuitem_4_2"><a href="/index.php/Team-Pages/clemson.html" class="sublevel" id="menulink_4_2" name="menulink_4_2">Clemson Tigers</a></li>
					<li id="menuitem_4_3"><a href="/index.php/Team-Pages/duke.html" class="sublevel" id="menulink_4_3" name="menulink_4_3">Duke Blue Devils</a></li>
					<li id="menuitem_4_4"><a href="/index.php/Team-Pages/florida-state.html" class="sublevel" id="menulink_4_4" name="menulink_4_4">Florida State Seminoles</a></li>
					<li id="menuitem_4_5"><a href="/index.php/Team-Pages/georgia-tech.html" class="sublevel" id="menulink_4_5" name="menulink_4_5">Georgia Tech Yellow Jackets</a></li>
					<li id="menuitem_4_6"><a href="/index.php/Team-Pages/maryland.html" class="sublevel" id="menulink_4_6" name="menulink_4_6">Maryland Terrapins</a></li>
					<li id="menuitem_4_7"><a href="/index.php/Team-Pages/miami.html" class="sublevel" id="menulink_4_7" name="menulink_4_7">Miami Hurricanes</a></li>
					<li id="menuitem_4_8"><a href="/index.php/Team-Pages/north-carolina.html" class="sublevel" id="menulink_4_8" name="menulink_4_8">North Carolina Tar Heels</a></li>
					<li id="menuitem_4_9"><a href="/index.php/Team-Pages/nc-state.html" class="sublevel" id="menulink_4_9" name="menulink_4_9">NC State Wolfpack</a></li>
					<li id="menuitem_4_10"><a href="/index.php/Team-Pages/virginia.html" class="sublevel" id="menulink_4_10" name="menulink_4_10">Virginia Cavaliers</a></li>
					<li id="menuitem_4_11"><a href="/index.php/Team-Pages/virginia-tech.html" class="sublevel" id="menulink_4_11" name="menulink_4_11">Virginia Tech Hokies</a></li>
					<li id="menuitem_4_12"><a href="/index.php/Team-Pages/wake-forest.html" class="sublevel" id="menulink_4_12" name="menulink_4_12">Wake Forest Demon Deacons</a></li>
				  </ul>
				</li>
				<li id="menuitem_5"><a href="http://raycomsports.com/blog/" target="_blank" class="mainlevel" id="menulink_5" name="menulink_5">Blog Network</a>
				  <ul id="menulist_5">
					<li id="menuitem_5_1"><a href="http://raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_1" name="menulink_5_1">ACC Bloggers</a></li>
					<li id="menuitem_5_2"><a href="http://bostoncollege.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_2" name="menulink_5_2">Eagle Bloggers</a></li>
					<li id="menuitem_5_3"><a href="http://clemson.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_3" name="menulink_5_3">Tiger Bloggers</a></li>
					<li id="menuitem_5_4"><a href="http://duke.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_4" name="menulink_5_4">Blue Devil Bloggers</a></li>
					<li id="menuitem_5_5"><a href="http://floridastate.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_5" name="menulink_5_5">Seminole Bloggers</a></li>
					<li id="menuitem_5_6"><a href="http://georgiatech.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_6" name="menulink_5_6">Yellow Jacket Bloggers</a></li>
					<li id="menuitem_5_7"><a href="http://maryland.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_7" name="menulink_5_7">Terrapin Bloggers</a></li>
					<li id="menuitem_5_8"><a href="http://miami.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_8" name="menulink_5_8">Hurricane Bloggers</a></li>
					<li id="menuitem_5_9"><a href="http://northcarolina.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_9" name="menulink_5_9">Tar Heel Bloggers</a></li>
					<li id="menuitem_5_10"><a href="http://ncstate.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_10" name="menulink_5_10">Wolfpack Bloggers</a></li>
					<li id="menuitem_5_11"><a href="http://virginia.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_11" name="menulink_5_11">Cavalier Bloggers</a></li>
					<li id="menuitem_5_12"><a href="http://virginiatech.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_12" name="menulink_5_12">Hokie Bloggers</a></li>
					<li id="menuitem_5_13"><a href="http://wakeforest.raycomsports.com/blog/" target="_blank" class="sublevel" id="menulink_5_13" name="menulink_5_13">Demon Deacon Bloggers</a></li>
				  </ul>
				</li>
				<li id="menuitem_6"><a href="http://acc.teamfanshop.com/default.aspx/source/RaycomSports" target="_blank" class="mainlevel" id="menulink_6" name="menulink_6">ACC Store</a>
				  <ul id="menulist_6">
					<li id="menuitem_6_1"><a href="http://acc.teamfanshop.com/default.aspx/source/RaycomSports" target="_blank" class="sublevel" id="menulink_6_1" name="menulink_6_1">ACC Team Merchandise</a></li>
					<li id="menuitem_6_2"><a href="http://www.theacc.com/store/dvd/" target="_blank" class="sublevel" id="menulink_6_2" name="menulink_6_2">ACC DVD STORE</a></li>
					<li id="menuitem_6_3"><a href="http://www.ncaaondemand.com/" target="_blank" class="sublevel" id="menulink_6_3" name="menulink_6_3">NCAA on Demand (DVD)</a></li>
					<li id="menuitem_6_4"><a href="http://shop.originalretrobrand.com/index.php?main_page=index&amp;cPath=26_27&amp;zenid=1da2153e5ac9ec6fda45422dc12f14cd" target="_blank" class="sublevel" id="menulink_6_4" name="menulink_6_4">Original Retro Brand</a></li>
				  </ul>
				</li>
				<li id="menuitem_7"><a href="/index.php/About-Raycom-Sports/company-history-and-about-us.html" class="mainlevel" id="menulink_7" name="menulink_7">About Us</a>
				  <ul id="menulist_7">
					<li id="menuitem_7_1"><a href="http://twitter.com/RaycomSports" target="_blank" class="sublevel" id="menulink_7_1" name="menulink_7_1">Follow Us on Twitter</a></li>
					<li id="menuitem_7_2"><a href="http://www.facebook.com/pages/Raycom-Sports/140444830730?ref=ts" target="_blank" class="sublevel" id="menulink_7_2" name="menulink_7_2">Facebook: Become a Fan</a></li>
					<li id="menuitem_7_3"><a href="/index.php/Latest-News/" class="sublevel" id="menulink_7_3" name="menulink_7_3">News Releases</a></li>
					<li id="menuitem_7_4"><a href="http://www.raycommedia.com/" target="_blank" class="sublevel" id="menulink_7_4" name="menulink_7_4">Raycom Media Corporate</a></li>
					<li id="menuitem_7_5"><a href="/index.php/About-Raycom-Sports/acc-properties.html" class="sublevel" id="menulink_7_5" name="menulink_7_5">ACC Properties</a></li>
					<li id="menuitem_7_6"><a href="/index.php/About-Raycom-Sports/mobile-production-units.html" class="sublevel" id="menulink_7_6" name="menulink_7_6">Production Services / Mobile Units</a></li>
					<li id="menuitem_7_7"><a href="/index.php/About-Raycom-Sports/broadcaster-bios.html" class="sublevel" id="menulink_7_7" name="menulink_7_7">Broadcaster Bios</a></li>
					<li id="menuitem_7_8"><a href="/index.php/About-Raycom-Sports/contact-us.html" class="sublevel" id="menulink_7_8" name="menulink_7_8">Contact Us</a></li>
					<li id="menuitem_7_9"><a href="/index.php/About-Raycom-Sports/company-history-and-about-us.html" class="sublevel" id="menulink_7_9" name="menulink_7_9">Company History and About Us</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
			<div id="header_bg"></div>
			<!-- end header -->
			<!-- FEATURES -->
			<div id="features">
			  <div id="ticker">
				<div id="flash_ticker"></div>
			  </div>
			  <div class="scroll-left"></div>
			  <div class="scrollable">
				<!-- root element for the items -->
				<div class="items">
				  <!-- <div id="feature"> -->
				  <div id="feature"><a href="http://www.raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=373:road-trip-planner&amp;catid=13:left-bottom-module-on-home-page"><img src="http://www.raycomsports.com/images/top_features_road_trip.png" border="0" alt="** PLEASE DESCRIBE THIS IMAGE **" /> <img src="http://www.raycomsports.com/images/top_features_pep_boys.png" border="0" alt="** PLEASE DESCRIBE THIS IMAGE **" /></a>
					<p>Join our host, Tommy Kane, as he takes us on a ride across ACC campuses.<br />
					  <span class="c1">[MORE]</span></p>
				  </div>
				  <div id="feature"><a href="http://www.raycomsports.com/index.php/Features/g-mans-corner.html"><img src="http://www.raycomsports.com/images/top_features_gman.png" border="0" alt="** PLEASE DESCRIBE THIS IMAGE **" /></a>
					<h2 class="c2"><a href="http://www.raycomsports.com/index.php/Features/g-mans-corner.html">G-Man's Corner</a></h2>
					<p><a href="http://www.raycomsports.com/index.php/Features/g-mans-corner.html">Check out our featured analyst's thoughts on the ACC.<br />
					  <span class="c1">[MORE]</span></a></p>
				  </div>
				  <div id="feature"><a href="http://www.raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=374:decades&amp;catid=13:left-bottom-module-on-home-page"><img src="http://www.raycomsports.com/images/top_features_gmc_decade.png" border="0" alt="** PLEASE DESCRIBE THIS IMAGE **" /></a>
					<h2 class="c2"><a href="http://www.raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=374:decades&amp;catid=13:left-bottom-module-on-home-page">GMC - Players of the Decades<br />
					  </a></h2>
					<a href="http://www.raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=374:decades&amp;catid=13:left-bottom-module-on-home-page"></a>
					<p>Take a look into our archives at some of the greatest players to ever compete in the ACC.<br />
					  <span class="c1">[More]</span></p>
				  </div>
				  <div id="feature"><a href="http://www.raycomsports.com/blog/" target="_blank"><img src="http://www.raycomsports.com/images/top_features_blog_network.jpg" border="0" alt="** PLEASE DESCRIBE THIS IMAGE **" /></a>
					<h2 class="c2"><a href="http://www.raycomsports.com/blog/" target="_blank">ACC Blog Network</a></h2>
					<p><a href="http://www.raycomsports.com/blog/" target="_blank">Want to read what other ACC fans are saying? Check out our new blog network - created for fans, by fans.<br />
					  <span class="c1">[MORE]</span></a></p>
				  </div>
				  <div id="feature"><a href="http://raycom.swarmcast.net/" target="_blank"><img src="http://www.raycomsports.com/images/top_features_online_streaming_att.png" alt="live streaming" border="0" /></a>
					<h2 class="c2"><a href="http://raycom.swarmcast.net/" target="_blank">Live Game Streaming</a></h2>
					<p><a href="http://raycom.swarmcast.net/" target="_blank">Watch all Raycom ACC broadcasts online (blackout restrictions may apply).<br />
					  <span class="c1">[MORE]</span></a></p>
				  </div>
				  <div id="feature"><a href="http://raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=355:havoline-highlights&amp;catid=13:left-bottom-module-on-home-page"><img src="http://www.raycomsports.com/images/top_features_havloline_highlights.png" alt="** PLEASE DESCRIBE THIS IMAGE **" /></a>
					<h2 class="featuresHeading c2"><a href="http://raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=355:havoline-highlights&amp;catid=13:left-bottom-module-on-home-page">Havoline Highlights</a></h2>
					<p><a href="http://raycomsports.com/index.php?option=com_content&amp;view=article&amp;id=355:havoline-highlights&amp;catid=13:left-bottom-module-on-home-page">Miss a game? Raycom &amp; Havoline have teamed up to bring you complete highlights of all Raycom broadcasts.<br />
					  <span class="c1">[MORE]</span></a></p>
				  </div>
				  <!-- </div> -->
				</div>
			  </div>
			  <div class="scroll-right"></div>
			</div>
			<div id="features_bg"></div>
            <!-- TEAM SELECTOR -->
            <div id="team_selector">
              <ul class="menu_teams">
                <li class="item385"><a href="/index.php/Team-Pages/boston-college.html"><span>Boston College</span></a></li>
                <li class="item386"><a href="/index.php/Team-Pages/clemson.html"><span>Clemson</span></a></li>
                <li class="item387"><a href="/index.php/Team-Pages/duke.html"><span>Duke</span></a></li>
                <li class="item388"><a href="/index.php/Team-Pages/florida-state.html"><span>Florida State</span></a></li>
                <li class="item389"><a href="/index.php/Team-Pages/georgia-tech.html"><span>Georgia Tech</span></a></li>
                <li class="item390"><a href="/index.php/Team-Pages/maryland.html"><span>Maryland</span></a></li>
                <li class="item391"><a href="/index.php/Team-Pages/miami.html"><span>Miami</span></a></li>
                <li class="item384"><a href="/index.php/Team-Pages/north-carolina.html"><span>North Carolina</span></a></li>
                <li class="item392"><a href="/index.php/Team-Pages/nc-state.html"><span>NC State</span></a></li>
                <li class="item393"><a href="/index.php/Team-Pages/virginia.html"><span>Virginia</span></a></li>
                <li class="item394"><a href="/index.php/Team-Pages/virginia-tech.html"><span>Virginia Tech</span></a></li>
                <li class="item395"><a href="/index.php/Team-Pages/wake-forest.html"><span>Wake Forest</span></a></li>
              </ul>
            </div>
            <div id="team_selector_bg"> </div>            
		</div><!-- end wrapper -->
	</div><!-- end bg_wrapper -->
</body>
</html>
