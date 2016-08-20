var map = L.map('map', {
    attributionControl: false
}).setView([37.944, 24.115], 6);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);
