<?php 

   

    class MainView{
        public static function render($filename, $data= []){
            include('pages/'.$filename.'.php');
        }
        
    }

