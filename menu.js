ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [51.30, 37.83],
        zoom: 13,
        controls: ['zoomControl'],
        behaviors: ['drag']
    });
}
