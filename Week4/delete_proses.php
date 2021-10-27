<?php
require_once('Connection.php');

$id = $_GET['id'];
$delete_query = "DELETE FROM tbl_surat WHERE id = $id";
$result = $con->query($delete_query);

if ($result) {
?>
    <script>
        alert('Success delete data');
        window.location.href = '<?= $public_path . "MI20B_Ujun_Junaedi/Week4/view.php" ?>';
    </script>
<?php
} else {
?>
    <script>
        alert('Failed delete data');
    </script>
<?php
}
