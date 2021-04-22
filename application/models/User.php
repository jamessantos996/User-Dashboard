<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class User extends CI_Model{
        function insert_new_user($data){
            $query = "INSERT INTO users(first_name, last_name, email, password, user_level, created_at, updated_at)
                    VALUES(?,?,?,?,?,?,?)";
            $values = array($data['first_name'], $data['last_name'], $data['email'], md5($data['password']), 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));

            return $this->db->query($query, $values);
        }

        function get_user_by_id($id){
            $query = "SELECT id, first_name, CONCAT(first_name, ' ', last_name) AS name, email, DATE_FORMAT(created_at, '%M %D %Y') AS created_at, description FROM users WHERE id = ?";
            $value = array($id);
            return $this->db->query($query, $value)->row_array();
        }
        function get_user_info($id){
            $query = "SELECT * FROM users WHERE id = ?";
            $value = array($id);
            return $this->db->query($query, $value)->row_array();
        }

        function update_information($data){
            $query = "UPDATE users SET email = ?, first_name = ?, last_name = ? WHERE id = ?";
            $values = array($data['email'], $data['first_name'], $data['last_name'], $data['id']);
            return $this->db->query($query, $values);
        }

        function update_information_admin($data){
            $query = "UPDATE users SET email = ?, first_name = ?, last_name = ?, user_level = ? WHERE id = ?";
            $values = array($data['email'], $data['first_name'], $data['last_name'], $data['user_level'], $data['id']);
            return $this->db->query($query, $values);
        }

        function update_password($data){
            $query = "UPDATE users SET password = ? WHERE id = ?";
            $values = array(md5($data['password']), $data['id']);
            return $this->db->query($query, $values);
        }

        function update_description($data, $id){
            $query = "UPDATE users SET description = ? WHERE id = ?";
            $values = array($data['description'], $id);
            return $this->db->query($query, $values);
        }
    }



?>