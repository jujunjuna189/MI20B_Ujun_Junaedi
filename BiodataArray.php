<?php
    $biodata = Array(
        'nama'  => 'Ujun Junaedi',
        'kelas' => 'MI20B',
        'email' => 'jujunjuna189@gmail.com',
    );

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
    echo 'My Name Is ' . '<b>' . $biodata['nama'] . '</b>';
    echo '<br>';
    echo 'My Class ' . '<b>' . $biodata['kelas'] . '</b>';
    echo '<br>';
    echo 'My Email Address ' . '<b>' . $biodata['email'] . '</b>';
    echo '<br>';
    for($i = 0; $i < count($mata_plj); $i++){
        echo $i + 1 . '. ' . $mata_plj[$i];
        echo '<br>';
    }
?>
</body>
</html>