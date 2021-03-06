<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('User_model', 'User');
    }

	public function index(){
		$params['title'] = 'Angular CRUD';

		$this->load->view('crud/home', $params);
	}

	public function table(){
		$params['title'] = 'Table User';
		$users = $this->User->getAll();
		$this->load->view('crud/table', $params);
	}

	public function add($id=null){
		$params['id'] = $id;
		if(!$id){
			$params['title'] = 'Add User';
			$this->load->view('crud/add', $params);
		}else{
			$params['title'] = 'Edit User';
			$params['user'] = $this->User->get($id);
			$this->load->view('crud/add', $params);
		}
		
	}
}
