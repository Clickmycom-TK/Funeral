<?php

class product_model extends CI_Model {
		function __construct()
                {
                                parent::__construct();
                                
                }
	
	public function getNums($table){
		$rs=$this->db->get($table);
		return $rs->num_rows();
	}


}
?>