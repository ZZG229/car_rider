<?php
class Administrators_model extends CI_Model {
    function can_login($email, $password) {
        $query = $this->db->query('SELECT * FROM administrators WHERE email = '.$email.' AND passwd = '.$password);
        //SELECT * FROM administrators WHERE email = '$email' AND passwd = '$password'

        if($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}
