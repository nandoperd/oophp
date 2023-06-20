<?php
    //destruct adalah kebalikan construct, destructor akan terpanggil jika kode error atau berhenti
    //destruct akan otomatis terpanggil di akhir kode
    class Hp {
        public $nama;
        public $merk;

        function __construct($nama)
        {
            $this->nama = $nama;
        }

        function __destruct()
        {
            echo "Merk hp nya {$this->nama}.";
        }
    }
    $nokia = new Hp("Nokia");