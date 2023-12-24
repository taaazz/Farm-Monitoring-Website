<?php
// Koneksi ke Database
$dbhost = "localhost";
$dbuser = "root";
$password = "";
$dbname = "tubes";
$port = "3306";


$conn = new mysqli($dbhost, $dbuser, $password, $dbname, $port);


if (isset($_GET["kelembapan"]) && isset($_GET["sensor_gerak"]) && isset($_GET["sensor_hujan"])) {
    $kelembapan = $_GET["kelembapan"];
    $sensor_gerak = $_GET["sensor_gerak"];
    $sensor_hujan = $_GET["sensor_hujan"];


    // Koneksi ke database
    // $conn = new mysqli($dbhost, $dbuser, $password, $dbname, $port);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Query untuk memasukkan data ke dalam database
    $sql = "INSERT INTO sensor (kelembapan, sensor_gerak, sensor_hujan) VALUES ('$kelembapan', '$sensor_gerak', '$sensor_hujan')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $key = isset($_POST['id_sensor']) ? $_POST['id_sensor'] : '';

    // $conn = new mysqli($dbhost, $dbuser, $password, $dbname, $port);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }


    if ($key !== '') {
        $sql = "SELECT * FROM sensor WHERE id_sensor='$key'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $res = json_encode($data);
            echo $res;
        } else {
            $data = ["id_sensor" => "Not Valid"];
            $res = json_encode($data);
            echo $res;
        }
    } else {
        echo "Parameter tidak ditemukan";
    }
}



// Menutup koneksi ke database
// $conn->close();
