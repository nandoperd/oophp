<?php
    // interface dapat menentukan metode apa yang harus diterapkan kelas, 
    // memudahkan untuk menggunakan berbagai kelas yang berbeda dengan cara yang sama
    // interface tidak bisa memiliki properti, method nya harus public dan bersifat abstract
    // class nya dapat mengimplementasikan interface sambil mewarisi class lain pada saat yang sama
    interface Binatang {
        public function suara();
    }

    class Anjing implements Binatang {
        public function suara() {
            echo "Njing";
        }
    }

    class Monyet implements Binatang {
        public function suara() {
            echo "Nyet";
        }
    }

    class Ayam implements Binatang {
        public function suara() {
            echo "Nyam";
        }
    }

    // membuat daftar hewan
    $anj = new Anjing();
    $mon = new Monyet();
    $ay = new Ayam();
    $binatang = array($anj, $mon, $ay);

    // memanggil nama-nama hewan menggunakan foreach
    foreach ($binatang as $bin) {
        $bin->suara();
    }

    // pada contoh di atas menjelaskan class hewan dapat menggunakan fungsi suara dengan caranya masing-masing
    // Karena itu, kita dapat mengulang semua hewan dan menyuruh mereka mengeluarkan suara meskipun kita tidak tahu jenis hewan apa masing-masing
    // Karena interface tidak memberi tahu kelas cara mengimplementasikan metode, setiap class hewan dapat mengeluarkan suara dengan caranya sendiri