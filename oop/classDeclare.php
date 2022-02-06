<?php 
    // create a class
    // convert the class into a object
    // use the object :)

    // how to create a class
    class myClass {
        //how to create a property
        public $myProperty = "This is a text from a property";
        public $youProperty = "This is another text from another property";

        //how to create a method
        public function myFunc () {
            return "This is a text from a method";
        }

        public function yourFunc () {
            return "This is another text from another method";
        }
    }

    // how to convert a class into a object
    $obj = new myClass;

    // how to use the object
    echo $obj->myProperty."<br>".$obj->youProperty."<br>".$obj->myFunc()."<br>".$obj->yourFunc();
?>