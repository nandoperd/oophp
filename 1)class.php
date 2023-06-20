<?php
    //class
    class Buah {
        //properties
        public $nama;
        public $warna;

        //methods
        function set_nama($nama){
            $this->nama=$nama;
        }

        function get_nama(){
            return $this->nama;
        }

        function set_warna($warna){
            $this->warna=$warna;
        }

        function get_warna(){
            return $this->warna;
        }
    }

    //menambahkan object di dalam kelas ditulis dengan new
    $apel = new Buah();
    $pisang = new Buah();

    $apel->set_nama('Apel');
    $pisang->set_nama('Pisang');
    $apel->set_warna('Merah');
    $pisang->set_warna('Kuning');

    echo "Nama : " . $apel->get_nama();
    echo "<br>";
    echo "Warna : " . $apel->get_warna();
    echo "<br>";
    echo "Nama : " . $pisang->get_nama();
    echo "<br>";
    echo "Warna : " . $pisang->get_warna();

    echo "<br><br>"
?>

<?php
    //$this pada OOP artinya mengacu pada objek pada saat ini, dan $this hanya tersedia di dalam method
    //ada 2 cara untuk merubah $name pada function
    //cara 1 (membuatnya di dalam class seperti di atas)
    class Motor {
        public $nama;
        function set_nama($nama){
            $this->nama = $nama;
        }
    }

    $honda = new Motor;
    $honda -> set_nama("Honda");

    echo $honda -> nama;
    echo "<br>";

    //cara 2 (di luar class, dengan langsung menrubah nilai propertinya
    class Mobil {
        public $nama;
    }
    $toyota = new Mobil;
    $toyota -> nama = "Toyota";

    echo $toyota -> nama;
    echo "<br>";

    //instanceof berguna untuk mengecek apakah objek ada di dalam class atau tidak
    var_dump($toyota instanceof Mobil);
    