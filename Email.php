<?php
include 'index.html';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email berhasil ditambahkan: $email";
    } else {
        echo "Format email tidak valid.";
    }
}
?>
