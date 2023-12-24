<?php

$koneksi = mysqli_connect("localhost", "root", "", "tubes");
$sql = mysqli_query($koneksi, "select * from sensor order by id_sensor desc");

$data = mysqli_fetch_array($sql);
$kelembapan = $data['kelembapan'];

if ($kelembapan == "") $kelembapan = 0;

echo $kelembapan;
?>