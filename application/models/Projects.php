<?php 
class Projects extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->tbl_name = "projects";
	}
	public function getAllProject()
	{
		$this->db->select('*');
		$this->db->from($this->tbl_name);
		$this->db->order_by('id', 'DESC');//sort accending to descending

		$query = $this->db->get();

		return $query->result();
	}
	/* CHECK CREATE BLANK PROJECT IS EXISTING */
	public function checkDuplicateproject_name($params = array()){
		$condition = "project_name = " . "'" . $params['project_name'] . "' AND " . "project_created_by = " . "'" . $params['project_created_by'] . "'";
		$this->db->select('*');
		$this->db->from($this->tbl_name);
		$this->db->where($condition);

		$query = $this->db->get();

		if($query->num_rows() == 1)
		{
			return TRUE;
		}else
			{
				return FALSE;
			}
	}
	public function createProject($params = array())
	{
		$this->db->insert($this->tbl_name, $params);
	}
	public function deleteSeletedProject($id){
		$condition = "id = " . $id;
		$this->db->delete($this->tbl_name, $condition, 1);
	}
}
