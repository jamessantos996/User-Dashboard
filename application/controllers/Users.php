<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Users extends CI_Controller{
        public function new(){
            $this->load->view('users/new');
        }
        
        public function process_new(){
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="errors">', '</div>');

            if ($this->form_validation->run('register') == FALSE){
                $this->session->set_flashdata('errors', validation_errors());
                redirect('Users/new');
            }
            else{
                $this->load->model('Home_page');
                $this->Home_page->insert_new_user($this->input->post());
                redirect('/dashboard');
            }
        }
        public function edit_profile(){
            $this->load->view('users/edit_profile');           
        }

        public function edit($id){
            $this->load->model('User');
            $result['users'] = $this->User->get_user_info($id);
            $this->load->view('users/admin_edit', $result);           
        }

        public function edit_information(){
            $this->load->library('form_validation');
            if ($this->form_validation->run('edit_information') == FALSE){
                $this->session->set_flashdata('errors', validation_errors());
                redirect('/Users/edit');
            }
            else{
                $this->load->model('User');
                if($this->session->userdata('user_level') == 1){
                    $this->User->update_information_admin($this->input->post());
                }
                else{
                    $this->User->update_information($this->input->post());
                }
                $this->session->set_userdata('first_name', $this->input->post('first_name'));
                $this->session->set_userdata('last_name', $this->input->post('last_name'));
                $this->session->set_userdata('email', $this->input->post('email'));
                redirect('/dashboard');
            }
        }

        public function edit_password(){
            $this->load->library('form_validation');
            if ($this->form_validation->run('edit_password') == FALSE){
                $this->session->set_flashdata('errors', validation_errors());
                redirect('/Users/edit');
            }
            else{
                $this->load->model('User');
                $this->User->update_password($this->input->post());

                redirect('/dashboard');
            }
        }

        public function edit_description(){
            $this->load->model('User');
            $this->User->update_description($this->input->post(), $this->session->userdata('id'));

            redirect('/dashboard');
        }

        public function show($id){
            $this->load->model('User');
            $result['user'] = $this->User->get_user_by_id($id);
            $this->load->view('users/show', $result);
        }

        public function remove($id){
            $this->load->view('users/remove');
        }

        public function process_remove($id){
            
        }
    }



?>