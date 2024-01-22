<?php 


    class produk{

        public  $judul,
                $penulis,
                $penerbit;

        private $harga;


        protected $diskon = 0;


        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {

            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;

        }


        public function getHarga(){

            return $this->harga - ( $this->harga * $this->diskon / 100 );

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

        public $jmlHalaman;
        public  function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, ){
            
            parent::__construct( $judul, $penulis, $penerbit, $harga );

            $this->jmlHalaman = $jmlHalaman;

        }
        public function getInfoProduk()
        {
            $str = "Komik : ". parent::getInfoProduk() ."{$this->jmlHalaman} Halaman.";

            return $str;
        }

    }

    class Game extends produk{
        public $waktuMain;

        public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0, ){

            parent::__construct( $judul, $penulis, $penerbit, $harga);

            $this->waktuMain = $waktuMain;

        }
        public function getInfoProduk()
        {
            $str = "Game :". parent::getInfoProduk() ." {$this->waktuMain} Jam.";

            return $str;
        }

        public function setDiskon( $diskon ){

            $this->diskon = $diskon;

        }

    }



    class infoProduk {

        public function getinfoProduk( $produk ) {

            $str = "{$produk->judul} | {$produk->getLabel()} (Rp.  $produk->harga )";

            return $str;

        }

    }
    



    $produk1 = new Komik( "Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100 );

    $produk2 = new Game( "GTA VI", "Rockstar", "RockstarTY", 250000, 50 );

    echo $produk1->getInfoProduk();

    echo "<br/>";

    echo $produk2->getInfoProduk();

    echo "<hr/>";


    $produk2->setDiskon(50);
    echo $produk2->getHarga();



?>