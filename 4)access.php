<?php
    //acces modifiers ada 3 macam :
    // public : bisa diakses darimana saja
    // protected : hanya bisa diakses dari class yang berasal dari class tersebut
    // private : hanya bisa diakses dari class nya sendiri
    //contoh
    class Football {
        public $name;
        protected $position;
        private $club;
      }
      
      $mango = new Football();
      $mango->name = 'Inzaghi'; // OK
      $mango->position = 'CF'; // ERROR
      $mango->club = 'Milan'; // ERROR

      //posisi dan club error karena dideklarasikan protected dan private
?>

<?php
      class Bola {
        public $nama;
        public $klub;
        public $nomor;

        function set_nama($n) {
            $this->nama = $n;
        }
        protected function set_klub($klub) {
            $this->klub = $klub;
        }
        private function set_nomor($nomor) {
            $this->nomor = $nomor;
        }
      }

      $persib = new Bola();
      $persib->set_nama("Eka Ramdhani");
      $persib->set_klub("PERSIB"); //error
      $persib->set_nomor("8"); //error

    //   walaupun klub dan nomor sudah dideklarasikan public akan tetap error karena fungsinya protected dan private
?>
