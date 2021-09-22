<?php
    $surat = Array(
        'date'      => date('d-F-Y'),
        'nomor'     => '5555',
        'kepada'    => 'Pemilik Barang',
        'kota'      => 'Tasikmalaya',
        'instansi'  => Array('LP3I, ','Kota Tasikmalaya, ','081297551925'),
        'barang'    => Array('Kamera', 'Komputer'),
        'ttd'       => 'Pemilik',
    );
?>
<html>
<head>
    <title>Surat Peminjaman Ujun Junaedi</title>
    <style>
        body{
            padding-left: 350px;
            padding-right: 350px;
        }
        .content{
            padding: 50px;
            padding-bottom: 100px;
            background: #fff;
            box-shadow: 0px 0px 5px 1px grey;
        }
    </style>
</head>
<body>
<div class="content">
    <?php
        echo '<b><center>SURAT PEMINJAMAN</center></b>';
        echo '<br>';
        echo '<center>';
        for($i = 0; $i < count($surat['instansi']); $i++){
            echo $surat['instansi'][$i];
        }
        echo '</center>';
        echo '<hr>';
        echo '<br>';
        echo '<br>';
        echo 'Nomor : ' . $surat['nomor'];
        echo '<br>';
        echo 'Lampiran : -';
        echo '<br>';
        echo 'Perihal : Permohonan Peminjaman Barang';
        echo '<br><br>';
        echo 'Yth. <br> <b>Kepada <br>' . $surat['kepada'] . '</b>';
        echo '<br> di Tempat';
        echo '<br><br> Dengan Hormat';
        echo '<br> Dalam rangka kegiatan acara, kami BEM / DPM / UKM / HIMA / Musholla  mengajukan permohonan peminjaman ruang LAB 1 yang ada di Kampus FISIP Unmul.  Adapun rencana kegiatan akan dilaksanakan pada :';
        echo '<br><br>Tanggal : ' . $surat['date'];
        echo '<br>Waktu : ' . date('h:i:s'); 
        echo '<br>Tempat : ' . $surat['instansi'][0]  . ', ' . $surat['instansi'][1];
        echo '<br><br>Demikian permohonan ini disampaikan, atas perhatian dan bantuannya diucapkan terima kasih.';
        echo '<div style="text-align: right; margin-top: 70px">' . $surat['kota'] . ', ' . $surat['date'] . '</div>';
        echo '<div style="text-align: right; margin-top: 60px;"><u><b>' . $surat['ttd'] . '</b></u></div>';
    ?>
</div>
</body>
</html>