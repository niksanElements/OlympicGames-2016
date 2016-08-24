<?php $this->title = 'Venues'; ?>

<h1><?=htmlspecialchars($this->title)?></h1>
<main>
<table>
    <tr>
        <th>
        Venue Name
        </th>
        <th>
            Sports Played
        </th>
        <th>
            Venue Capacity
        </th>
    </tr>
    <?php foreach($this->venues as $venue): ?>
    <tr>
        <th>
            <?=$venue["venue_name"]?>
        </th>
        <th>
            <?=$venue["sport"]?>
        </th>
        <th>
            <?=$venue["capacity"]?>
        </th>
    </tr>
  <?php endforeach ?>
</table>
<div id="map" style="width:600px;height:300px;"></div>
</main>
<script src="https://maps.google.com/maps/api/js?v=3.24&key=AIzaSyB2rujYvIaXzZ_PzbGxlCvlnwlBefaVmXA"></script>
<script>
  function initMap() {
    let LatLng = {lat: -22.908333, lng: -43.196389};
    let map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: LatLng
    });

    <?php foreach($this->venues as $venue): ?>
      <?php if($venue["lon"] and $venue["lat"]): ?>
        let contentString<?=$venue["id"]?> = "<table>";
        contentString<?=$venue["id"]?> += "<tr><td>Venue: </td><td><strong><?=$venue["venue_name"]?></strong></td></tr>";
        contentString<?=$venue["id"]?> += "<tr><td>Sport: </td><td><strong><?=$venue["sport"]?></strong></td></tr>";
        contentString<?=$venue["id"]?> += "<tr><td>Capacity: </td><td><strong><?=$venue["capacity"]?></strong></td></tr>";
        contentString<?=$venue["id"]?> += "</table>";

        let infowindow<?=$venue["id"]?> = new google.maps.InfoWindow({
          content: contentString<?=$venue["id"]?>
        });

        let marker<?=$venue["id"]?> = new google.maps.Marker({
          position: {lat: <?=$venue["lat"]?>, lng: <?=$venue["lon"]?>},
          map: map,
          title: '<?=$venue["venue_name"]?>'
        });
        marker<?=$venue["id"]?>.addListener('click', function() {
          infowindow<?=$venue["id"]?>.open(map, marker<?=$venue["id"]?>);
        });
      <?php endif ?>
    <?php endforeach ?>
  }
  $(document).ready(function() {initMap()});
</script>
