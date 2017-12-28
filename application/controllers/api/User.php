<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'User');
    }

	public function getUser(){
		$params['users'] = $this->User->getAll();
		echo json_encode($params);
	}

	public function createUser(){
		$decod = json_decode(file_get_contents("php://input"));
		$data = array(
			'name' => $decod->name,
			'username' => $decod->username,
			'email' => $decod->email,
			'avatar' => $decod->avatar,
			'address' => $decod->address
		);

		$add = $this->User->create($data);
		if($data){
			$params = array('status' => 'success');
			echo json_encode($params);
		}else{
			$params = array('status' => 'failed');
			echo json_encode($params);
		}
	}

	public function deleteUser($id){
		if($id){
			$this->User->remove($id);
			$params = array('status'=>'success');
			echo json_encode($params);
		}else{
			$params = array('status'=>'failed');
			echo json_encode($params);
		}
	}
}
