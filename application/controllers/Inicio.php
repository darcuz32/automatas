<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Inicio extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('inicio_view');
    }

    public function contarLineasArchivo(){

        $file=$_FILES['file']['tmp_name'];
        $linecount = 0;
        $handle = fopen($file, "r");
        while(!feof($handle)){
            $line = fgets($handle);
            $linecount++;
        }

        fclose($handle);

        echo "El archivo contiene $linecount ".(($linecount == 1) ? "linea." : "lineas.");
    }
}