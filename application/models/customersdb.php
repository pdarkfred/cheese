<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class CustomersDB extends CI_Model{
	
	public function getCustomerDetails($cid){
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('cid', $cid);
		
		$results = $this->db->get();
		
		if($results->num_rows() > 0){
			return $results->row();
		}
		else{
			return array();
		}
	}
}
?>