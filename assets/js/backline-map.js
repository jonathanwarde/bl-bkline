function initialise() {

    var myLatlng = new google.maps.LatLng(51.664571, -.027405); // Add the coordinates

    var grayStyles = 

    [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"on"},{"color":"#716464"},{"weight":"0.01"}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels.text","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"visibility":"simplified"}]},{"featureType":"poi.attraction","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"simplified"},{"color":"#a05519"},{"saturation":"13"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"transit.station","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#84afa3"},{"lightness":52}]},{"featureType":"water","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"}]}]

    var mapOptions = {
            zoom: 9, // The initial zoom level when your map loads (0-20)
            minZoom: 2, // Minimum zoom level allowed (0-20)
            maxZoom: 17, // Maximum soom level allowed (0-20)
            zoomControl:true, // Set to true if using zoomControlOptions below, or false to remove all zoom controls.
            //zoomControlOptions: {
               // style:google.maps.ZoomControlStyle.DEFAULT // Change to SMALL to force just the + and - buttons.
            //},
            center: myLatlng, // Centre the Map to our coordinates variable
            mapTypeId: google.maps.MapTypeId.ROADMAP, // Set the type of Map
            scrollwheel: false, // Disable Mouse Scroll zooming (Essential for responsive sites!)
            // All of the below are set to true by default, so simply remove if set to true:
            panControl:false, // Set to false to disable
            mapTypeControl:false, // Disable Map/Satellite switch
            scaleControl:false, // Set to false to hide scale
            streetViewControl:false, // Set to disable to hide street view
            overviewMapControl:false, // Set to false to remove overview control
            rotateControl:false, // Set to false to disable rotate control
            styles: grayStyles,
            disableDefaultUI:true,
            scrollwheel:true

        }



        var map = new google.maps.Map(document.getElementById('backline-map2'), mapOptions); // Render our map within the empty div
        
        var image = new google.maps.MarkerImage("https://backlinetransport.co.uk/wp-content/themes/Backline%20Transport/assets/images/map-marker.png", null, null, null, new google.maps.Size(80,80)); // Create a variable for our marker image.
            
        var marker = new google.maps.Marker({ // Set the marker
            position: myLatlng, // Position marker to coordinates
            icon:image, //use our image as the marker
            map: map, // assign the marker to our map variable
            title: 'Click to visit Backline on Google Places' // Marker ALT Text
        });
        
        //  google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker 
        //      window.location='http://www.snowdonrailway.co.uk/shop_and_cafe.php'; // URL to Link Marker to (i.e Google Places Listing)
        //  });
        
        var infowindow = new google.maps.InfoWindow({ // Create a new InfoWindow
            content:"<h5>Backline Transport</h5>" // HTML contents of the InfoWindow
        });
 
        google.maps.event.addListener(marker, 'click', function() { // Add a Click Listener to our marker
            infowindow.open(map,marker); // Open our InfoWindow
        });
        // comment out the line below if you DO NOT want the infowindow open by default
        //infowindow.open(map,marker);
        
        google.maps.event.addDomListener(window, 'resize', function() { map.setCenter(myLatlng); }); // Keeps the Pin Central when resizing the browser on responsive sites
    }
   google.maps.event.addDomListener(window, 'load', initialise); // Execute our 'initialise' function once the page has loaded. */