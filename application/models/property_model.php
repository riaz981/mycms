<?php

    class Property_model extends CI_Model{


        public function __construct(){
            $this->load->database();
        }

        public function check_credentials(){
            $username=$this->input->get('username');
            $password=$this->input->get('password');

            $this->db->select('*');
            $this->db->where('username',$username);
            $this->db->where('password',$password);
            $this->db->from('wp_credentials');

            $query=$this->db->get();

            var_dump($query);

        }


    }

?>
