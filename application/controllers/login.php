<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{	


	/*function __construct(){
		parent:: _construct();
		
	}*/


	public function comprobar(){
		$usuario = array(
			'document_number' => $this->input->post('document_number'),
			'password' => $this->input->post('password')
			);
		

		$this->load->model('login_model');
		if( $this->login_model->comprobar_usuario($usuario) == true){
			redirect('principal');		
		}else{
			redirect('login');		
		}
	}

	public function index(){		
		$data['main_content'] = 'registro_login';

		$this->load->view('main_template',$data);

	}		

	
}