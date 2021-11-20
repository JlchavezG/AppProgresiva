// tab scroll
this.$slideOut = $('#slideOut');

// Slideout show
this.$slideOut.find('.slideOutTab').on('click', function() {
  $("#slideOut").toggleClass('showSlideOut');
});

// mapa api google
var map;
var cord = {lat: 19.4446232, lng: -99.2718253} ;
 function initMap() {
   map = new google.maps.Map(document.getElementById('map'), {
     center: {lat: 19.4446232, lng: -99.2718253},
     zoom: 13
   });
   var marker = new google.maps.Marker({
   position: cord,
   map: map,
   title: 'Iscjlchavezg Developers'
});
}
