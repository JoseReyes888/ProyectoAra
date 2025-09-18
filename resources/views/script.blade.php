<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lotes con estatus en Mapbox - Vista de Relieve</title>
  <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
  <script src="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.js"></script>
  <link href="https://api.mapbox.com/mapbox-gl-js/v3.3.0/mapbox-gl.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/script.css') }}" rel="stylesheet">
</head>
<body>
<img id="logo" src="OCEANICA.png" alt="Logo del Fraccionamiento">
<div id="map"></div>

<!-- Rosa de los vientos -->
<div class="compass">
  <div class="compass-inner">
    <div class="compass-n">N</div>
    <div class="compass-arrow"></div>
    <i class="fas fa-diamond" style="font-size: 12px;"></i>
  </div>
</div>

<!-- Leyenda de estatus -->
<div class="legend">
  <div class="legend-title">Estatus de Lotes</div>
  <div class="legend-item">
    <div class="legend-color" style="background-color: #4CAF50;"></div>
    <span>Disponible</span>
  </div>
  <div class="legend-item">
    <div class="legend-color" style="background-color: #F44336;"></div>
    <span>Vendido</span>
  </div>
  <div class="legend-item">
    <div class="legend-color" style="background-color: #FF9800;"></div>
    <span>Apartado</span>
  </div>
</div>

<!-- Botón para resetear orientación -->
<div class="reset-bearing">
  <i class="fas fa-compass"></i>
</div>

