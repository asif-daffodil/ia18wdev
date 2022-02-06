<?php  
    //parent class
    class dada {
        public $dadaProperty = "This is a property from dada";
    }

    //chield classs
    class baba extends dada {
        public $babaProperty = "This is a property from baba";
        public function babaFunction()
        {
            return $this->dadaProperty."<br>".$this->babaProperty;
        }
    }

    class chacha extends dada {
        public $hotelShonarga = 15000000000;
    }


    class apni extends baba {
        public $apnarProperty = "Apnar Iphone";
        public function apnerFunction () {
            return $this->dadaProperty."<br>".$this->babaProperty."<br>".$this->apnarProperty;
        }
    }

    $obj = new apni;
    echo $obj->apnerFunction();

?>