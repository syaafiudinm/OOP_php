<?php 


    class produk{

        public  $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

        public function getLabel(){

                return "$this->penulis,$this->penerbit";

        }
        
    }



    $produk1 = new produk();

    $produk1->judul = "Naruto";
    $produk1->penulis = "Masashi Kishimoto";
    $produk1->penerbit = "Shonen Jump";
    $produk1->harga = 30000;

    $produk2 = new produk();

    $produk2->judul = "GTA VI";
    $produk2->penulis = "Rockstar";
    $produk2->penerbit = "RockstarTY";
    $produk2->harga = 250000;

    echo "Komik : ". $produk1->getLabel();

    echo "<br/>";

    echo "Game : ". $produk2->getLabel();



?>