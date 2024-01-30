<?php 


class Fruit{

        private $name;
        private $color;

        public function introduce(){

            return $this->name . " - " . $this->color;

        }

        public function set_name($name){
            $this->name = $name;
        }

        public function get_name(){
            return $this->name;
        }

        public function set_color($color){
            $this->color = $color;
        }

        public function get_color(){
            return $this->color;
        }

}

$apple = new Fruit();

$apple->set_name('Apel');
$apple->set_color('Red');

echo $apple->get_name();
echo $apple->get_color();

