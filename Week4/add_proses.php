<!-- Proses Add Data -->
<?php
require_once('Connection.php');

if (isset($_POST['submit'])) {
    $no_surat = $_POST['no_surat'];
    $jenis_surat = $_POST['jenis_surat'];
    $tgl_surat = $_POST['tgl_surat'];
    $ttd_surat = $_POST['ttd_surat'];
    $ttd_menyetujui = $_POST['ttd_menyetujui'];
    $ttd_mengetahui = $_POST['ttd_mengetahui'];

    // SQL Insert to Database db_surat
    $insert_sql = "INSERT INTO tbl_surat (id, no_surat, jenis_surat, tgl_surat, ttd_surat, ttd_mengetahui, ttd_menyetujui) VALUES ('', '$no_surat', '$jenis_surat', '$tgl_surat', '$ttd_surat', '$ttd_menyetujui', '$ttd_mengetahui')";
    $insert = $con->query($insert_sql);

    if ($insert) {
?>
        <script>
            alert('Success insert data');
            window.location.href = '<?= $public_path . "MI20B_Ujun_Junaedi/Week4/view.php?pesan=tambah" ?>';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Failed insert data');
        </script>
<?php
    }
}

?>