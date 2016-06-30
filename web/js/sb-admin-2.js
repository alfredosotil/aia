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
        getMapProperty();
    });
});

$(function () {

    $('#side-menu').metisMenu();

});

var geocoder;

function initialize() {
    geocoder = new google.maps.Geocoder();
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
            document.getElementById('property-map-view').style.height = '400px';
            document.getElementById('property-map-view').className = "";
            var latlng = new google.maps.LatLng(lat, lng)
            map.setCenter(latlng);
            marker = new google.maps.Marker({
                position: latlng,
                map: map,
                draggable: false,
            });

//            var lat = document.getElementById('property-map-view-latitude').innerHTML;
//            var lng = document.getElementById('property-map-view-longitude').innerHTML;
//            var url = GMaps.staticMapURL({
//                lat: lat,
//                lng: lng,
//                markers: [
//                    {
//                        lat: lat,
//                        lng: lng,
////                    size: 'medium', 
//                        color: 'blue'},
//                ]
//            });
//            document.getElementById('property-map-view').className = "";
//            var img = document.createElement("img");
//            img.src = url;
//            img.class = "img-responsive";
//            img.style.width = "100%";
//            document.getElementById('link-photo-map').href = url;
//            document.getElementById('property-map-view').appendChild(img);
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
            document.getElementById('property-map').style.height = '400px';
            document.getElementById('property-map').className = "";
            if (document.getElementById('property-latitude').value === '' &&
                    document.getElementById('property-longitude').value === '' &&
                    document.getElementById('property-address').value === '') {
                GMaps.geolocate({
                    success: function (position) {
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
                    },
                    error: function (error) {
                        alert('Geolocation failed: ' + error.message);
                    },
                    not_supported: function () {
                        alert('Your browser does not support geolocation');
                    },
                    always: function () {
                        //alert('Done!');
                    }
                });
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
    }, 3000);

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
