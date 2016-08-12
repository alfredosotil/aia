google.maps.event.addDomListener(window, 'load', initialize);
//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
jQuery(window).load(function () {
//    $.ajaxPrefilter(function (options, originalOptions, jqXHR) {
//        options.async = true;
//    });
    $(".loader-bg").fadeOut('slow');
    $('div.property').on('shown.bs.modal', function () {
//        getMapProperty();
//        initOwlProperty();
    });
});

$(function () {

    $('#side-menu').metisMenu();

});

var geocoder;

function initialize() {
    geocoder = new google.maps.Geocoder();
}

function initOwlProperty() {
    setTimeout(function () {
        if ($("#owl-images-property").length) {
            $("#owl-images-property").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                items: 2,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]
            });
        }
    }, 1000);
}

function initializeSearchBox(map) {

    var markers = [];
//  var map = new google.maps.Map(document.getElementById('map-canvas'), {
//    mapTypeId: google.maps.MapTypeId.ROADMAP
//  });

    var defaultBounds = new google.maps.LatLngBounds(
            new google.maps.LatLng(-12.043333, -77.028333),
            new google.maps.LatLng(-12.043333, -77.028333));
    map.fitBounds(defaultBounds);
    var listener = google.maps.event.addListener(map, "idle", function () {
        if (map.getZoom() > 15)
            map.setZoom(15);
        google.maps.event.removeListener(listener);
    });
    // Create the search box and link it to the UI element.
    var input = /** @type {HTMLInputElement} */(
            document.getElementById('pac-input'));
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var searchBox = new google.maps.places.SearchBox(
            /** @type {HTMLInputElement} */(input));

    // Listen for the event fired when the user selects an item from the
    // pick list. Retrieve the matching places for that item.
    google.maps.event.addListener(searchBox, 'places_changed', function () {
        var places = searchBox.getPlaces();

        if (places.length == 0) {
            return;
        }
        for (var i = 0, marker; marker = markers[i]; i++) {
            marker.setMap(null);
        }

        // For each place, get the icon, place name, and location.
        markers = [];
        var bounds = new google.maps.LatLngBounds();
        for (var i = 0, place; place = places[i]; i++) {
            var image = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            var marker = new google.maps.Marker({
                map: map,
                icon: image,
                title: place.name,
                position: place.geometry.location
            });

            markers.push(marker);

            bounds.extend(place.geometry.location);
        }
        map.fitBounds(bounds);
        var listener = google.maps.event.addListener(map, "idle", function () {
            if (map.getZoom() > 15)
                map.setZoom(15);
            google.maps.event.removeListener(listener);
        });
    });

    // Bias the SearchBox results towards places that are within the bounds of the
    // current map's viewport.
    google.maps.event.addListener(map, 'bounds_changed', function () {
        var bounds = map.getBounds();
        searchBox.setBounds(bounds);
    });
}

