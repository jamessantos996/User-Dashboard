<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class User extends CI_Model{
        function insert_new_user($data){
            $query = "INSERT INTO users(first_name, last_name, email, password, user_level, created_at, updated_at)
                    VALUES(?,?,?,?,?,?,?)";
            $values = array($data['first_name'], $data['last_name'], $data['email'], md5($data['password']), 0, date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));

            return $this->db->query($query, $values);
        }
        function get_messages($id){
            $query = 'SELECT messages.id AS message_id, content AS message_content, 
            messages.created_at AS message_date, CONCAT(first_name," ",last_name) AS message_sender_name 
            FROM messages LEFT JOIN users ON messages.user_id = users.id 
            WHERE messages.user_target = ?
            ORDER BY messages.created_at DESC';

            return $this->db->query($query, $id)->result_array();
        }
        function get_comments_from_message_id($message_id){
            $query = "SELECT comments.message_id, 
            CONCAT(first_name,' ',last_name) AS comment_sender_name, 
            content AS comment_content, comments.created_at AS comment_date 
            FROM comments LEFT JOIN users ON comments.user_id = users.id 
            WHERE comments.message_id = ? 
            ORDER BY comments.created_at ASC";

            return $this->db->query($query, $message_id)->result_array();
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

        function get_all_messages($id){
            $query = "SELECT messages.id, users.first_name, users.last_name, messages.content, messages.created_at FROM users
            INNER JOIN messages
                ON users.id = messages.user_id
            WHERE messages.user_target = ?
            ORDER BY messages.created_at DESC";

            $value = array($id);
            return $this->db->query($query, $value)->result_array();
        }

        function get_all_comments($id){
            $query = "SELECT users.id, users.first_name, users.last_name, comments.content, comments.created_at FROM users
            INNER JOIN comments
                ON users.id = comments.user_id
            WHERE comments.message_id = ?
            ORDER BY comments.created_at ASC";

           return $this->db->query($query, $id)->result_array();
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

        function delete_user($id){
            return $this->db->query("DELETE FROM users WHERE id = ?", $id);
        }

        function post_message($data){
            $query = "INSERT INTO messages(user_id, user_target, content, created_at, updated_at)
                    VALUES(?,?,?,?,?)";
            $values = array($data['id'], $data['user_target'], $data['message'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));

            return $this->db->query($query, $values);
        }

        function post_comment($data){
            $query = "INSERT INTO comments(user_id, message_id, message_target, content, created_at, updated_at)
                    VALUES(?,?,?,?,?,?)";
            $values = array($data['id'], $data['message_id'], $data['message_target'], $data['comment'], date('Y-m-d H:i:s'), date('Y-m-d H:i:s'));
            return $this->db->query($query, $values);
        }
    }



?>