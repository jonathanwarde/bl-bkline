<?php if(isset($_GET['accept-cookies'])){
	// set cookie by name, make it last a year, set it on root of site(so it applies to all pages)
	setcookie('accept-cookies', 'true', time() + 31556925, '/');
	header('Location: ./');
}?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<script type='text/javascript'>
		(function (d, t) {
		  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
		  bh.type = 'text/javascript';
		  bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=fzsa76o9kbugxr6c0sfogg';
		  s.parentNode.insertBefore(bh, s);
		  })(document, 'script');
		</script>
		<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
		<?php if(is_page('branches')):?>
			<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyBdaP-lD1prvE6G9Popi3wWbwBPBIrNbLo&sensor=false"></script>
			<script src="https://cdn.rawgit.com/googlemaps/v3-utility-library/master/infobox/src/infobox.js"></script>
			<script>

					var ib = new InfoBox();

					var markers = new Array();

					function initialize() {

					var mapOptions = {
					  zoom: 9,
					  center: new google.maps.LatLng(50.797705, -3.125468),
					  mapTypeId: google.maps.MapTypeId.ROADMAP,
					//  styles: styles,
					  scrollwheel: false
					};
					
					var map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);

					google.maps.event.addListener(map, "click", function() { ib.close() });

					setMarkers(map, sites);
					            infowindow = new google.maps.InfoWindow({
					    content: "loading..."

					});
					}

					var sites = [
						['Accounts',50.363588,-3.677054, 1, '<h6>Accounts</h6><p>Office 1,The Old Forces Tavern,<br>Forces Cross,<br>Blackawton,<br>Totnes TQ9 7DJ</p><div class="brtel">Tel: 01803 712430</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly-tatlow.jpg">'],
						['Avonmouth Branch',51.502751,-2.685488, 2, '<h6>Avonmouth Branch</h6><p>Suite 20,<br>Richmond House,<br>Avonmouth Way<br>,Avonmouth,<br>Bristol,BS11 8DE</p><div class="brtel">Tel: 01179 827235</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly-tatlow.jpg">'],
						['Bridgwater Branch',51.111535,-2.992747, 3, '<h6>Bridgwater Branch</h6><p>Unit 7 Crossways Road,<br>Thistle Park,<br>Bridgwater,<br>Somerset,TA6 6LS</p><div class="brtel">Tel: 01278 433833</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/simon-steer.jpg">'],
						['Cornwall Branch',50.419196,-4.830729, 4, '<h6>Cornwall Branch</h6><p>A200 Advent House,<br>Station Approach,<br>Roche, Cornwall PL26 8LG</p><div class="brtel">Tel. 01208 811200</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/jake.jpg">'],
						['Exeter Branch',50.709992,-3.537023, 5, '<h6>Meridian House</h6><p>Retail Park Close,<br>Marsh Barton,<br>Exeter, EX2 8LG</p><div class="brtel">Tel: 01392 217277</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/tom.jpg">'],
						['Backline Outbase',50.707258,-3.415157, 6, '<h6>Mushroom Road</h6><p>Hill Barton Business Park,<br>Clyst St Mary,<br>Nr Exeter, EX5 1DR</p><div class="brtel">Tel: 01395 239305</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly.jpg">'],
						['Plymouth Branch',50.394791,-4.039426, 7, '<h6>Plymouth Branch</h6><p>Unit 1 Alder Court,<br>Bell Close,<br>Plympton,<br>Plymouth,<br>Devon PL7 4JH</p><div class="brtel">Tel: 01752 336667</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly.jpg">'],
						['Skilled Division',50.710020,-3.537012, 8, '<h6>Skilled Division</h6><p>Retail Park Close,<br>Exeter Devon EX2 8LG</p><div class="brtel">Tel: 01392 217771</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/donna.jpg">'],
						['Backline Training',50.394791,-4.039480, 9, '<h6>Backline Training</h6><p>Unit 1 Alder Court,<br>Bell Close,<br>Plympton PL7 4JH</p><div class="brtel">Tel. 01752 348835</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/sam.jpg">'],
						['Winchester Division',51.066152,-1.299070, 10, '<h6>Winchester Division</h6><p>Unit 2 Scylla Industrial Estate,<br>Winnall Valley Road,<br>Winchester SO23 0LD</p><div class="brtel">Tel: 01962 890525</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kate.jpg">'],
						['Yeovil Branch',50.935104,-2.665279, 11, '<h6>Yeovil Branch</h6><p>Unit 2 Plot 13, Brympton Way,<br>Lynx West Trading Estate,<br>Yeovil,<br>Somerset, BA20 2HP</p><div class="brtel">Tel: 01935 478866</div><img src="http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kate.jpg">']
					];

					function createMarker(site, map){
					    var siteLatLng = new google.maps.LatLng(site[1], site[2]);
					    var image = new google.maps.MarkerImage("http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/map-marker.png", null, null, null, new google.maps.Size(83, 83));
					    var marker = new google.maps.Marker({
					        position: siteLatLng,
					        map: map,
					        title: site[0],
					        zIndex: site[3],
					        html: site[4],
					        icon: image
					    });



					    // Begin example code to get custom infobox
					    var boxText = document.createElement("div");
					    //boxText.style.cssText = "border: 1px solid black; margin-top: 8px; background: yellow; padding: 5px;";
					    boxText.innerHTML = marker.html;

					    var myOptions = {
					             content: boxText
					            ,disableAutoPan: false
					            ,maxWidth: 0
					            ,pixelOffset: new google.maps.Size(-140, 0)
					            ,zIndex: null
					            ,boxStyle: { 
					              //background: "url('http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/map-marker.png') no-repeat"
					              opacity: 1
					              ,width: "300px"
					             }
					            ,closeBoxMargin: "10px 2px 2px 2px"
					            ,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
					            ,infoBoxClearance: new google.maps.Size(1, 1)
					            ,isHidden: false
					            ,pane: "floatPane"
					            ,enableEventPropagation: false
					    };
					    // end example code for custom infobox

					    google.maps.event.addListener(marker, "click", function (e) {
					     ib.close();
					     ib.setOptions(myOptions);
					     ib.open(map, this);
					    });
					    return marker;
					}

					function setMarkers(map, markers) {

						 for (var i = 0; i < markers.length; i++) {

						 	// Append a link to the markers DIV for each marker
        					//jQuery('#markers').append('<a class="marker-link" data-markerid="' + i + '" href="javascript:void(0)">' + markers[i][1] + '</a> ');

						   createMarker(markers[i], map);
						 }

						// Trigger a click event on each marker when the corresponding marker link is clicked
					    //jQuery('.marker-link').on('click', function () {
					     //   google.maps.event.trigger(map.markers[jQuery(this).data('markerid')],'click');
					    //});


					}



					google.maps.event.addDomListener(window, 'load', initialize);


			</script>
		<?php endif;?>

		<script>
	      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	      ga('create', 'UA-105179671-1', 'auto');
	      ga('send', 'pageview');

	    </script>


	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
					<header class="header" role="banner">
							
						 <!-- This navs will be applied to the topbar, above all content 
							  To see additional nav styles, visit the /parts directory -->
						 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
		 	
					</header> <!-- end .header -->