function getMapProperty() {
    setTimeout(function () {
        if (document.getElementById('property-map-view') !== null) {
            var lat = document.getElementById('property-map-view-latitude').innerHTML;
            var lng = document.getElementById('property-map-view-longitude').innerHTML;
            var map;
            var marker;
            var myOptions = {
                zoom: 16,
                minZoom: 12,
                maxZoom: 18,
                center: new google.maps.LatLng(lat, lng),
                scrollwheel: false,
                rotateControl: false,
                panControl: false,
                streetViewControl: false,
                keyboardShortcuts: false,
                mapTypeControl: false,
                scaleControl: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('property-map-view'), myOptions);
            document.getElementById('property-map-view').className = "";
            document.getElementById('property-map-view').style.height = '400px';
            google.maps.event.trigger(map, "resize");
            var latlng = new google.maps.LatLng(lat, lng)
            map.setCenter(latlng);
            marker = new google.maps.Marker({
                position: latlng,
                map: map,
                draggable: false,
            });
        } else {
            var map;
            var marker;
            var myOptions = {
                zoom: 16,
//            minZoom: 12,
//            maxZoom: 18,
                center: new google.maps.LatLng(-12.043333, -77.028333),
                scrollwheel: false,
                rotateControl: true,
//            panControl: true,
//            streetViewControl: true,
//            keyboardShortcuts: false,
//            mapTypeControl: false,
//            scaleControl: true,
//            mapTypeId: google.maps.MapTypeId.ROADMAP,
            };
            map = new google.maps.Map(document.getElementById('property-map'), myOptions);
            initializeSearchBox(map);
            document.getElementById('property-map').className = "";
            document.getElementById('property-map').style.height = '400px';
            google.maps.event.trigger(map, "resize");
            if (document.getElementById('property-latitude').value === '' &&
                    document.getElementById('property-longitude').value === '' &&
                    document.getElementById('property-address').value === '') {

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function (position) {
                        var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                        map.setCenter(latlng);
                        marker = new google.maps.Marker({
                            position: latlng,
                            map: map,
                            draggable: true,
                        });
                        google.maps.event.addListener(marker, 'dragend', function (e) {
                            document.getElementById('property-latitude').value = e.latLng.lat();
                            document.getElementById('property-longitude').value = e.latLng.lng();
                            codeLatLng(e.latLng.lat(), e.latLng.lng(), document.getElementById('property-address'));
                            map.panTo(e.latLng);
                        });
                        google.maps.event.addListener(map, 'click', function (e) {
                            if (marker) {
                                marker.setPosition(e.latLng);
                                document.getElementById('property-latitude').value = e.latLng.lat();
                                document.getElementById('property-longitude').value = e.latLng.lng();
                                codeLatLng(e.latLng.lat(), e.latLng.lng(), document.getElementById('property-address'));
                            }
                            map.panTo(e.latLng);
                        });

                        document.getElementById('property-latitude').value = position.coords.latitude;
                        document.getElementById('property-longitude').value = position.coords.longitude;
                        codeLatLng(position.coords.latitude, position.coords.longitude, document.getElementById('property-address'));
                    }, function () {
                    });
                } else {
                    // Browser doesn't support Geolocation
                    alert('Geolocation failed');
                }
            } else {
                var lat = document.getElementById('property-latitude').value;
                var lng = document.getElementById('property-longitude').value;
                var latlng = new google.maps.LatLng(lat, lng);
//            var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude)
                map.setCenter(latlng);
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    draggable: true,
                });
                google.maps.event.addListener(marker, 'dragend', function (e) {
                    document.getElementById('property-latitude').value = e.latLng.lat();
                    document.getElementById('property-longitude').value = e.latLng.lng();
                    codeLatLng(e.latLng.lat(), e.latLng.lng(), document.getElementById('property-address'));
                    map.panTo(e.latLng);
                });
                google.maps.event.addListener(map, 'click', function (e) {
                    if (marker) {
                        marker.setPosition(e.latLng);
                        document.getElementById('property-latitude').value = e.latLng.lat();
                        document.getElementById('property-longitude').value = e.latLng.lng();
                        codeLatLng(e.latLng.lat(), e.latLng.lng(), document.getElementById('property-address'));
                    }
                    map.panTo(e.latLng);
                });

//            document.getElementById('property-latitude').value = position.coords.latitude;
//            document.getElementById('property-longitude').value = position.coords.longitude;
//            codeLatLng(position.coords.latitude, position.coords.longitude, document.getElementById('property-address'));
            }
        }
    }, 1000);

}

function codeLatLng(lat, lng, element) {
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({
        'latLng': latlng
    }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
//                console.log(results[1]);
                element.value = results[1].formatted_address;
            } else {
                alert('No results found');
            }
        } else {
            alert('Geocoder failed due to: ' + status);
        }
    });
}

$(function () {
    $(window).bind("load resize", function () {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1)
            height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function () {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});
