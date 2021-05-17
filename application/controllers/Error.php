<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
class Error extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->library('datatable');
        //$this->load->model('login_model');
        $this->load->library(array('session'));
        $this->load->helper(array('url','form'));
    }
    
    public function index(){
        //$this->output->set_status_header('404'); 
        $this->load->view('error_view');
    }
}