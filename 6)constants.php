<?php
    // konstanta ditulis dengan const
    // contoh konstanta yang digunakan di luar kelas :
    class Goodbye {
        const LEAVING_MESSAGE = "nandoperd says goodbye.. <br>";
    }
  
    echo Goodbye::LEAVING_MESSAGE;

    // konstanta juga bisa digunakan di dalam class dengan menggunakan self ::
    class Bye {
        const LEAVING_MESSAGE = "nandoperd mengatakan : selamat tinggal..";
        public function dadah(){
            echo self::LEAVING_MESSAGE;
        }
    }
    $bye = new Bye();
    $bye -> dadah();