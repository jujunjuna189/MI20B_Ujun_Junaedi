<?php
    $biodata = Array(
        'nama' => 'Ujun Junaedi',
        'kelas' => 'MI20B',
        'email' => 'jujunjuna189@gmail.com',
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
    echo 'My Email Address ' . '<b>' . $biodata['jujunjuna189@gmail.com'] . '</b>';
?>
</body>
</html>