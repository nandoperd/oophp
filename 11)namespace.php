<?php
    // namespace biasanya digunakan untuk mengelompokkan data/tabel
    // namespace dideklarasikan dengan keyword namespace
    // namespace harus ditulis paling awal
    // contoh di bawah adalah namespace html yang menampung beberapa data html
    namespace html;
    class Layout {
        public $judul = "";
        public $baris = 0;
        public function isi() {
            echo "<p>Halaman {$this->judul} punya {$this->baris} baris. </p>";
        }
    }

    $layout = new Layout();
    $layout->judul = "Bedebah";
    $layout->baris = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
</head>
<body>
    <?php
    $layout->isi();
    ?>
</body>
</html>
<!-- untuk memanggil namespace di dalam code selanjutnya, dapat dipanggil dengan contoh namespace ..\html;  -->
<!-- selanjutnya, saya akan membuat halaman 12)namespace.php yang akan menjadi acuan untuk halaman lainnya -->
