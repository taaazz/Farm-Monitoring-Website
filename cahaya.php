<?php
// Koneksi ke Database
$dbhost = "localhost";
$dbuser = "root";
$password = "";
$dbname = "pirdas_modul4";
$port = "3306";


$koneksi = mysqli_connect("localhost", "root", "", "pirdas_modul4");


if (isset($_GET["angka_sumbu"]) && isset($_GET["kemiringan"]) && isset($_GET["led_status"])) {
    $angka_sumbu = $_GET["angka_sumbu"];
    $kemiringan = $_GET["kemiringan"];
    $led_status = $_GET["led_status"];
    

    // Koneksi ke database
    // $conn = new mysqli($dbhost, $dbuser, $password, $dbname, $port);

    // Cek koneksi
    if ($koneksi->connect_error) {
        die("Koneksi ke database gagal: " . $koneksi->connect_error);
    }

    // Query untuk memasukkan data ke dalam database
    $sql = "INSERT INTO prak_pirdas (angka_sumbu, kemiringan, led_status) VALUES ('$angka_sumbu', '$kemiringan', '$led_status')";
    
    // $sql = "INSERT INTO prak_pirdas (angka_sumbu, kemiringan, led_status) VALUES (?, ?, ?)";
    // $stmt = $conn->prepare($sql);

    // // Binding parameter
    // $stmt->bind_param("sss", $angka_sumbu, $kemiringan, $led_status);


    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_sensor_gerak = isset($_POST['id_sensor_gerak']) ? $_POST['id_sensor_gerak'] : '';

    // $conn = new mysqli($dbhost, $dbuser, $password, $dbname, $port);

    // Cek koneksi
    if ($koneksi->connect_error) {
        die("Koneksi ke database gagal: " . $koneksi->connect_error);
    }


    if ($key !== '') {
        $sql = "SELECT * FROM prak_pirdas WHERE id_sensor_gerak='$key'";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $res = json_encode($data);
            echo $res;
        } else {
            $data = ["id_sensor_gerak" => "Not Valid"];
            $res = json_encode($data);
            echo $res;
        }
    } else {
        echo "Parameter tidak ditemukan";
    }
}



// Menutup koneksi ke database
// $conn->close();
?>