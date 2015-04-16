var map;
$(document).ready(function(){
    map = new GMaps({
        div: '#map',
        lat: -34.603978,
        lng: -58.386560,
        zoom: 13
    });

    /* ---Geolocation--- */
    GMaps.geolocate({
        success: function(position) {
            map.setCenter(position.coords.latitude, position.coords.longitude);
        },
        error: function(error) {
            //alert('Geolocation failed: '+error.message);
        },
        not_supported: function() {
            //alert("Your browser does not support geolocation");
        },
        always: function() {
            //alert("Done!");
        }
    });
    /* ---Geolocation--- */
});
