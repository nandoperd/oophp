<style>
    h3 {
        font-family: sans-serif;
        color: seagreen;
        margin-bottom: 1px;
    }
</style>

<?php
    // BAB 1 : Class
    echo "<h3>BAB 1 : Class </h3><br>";

    // metode edit data fungsi di dalam class

    class Persib {
        public $nama;
        public $pos;

        public function setNama($nama, $pos) {
            $this->nama = $nama;
            $this->pos = $pos;
        }

        public function getNama() {
            // membuat return dengan data array
            return array ('nama' => $this->nama, 'pos' => $this->pos);
        }
    }

    $eka = new Persib();
    $eka->setNama('Eka Ramdhani', 'CMF');
    // membuat variabel baru ($data ) untuk menampung data dari fungsi getNama
    $data = $eka->getNama();
    echo "Nama : " . $data['nama'] . "<br>";
    echo "Posisi : " . $data['pos'] . "<br>";

    // metode edit data fungsi langsung (di luar class)
    class Persija {
        public $nama;
    }

    $ponaryo = new Persija();
    $ponaryo -> nama = "Ponaryo";
    echo $ponaryo -> nama . "<br>";

    // cek data menggunakan instanceof
    echo "Apakah " .$ponaryo -> nama. " pernah bermain di PERSIJA? ";
    if ($ponaryo instanceof persija) {
        echo "Ya, pernah <br>";
    } else {
        echo "Tidak pernah <br>";
    }

    // BAB 2 : Construct & Destruct
    echo "<h3>BAB 2 : Construct & Destruct </h3><br>";

    // construct adalah kode yang pertama dijalankan
    // destruct adalah yang terakhir dijalankan, destruct akan otomatis berjalan jika kode di atasnya error

    class Persik {
        public $nama;

        public function __construct($nama)
        {
            $this -> nama = $nama;
        }

        public function getNama() {
            return $this->nama;
        }

        public function __destruct()
        {
            // kode ini akan muncul di paling akhir halaman ini
            echo "{$this->nama} terkenal dengan julukannya si piton.<br> Saya berada di paling akhir ya, hiks (nasib seorang destruct).";
        }
    }

    $budi = new Persik("Budi Sudarsono ");
    echo $budi -> getNama();

    // BAB 3 : Access & Extends (Inheritance)
    echo "<h3>BAB 3 : Access & Extends (Inheritance)</h3><br>";

    // akses memiliki 3 macam : public, protected, dan private dimana masing-masing punya aturan sendiri
    // dengan extends/pewarisan, akses-akses tersebut dapat dijalankan sesuai dengan aturan-aturannya

    class Persipura {
        public $nama;
        public $pos;

        public function __construct($nama, $pos)
        {
            $this-> nama = $nama;
            $this-> pos = $pos;
        }

        protected function jawab() {
            echo "{$this->nama}, posisinya adalah {$this->pos}.";
        }
    }

    class Jayapura extends Persipura {
        public $nomor;

        public function __construct($nama, $pos, $nomor)
        {
            $this -> nama = $nama;
            $this -> pos = $pos;
            $this -> nomor = $nomor;
        }

        public function tanya(){
            echo "Siapa pemain persipura yang kamu tau? ";
        }

        public function jawab(){
            echo "{$this->nama}, posisinya adalah {$this->pos}, Nomor pungggungnya {$this->nomor}.<br>";
        }
    }

    $boaz = new Jayapura("Boaz Salosa", "SS", "7");
    $boaz -> tanya();
    $boaz -> jawab();

    // pada code di atas, class anak (jayapura) bisa mengakses fungsi dan nilai dari class induknya (persipura) karena extends yang berfungsi sebagai pewarisan
    // class anak juga dapat memiliki/memodif data dan fungsinya sendiri walaupun awalnya mengambil data dan fungsi dari class induk

    // BAB 4 : Constant
    echo "<h3>BAB 4 : Constant (:: dan self::)</h3><br>";

    // constant/konstanta menggunakan aturan/rumus yg akan banyak dipakai di OOP kedepannya
    // yaitu pemanggilan menggunakan titik dua ganda (::) dan keyword self
    
    // contoh constant dipanggil di luar kelas
    class Pamit {
        const pesan = "Selamat tinggal.. <br>";
    }
    echo Pamit::pesan;

    // contoh di dalam class, dipanggil menggunakan self
    class Pisah {
        const kalimat = "Izinkan aku pergi dulu.. <br>";
        public function putus(){
            echo self::kalimat;
        }
    }

    $pegat = new Pisah;
    $pegat->putus();

    // BAB 5 : Abstract
    echo "<h3>BAB 5 : Abstract</h3><br>";

    // class abstract memiliki fungsi/metode, tapi tidak diimplementasikan di dalam class nya, jadi butuh class anak untuk menjalankannya
    // untuk memanggil abstract class, class lain dapat memanggilnya dengan keyword extends

    // class induk
    abstract class Bapak {
        public $umur;
        public function __construct($umur)
        {
            $this->umur = $umur;
        }

        abstract public function kata() : string;
    }

    // class anak
    class Kakak extends Bapak {
        public function kata(): string
        {
            return "Umur kakak adalah : $this->umur <br>";   
        }
    }

    class Adik extends Bapak {
        public function kata(): string
        {
            return "Umur adik adalah : $this->umur <br>";   
        }
    }

    $kakak = new Kakak("26");
    echo $kakak->kata() . "<br>";
    $adik = new Adik("21");
    echo $adik->kata() . "<br>";

    // dari contoh code di atas, jelas abstract class memerlukan class anak untuk menjalankan metode/fungsinya

    // contoh abstract class menggunakan protected, dan class anak memiliki metode dan nilai sendiri
    abstract class Umur {
        abstract protected function kalimat($angka);
    }

    class Input extends Umur {
        public function kalimat($angka, $sam = "=")
        {
            if ($angka>30) {
                $status = "tua";
            }elseif ($angka>18) {
                $status = "muda";
            } else {
                $status = "bocah";
            }
            return "Umur {$angka} {$sam} {$status} <br>";
        }
    }

    $zlatan = new Input;
    echo $zlatan->kalimat(40);
    echo $zlatan->kalimat(5);
    echo $zlatan->kalimat(20);

    // BAB 6 : Interface
    echo "<h3>BAB 6 : Interface</h3><br>";

    // interface dapatt dikatakan sebagai class wadah yang mana menyediakan metode untuk dipakai oleh class lainnya
    // untuk memanggil interface, class lain dapat memanggilnya dengan keyword implements
    interface Pemain {
        public function Selebrasi();

        public function nama();
    }

    class Ronaldo implements Pemain {
        public $nama;
        public function Selebrasi()
        {
            echo "Siuuuuu....";
        }
        public function nama()
        {
            echo "Ronaldo = ";
        }
    }

    class Ibrahimovic implements Pemain {
        public function Selebrasi()
        {
            echo "Ibraaa....";
        }
        public function nama()
        {
            echo "Ibrahimovic = ";
        }
    }

    class Balotelli implements Pemain {
        public function Selebrasi()
        {
            echo "...";
        }
        public function nama()
        {
            echo "Balotelli = ";
        }
    }

    // membuat list pemain dan memasukkannya ke dalam array
    $dodo = new Ronaldo();
    $ibra = new Ibrahimovic();
    $balo = new Balotelli();
    $pemain = array($dodo, $ibra, $balo);

    // membuat perulangan menggunakan foreach
    foreach ($pemain as $p) {
        echo $p->nama();
        echo $p->Selebrasi() . "<br>";
    }

    // perlu diingat sekali lagi, interface tidak bisa memiliki properti, jika dikasih properti, maka akan error

    // BAB 7 : Trait
    echo "<h3>BAB 7 : Trait</h3><br>";

    // sama seperti interface, trait juga adalah class induk yang menyediakan wadah yang berisi fungsi-fungsi yang bisa dipakai class lain
    // untuk memanggil trait, gunakan keyword use
    trait Slogan
    {
        public function Milan(){
            echo "Forza Milan";
        }

        public function Liverpool(){
            echo "You're never walk alone";
        }
    }

    class Milanisti {
        use Slogan;
    }
    
    class Karbitan {
        use Slogan;
    }

    $mil = new Milanisti;
    $mil->Milan();
    echo "<br>";
    
    $kar = new Karbitan;
    $kar->Milan();
    echo " & ";
    $kar->Liverpool();
    echo "<br>";

    // BAB 8 : Static
    echo "<h3>BAB 8 : Static (Metode & Properti)</h3><br>";

    // Method static
    echo "<h4>Metode static</h4>";

    // aturan static persis seperti aturan constant sebelumnya pada BAB 4
    // untuk memanggil metode/fungsi static hanya perlu menggunakan rumus berikut : class::metode
    class Bedebah {
        static function Pamer() {
            echo "Bedebah udah pernah treble <br>";
        }

        // menggunakan self :: jika static dipanggil dalam class nya sendiri
        public function __construct()
        {
            self :: Pamer();
        }

        // membuat protected static
        protected static function Nopamer() {
            echo "Bedebah tidak mau riya' <br>";
        }
    }

    class Tb extends Bedebah{
        public $bijak;
        public function __construct()
        {
            $this->bijak - parent :: Nopamer(); // menggunakan parent :: untuk mengambil fungsi dari class induk
        }
    }

    new Bedebah();

    Bedebah :: Pamer();

    $bijax = new Tb;
    echo $bijax -> bijak;

    // Properti static
    echo "<h4>Properti static</h4>";

    // rumus menggunakan properti static adalah class :: properti
    class Rhino {
        public static $gat = "Rhino Gattuso <br>";
        public function Gennaro(){
            return self :: $gat;
        }
    }

    class Gattuso extends Rhino {
        public function Gattus()
        {
            return parent :: $gat;
        }
    }

    echo Rhino :: $gat;
    $gat = new Rhino;
    echo $gat->Gennaro();
    $gatt = new Gattuso;
    echo $gatt->Gattus();

    // BAB 9 : Namespace
    echo "<h3>BAB 9 : Namespace</h3><br>";

    // namespace pada latihan ini saya buat dengan nama latname, dan isinya adalah latspace
    $link = "latspace.php";
    echo "<a href = '$link'>Klik!</a>";

    // BAB 10 : Iterable
    echo "<h3>BAB 10 : Iterable</h3><br>";

    // iterable dapat digunakan sebagai argumen pada function ataupun return
    // contoh iterable sebagai argumen pada function :
    function Cetak(iterable $iter) {
        foreach ($iter as $i) {
            echo $i;
        }
    }

    $huruf = ["a, i, u <br>"];
    echo Cetak($huruf);

    // contoh iterable sabagai return :
    function Cetuk():iterable {
        return ["a","i", "u", "ala desa desu"];
    }

    $print = Cetuk();
    foreach ($print as $p){
        echo $p;
    }
    echo "<br><br>";

    // selain itu, bisa juga menggunakan iterator sebagai iterable, lebih detailnya lihat 14)iterable.php

