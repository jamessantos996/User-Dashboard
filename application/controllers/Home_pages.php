<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home_pages extends CI_Controller{
        public function index(){
            $this->load->view('home.php');
        }
        
        public function signin(){
            $this->load->view('signin');
        }

        public function register(){
            $this->load->view('register');
        }
    }



?>