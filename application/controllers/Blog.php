<?php
class Blog extends CI_Controller
{
 public function index()
 { //Display data in list page
 	   $this->load->model('Blog_model');
        $info['emp']=$this->Blog_model->get_table_data('blog');

		$this->load->view('admin/blog/list',$info);
 }

 //delete data
 public function remove_data(){
    	$id=$this->uri->segment(3);
    	$this->load->model('Blog_model');
    	$this->Blog_model->delete_record('blog',$id);
    	header('location:'.base_url().'Blog');
    }

public function add()//inserting blog data
 {
 		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('description','Description','required');
		$this->form_validation->set_rules('author','Author','required');
		if($this->form_validation->run() == true)
		{
			$data=array(
          'title'=>$this->input->post('title'),//name is table content of database 
          'description'=>$this->input->post('description'),
          'author'=>$this->input->post('author'),
          'special'=>$this->input->post('special'),
           );
			$this->load->model('Blog_model');
	     $a=$this->Blog_model->insert_data('blog',$data);
       $this->session->set_flashdata('success','Blog created successfully');
       redirect(base_url().'blog/index');
		}
		else{
             $this->load->view('admin/blog/add');
		    }
    
 }

}
?>