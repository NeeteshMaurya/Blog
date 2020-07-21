<?php $this->load->view('admin/header'); ?>
  

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add blog</h1>
      </div>

      <form method="post" action="<?php echo base_url()."blog/add";?>">
    	<div class="form-group">
    		<label>Title</label>
    		<input type="text" name="title" class="form-control" value="<?php echo set_value('title') ?>">
    		<p class="help-block"><?php echo form_error('title') ?></p>
    	</div>
    	<div class="form-group">
    		<label>Description</label>
    		<textarea name="description" class="form-control" rows="5" value="<?php echo set_value('description') ?>"></textarea>
    		<p class="help-block"><?php echo form_error('description') ?></p>
    	</div>
    	<div class="form-group">
    		<label>Author</label>
    		<input type="text" name="author" class="form-control" value="<?php echo set_value('author') ?>">
    		<p class="help-block"><?php echo form_error('author ') ?></p>
    	</div>
        <div class="form-group">
            <label>Special</label>
            <select name="special" class="form-control">
                <option value="">--Select a value--</option>
                <option value="Technology">Technology</option>
                <option value="promo">Promotional</option>
                 <option value="business">Business</option>
                  <option value="gaming">Gaming</option>
                   <option value="news">News</option>
            </select>
        </div>
    	<div class="form-group">
    		<button class="btn btn-primary">Create</button>
    	</div>
    </form>  
    </main>
  </div>
</div>

<?php $this->load->view('admin/footer'); ?>