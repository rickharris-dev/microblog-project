var platform = new H.service.Platform({
  'app_id': 'GVrlcRwppQzFviXMlh2e',
  'app_code': 'p6b_EN6U5kzko3BI1-e2CQ'
});

// Get an object containing the default map layers:
var defaultLayers = platform.createDefaultLayers();

document.addEventListener("DOMContentLoaded", function(){

  // Instantiate the map using the normal map as the base layer:
  var map = new H.Map(document.getElementById('mapContainer'),
        defaultLayers.normal.map,
        {
          zoom: 16,
          center: { lat: 37.792085, lng: -122.4015567 },
        });
  // Enable the event system on the map instance:
  var mapEvents = new H.mapevents.MapEvents(map);
  // Instantiate the default behavior, providing the mapEvents object:
  var behavior = new H.mapevents.Behavior(mapEvents);
  // Create the default UI:
  var ui = new H.ui.UI.createDefault(map, defaultLayers);

  //Instantiate the Zoom Control, Set Alignment and add to the UI.
  var zoomRect = new H.ui.ZoomRectangle();
  zoomRect.setAlignment("right-middle");
  ui.addControl('zoomRect', zoomRect);

  // Add window resize listener to adjust the map dimensions.
  window.addEventListener('resize', function() {
    map.getViewPort().resize();
  });


  // Add map context menu event listener.
  map.addEventListener('contextmenu', onContextMenuRequested);
  function onContextMenuRequested(e) {
    // Creates the initial context item
    e.items.push(new H.util.ContextItem({
      label: 'Hello Holberton School!',
    }));
    // Instantiates the Geocoding Service
    var geocoder = platform.getGeocodingService();
    // Sets the parameters of the API call
    var rgcParams = {
        prox: map.screenToGeo(e.viewportX, e.viewportY).lat + ', ' + map.screenToGeo(e.viewportX, e.viewportY).lng,
        mode: 'retrieveAddresses',
        maxResults: 1
    };
    //Function used when a result is returned from the API Call
    function onRGCResult (result, contextMenuEvent) {
        // Obtains the address associated with the coordinates
        var addressLabel = result.Response.View[0].Result[0].Location.Address.Label;
        // Removes the previous context item
        contextMenuEvent.items.pop();
        // Adds the address label to the context menu
        contextMenuEvent.items.push(new H.util.ContextItem({
          label: addressLabel,
        }));
        // Fires the context menu event again to display the new menu
        contextMenuEvent.currentTarget.dispatchEvent(contextMenuEvent);
        // Prevents the process from repeatedly occurring
        contextMenuEvent.stopPropagation();
    };
    // Initializes the API call seetings onRGCResult and logging error as callback functions
    geocoder.reverseGeocode(rgcParams, function(result) {
      onRGCResult(result, e);
    }, function(error) {
      console.log(error);
    });
  }
});
