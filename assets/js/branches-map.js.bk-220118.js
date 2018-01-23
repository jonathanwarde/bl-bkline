// If we make map Global, we can access it via DOM elemenst OUTSIDE Of the map object
var map;



// Then wrap and init the map in a function
function initMap() {

//var markers = [];

var markers = [];

jQuery(document).ready(function() {
    //var baseurl = "http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/";
    //var mapstyles=[{"stylers":[{"saturation":-100},{"gamma":0.8},{"lightness":4},{"visibility":"on"}]},{"featureType":"landscape.natural","stylers":[{"visibility":"on"},{"color":"#82c341"},{"gamma":0.97},{"lightness":-20},{"saturation":100}]}];
    var branchLocations = [
    {
        "title": "Avonmouth Branch", "lat": 51.502751, "lng": -2.685488, "description": "<div class=\"br-infowindow\"><h6>Avonmouth Branch</h6><p>Suite 20,<br>Richmond House,<br>Avonmouth Way<br>,Avonmouth,<br>Bristol,BS11 8DE</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly-tatlow.jpg\"></div>"
    },
    {
        "title": "Bridgwater Branch", "lat": 51.111535, "lng": -2.992747, "description": "<div class=\"br-infowindow\"><h6>Bridgwater Branch</h6><p>Unit 7 Crossways Road,<br>Thistle Park,<br>Bridgwater,<br>Somerset,TA6 6LS</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/simon-steer.jpg\"></div>"
    },
    {
        "title": "Cornwall Branch", "lat": 50.419196, "lng": -4.830729, "description": "<div class=\"br-infowindow\"><h6>Cornwall Branch</h6><p>A200 Advent House,<br>Station Approach,<br>Roche, Cornwall PL26 8LG</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/jake.jpg\"></div>"
    },
    {
        "title": "Exeter Branch", "lat": 50.709992, "lng": -3.537023, "description": "<div class=\"br-infowindow\"><h6>Meridian House</h6><p>Retail Park Close,<br>Marsh Barton,<br>Exeter, EX2 8LG</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/tom.jpg\"></div>"
    },
    {
        "title": "Backline Outbase", "lat": 50.707258, "lng": -3.415157, "description": "<div class=\"br-infowindow\"><h6>Mushroom Road</h6><p>Hill Barton Business Park,<br>Clyst St Mary,<br>Nr Exeter, EX5 1DR</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly.jpg\"></div>"
    },
    {
        "title": "Plymouth Branch", "lat": 50.394791, "lng": -4.039426, "description": "<div class=\"br-infowindow\"><h6>Plymouth Branch</h6><p>Unit 1 Alder Court,<br>Bell Close,<br>Plympton,<br>Plymouth,<br>Devon PL7 4JH</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kelly.jpg\"></div>"
    },
    {
        "title": "Skilled Division", "lat": 50.710020, "lng": -3.537012, "description": "<div class=\"br-infowindow\"><h6>Skilled Division</h6><p>Retail Park Close,<br>Exeter Devon EX2 8LG</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/donna.jpg\"></div>"
    },
    {
        "title": "Backline Training", "lat": 50.394791, "lng": -4.039480, "description": "<div class=\"br-infowindow\"><h6>Backline Training</h6><p>Unit 1 Alder Court,<br>Bell Close,<br>Plympton PL7 4JH</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/sam.jpg\"></div>"
    },
    {
        "title": "Winchester Division", "lat": 51.066152, "lng": -1.299070, "description": "<div class=\"br-infowindow\"><h6>Winchester Division</h6><p>Unit 2 Scylla Industrial Estate,<br>Winnall Valley Road,<br>Winchester SO23 0LD</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kate.jpg\"></div>"
    },
    {
        "title": "Yeovil Branch", "lat": 50.935104, "lng": -2.665279, "description": "<div class=\"br-infowindow\"><h6>Yeovil Branch</h6><p>Unit 2 Plot 13, Brympton Way,<br>Lynx West Trading Estate,<br>Yeovil,<br>Somerset, BA20 2HP</p><img src=\"http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/branches/kate.jpg\"></div>"
    }
    ];

    var mapDiv = document.getElementById('branchesMap');

    map = new google.maps.Map(document.getElementById('branchesMap'), {
        center: new google.maps.LatLng(51.014998, -2.751539),
        //disableDefaultUI: true,
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });

    var image = new google.maps.MarkerImage("http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/map-marker.png", null, null, null, new google.maps.Size(83, 83));

    var marker, i;

    var infoWindow=new google.maps.InfoWindow();


    for(var i=0, length=branchLocations.length;i<length;i++) {

         // Append a link to the markers DIV for each marker
        //jQuery('#branches-list').append('<a class="marker-link" data-markerid="' + i + '" href="#">' + branchLocations[i][1] + '</a> ');

        var data=branchLocations[i], latLng=new google.maps.LatLng(data.lat, data.lng);
        var marker=new google.maps.Marker( {
            position: latLng, map: map, title: data.title, icon: image
        }
        );
        // Open inforwindow when marker clicked
        (function(marker, data) {
            google.maps.event.addListener(marker, "click", function(e) {
                infoWindow.setContent(data.description);
                infoWindow.open(map, marker);
            }
            );
        }
        )(marker, data);
        // Close info windows when map clicked
        (function(marker, data) {
            google.maps.event.addListener(map, "click", function(e) {
                infoWindow.setContent(data.description);
                infoWindow.close(map, marker);
            }
            );
        }
        )(marker, data);
    }

// push markers into empty "markers" array at top of page. We can then access each instance of a marker
// via its index. For example, with myClick function below - just pass in the ID
markers.push(marker);

}

);


// Trigger a click event on each marker when the corresponding marker link is clicked
    //jQuery('.marker-link').on('click', function () {

        //google.maps.event.trigger(markers[jQuery(this).data('markerid')], 'click');
    //});


}
google.maps.event.addDomListener(window, "load", initMap);

//function myClick(id){
    //google.maps.event.trigger(markers[id], 'click');
//}