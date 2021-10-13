<?php
$username = 'root';
$password = '';
$database = 'db_surat';

$con = new mysqli('localhost', $username, $password, $database);

if ($con->connect_error) {
    die('Connection Failed');
}

$sql = "SELECT * FROM tbl_surat";
$result = $con->query($sql);

// $js = '';

// if ($data['jenis_surat'] == 1) {
//     $js = 'SURAT KEPUTUSAN';
// } else if ($data['jenis_surat'] == 2) {
//     $js = 'SURAT PERNYATAAN';
// } else if ($data['jenis_surat'] == 3) {
//     $js = 'SURAT PEMINJAMAN';
// } else {
//     die('Jenis Surat Tidak Terdaftar');
// }

// $surat = array(
//     'date'          => $data['tgl_surat'],
//     'nomor'         => $data['no_surat'],
//     'kepada'        => $data['ttd_surat'],
//     'kota'          => 'Tasikmalaya',
//     'instansi'      => array('LP3I, ', 'Kota Tasikmalaya, ', '081297551925'),
//     'barang'        => array('Kamera', 'Komputer'),
//     'ttd'           => $data['ttd_menyetujui'],
//     'js'            => $js,
// );
