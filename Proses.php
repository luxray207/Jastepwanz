<?php
include 'index.html';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nik = $_POST['nik'] ?? '';
    $sender = $_POST['sender'] ?? '';

    // Simpan atau proses data sesuai kebutuhan
    echo "Data berhasil disimpan: <br>";
    echo "NIK: $nik <br>";
    echo "Sender: $sender <br>";
}
?>
