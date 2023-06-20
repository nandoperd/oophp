            <!-- Metode Static -->

<?php
    // Method static dapat dipanggil secara langsung tanpa membuat instance kelas terlebih dahulu
    // dideklarasikan dengan kata kunci statis
    // cara memanggilnya dengan menulis nama class 2 titik dua (::) nama method
    class pagi {
        static function semangat(){
            echo "Selamat pagi jaya jaya jaya <br>";
        }
    }

    pagi::semangat();

    // contoh di atas dapat dijalankan karena fungsi yang memanggil adalah class nya sendiri, jadi tidak masalah jika fungsi static bukan public
    // class dapat memiliki metode statis dan non-statis
    // Metode statis dapat diakses dari metode di kelas yang sama menggunakan kata kunci self dan ::
    class malam {
        static function sapa(){
            echo "Selamat malam, tidur yang nyenyak <br>";
        }

        public function __construct()
        {
            self :: sapa();
        }
    }

    new malam();
    // nah keyword self seakan bermakna memanggil fungsinya sendiri
    // fungsi static dapat dipanggil oleh class lain dengan syarat fungsi tersebut harus public
    class A {
        public static function aduh(){
            echo "Aduh sialan si sidu..";
        }
    }

    class B {
        public function duh(){
            A :: aduh();
        }
    }

    $doh = new B;
    echo $doh->duh();
    echo "<br>";

    // Untuk memanggil metode static dari class anak, gunakan kata kunci parent di dalam class anak
    // Di sini metode static dapat bersifat public atau protected
    class bagil {
        protected static function kaku(){
            return "kaki kakekku kaku-kaku";
        }
    }

    class agil extends bagil {
        public $kuka;
        public function __construct()
        {
            $this->kuka = parent :: kaku();
        }
    }

    $gila = new agil;
    echo $gila -> kuka;
    echo "<br>";
?>

            <!-- Properti Static -->
<?php
    // properti static ditulis dengan keyword statis di depan properti
    // untuk memanggilnya, rumusnya adalah "class :: properti"
    class kunyuk {
        public static $monyet = "MONYET! <br>";
    }

    // memanggil properti static
    echo kunyuk :: $monyet;

    // class bisa memiliki properti static dan non static
    // properti static dapat dipanggil dengan keyword self
    class zlatan {
        public static $zlatan = "Zlatan Ibrahimovic pensiun di tahun 2023 <br>";
        public function ibrahimovic(){
            return self :: $zlatan;
        }
    }

    $ibra = new zlatan;
    echo $ibra->ibrahimovic();

    // jika properti static berada di dalam kelas anak, maka dapat dipanggil menggunakan keyword parent
    class abi {
        public static $halo = "Halo halo badung";
    }

    class abu extends abi {
        public function heho(){
            return parent :: $halo;
        }
    }
    
    $hola = new abu;
    echo $hola -> heho();
?>
                
