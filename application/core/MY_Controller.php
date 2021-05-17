<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	public $permissions = array();
	public $topnavbar;
	public $sidebar;
	//public $empresa= array();
	function __construct(){
		parent::__construct();
		//date_default_timezone_set("Mexico/General");
		date_default_timezone_set("America/Monterrey");
		setlocale(LC_TIME, 'spanish');
       
		$this->header=$this->load->view('header_view',array(),true);
        $this->sidebar=$this->load->view('sidebar_view',array(),true);
        $this->css=$this->load->view('css_view',array(),true);
        $this->js=$this->load->view('js_view',array(),true);

	}
}
