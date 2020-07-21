<?php $this->load->view('admin/header'); ?>
  

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Blog List</h1>
      </div>
    <h4 class="text-success">Blog created successfully</h4>
    <center>
        <table border="1px" class="table table-striped">
            <tr>
                <th>Sr.No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                
                <th>Action</th>
                
            </tr>
            <?php 
               foreach($emp as $e)
            { ?>
            <tr>
                <td><?php echo $e['blog_id']; ?></td>
                <td><?php echo $e['title']; ?></td>
                <td><?php echo $e['description']; ?></td>
                <td><?php echo $e['author']; ?></td>
                
                <td><a onclick="return confirm('Are you sure to Remove Data???');" href="<?php echo base_url(); ?>Blog/remove_data/<?php echo $e['blog_id'] ?>"><button class="btn btn-danger">Remove</button></a></td>
            </tr>
           <?php  } ?>
        </table>
      </center>
      
    </main>
  </div>
</div>

<?php $this->load->view('admin/footer'); ?>