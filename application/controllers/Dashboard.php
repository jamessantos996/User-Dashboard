<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Dashboard extends CI_Controller{
        public function index(){
            $this->load->model('Dashboard_model');
            $result['users'] = $this->Dashboard_model->get_all_users();

            if($this->session->userdata('user_level') == 1){
                $this->load->view('dashboard/admin', $result);
            }
            else{
                $this->load->view('dashboard/index', $result);
            } 
        }   
    }



?>