<?php
    namespace Latihan;

    class Space {
        public $nama;
        public $profesi;
        public $referensi;

        public function Isi(){
            echo "Catatan OOP ini dibuat oleh {$this->nama} yang sedang belajar menjadi {$this->profesi}.<br>";
        }

        public function Ref(){
            echo "(Referensi : {$this->referensi})";
        }
    }