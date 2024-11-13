<?php

require_once("koneksi.php");
$sql = null;

if(isset($_GET["Show"])) { //http://localhost/152022172_Risha Marcella_UTS IOT/get.php?Show=all
    $data = $_GET["Show"];
    
    if($data == "all") {
        $sql = "SELECT * FROM tb_cuaca ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM tb_cuaca WHERE id = $data";
    }

    $hasil = $koneksi->query($sql);
    if($hasil->num_rows > 0) {
        $response = array();
        while($row = $hasil->fetch_assoc()) {
            $response[] = $row;
        }
        echo json_encode($response);
    } else {
        echo "Tidak ada data";
    }
    $koneksi->close();
} else {
    // jika parameter "Show" tidak diset
}
?>