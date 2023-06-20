<?php
    require_once 'latname.php';

    use Latihan as L;
    $name = new L\Space();
    $name->nama = "nandoperd";
    $name->profesi = "Full stack developer";
    $name->referensi = "w3school";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Namespace</title>
</head>
<body>
    <?php echo $name->isi() ?>
    <?php echo $name->ref() ?>
</body>
</html>