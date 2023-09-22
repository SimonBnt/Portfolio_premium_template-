let map = L.map('map').setView([45.849998, 1.25], 13)

        // tiles loading //
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom: 5,
    maxZoom: 20,
    attribution: '© OpenStreetMap'
}).addTo(map)