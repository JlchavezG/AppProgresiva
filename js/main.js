function findMe(){
   var output = document.getElementById('map');
   nombre = '<?=$nombre ?>';
   // Verificar si soporta geolocalizacion
   if (navigator.geolocation) {
       output.innerHTML = "<p>Tu navegador soporta Geolocalizacion</p>";
       output.innerHTML = nombre;
   }else{
      output.innerHTML = "<p>Tu navegador no soporta Geolocalizacion</p>";
   }
     //Obtenemos latitud y longitud
      function localizacion(posicion){
        var latitude = posicion.coords.latitude;
        var longitude = posicion.coords.longitude;
        var ventana ='<h5>Tu Domicilio</h5>'+'<p>Para servicios o envio de pagos</p>';

        output.innerHTML ="<p>Latitud: "+latitude+"<br> Longitud: "+longitude+"</p>";
        const myLatLng = { lat:latitude, lng: longitude };
        const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: myLatLng,
        // cambiar a terreno  mapTypeId: 'satellite',
      });
        marcador = new google.maps.Marker({
        position: myLatLng,
        draggable: true,
        map,
        title: "Te encuentras aqui!",
        });
        var info = new google.maps.InfoWindow({
          content: ventana
        });
        marcador.addListener('click',function(){
          info.open(map, marcador);
        });
        marcador.addListener('dragend',function(event){
          document.getElementById("latitud").value = this.getPosition().lat();
          document.getElementById("longitud").value = this.getPosition().lng();
        })



      }
      function error(){
      output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";
      }
     navigator.geolocation.getCurrentPosition(localizacion,error);
   }
