<?php
    // traits digunakan untuk mendeklarasikan metode yang dapat digunakan di banyak kelas
    // traits dapat memiliki metode yang dapat digunakan di banyak kelas yang aksesnya bisa diatur public, private, atau protected
    // untuk menggunakan trait pada class, panggil terlebih dulu dengan use
    trait pesan1 {
        public function psn1() {
            echo "Bersama jimjum dan sunny";
        }
    }

    class halo {
        use pesan1;
    }

    $cot = new halo;
    $cot->psn1();
    echo "<br>";
    
    // dengan trait tidak lagi diperlukan penulisan metode kembali, cukup memanggilnya dengan use
    // jika class lain ingin menggunakan fungsi trait tersebut juga bisa, cukup panggil use seperti contoh di bawah :
    trait text1 {
        public function txt1 () {
          echo "Loh "; 
        }
      }
      
      trait text2 {
        public function txt2() {
          echo "Kenapa mengapa begini!?"; 
        }
      }
      
      class Helo {
        use text1;
      }
      
      class Helo2 {
        use text1, text2;
      }
      
      $obj = new Helo();
      $obj->txt1();
      echo "<br>";
      
      
      $obj2 = new Helo2();
      $obj2->txt1();
      $obj2->txt2();