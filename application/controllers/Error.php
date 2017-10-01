<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Error extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['main_content'] = 'fe/error_404';
        $data['page_title'] ='Error 404: Page Not Found - ';
        $data['cur'] = 'Home';
        $this->load->view('fe/includes/template',$data);
    }
}