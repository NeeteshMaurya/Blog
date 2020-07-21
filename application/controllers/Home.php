<?php
class Home extends CI_Controller
{
  public function index()
  {
    $this->load->helper('text');
  	$this->load->model('Blog_model');

  $info['all']=$this->Blog_model->get_table_data('blog');
  $info['business']=$this->Blog_model->getbusiness('blog');
  $info['promo']=$this->Blog_model->getpromo('blog');
  $info['technology']=$this->Blog_model->gettechnology('blog');
  $info['gaming']=$this->Blog_model->getGaming('blog');
  $info['news']=$this->Blog_model->getNews('blog');

   $this->load->view('home',$info);

  }
  //for read more
  public function blogdetail($blogId)
  {
    $this->load->model('Blog_model');
   $blog = $this->Blog_model->getblog($blogId);
    if(empty($blog)){
      redirect(base_url());
    }
    $data = array();
    $data['blog'] = $blog;

    $this->load->view('detail',$data);
  }

}
