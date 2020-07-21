<?php
class Blog_model extends CI_model
{
  function insert_data($table,$data) //making a function which will pass in controller
	{
		$this->db->insert($table,$data);
	}
	//Display Data
	function get_table_data($table)
	{
		$res=$this->db->get($table);
        return $res->result_array();
	}
	//Delete Data
	function delete_record($table,$id)
	{
      $this->db->where('blog_id',$id);
      $this->db->delete($table);
	}
	//For read more
	function getblog($id)
	{
      $this->db->where('blog_id',$id);
      $blog=$this->db->get('blog')->row_array();
      return $blog;
	}
  

 //Display blogs Data in front page 
	function getbusiness($table)
	{
		$this->db->where('special','business');
	    $this->db->order_by('blog_id','DESC');
		$res=$this->db->get($table);
        return $res->result_array();
	}
	//Display blogs Data in front page 
	function getpromo($table)
	{
		$this->db->where('special','promo');
		 $this->db->order_by('blog_id','DESC');
		$this->db->limit(1);
		$res=$this->db->get($table);
        return $res->result_array();
	}
	function gettechnology($table)
	{
		$this->db->where('special','Technology');
	     $this->db->order_by('blog_id','DESC');
		$res=$this->db->get($table);
        return $res->result_array();
    }
    function getGaming($table)
	{
		$this->db->where('special','gaming');
	     $this->db->order_by('blog_id','DESC');
		$res=$this->db->get($table);
        return $res->result_array();
    }
    function getNews($table)
	{
		$this->db->where('special','news');
	     $this->db->order_by('blog_id','DESC');
		$res=$this->db->get($table);
        return $res->result_array();
    }


}









