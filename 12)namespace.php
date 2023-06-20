<?php
    namespace html;
    class Judul {
        public $judul = "";
        public $baris = 0;

        public function isi(){
            echo "<p>Halaman {$this->judul} memiliki {$this->baris} baris.</p>";
        }
    }

    class Kata {
        public $jmlkata = 0;
        public function isi(){
            echo "<p>Setiap baris memiliki {$this->jmlkata} kata. </p>";
        }
    }

    // halaman ini akan menjadi namespace acuan pada halaman 13)bedebah.php
?>
        