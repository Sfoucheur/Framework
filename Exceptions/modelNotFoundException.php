<?php
    class modelNotFoundException extends Exception{
        public function errorInfo(){
            echo "<div style='text-align:center;margin-top:20vh'><h1>Exception : Model Not Found</h1><br />".parent::getFile()." Line ".parent::getLine()."</div>";
        }
    }