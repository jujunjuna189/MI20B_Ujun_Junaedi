<?php
require_once('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center">Data Mahasiswa</div>
                            <div class="float-end">
                                <a href="add.php" class="badge bg-info py-2 px-2 small text-white fw-bold text-decoration-none">Add Surat</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped w-100">
                                    <thead>
                                        <tr>
                                            <th>No Surat</th>
                                            <th>Jenis Surat</th>
                                            <th>Tgl Surat</th>
                                            <th>Ttd Surat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $val) { ?>
                                            <?php
                                            if ($val['jenis_surat'] == 1) {
                                                $js = 'Surat Keputusan';
                                            } else if ($val['jenis_surat'] == 2) {
                                                $js = 'Surat Persyaratan';
                                            } else if ($val['jenis_surat'] == 3) {
                                                $js = 'Surat Peminjaman';
                                            } else {
                                                $js = 'Kode Bermasalah';
                                            }
                                            ?>
                                            <tr>
                                                <td><?= $val['no_surat'] ?></td>
                                                <td><?= $js ?></td>
                                                <td><?= $val['tgl_surat'] ?></td>
                                                <td><?= $val['ttd_surat'] ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $val['id'] ?>" class="badge bg-warning text-dark p-2 text-decoration-none">Edit</a>
                                                    <a href="delete_proses.php?id=<?= $val['id'] ?>" onclick="return confirm('Are you sure delete data ?')" class="badge bg-danger p-2 text-white text-decoration-none">Delete</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>