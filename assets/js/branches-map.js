
var ib = new InfoBox();

function initialize() {

var mapOptions = {
  zoom: 12,
  center: new google.maps.LatLng(52.204872,0.120163),
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
  ['The Frontroom', 52.202977,0.138938, 1, '<p>The Frontroom <br/>23-25 Gwydir Street, Cambridge, CB1 2LG <br/>01223 305 600 <br/> <a href="http://www.frontroomcambridge.com/">Website</a></p>'],
  ['Fitzwilliam Museum',52.199678,0.119931, 2, '<p>Fitzwilliam Museum <br/>Trumpington St, Cambridge, CB2 1RB <br/>01223 332900 <br/> <a href="http://www.fitzmuseum.cam.ac.uk/">Website</a></p>'],
  ['Wysing Arts centre', 52.182077,-0.06977, 3, '<p>Wysing Arts Centre <br/>Fox Rd, Cambridge CB23 2TX <br/>01954 718881 <br/> <a href="http://www.wysingartscentre.org/">Website</a></p>'],
  ['Cambridge School of Art', 52.203825,0.134808, 4, '<p>Cambridge School of Art <br/>East Rd, Cambridge, CB1 1PT <br/>0845 271 3333 <br/> <a href="http://www.cambridgeschoolofart.com/">Website</a></p>'],
  ['Kettles yard', 52.210851,0.114637, 5, '<p>Kettles Yard <br/>  Castle St, Cambridge, CB3 0AQ <br/>01223 748100 <br/> <a href="http://www.kettlesyard.co.uk/">Website</a></p>'],
  ['Aid & Abet', 52.195218,0.136578, 7, '<p>Aid & Abet <br/>Station Road, Cambridge, CB1 2JW <br/> <a href="http://aidandabet.co.uk/">Website</a></p>'],
  ['The Junction', 52.190756,0.136522, 8, '<p>The Junction <br/>Clifton Way, Cambridge, CB1 7GX <br/>01223 511 511 <br/> <a href="http://www.junction.co.uk/">Website</a></p>']
];

/* var sites = [
    // List all locations for each pin
['The Frontroom', 52.202977,0.138938, 1, '<p>The Frontroom. <br/>23-25 Gwydir Street, Cambridge, CB1 2LG <br/>01223 305 600</p>']
];
*/

function createMarker(site, map){
    var siteLatLng = new google.maps.LatLng(site[1], site[2]);
    var marker = new google.maps.Marker({
        position: siteLatLng,
        map: map,
        title: site[0],
        zIndex: site[3],
        html: site[4],
        icon: "http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/map-marker.png" /* ,
        icon: "http://visualartscambridge.org/wp-content/uploads/2013/03/map-pin.png" this icon no longer available */
    });
    // Begin example code to get custom infobox
    var boxText = document.createElement("div");
    boxText.style.cssText = "border: 1px solid black; margin-top: 8px; background: yellow; padding: 5px;";
    boxText.innerHTML = marker.html;

    var myOptions = {
             content: boxText
            ,disableAutoPan: false
            ,maxWidth: 0
            ,pixelOffset: new google.maps.Size(-140, 0)
            ,zIndex: null
            ,boxStyle: { 
              background: "url('http://backlinelogistics.blazeoven.co.uk/wp-content/themes/Backline Transport/assets/images/map-marker.png') no-repeat"
              ,opacity: 0.75
              ,width: "280px"
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
   createMarker(markers[i], map);
 }
}

google.maps.event.addDomListener(window, 'load', initialize);