<!-- INICIO MAPA -->
<div class="container" id="mapa">
    <div class="row">
        <div class="col-sm-12">
            <div id="titulos">COMO CHEGAR</div><div class="block_titulo"></div><div class="block_titulo_linha"></div>
            <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8172815173184!2d-51.05350438470885!3d0.041345899969839485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d61e0e107b6a6e3%3A0xa3bffd23b7f8d243!2sPRODAP!5e0!3m2!1spt-BR!2sus!4v1484311849832" style="border:0" allowfullscreen="" width="100%" height="200" frameborder="0"></iframe>-->
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:200px;width:1140px;'><div id='gmap_canvas' style='height:200px;width:1140px;'></div>
                <div><small><a href="http://embedgooglemaps.com">embed google map</a></small></div><div><small><a href="http://proxysitereviews.com/">proxy sites</a></small></div>
                <style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map() {
                    var myOptions = {zoom: 16, center: new google.maps.LatLng(0.0317906, -51.05478979999998), mapTypeId: google.maps.MapTypeId.ROADMAP};
                    map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                    marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(0.0317906, -51.05478979999998)});
                    infowindow = new google.maps.InfoWindow({content: '<strong> Procuradoria do Estado do Amapá</strong><br>PGE, Macapá<br>'});
                    google.maps.event.addListener(marker, 'click', function () {
                        infowindow.open(map, marker);
                    });
                    infowindow.open(map, marker);
                }
                google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
    </div>
</div>
<!-- FIM MAPA -->