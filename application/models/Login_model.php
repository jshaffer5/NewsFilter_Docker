<?php
class Login_model extends CI_Model {

    public function __construct()
    {
            $this->load->database();
    }

    public function get_user($id) {
        $query = $this->db->get_where('users', array('username' => $username));
        $row = $query->row();
        return isset($row) ? $row->username : NULL;
    }

}