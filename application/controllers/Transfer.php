<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class transfer extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function check_session(){
	   if ($this->session->userdata('user_login') != 1)//not logged in
       redirect(base_url(),'refresh');
	}

	function index(){
		$this->check_session();
		$data['page_title']  = 'Tansfers';
		$this->load->view($this->session->userdata('role').'/transfers',$data);			
    }

    function get_data_from_post(){
        $data['user_id'] = $this->input->post('user_id');
		$data['to'] = $this->input->post('to');
        $data['from'] = $this->M_user->get_branch_id($data['user_id']);
        $data['reason_of_transfered'] = $this->input->post('reason_of_transfered');
		$data['logged_by'] = $this->session->userdata('user_id');
        $data['date_of_transfered'] = date('Y-m-d');
		return $data;
    }

    function get_data_from_db($update_id){
		$query = $this->M_transfer->get_transfer_by_id($update_id);
		foreach ($query as $row) {
			$data['user_id'] = $row['user_id'];
			$data['to'] = $row['to'];
			$data['reason_of_transfered'] = $row['reason_of_transfered'];
		}
		return $data;
	}

	function save(){
		$data = $this->get_data_from_post();
		$update_id = $this->input->post('update_id', TRUE);
		if (isset($update_id)){
			$this->db->where('transfer_id',$update_id);
			$this->db->update('transfers',$data);
		 }else{
			$this->db->insert('transfers',$data);
		}

		$this->session->set_flashdata('message','Transfer saved successfully');
			if($update_id !=''):
    			redirect('transfer');
			else:
				redirect('transfer/read');
			endif;
	}


	function read(){
		$update_id = $this->uri->segment(3);
		if(!isset($update_id)){
			$update_id = $this->input->post('update_id',$update_id);
		}
		if(is_numeric($update_id)){
			$data = $this->get_data_from_db($update_id);
			$data['update_id'] = $update_id;
		}
		else{
			$data = $this->get_data_from_post();
		}

		$data['page_title']  = 'Create staff Transfer';
		$this->load->view($this->session->userdata('role').'/add_transfer',$data);			
	}

	
	function delete($param=''){
		$data['deleted'] = 1;
		$this->db->where('transfer_id',$param);
        $this->db->update('transfers',$data);
    	$this->session->set_flashdata('message','Transfer deleted successfully');
		redirect('transfer');
	}

	
}