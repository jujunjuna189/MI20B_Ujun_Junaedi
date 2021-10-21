<!-- Proses Add Data -->
<?php
require_once('Connection.php');

if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    $no_surat = $_POST['no_surat'];
    $jenis_surat = $_POST['jenis_surat'];
    $tgl_surat = $_POST['tgl_surat'];
    $ttd_surat = $_POST['ttd_surat'];
    $ttd_menyetujui = $_POST['ttd_menyetujui'];
    $ttd_mengetahui = $_POST['ttd_mengetahui'];

    // SQL Update to Database db_surat
    $update_sql = "UPDATE tbl_surat SET 
    no_surat='$no_surat', jenis_surat='$jenis_surat', tgl_surat='$tgl_surat', ttd_surat='$ttd_surat', ttd_menyetujui='$ttd_menyetujui', ttd_mengetahui='$ttd_mengetahui' 
    WHERE id='$id'";
    $update = $con->query($update_sql);

    if ($update) {
?>
        <script>
            alert('Success update data');
            window.location.href = '<?= $public_path . "MI20B_Ujun_Junaedi/Week4/view.php" ?>';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Failed update data');
        </script>
<?php
    }
}

?>