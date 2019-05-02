<?php
class Login_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_user($username, $password) {
        $query = $this->db->get_where('users', array('username' => $username));
        $row = $query->row();
        if (is_null($row) || $row->password != $password){
            return NULL;
        }
        return isset($row) ? $row->username : NULL;
    }

}