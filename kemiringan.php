<?php

    $koneksi = mysqli_connect("localhost", "root", "", "pirdas_modul4");

    $sql = mysqli_query($koneksi, "select * from prak_pirdas order by id_sensor_gerak desc"); 

    $data = mysqli_fetch_array($sql);
    $kemiringan = $data['kemiringan'];

    if( $kemiringan == "") $kemiringan = 0;

    echo $kemiringan;
?>