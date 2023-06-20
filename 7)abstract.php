<?php
    // class induk abstrak memiliki metode bernama, tetapi membutuhkan kelas anaknya untuk mengisi tugas
    // method abstrak adalah metode yang dideklarasikan, tetapi tidak diimplementasikan dalam kode
    
    // parent class
    abstract class Klub {
        public $nama;
        public function __construct($nama)
        {
            $this->nama = $nama;
        }
        abstract public function intro() : string;
    }

    // child class
    class Persib extends Klub {
        public function intro() : string {
            return "Pemain andalan Persib : $this->nama";
        }
    }

    class Persija extends Klub {
        public function intro() : string {
            return "Pemain andalan Persija : $this->nama";
        }
    }

    class Persipura extends Klub {
        public function intro() : string {
            return "Pemain andalan Persipura : $this->nama";
        }
    }

    $persib = new Persib("Eka Ramdhani");
    echo $persib->intro(). "<br>";

    $persija = new Persija("Greg Nwokolo");
    echo $persija->intro(). "<br>";

    $persipura = new Persipura("Boaz Salosa");
    echo $persipura->intro(). "<br>";

    // pada contoh di atas menunjukkan class anak dapat mengakses $nama tanpa menuliskan kembali codenya karena diset public construct di classs induk Klub
    // tapi pada method intro, class anak harus mendeklarasikannya secara persis (: string) karena diset abstract
    // class abstrak dapat diset protected (asal bukan private) seperti contoh di bawah

    abstract class Induk {
        // method menggunakan argumen, class dan method harus sama 
        abstract protected function namaDepan($nama);
    }

    class Anak extends Induk {
        public function namaDepan($nama){
            if ($nama == "Iyus") {
                $depan = "Mr.";
            } elseif ($nama == "Boyke") {
                $depan = "Dr.";
            } else {
                $depan = "";
            }
            return "{$depan} {$nama}";
        }
    }

    $iyus = new Anak;
    echo $iyus->namaDepan("Iyus") . "<br>";
    echo $iyus->namaDepan("Boyke") . "<br>";
    echo $iyus->namaDepan("boyke") . "<br>";

    // pada contoh di atas, class induk memiliki fungsi yang dibantu dengan class anak untuk mengisi nilainya
    // class induk walaupun memiliki argumen (protected) namun class anak masih dapat menjalankan fungsinya (yang penting jangan private)
    // pada contoh di atas juga class anak bisa menambahkan kondisi if dan membuat nilai $depan dimana tidak dimiliki class induk
    // class anak dapat menambahkan nilai sendiri seperti contoh di bawah ini
    
    abstract class Kakek {
        abstract protected function namaDepan($nama);
    }

    class Cucu extends Kakek {
        public function namaDepan($nama, $titik = ".", $sopan = "Yth. "){
            if ($nama == "Iyus") {
                $depan = "Mr";
            } elseif ($nama == "Boyke") {
                $depan = "Dr";
            } else {
                $depan = "";
            }
            return "{$sopan} {$depan}{$titik} {$nama}";
        }
    }

    $iyus = new Cucu;
    echo $iyus->namaDepan("Iyus");