<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('welcome_message');
    }

    public function abc($a, $b) {
        echo $a;
        echo $b;
        $my_name = "arshad";
        $this->load->view('abc', array('name' => $my_name));
    }

    public function db() {
        echo "1";
        $this->load->model('test_model');
        echo "2";
        $r = $this->test_model->get_data_from_table();
        print_r($r);
    }

    public function login_form() {
        $this->load->view('login_form');
    }

    public function register_form() {
        $this->load->view('register_form');
    }
    
     public function register_submit() {
        $this->load->view('register_submit');
    }

}
