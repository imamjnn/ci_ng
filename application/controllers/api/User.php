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

	public function add(){
		$params['title'] = 'Add Data';
		$this->load->view('crud/add', $params);
	}
}
