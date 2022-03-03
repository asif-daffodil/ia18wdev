<?php 
    class wbeClass {
        public function __construct()
        {
            $this->session_start();
        }

        private function session_start ()
        {
            session_start();
        }
    }
    $obj = new wbeClass;
?>