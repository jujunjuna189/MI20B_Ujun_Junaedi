<?php
$public_path = "http://localhost:8080/";
$public_link = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">';
$username = 'root';
$password = '';
$database = 'db_surat';

$con = new mysqli('localhost', $username, $password, $database);

if ($con->connect_error) {
    die('Connection Failed');
}

$sql = "SELECT * FROM tbl_surat";
$result = $con->query($sql);

// Jenis Surat
$sql_js = "SELECT * FROM jenis_surat";
$result_js = $con->query($sql_js);

if (isset($_GET['pesan']) && $_GET['pesan'] == 'tambah') {
    $action = 'Tambah';
    $bg = 'info';
} else if (isset($_GET['pesan']) && $_GET['pesan'] == 'update') {
    $action = 'Edit';
    $bg = 'warning';
} else {
    $action = 'Delete';
    $bg = 'danger';
}
