<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Users extends CI_Controller{
        public function new(){
            $this->load->view('users/new');
        }
        
        public function edit(){
            $id = 2;
            if($id == 1){
                $this->load->view('users/edit');
            }
            else{
                $this->load->view('users/admin_edit');
            }
        }

        public function show(){
            $this->load->view('users/show');
        }
    }



?>