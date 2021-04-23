<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home_pages extends CI_Controller{
        public function index(){
            $this->load->view('home_page/home');
        }
        
        public function login(){
            $this->load->view('home_page/login');
        }

        public function register(){
            $this->load->view('home_page/register');
        }

        public function process_register(){
            //setting up the form validation and error messages 
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');

            if ($this->form_validation->run('register') == FALSE){
                $this->session->set_flashdata('errors', validation_errors());
                redirect('register');
            }
            else{
                $this->load->model('Home_page');
                $this->Home_page->insert_new_user($this->input->post());
                redirect('login');
            }   
        }

        public function process_login(){
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');

            if ($this->form_validation->run('login') == FALSE){
                $this->session->set_flashdata('errors', validation_errors());
                redirect('login');
            }
            else{
                $this->load->model('Home_page');
                $result = $this->Home_page->get_user($this->input->post());
                if(!empty($result)){
                    $data = array(
                        'id' => $result['id'],
                        'email' => $result['email'],
                        'first_name' => $result['first_name'],
                        'last_name' => $result['last_name'],
                        'created_at' => $result['created_at'],
                        'user_level' => $result['user_level'],
                        'is_logged_in' => true
                    );
                    $this->session->set_userdata($data);
                    redirect('dashboard');
                }
                else{
                    $this->session->set_flashdata("errors", "<p class = 'errors'>Invalid email or password!</p>");
                    redirect('login');
                }       
            }   
        }

        public function logout(){
            $this->session->sess_destroy();
            redirect('/');
        }
    }



?>