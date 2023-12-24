<?php

$koneksi = mysqli_connect("localhost", "root", "", "tubes");
$sql = mysqli_query($koneksi, "select * from sensor order by id_sensor desc");

$data = mysqli_fetch_array($sql);
$sensor_hujan = $data['sensor_hujan'];

if ($sensor_hujan  == "") $sensor_hujan  = 0;

echo $sensor_hujan;
?>