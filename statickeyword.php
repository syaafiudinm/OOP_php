<?php 

    class contohStatic{
        public static $angka = 1;


        public function halo(){
            return "Halo " . self::$angka++ . " kali <br/>";
        }
    }



    $obj = new contohStatic;
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo "<br/>";
    echo "<br/>";

    $obj2 = new contohStatic;
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();

?>