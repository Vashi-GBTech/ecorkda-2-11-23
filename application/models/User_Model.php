<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public function saveUserData($data)
    {
        try {
            $result = $this->db->insert("user_details", $data);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }

    }
}

?>