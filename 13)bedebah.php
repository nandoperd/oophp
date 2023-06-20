<?php
    include "12)namespace.php";

    use Html as H;            // membuat alias pada namespace (Menyederhanakan Html menjadi H)
    use Html\Judul as HJ;     // membuat alias pada class (Menyederhanakan Html\Judul menjadi HJ)
    $judul = new HJ;
    $judul -> judul = "Bedebah";
    $judul -> baris = 10;

    $kata = new H\Kata();
    $kata -> jmlkata = 100;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedebah</title>
</head>
<body>
    <?php $judul -> isi(); ?>
    <?php $kata -> isi(); ?>
</body>
</html>