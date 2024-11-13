<?php
    $koneksi = new mysqli("localhost", "root", "", "db_iot_bb");
    if($koneksi -> connect_error) {
        echo "Koneksi belum terhubung";
    }
?>
