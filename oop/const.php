<?php  
    class myClass  {
        public string $myProperty = "My Text<br>";
        public static int $myNumber = 123;
        public const myConst = "This is a value from const<br>";

        public function ChangeProperty ()
        {
            $this->myProperty = self::myConst;
        }
    }

    $obj = new myClass;
    echo $obj::myConst;
    echo $obj->myProperty;
    $obj->ChangeProperty();
    echo $obj->myProperty;
    echo $obj::$myNumber;
?>