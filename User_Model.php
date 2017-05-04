<?php 
class User_model extends CI_Model
{
	function regis($u,$p,$n,$a,$c,$sq,$ans)
	{
		$data=['uid'=>$u,'password'=>$p,'name'=>$n,'age'=>$a,'city'=>$c,'sq'=>$sq,'ans'=>$ans];
		return $this->db->insert("users",$data);
		
	}
	function login($uid)
	{
		$sel=$this->db->get_where("users",['uid'=>$uid]);
        return $sel->result_array();		
	}

	
	function dele($id)
	{
		
		$this->db->where('id', $id);
$this->db->delete('news');
   
	}
	function u_detail($ui)
	{
		$sel=$this->db->get_where("users",['uid'=>$ui]);
  return $sel->result_array();
	}
	
	function news_edit($id)
	{
		$sel=$this->db->get_where("news",['id'=>$id]);
  return $sel->result_array();
	}
	function upda($category,$title,$des,$id)
	{
	$data = array(
        'title' => $title,
        'des' => $des,
        'cat' => $category
);

$this->db->where('id', $id);
$this->db->update('news', $data);	
		
	}
}
?> 