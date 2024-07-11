// Coordonées
let adress = { "lat": 44.896, "lon": 1.151 };

// Créer la map Leaflet
let map = L.map('map').setView([adress.lat, adress.lon], 13);

// Ajout des tuiles OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    minZoom: 5,
    maxZoom: 20,
    attribution: '© OpenStreetMap'
}).addTo(map);

// Ajout d'un marqueur
let marqueur = L.marker([adress.lat, adress.lon], { draggable: false }).addTo(map);

// Création d'un popup
marqueur.bindPopup("You are there").openPopup();