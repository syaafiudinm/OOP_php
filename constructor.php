<?php 


    class produk{

        public  $judul,
                $penulis,
                $penerbit,
                $harga;


        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

        }
        public function getLabel(){

                return "$this->penulis,$this->penerbit";

        }
        
    }
    



    $produk1 = new produk( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000 );

    $produk2 = new produk( "GTA VI", "Rockstar", "RockstarTY", "250000" );

    echo "Komik : ". $produk1->getLabel();

    echo "<br/>";

    echo "Game : ". $produk2->getLabel();



?>