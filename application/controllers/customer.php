<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('CustomersDB');
	}
	
	public function index($cid){
		
		$data = array();
		$data['page_title'] = 'Customer Details';
		
		//$cd = $this->CustomersDB->getCustomerDetails($cid);
		$cd = '';
		
		if(!empty($cd)){		
			$data['cid'] = $cid;
			$data['fname'] = 'Luke';
			$data['lname'] = 'Jones';
			$data['phone'] = '402-416-6562';
			$data['email'] = 'luke.jones@doane.edu';
			$data['address'] = '707 Continental Cir.' . "\n" . 'APT 1025' . "\n" . 'Mountain View CA, 94040';
			$data['comments'] = array('No comment');
		}
		else{
			$data['error'] = 'Customer was not found';
		}
		
		$this->load->view('customer', $data);	
	}
}

?>