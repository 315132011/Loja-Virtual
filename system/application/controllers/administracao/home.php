<?php
/*
 * Controlador da area de administra��o do site
 */

class Home extends Controller {
	
	function __construct(){
		parent::Controller();
	}
	
	function index() {
		$data['titulo']="Administra��o | Home";
		$this->load->view('administracao/elementos/html_header',$data);
		$this->load->view('administracao/home');
		$this->load->view('adminsitra��o/elementos/html_footer');
	}
	
}


?>