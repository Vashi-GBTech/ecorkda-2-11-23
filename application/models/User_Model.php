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
    public function updateUserData($data, $id)
    {
        try {
            $result=$this->db->update("user_details",$data,"id=".$id."");
            // $result = $this->db->insert("user_details", $data);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }
    public function deleteUserData( $id)
    {
        try {
            $result=$this->db->delete("user_details",array("id" => $id));
            // $result = $this->db->insert("user_details", $data);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }
    public function checkDuplicate($key_name, $id = null)
    {
        try {
            if(isset($id) && !empty($id)){
                $this->db->select('key_name');
                $this->db->from('user_details');
                $this->db->where('key_name', $key_name);
                $this->db->where('id !=', $id);
                $query = $this->db->get();      
            }else{
                $this->db->select('key_name');
                $this->db->from('user_details');
                $this->db->where('key_name', $key_name);
                $query = $this->db->get();
            }
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
            $this->db->select('id, key_name, vImage, vName, email, vEducation, vPost, location');
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
    public function getMemberDetails($id)
    {
        try {
            $this->db->select('id, key_name, vImage, vName,vDesc, email, vEducation, vPost, location');
            $this->db->from('user_details');
            $this->db->where('id', $id);
            $result = $this->db->get()->row_array();
            // $result = $this->db->get()->result_array();
           
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


    public function savePreAppFormData($data)
    {
        try {
            $result = $this->db->insert("pre_app_form", $data);
            return $result;
        } catch (Exception $e) {
            error_log("Database error: " . $e->getMessage());
            return false;
        }
    }

    function sendEmail($to, $subject, $message) {
        $from_email = 'mentor@ecovisrkca.com'; //change this to yours
        $this->load->library('email');
        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'webmail.gbtech.in'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number 587 on server
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = 'Mentor@123$'; //$from_email password
        $config['smtp_crypto'] = 'ssl';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
    
        //send mail
        $this->email->from($from_email, 'RMT Team');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send()) {
            return true;
        } else {
            return false;
        }
    }

    public function CreateOtp() {
        $opt = rand(1000, 10000);
        $this->db->select('otp');
        $this->db->from('otp_header_all');
        $this->db->where('otp', $opt);
        $this->db->get();
        if ($this->db->affected_rows() > 0) {
            return $this->CreateOtp();
        } else {
            return $opt;
        }
    }

    public function SaveOpt($data, $user_id) {
        $this->db->where("created_by", $user_id)->delete('otp_header_all');
        $this->db->insert('otp_header_all', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updatePartnerData($data, $id) {
        $this->db->where("id", $id);
        $this->db->update('otp_header_all', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserDetails($id, $userEmail)
    {   
        try {
            $this->db->select('*');
            $this->db->from('otp_header_all');
            if(!empty($id)){
                $this->db->where('id', $id);
            }else if(!empty($userEmail)){
                $this->db->where('created_by', $userEmail);
            }
            $result = $this->db->get()->row_array();
            // $result = $this->db->get()->result_array();
            if(empty($result)){
                $result = array();
            }
            // echo "<pre>"; print_r($result); exit();
            return $result;
        } catch (Exception $e) {
            // echo "<pre>"; print_r($result); exit();
            // echo "Error:" . $e;
            $result = array();
            return $result;
        }
    }


}


?>