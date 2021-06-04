console.log('map init');
// Initialize the platform object:
var platform = new H.service.Platform({
    'apikey': 'N_R4nRSzpXuBQWin03_KtbZ6rphtkfkQOlqGxPVa1aQ'
});

// Obtain the default map types from the platform object
var maptypes = platform.createDefaultLayers();

// Instantiate (and display) a map object:
var map = new H.Map(
    document.getElementById('mapContainer'),
    maptypes.vector.normal.map, {
        zoom: 15,
        center: {
            lng: mapContainer.dataset.lon,
            lat: mapContainer.dataset.lat
        }
    });


// Define a variable holding SVG mark-up that defines an icon image:
var svgMarkup = '<svg width="75" height="75" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>';

// Create an icon, an object holding the latitude and longitude, and a marker:
var icon = new H.map.Icon(svgMarkup),
    coords = {lat: mapContainer.dataset.lat, lng: mapContainer.dataset.lon},
    marker = new H.map.Marker(coords, {icon: icon});

// Add the marker to the map and center the map at the location of the marker:
map.addObject(marker);
map.setCenter(coords);