<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="/js/gmaps.js"></script>
<script src="/js/lands-map.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var gMarkers = [];
        gMarkers['static'] = [];
        gMarkers['user'] = [];

        var viewTemplate = $('#view_marker_template').text();

        @foreach($lands as $land)

        gMarkers['static'].push({
            lat: {{{$land->latitude}}},
            lng: {{{$land->longitude}}},
            title: "{{{$land->title}}}",
            infoWindow: {
                content: viewTemplate.replace(/[[id]]/g, <?php echo $land->id; ?>)
            }
        });

        @endforeach
        map.addMarkers(gMarkers['static']);
    });
</script>



<div id="map"></div>


<script type="text/html" id="edit_marker_template">
    <h4><a href="/land/create?lat=[[lat]]&lng=[[lng]]">Agregar un terreno aqui</a></h4>
</script>

<script type="text/html" id="view_marker_template">
    <h4><a href="/land/view/[[id]]">Ver</a></h4>
</script>
