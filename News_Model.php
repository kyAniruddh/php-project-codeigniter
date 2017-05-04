<?php
class News_Model extends CI_Model
{
	
	
	function pub_news($li,$st)
	
	
	   {
		$this->db->limit($li,$st);
		$this->db->order_by('dat', 'DESC');
	    $sel=$this->db->get('adminnews');
	    return $sel->result_array();	
	}
	
	
	function fet_news()
	
	  {
		$this->db->order_by('dat', 'DESC');
	  $sel=$this->db->get("news");
	  return $sel->result_array();	
	}
	

	function user_news($id)
	
	{
		$sel=$this->db->get_where('news',['user'=>$id]);
	  return $sel->result_array();	
	}
	
	function addnew($cat,$t,$img,$desc,$u)
	
	  {
		$to=['cat'=>$cat,'title'=>$t,'des'=>$desc,'user'=>$u,'img'=>$img];
		return $this->db->insert("news",$to);
		
	}
	
	function cat_news($ca)
	
	  {
		$sel=$this->db->get_where("news",['cat'=>$ca]);
		  return $sel->result_array();	
	  }

	  
	function single_news($id)
	
	  {
			$sel=$this->db->get_where('adminnews',['a_id'=>$id]);
	  return $sel->result_array();
		
	}
	
    }
   ?>