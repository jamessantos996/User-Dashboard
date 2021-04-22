<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Dashboard_model extends CI_Model{
        function get_all_users(){
            return $this->db->query('SELECT id, CONCAT(first_name, " ", last_name) AS name, email, DATE_FORMAT(created_at, "%M %D %Y") AS created_at, user_level FROM users')->result_array();
        }
    
    }

?>