<?php
    $nama   = 'Ujun Junaedi';
    $kelas  = 'MI20B';
    $email  = 'jujunjuna189@gmail.com';

    $mata_plj = Array(
        'Web Programming 1',
        'Web Design',
        'Web Development Project',
    );
?>
<html>
<head>
    <title>Biodata Ujun Junaedi</title>
</head>
<body>
<?php
    echo 'BIODATA';
    echo '<br><br>';
    echo 'My Name Is ' . '<b>' . $nama . '</b>';
    echo '<br>';
    echo 'My Class ' . '<b>' . $kelas . '</b>';
    echo '<br>';
    echo 'My Email Address ' . '<b>' . $email . '</b>';
    echo '<br>';
    echo 'Saya mengambil mata kuliah sebagai berikut';
    echo '<br>';
    for($i = 1; $i <= count($mata_plj); $i++){
        echo $i . '. ' . $mata_plj[$i];
        echo '<br>';
    }
?>
</body>
</html>