$(function () {

    $('#side-menu').metisMenu();

});

var geocoder;

function initialize() {
    geocoder = new google.maps.Geocoder();
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
