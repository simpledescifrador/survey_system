<?php
	class Admin extends CI_Model {
		function __construct() {
			parent::__construct();
			$this->tbl_name = 'admin';
		}

		public function login($data = array()) {
			$condition = "name =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
			$this->db->select('*');
			$this->db->from($this->tbl_name);
			$this->db->where($condition);
			$this->db->limit(1);

			$query = $this->db->get();

			if($query->num_rows() == 1){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function readAdminInfo($username){
			$condition = "name =" . "'" . $username . "'";
			$this->db->select('*');
			$this->db->from($this->tbl_name);
			$this->db->where($condition);
			$this->db->limit(1);

			$query = $this->db->get();

			if ($query->num_rows() == 1) {
				return $query->result();
			} else {
				return FALSE;
			}
		}	
	}

?>
