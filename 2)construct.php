<?php
    //construct adalah method pertama yang dijalankan pada sebuah class, penulisan __construct
    //menggunakan construct berati akan memanggil fungsi pada kelas secara otomatis juga dapat mempersingkat code
    //dapat diartikan juga, code setelah construct adalah yg pertama dijalankan

    class Club {
        public $nama;
        public $stadion;
        function __construct($nama)
        {
            $this->nama= $nama;
        }
        function get_nama(){
            return $this->nama;
        }
    }

    $milan = new Club("Milan");
    echo $milan->get_nama();