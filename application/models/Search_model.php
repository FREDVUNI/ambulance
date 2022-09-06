<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

    class Search_model extends CI_Model{
        public function certificates($slug = FALSE){
            $this->db->select('certificates.*'); 
            if($slug  === FALSE):
        		$query  = $this->db->get('certificates');
        		return $query->result_array();
        	endif;
        	$query =  $this->db->get_where('certificates',array('certificates.slug'=>$slug));
        	return $query->row_array();
        }
        public function get_certificate($s_data){
           $this->db->select('*');
           $this->db->from('certificates');

           if($s_data['searchQ'] !=""):
                $this->db->like('certificates.student_no',$s_data['searchQ'],'both');
           endif;

           $query=$this->db->get()->result_array();
           return $query;
        }
    }
