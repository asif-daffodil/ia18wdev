<?php

class myClass {
        public string $myProperty = "This is my Property<br>";
        public int $myPhone = 195517560;
        public array $myInfo = ['name'=>'Asif','city'=>'Dhaka'];
        public bool $isTeacher = true;

        public function myFunc ()
        {
            return "Ami amar function<br>";
        }

        public function __construct()
        {
            echo "This is a text from construct function<br>";
        }

        public function __destruct()
        {
            echo "This is a text from destruct function";
        }
    }

    $obj = new myClass;
    echo $obj->myFunc();
    echo $obj->myProperty;
?>