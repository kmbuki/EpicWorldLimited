<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	// Index
	public function index()
	{
		$data['main_content'] = 'fe/home';
		$data['page_title'] ='Home';
		$data['cur'] = 'Home';
		$this->load->view('fe/includes/template',$data);
	}
	// Shop
    // public function shop(){
    //     $data['main_content'] = 'fe/shop';
    //     $data['page_title'] ='Shop';
    //     $data['cur'] = 'Shop';
    //     $this->load->view('fe/includes/template',$data);
    // }
}
