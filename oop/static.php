<?php 
    class myClass {
        public static string $myProperty = "Hello World<br>";
        private function __construct()
        {
            return;
        }

        public static function myFunc($pera1="function") :string {
            return "I am a $pera1<br>";
        } 
    }
    // new myClass;
    echo myClass::$myProperty;
    echo myClass::myFunc(pera1:"teacher");
?>