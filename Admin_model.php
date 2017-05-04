<?php 
class Admin_model extends CI_Model
{
	function adminlogin()
	{
		$sel=$this->db->get('admin');
     	return $sel->result_array();		
	}
	function fetch_news()
	{
	$sel=$this->db->get('adminnews');	
			return $sel->result_array();
	}
	function tot_news()
	{
		return $this->db->count_all_results('adminnews');
	}
	function single_news($id)
	{
		$sel=$this->db->get_where('adminnews',['a_id'=>$id]);
	  return $sel->result_array();	
	}
	function aadd($id)
	{
		$sel=$this->db->get_where('news',['id'=>$id]);
		
		
		return $sel->result_array();	
		
	}
	function adel($id)
	{
		$this->db->where(['a_id'=>$id]);
$this->db->delete('adminnews');
		
		
	}
	function inser($i,$ti,$u,$d,$im,$ca)
	{
		$ani=array('a_id'=>$i,'a_title' => $ti,'a_user' => $u, 'a_des' => $d,'a_img'=>$im,'a_cat'=>$ca);
		$this->db->insert('adminnews',$ani);
	}
	
}
?> 