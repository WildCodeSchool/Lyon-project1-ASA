// *
// * Two maps on the same page
// * 2015 - en.marnoto.com
// *

// Get Geolocalisation
var userLatitude;
var userLongitude;

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        userLatitude += position.coords.latitude;
        userLongitude += position.coords.longitude;
    });
}

console.log(userLatitude);

// necessary variables
var mapLeft;
var infoWindowLeft;

// markersData variable stores the information necessary to each marker
var markersDataLeft = [
    {
        lat: 48.862725,
        lng: 2.287592,
        name: "BugBurger Paris",
        address1:"Rua Diogo Cão, 125",
        postalCode: "75000" // don't insert comma in the last item of each marker
    },
    {
        lat: 45.764043,
        lng: 4.835659,
        name: "BugBurger Lyon",
        address1:"Quinta dos Patos, n.º 2",
        postalCode: "69000" // don't insert comma in the last item of each marker
    },
    {
        lat: 43.604652,
        lng: 1.444209,
        name: "BugBurger Toulouse",
        address1:"Quinta dos Patos, n.º 2",
        postalCode: "31000" // don't insert comma in the last item of each marker
    },
    {
        lat: 48.573405,
        lng: 7.752111,
        name: "BugBurger Strasbourg",
        address1:"Quinta dos Patos, n.º 2",
        postalCode: "69000" // don't insert comma in the last item of each marker
    },
    {
        lat: 50.62925,
        lng: 3.057256,
        name: "BugBurger Lille",
        address1:"Quinta dos Patos, n.º 2",
        postalCode: "59000" // don't insert comma in the last item of each marker
    },
    {
        lat: 48.471285,
        lng: 1.014305,
        name: "BugBurger La Loupe",
        address1:"Quinta dos Patos, n.º 2",
        postalCode: "69000" // don't insert comma in the last item of each marker
    },
    {
        lat: 44.837789,
        lng: -0.57918,
        name: "BugBurger Bordeaux",
        address1:"Quinta dos Patos, n.º 2",
        postalCode: "33000" // don't insert comma in the last item of each marker
    },
    {
        lat: 47.902964,
        lng: 1.909251,
        name: "BugBurger Orléans",
        address1:"Rua dos Balneários do Complexo Desportivo",
        postalCode: "45000" // don't insert comma in the last item of each marker
    }
    // {
    //     lat: userLatitude,
    //     lng: userLongitude,
    //     name: "Your city",
    //     address1:"Your adress",
    //     postalCode: "Your postal code" // don't insert comma in the last item of each marker
    // }// don't insert comma in the last item
];


function initialize(setMap) {

    var mapOptions = {
        center: new google.maps.LatLng(40.601203,-8.668173),
        zoom: 11,
        mapTypeId: 'roadmap',
    };

    mapLeft = new google.maps.Map(document.getElementById('map-canvas-left'), mapOptions);

    // a new Info Window is created
    infoWindowLeft = new google.maps.InfoWindow();

    // Event that closes the Info Window with a click on the map
    google.maps.event.addListener(mapLeft, 'click', function() {
        infoWindowLeft.close();
    });


    // Finally displayMarkers() function is called to begin the markers creation
    displayMarkers(setMap);

}

google.maps.event.addDomListener(window, 'load', function(){ initialize("mapLeft") });


// This function will iterate over markersData array
// creating markers with createMarker function
function displayMarkers(setMap){

    var markersData = markersDataLeft;
    var map = mapLeft;

    // this variable sets the map bounds according to markers position
    var bounds = new google.maps.LatLngBounds();

    // for loop traverses markersData array calling createMarker function for each marker
    for (var i = 0; i < markersData.length; i++){

        var latlng = new google.maps.LatLng(markersData[i].lat, markersData[i].lng);
        var name = markersData[i].name;
        var address1 = markersData[i].address1;
        var address2 = markersData[i].address2;
        var postalCode = markersData[i].postalCode;

        createMarker(setMap, latlng, name, address1, address2, postalCode);

        // marker position is added to bounds variable
        bounds.extend(latlng);
    }

    // Finally the bounds variable is used to set the map bounds
    // with fitBounds() function
    map.fitBounds(bounds);
}

// This function creates each marker and it sets their Info Window content
function createMarker(setMap, latlng, name, address1, address2, postalCode){

    var map = mapLeft;
    var infoWindow = infoWindowLeft;

    var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        title: name
    });

    // This event expects a click on a marker
    // When this event is fired the Info Window content is created
    // and the Info Window is opened.
    google.maps.event.addListener(marker, 'click', function() {

        // Creating the content to be inserted in the infowindow
        var iwContent = '<div id="iw_containerMaps">' +
            '<div class="iw_title">' + name + '</div>' +
            '<div class="iw_content">' + address1 + '<br />' +
            address2 + '<br />' +
            postalCode + '</div></div>';

        // including content to the Info Window.
        infoWindow.setContent(iwContent);

        // opening the Info Window in the current map and at the current marker location.
        infoWindow.open(map, marker);
    });
}