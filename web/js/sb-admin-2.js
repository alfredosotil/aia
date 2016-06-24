$(function () {

    $('#side-menu').metisMenu();

});

var geocoder;

function initialize() {
    geocoder = new google.maps.Geocoder();
}

function getMapProperty() {
    if (document.getElementById('property-map-view') !== null) {
        var lat = document.getElementById('property-map-view-latitude').innerHTML;
        var lng = document.getElementById('property-map-view-longitude').innerHTML;
        var url = GMaps.staticMapURL({
            lat: lat,
            lng: lng,
            markers: [
                {
                    lat: lat, 
                    lng: lng,
//                    size: 'medium', 
                    color: 'blue'},
            ]
        });
        document.getElementById('property-map-view').className = "";
        var img = document.createElement("img");
        img.src = url;
        img.class = "img-responsive";
        img.style.width = "100%";
        document.getElementById('property-map-view').appendChild(img);
    } else {        
        var map = new GMaps({
            el: '#property-map',
            lat: -12.043333,
            lng: -77.028333,
        });
        document.getElementById('property-map').style.height = '400px';
        document.getElementById('property-map').className = "";
        if (document.getElementById('property-latitude').value === '' &&
                document.getElementById('property-longitude').value === '' &&
                document.getElementById('property-address').value === '') {
            GMaps.geolocate({
                success: function (position) {
                    map.setCenter(position.coords.latitude, position.coords.longitude);
                    map.addMarker({
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                        draggable: true,
                        dragend: function (e) {
//                        alert(e.latLng.lat()+','+e.latLng.lng());
                            document.getElementById('property-latitude').value = e.latLng.lat();
                            document.getElementById('property-longitude').value = e.latLng.lng();
                            codeLatLng(e.latLng.lat(), e.latLng.lng(), document.getElementById('property-address'));
                        }
                    });
                    document.getElementById('property-latitude').value = position.coords.latitude;
                    document.getElementById('property-longitude').value = position.coords.longitude;
                    codeLatLng(position.coords.latitude, position.coords.longitude, document.getElementById('property-address'));
//                map.setContextMenu({
//                    control: 'map',
//                    options: [{
//                            title: 'Add marker',
//                            name: 'add_marker',
//                            action: function (e) {
//                                console.log(e.latLng.lat());
//                                console.log(e.latLng.lng());
//                                this.addMarker({
//                                    lat: e.latLng.lat(),
//                                    lng: e.latLng.lng(),
//                                    title: 'New marker'
//                                });
//                                this.hideContextMenu();
//                            }
//                        }, {
//                            title: 'Center here',
//                            name: 'center_here',
//                            action: function (e) {
//                                this.setCenter(e.latLng.lat(), e.latLng.lng());
//                            }
//                        }]
//                });
//                map.setContextMenu({
//                    control: 'marker',
//                    options: [{
//                            title: 'Center here',
//                            name: 'center_here',
//                            action: function (e) {
//                                this.setCenter(e.latLng.lat(), e.latLng.lng());
//                            }
//                        }]
//                });
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
            map.setCenter(lat, lng);
            map.addMarker({
                lat: lat,
                lng: lng,
                draggable: true,
                dragend: function (e) {
//                        alert(e.latLng.lat()+','+e.latLng.lng());
                    document.getElementById('property-latitude').value = e.latLng.lat();
                    document.getElementById('property-longitude').value = e.latLng.lng();
                    codeLatLng(e.latLng.lat(), e.latLng.lng(), document.getElementById('property-address'));
                }
            });
        }
    }
}

function codeLatLng(lat, lng, element) {
    var latlng = new google.maps.LatLng(lat, lng);
    geocoder.geocode({
        'latLng': latlng
    }, function (results, status) {
        if (status === google.maps.GeocoderStatus.OK) {
            if (results[1]) {
                console.log(results[1]);
//        var addressmap = results[1]
//        return addressmap.formatted_address;
//        return String(results[1]['formatted_address']);
//        element = JSON.stringify(results[1])
//        element = Object.keys(results[1])
//        element = Object.keys(results[1])
//                console.log(Object.keys(results[1]));
//                console.log(JSON.stringify(results[1]));
//                var text = JSON.stringify(results[1]);
//                var object = JSON.parse(text);
                element.value = results[1].formatted_address;
//                return JSON.parse(JSON.stringify(results[1]));
//                return object;
            } else {
                alert('No results found');
            }
        } else {
            alert('Geocoder failed due to: ' + status);
        }
    });
}

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
        setTimeout(function () {
            getMapProperty();
        }, 5000);

    });
});

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
