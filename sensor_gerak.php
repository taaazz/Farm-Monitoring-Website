<?php

$koneksi = mysqli_connect("localhost", "root", "", "tubes");
$sql = mysqli_query($koneksi, "select * from sensor order by id_sensor desc");

$data = mysqli_fetch_array($sql);
$sensor_gerak = $data['sensor_gerak'];

if ($sensor_gerak  == "") $sensor_gerak  = 0;

echo $sensor_gerak;
?>