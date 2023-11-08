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
    public function getAllMembers()
    {
        try {
            $this->db->select('key_name, vImage, vName, email, vEducation, vPost, location');
            // $this->db->select('*');
            $this->db->from('user_details');
            $result = $this->db->get()->result_array();
            // print_r($result);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }
    // public function getImgPath()
    // {
    //     try {
    //         $id = 3;
    //         $this->db->select('vImage');
    //         $this->db->from('user_details');
    //         $this->db->where('iUserId', $id);
    //         $result = $this->db->get()->row_array();
    //         // if ($query->num_rows() > 0) {
    //         //     return true;
    //         // } else {
    //         //     return false;
    //         // }
    //         return $result;
    //     } catch (Exception $e) {
    //         echo "Error:" . $e;
    //         return false;
    //     }

    // }
}

?>