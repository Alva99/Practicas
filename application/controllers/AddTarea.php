<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function agregar(){

		$this->load->model('modelTarea');
		$result = $this->modelTarea->agregarTarea();
	}


}

?>