<?php
/**
 * Created by PhpStorm.
 * User: birabira
 * Date: 15/04/17
 * Time: 16:29
 */

class Problem_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getProblem($id = NULL) {

        if($id === NULL) {
            $query = $this->db->get('user');
            return $query->result_array();
        }

        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

} 