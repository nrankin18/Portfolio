const map = new mapboxgl.Map({
    container: 'map',
    style: carto.basemaps.positron,
    center: [-98, 40],
    zoom: 3
});

fetch('json/airports.json')
    .then(response => response.json())
    .then(function(data){
        const airportsSource = new carto.source.GeoJSON(data);
        const airportViz = new carto.Viz(`
            color: black
            width: 7
        `);
        const airportsLayer = new carto.Layer('airports', airportsSource, airportViz);

        airportsLayer.addTo(map);
    });

fetch('json/routes.json')
    .then(response => response.json())
    .then(function(data){
        const routesSource = new carto.source.GeoJSON(data);
        const routeViz = new carto.Viz(`
            color: black
            width: 2
        `);
        const routesLayer = new carto.Layer('routes', routesSource, routeViz);

        routesLayer.addTo(map);
    });