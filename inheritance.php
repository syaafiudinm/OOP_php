<?php 


    class produk{

        public  $judul,
                $penulis,
                $penerbit,
                $harga,
                $jmlHalaman,
                $waktuMain;


        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe ) {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
            $this->jmlHalaman = $jmlHalaman;
            $this->waktuMain = $waktuMain;
            

        }
        public function getLabel(){

                return "$this->penulis,$this->penerbit";

        }

        public function getInfoProduk(){

            $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
        
    }

}


   
    class Komik extends produk{

        public function getInfoProduk()
        {
            $str = "Komik : {$this->judul} | {$this->getLabel()} - (Rp. {$this->harga}) {$this->jmlHalaman} Halaman.";

            return $str;
        }

    }

    class Game extends produk{

        public function getInfoProduk()
        {
            $str = "Game : {$this->judul} | {$this->getLabel()} - (Rp. {$this->harga}) {$this->waktuMain} Jam.";

            return $str;
        }
    }



    class infoProduk {

        public function getinfoProduk( $produk ) {

            $str = "{$produk->judul} | {$produk->getLabel()} (Rp.  $produk->harga )";

            return $str;

        }

    }
    



    $produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100 );

    $produk2 = new Game( "GTA VI", "Rockstar", "RockstarTY", 250000, 0 );

    echo $produk1->getInfoProduk();

    echo "<br/>";

    echo $produk2->getInfoProduk();



?>