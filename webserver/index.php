<?php
$cities = ['kyiv','london','berlin','tokyo','ottawa','canberra','cairo','washington'];
foreach ($cities as $city) {
  $data = @file_get_contents("http://$city:5000/");
  if ($data) {
    $weather = json_decode($data, true);
    echo "<p><b>{$weather['city']}</b>: {$weather['temperature']}°C, {$weather['sky']}, тиск:
{$weather['pressure']} hPa</p>";
  } else {
    echo "<p>$city: недоступний</p>";
  }
}
?>
