<?php
    // pada dasarnya ini adalah judul menegenai pewarisan pada OOPHP (Inheritance)
    // extends adalah tanda dari class turunan
    // class turunan/warisan mewarisi semua properti dan metode publik dan dilindungi dari kelas induk
    // Selain itu, ia dapat memiliki properti dan metodenya sendiri
    class Buah {
        public $nama;
        public $warna;

        public function __construct($nama, $warna)
        {
            $this->nama = $nama;
            $this->warna = $warna;
        }

        public function intro()
        {
            echo " Nama buahnya {$this->nama}, Warnanya {$this->warna}.<br>";
        }
    }

    class Melon extends Buah{
        public function pesan()
        {
            echo "Apa nama buahnya dan apa warnanya? ";
        }
    }

    $melon = new Melon("Melon", "Hijau"); //fungsi class buah
    $melon->pesan(); //fungsi class melon sendiri
    $melon->intro(); //fungsi class buah

    // code di atas dapat berjalan lancar karena semua fungsinya memiliki akses public
    // jika code di atas diganti fungsi intro menjadi protected, maka akan error
    // namun protected dapat dipanggil seperti contoh di bawah

    class Makanan {
        public $nama;
        public $rasa;

        public function __construct($nama, $rasa)
        {
            $this->nama = $nama;
            $this->rasa = $rasa;
        }

        protected function jawab()
        {
            echo "Namanya {$this->nama}, Rasanya {$this->rasa}.<br>";
        }
    }

    class Jengkol extends Makanan {
        public function tanya()
        {
            echo "Apa makanan ini dan gimana rasanya?";
            $this -> jawab(); // mengambil fungsi jawab yang diprotect 
        }
    }

    $jengkol = new Jengkol ("Jengkol", "Enak");
    $jengkol->tanya();

    // dengan cara di atas, fungsi protected jawab diambil dan dimasukkan ke dalam fungsi tanya
    // cara tersebut dapat dilakukan karena class jengkol mewakili class makanan
    // class yang diwariskan juga bisa melakukan overriding (mengatur ulang) class induk seperti contoh di bawah

    class Minuman {
        public $nama;
        public $warna;
        public function __construct($nama, $warna)
        {
            $this->nama = $nama;
            $this->warna = $warna;
        }

        public function jawab()
        {
            echo "Namanya {$this->nama} Warnanya {$this->warna}.";
        }
    }

    class Fanta extends Minuman {
        public $harga;
        public function __construct($nama, $warna, $harga)
        {
            $this->nama = $nama;
            $this->warna = $warna;
            $this->harga = $harga;
        }

        public function jawab()
        {
            echo "Namanya {$this->nama} Warnanya {$this->warna} Harganya Rp. {$this->harga}.<br>";
        }
    }

    $fanta = new Fanta("Fanta", "Merah", "5.000");
    $fanta->jawab();

    // pada contoh di atas, class fanta dapat mengambil data fungsi dari induknya Minuman dan membuat fungsinya sendiri
    // untuk menghindari pewarisan pada class, dapat menggunakan keyword final seperti contoh di bawah

    final class London {
        final public function jawab()
        {}
    }

    // class Chelsea extends London {
    //     public function jawab()
    //     {}
    // }

    // maka yang akan terjadi pada code di atas adalah error, nyalakan class chelsea untuk melihat error


