<?php
    $config = array(
        'register' => array(
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email|is_unique[users.email]'
                ),
                array(
                    'field' => 'first_name',
                    'label' => 'First name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'last_name',
                    'label' => 'Last name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required|min_length[8]'
                ),
                array(
                    'field' => 'confirm_password',
                    'label' => 'Password Confirmation',
                    'rules' => 'required|matches[password]'
                )              
        ),
        'login' => array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required'
            )
        ),
        'edit_information' => array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email'
            ),
            array(
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'trim|required'
            ),
            array(
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => 'trim|required'
            )
        ),
        'edit_password' => array(
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ),
            array(
                'field' => 'confirm_password',
                'label' => 'Password Confirmation',
                'rules' => 'required|matches[password]'
            )              
        )
    );
?>