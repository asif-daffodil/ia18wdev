<?php  
    //public
    //private
    //protected

    class dada {
        public $mosjid = "Dadar Mosjid";
        protected $bari = "Dadar Bari";
        private $lungi = "Dadar Lungi";

        public function bariFunc () {
            return $this->bari."<br>".$this->lungi;
        }
    }

    class baba extends dada {
        public function babarFunc () {
            return $this->mosjid."<br>".$this->bari;
        }
    }

    $obj = new dada;
    echo $obj->mosjid."<br>".$obj->bariFunc()."<br>";
    // echo $obj->bari;
    // echo $obj->lungi;

    $babarObj = new baba;
    echo $babarObj->babarFunc();


    // public can be access from anywhere
    // protected can be use in the same and inheritense class
    // private can only use in the same class
?>