<script>
  // 🔑 Coloca tu token de Mapbox aquí
  mapboxgl.accessToken = 'pk.eyJ1Ijoicm9qYXNkZXYiLCJhIjoiY21leDF4N2JtMTI0NTJrcHlsdjBiN2Y3YiJ9.RB87H34djrYH3WrRa-12Pg';

  const map = new mapboxgl.Map({
    container: 'map',
    // Cambiado a estilo de relieve/satélite con etiquetas
    style: 'mapbox://styles/mapbox/satellite-streets-v12',
    center: [-96.5, 15.7],
    zoom: 14,
    pitch: 45,   // inclinación para 3D
    bearing: -17, // orientación opcional
    antialias: true // Mejora la renderización para un aspecto más suave
  });

  // Actualizar la rosa de los vientos según el movimiento del mapa
  function updateCompass() {
    const bearing = map.getBearing();
    document.querySelector('.compass-inner').style.transform = `rotate(${-bearing}deg)`;
  }

  // Rotar la rosa de los vientos cuando el mapa se mueva
  map.on('rotate', updateCompass);
  
  // Inicializar la rosa de los vientos
  map.on('load', () => {
    updateCompass();
    
    // Botón para resetear la orientación norte
    document.querySelector('.reset-bearing').addEventListener('click', () => {
      map.easeTo({
        bearing: 0,
        duration: 1000
      });
    });

    // Añadir capa de terreno con mayor exageración para mejor visualización del relieve
    map.addSource('mapbox-dem', {
      type: 'raster-dem',
      url: 'mapbox://mapbox.mapbox-terrain-dem-v1',
      tileSize: 512,
      maxzoom: 14
    });
    
    // Aumentar la exageración del terreno para que el relieve sea más visible
    map.setTerrain({ source: 'mapbox-dem', exaggeration: 2.5 });

    // Intentar cargar el archivo GeoJSON, si falla usar datos de ejemplo
    function loadGeoJSON() {
      return fetch('lotes.geojson')
        .then(res => {
          if (!res.ok) throw new Error('No se pudo cargar el archivo GeoJSON');
          return res.json();
        })
        .catch(error => {
          console.error('Error cargando lotes.geojson, usando datos de ejemplo:', error);
          return sampleData;
        });
    }

    loadGeoJSON().then(data => {
      // Filtrar elementos que no tienen número de lote (como el polígono del fraccionamiento)
      const filteredData = {
        ...data,
        features: data.features.filter(feature => 
          feature.properties.lote && feature.properties.lote.trim() !== ""
        )
      };

      // Añadir el polígono del fraccionamiento como una capa separada
      const fraccionamiento = data.features.find(feature => 
        feature.properties.estatus === "Fraccionamiento"
      );

      if (fraccionamiento) {
        map.addSource('fraccionamiento', {
          type: 'geojson',
          data: {
            type: 'FeatureCollection',
            features: [fraccionamiento]
          }
        });

        // Hacer el polígono del fraccionamiento semi-transparente para ver el relieve debajo
        map.addLayer({
          id: 'fraccionamiento-fill',
          type: 'fill',
          source: 'fraccionamiento',
          paint: {
            'fill-color': '#e3f2fd',
            'fill-opacity': 0.2
          }
        });

        map.addLayer({
          id: 'fraccionamiento-border',
          type: 'line',
          source: 'fraccionamiento',
          paint: {
            'line-color': '#0d47a1',
            'line-width': 2,
            'line-opacity': 0.6
          }
        });
      }

      map.addSource('lotes', {
        type: 'geojson',
        data: filteredData
      });

      // Ajustar el mapa para que se centre en todos los lotes
      const bounds = new mapboxgl.LngLatBounds();
      data.features.forEach(feature => {
        if (feature.geometry && feature.geometry.coordinates && feature.geometry.coordinates[0]) {
          feature.geometry.coordinates[0].forEach(coord => bounds.extend(coord));
        }
      });
      
      // Solo ajustar los límites si tenemos datos válidos
      if (bounds.isEmpty()) {
        bounds.extend([-96.51, 15.70]);
        bounds.extend([-96.50, 15.71]);
      }
      
      map.fitBounds(bounds, { padding: 50 });

      // Capa para pintar polígonos con colores semitransparentes para ver el relieve
      map.addLayer({
        id: 'lotes-fill',
        type: 'fill',
        source: 'lotes',
        paint: {
          'fill-color': [
            'match',
            ['get', 'estatus'],
            'disponible', 'rgba(76, 175, 80, 0.5)',     // Verde semitransparente
            'vendido', 'rgba(244, 67, 54, 0.5)',        // Rojo semitransparente
            'apartado', 'rgba(255, 152, 0, 0.5)',       // Naranja semitransparente
            'rgba(33, 150, 243, 0.5)'                   // Azul semitransparente por defecto
          ],
          'fill-opacity': 0.6
        }
      });

      // Capa de bordes con degradado
      map.addLayer({
        id: 'lotes-borders',
        type: 'line',
        source: 'lotes',
        paint: {
          'line-color': [
            'match',
            ['get', 'estatus'],
            'disponible', '#2E7D32',     // Verde oscuro
            'vendido', '#C62828',        // Rojo oscuro
            'apartado', '#EF6C00',       // Naranja oscuro
            '#0d47a1'                   // Azul oscuro por defecto
          ],
          'line-width': 2,
          'line-opacity': 0.9
        }
      });

      // Crear un elemento HTML personalizado para cada lote
      filteredData.features.forEach(function(feature) {
        const properties = feature.properties;
        const coordinates = getCentroid(feature.geometry.coordinates[0]);
        
        // Crear el elemento HTML personalizado
        const el = document.createElement('div');
        el.className = 'lote-marker';
        
        // Determinar clase CSS según el estatus
        let badgeClass = '';
        switch(properties.estatus) {
          case 'disponible':
            badgeClass = 'badge-disponible';
            break;
          case 'vendido':
            badgeClass = 'badge-vendido';
            break;
          case 'apartado':
            badgeClass = 'badge-apartado';
            break;
        }
        
        el.innerHTML = `<div class="lote-badge ${badgeClass}">${properties.lote}</div>`;
        
        // Añadir marcador al mapa
        new mapboxgl.Marker(el)
          .setLngLat(coordinates)
          .addTo(map);
      });

      // Popup al dar clic en un lote
      map.on('click', 'lotes-fill', (e) => {
        const props = e.features[0].properties;
        
        // Determinar clase CSS según el estatus
        let statusClass = '';
        switch(props.estatus) {
          case 'disponible':
            statusClass = 'disponible';
            break;
          case 'vendido':
            statusClass = 'vendido';
            break;
          case 'apartado':
            statusClass = 'apartado';
            break;
        }
        
        new mapboxgl.Popup()
          .setLngLat(e.lngLat)
          .setHTML(`
            <div class="lote-info">
              <div class="lote-numero">Lote ${props.lote}</div>
              <div class="lote-area">${props["Area (m²)"]} m²</div>
              <span class="estatus-badge ${statusClass}">${props.estatus.toUpperCase()}</span>
              
              <div class="lote-details">
                <div class="lote-detail-row">
                  <span class="lote-detail-label">Manzana:</span>
                  <span class="lote-detail-value">${props.manzana}</span>
                </div>
                <div class="lote-detail-row">
                  <span class="lote-detail-label">Norte:</span>
                  <span class="lote-detail-value">${props["Norte:"]} m</span>
                </div>
                <div class="lote-detail-row">
                  <span class="lote-detail-label">Sur:</span>
                  <span class="lote-detail-value">${props["Sur:"]} m</span>
                </div>
                <div class="lote-detail-row">
                  <span class="lote-detail-label">Oriente:</span>
                  <span class="lote-detail-value">${props["Oriente:"]} m</span>
                </div>
                <div class="lote-detail-row">
                  <span class="lote-detail-label">Poniente:</span>
                  <span class="lote-detail-value">${props["Poniente:"]} m</span>
                </div>
              </div>
            </div>
          `)
          .addTo(map);
      });

      // Cambiar cursor al pasar sobre un lote
      map.on('mouseenter', 'lotes-fill', () => { 
        map.getCanvas().style.cursor = 'pointer'; 
      });
      map.on('mouseleave', 'lotes-fill', () => { 
        map.getCanvas().style.cursor = ''; 
      });
    });
    
    // Función para calcular el centroide de un polígono
    function getCentroid(coords) {
      let x = 0, y = 0;
      for (let i = 0; i < coords.length - 1; i++) {
        x += coords[i][0];
        y += coords[i][1];
      }
      return [x / (coords.length - 1), y / (coords.length - 1)];
    }
  });

  
</script>
</body>
</html>