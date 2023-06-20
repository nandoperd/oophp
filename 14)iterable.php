<?php
    // iterable adalah nilai yang dapat diloop oleh foreach() atau dalam bahasa inggris berarti bisa diubah
    // iterable dapat digunakan sebagai tipe data dari argumen fungsi atau sebagai return dari suatu fungsi
    // contoh iterable untuk argumen fungsi
    function cetakIterable(iterable $myiter){
        foreach ($myiter as $iter){
            echo $iter;
        }
    }

    $tot = ["x","y","z"];
    echo cetakIterable($tot);
    echo "<br>";

    // contoh iterable untuk return
    function getIterable():iterable {
        return ["a", "b", "c"];
    }

    $itrebel = getIterable();
    foreach ($itrebel as $itre){
        echo $itre;
    }
    echo "<br>";

    // semua array adalah iterable, array apa pun dapat digunakan sebagai argumen dari suatu fungsi yang membutuhkan iterable
    // semua objek yang mengimplementasikan antarmuka Iterator juga dapat digunakan sebagai argumen dari suatu fungsi yang membutuhkan iterable
    // metode-metode iterator :
    // current() : Mengembalikan elemen yang sedang ditunjuk oleh pointer. bisa berupa tipe data apa saja
    // key() : Mengembalikan kunci yang terkait dengan elemen saat ini dalam daftar. hanya bisa integer, float, boolean atau string
    // next() : Memindahkan pointer ke elemen berikutnya dalam daftar
    // valid() : Jika penunjuk internal tidak menunjuk ke elemen apa pun di atas, maka harus mengembalikan nilai false/true
    // contoh iterator interface yang digunakan sebagai iterable :

    // membuat iterator
    class MyIterator implements Iterator {
        private $items = [];
        private $pointer = 0; // pointer adalah yang akan menunjukkan nilai yang sedang berlangsung

        public function __construct($items)
        {
            // array_values() harus ditulis dengan kunci yang berisi angka
            $this->items = array_values($items);
        }

        public function current()
        {
            return $this->items[$this->pointer];
        }

        public function key()
        {
            return $this->pointer;
        }

        public function next()
        {
            $this->pointer++;
        }

        public function rewind()
        {
            $this->pointer= 0;
        }

        public function valid()
        {
            // menghitung berapa kali items ada di dalam daftar
            return $this->pointer < count($this->items);
        }
    }

    // membuat fungsi yang akan menggunakan iterable
    function printIterable(iterable $myIterable) {
        foreach ($myIterable as $item) {
            echo $item;
        }
    }

    // menggunakan iterator sebagai iterable
    $iterator = new MyIterator(["m", "n", "o"]);
    printIterable($iterator);
