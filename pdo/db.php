<?php  
    class dbConn {
        private const host = "localhost";
        private const user = "root";
        private const pass = null;
        private const dbname = "ia18pdo";
        private static $conn;

        private function __construct () {
            return;
        }

        public static function conn () {
            dbConn::$conn = new PDO("mysql:host=".dbConn::host.";dbname=".dbConn::dbname, dbConn::user, dbConn::pass);
            return dbConn::$conn;
        }
    }
    dbConn::conn();
?>