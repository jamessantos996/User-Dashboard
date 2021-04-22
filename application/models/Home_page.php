<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Home_page extends CI_Model{
        function count_user(){
            return $this->db->query('SELECT * FROM users')->result_array();
        }

        function insert_new_user($data){
            $count = $this->count_user();
            $user_level = 0;

            if(empty($count)){
                $user_level = 1;
            }
            else{
                $user_level = 0;
            }

            $query = "INSERT INTO users(first_name, last_name, email, password, user_level, created_at, updated_at)
                        VALUES(?,?,?,?,?,?,?)";
            $values = array($data['first_name'], $data['last_name'], $data['email'], md5($data['password']), $user_level, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));

            return $this->db->query($query, $values);
        }

        function get_user($data){
            $query = "SELECT * FROM users WHERE email = ? AND password = ?";
            $values = array($data['email'], md5($data['password']));

            return $this->db->query($query, $values)->row_array();
        }
    }

?>