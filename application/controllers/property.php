<?php
class Property extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('property_model');

    }

    public function index(){

        $this->load->library('twig');
        $this->twig->display('login.html.twig');
    }

    public function logincheck(){
        $this->property_model->check_credentials();
    }

}
?>
