<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Inicio extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('inicio_view');
    }

    public function proyecto1(){
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

    public function proyecto2(){
        $this->load->view('proyecto2_view');
    }

    public function obtenerTablaTokens(){
        $tokens['if'] = -1;
        $tokens['else'] = -2;
        $tokens['read'] = -3;
        $tokens['readln'] = -4;
        $tokens['for'] = -5;
        $tokens['then'] = -6;

        $tokens['ID'] = -21;
        $tokens['ID-Entero'] = -22;
        $tokens['ID-Real'] = -23;
        $tokens['ID-String'] = -24;
        $tokens['ID-Rutina'] = -25;

        $tokens['CTE-Entero'] = -41;
        $tokens['CTE-Real'] = -42;
        $tokens['CTE-String'] = -43;

        
        $tokens['+'] = -51;
        $tokens['-'] = -52;
        $tokens['*'] = -53;
        $tokens['/'] = -54;

        $tokens['>'] = -61;
        $tokens['<'] = -62;
        $tokens['>='] = -63;
        $tokens['<='] = -64;
        $tokens['='] = -65;

        $tokens['('] = -71;
        $tokens[')'] = -72;
        $tokens['['] = -73;
        $tokens[']'] = -74;
        
        $tokens['and'] = -81;
        $tokens['or'] = -82;
        $tokens['not'] = -83;


        $file=$_FILES['file']['tmp_name'];
        $linecount = 0;
        $handle = fopen($file, "r");
        $html = "";
        while(!feof($handle)){
            $line = fgets($handle);
            $line = $this->espaciarSimbolos($line);
            $line = explode(" ", $line);
            $linecount++;

            foreach($line as $key => $value){
                if($value != ""){
                    $value =  trim(strtolower($value));
                    
                    if(isset($tokens[$value])){
                        $k = $tokens[$value];
                        $ts = -1;
                    }else if(is_numeric($value)){
                        $k = (is_float($value + 0)) ? $tokens["CTE-Real"] : $tokens["CTE-Entero"];
                        $ts = -1;
                    }else if(strpos($value, '"') > -1){
                        $k = $tokens["CTE-String"];
                        $ts = -1;
                    }else{
                        $k = $tokens["ID"];
                        $ts = -2;
                    }
                    
                    $html .= "<tr><td>".$value."</td><td>".$k."</td><td>".$ts."</td><td>".$linecount."</td></tr>";
                        
                }
            }

        }

        fclose($handle);

        
        print_r($html);
    }

    public function espaciarSimbolos($string){
        $patrones = array();
        $patrones[0] = "/[\+]/";
        $patrones[1] = "/[\-]/";
        $patrones[2] = "/[\*]/";
        $patrones[3] = "/[\/]/";
        $patrones[4] = '/>/';
        $patrones[5] = '/</';
        $patrones[6] = '/>=/';
        $patrones[7] = '/<=/';
        $patrones[8] = '/=/';
        $patrones[9] = "/[\(]/";
        $patrones[10] = "/[\)]/";
        $patrones[11] = "/[\[]/";
        $patrones[12] = "/[\]]/";
        $sustituciones = array();
        $sustituciones[0] = ' + ';
        $sustituciones[1] = ' - ';
        $sustituciones[2] = ' * ';
        $sustituciones[3] = ' / ';
        $sustituciones[4] = ' > ';
        $sustituciones[5] = ' < ';
        $sustituciones[6] = ' >= ';
        $sustituciones[7] = ' <= ';
        $sustituciones[8] = ' = ';
        $sustituciones[9] = ' ( ';
        $sustituciones[10] = ' ) ';
        $sustituciones[11] = ' [ ';
        $sustituciones[12] = ' ] ';
        return preg_replace($patrones, $sustituciones, $string);
    }
}