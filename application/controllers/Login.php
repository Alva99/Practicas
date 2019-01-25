<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['respuesta'] = '';
		$this->load->view('login',$data);
	}
	
	public function valida(){
		$this->load->model('modelLogin');
		$result = $this->modelLogin->ValidarUsuario($_POST['username'],$_POST['password']);	
		if($result != null){
			$this->load->view('home');
		}else{
			$data['respuesta'] = 'Usuario o contraseña incorrecta';
			$this->load->view('login', $data);
		}
	}
}
