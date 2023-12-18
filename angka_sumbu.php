<?php

$koneksi = mysqli_connect("localhost", "root", "", "pirdas_modul4");
    $sql = mysqli_query($koneksi, "select * from prak_pirdas order by id_sensor_gerak desc"); 

    $data = mysqli_fetch_array($sql);
    $angka_sumbu = $data['angka_sumbu'];

    if( $angka_sumbu == "") $angka_sumbu = 0;

    echo $angka_sumbu;
?>