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
	// About Us
	public function about(){
        $data['main_content'] = 'fe/about';
        $data['page_title'] ='About Us - ';
        $data['cur'] = 'About';
        $this->load->view('fe/includes/template',$data);
    }
	// Portfolio
    public function portfolio(){
        $data['main_content'] = 'fe/portfolio';
        $data['page_title'] ='Portfolio';
        $data['cur'] = 'Portfolio';
        $this->load->view('fe/includes/template',$data);
    }
	// Shop
    public function shop(){
        $data['main_content'] = 'fe/shop';
        $data['page_title'] ='Shop';
        $data['cur'] = 'Shop';
        $this->load->view('fe/includes/template',$data);
    }
	// Blog
    public function blog(){
        $data['main_content'] = 'fe/blog';
        $data['page_title'] ='Blog';
        $data['cur'] = 'Blog';
        $this->load->view('fe/includes/template',$data);
    }
	// Contact
	public function contact_us(){
        $data['main_content'] = 'fe/contact_us';
        $data['page_title'] ='Contact Us';
        $data['cur'] = 'Contact Us';
        $this->load->view('fe/includes/template',$data);
    }
}
