<?php

class Login extends CI_Controller{
     public function __construct(){
      parent::__construct();
      $this->load->model('User_model','data');
     }

 function index(){
 	$this->load->view('admin/login');
 }
 public function check_login()
	{
		$this->form_validation->set_rules('uname','Name','required');
		$this->form_validation->set_rules('pword','Password','required');

		if($this->form_validation->run() == false){
			$this->load->view('admin/login');
		}else{
			$username=$this->input->post('uname');
			$password=$this->input->post('pword');

			$result=$this->data->check_login($username,$password);
			if(count($result)==1){
				$this->load->view('admin/dashboard');
			}
			else{
				echo "login failed";
			}
		}
	}
}

?>