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
        zoom: 8,
        center: {
            lng: mapContainer.dataset.lon,
            lat: mapContainer.dataset.lat
        }
    });
