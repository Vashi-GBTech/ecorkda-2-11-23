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
    public function checkDuplicate($key_name)
    {
        try {
            $this->db->select('key_name');
            $this->db->from('user_details');
            $this->db->where('key_name', $key_name);
            $query = $this->db->get();
            if ($query->num_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }

    }
}

?>