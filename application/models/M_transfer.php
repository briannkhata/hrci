<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_transfer extends CI_Model {
	
		function __construct(){
	        parent::__construct();
	    }

      	function get_transfers(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('transfer_id');
			$query = $this->db->get('transfers');
			return $query->result_array();
		}

		function get_transfer_by_id($transfer_id){
		    $this->db->where('transfer_id',$transfer_id);
			$query = $this->db->get('transfers');
			return $query->result_array();
		}

		function get_transfer_letter($transfer_id){
   		    $this->db->where('transfer_id',$transfer_id);
			$query = $this->db->get('transfers')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['transfer_letter'];
				}
			}else {
				return '';
			}
		}

		function get_from($transfer_id){
		$this->db->where('transfer_id',$transfer_id);
		 $query = $this->db->get('transfers')->result_array();
		 if(count($query) > 0){
			 foreach ($query as $row) {
				 return $row['from'];
			 }
		 }else {
			 return '';
		 }
		 }

		function get_to($transfer_id){
		$this->db->where('transfer_id',$transfer_id);
		 $query = $this->db->get('transfers')->result_array();
		 if(count($query) > 0){
			 foreach ($query as $row) {
				 return $row['to'];
			 }
		 }else {
			 return '';
		 }
	 }

	function get_reason_of_transfered($transfer_id){
		$this->db->where('transfer_id',$transfer_id);
		 $query = $this->db->get('transfers')->result_array();
		 if(count($query) > 0){
			 foreach ($query as $row) {
				 return $row['reason_of_transfered'];
			 }
		 }else {
			 return '';
		 }
		 
	 }

	function get_date_of_transfered($transfer_id){
		$this->db->where('transfer_id',$transfer_id);
		 $query = $this->db->get('transfers')->result_array();
		 if(count($query) > 0){
			 foreach ($query as $row) {
				 return $row['date_of_transfered'];
			 }
		 }else {
			 return '';
		 }
	 }

	function get_user_id($transfer_id){
	$this->db->where('transfer_id',$transfer_id);
	 $query = $this->db->get('transfers')->result_array();
	 if(count($query) > 0){
		 foreach ($query as $row) {
			 return $row['user_id'];
		 }
	 }else {
		 return '';
	 }
 	}

	
}

