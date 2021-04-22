<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Users extends CI_Controller{
        public function new(){
            $this->load->view('users/new');
        }
        
        public function edit(){
            $this->load->view('users/edit');
        }
    }



?>