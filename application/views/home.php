
<!doctype html>
<html lang="en">
  <head>
  
   
    <title>Blog Template · Bootstrap</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/blog.css';?>">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid" style="background-color: aqua;">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      
      <div class="col-12">
        <a class="blog-header-logo text-dark" href="#">BLoGs</a>
      </div>
      
    </div>
  </header>

  

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
       <?php 
               foreach($promo as $a)
        { ?>
        
      <h1 class="display-4 font-italic"><?php echo $a['title']; ?></h1>

      <p class="lead my-3"><?php echo $a['description']; ?></p>
      <p class="lead mb-0"><a href="<?php echo base_url().'Home/blogdetail/'.$a['blog_id'];?>"" class="text-white font-weight-bold">Read more</a></p>
      
           <?php  } ?>
    </div>
  </div>
  
  <h1>Business-</h1>

  <div class="row mb-2">
         <?php 
               foreach($business as $b)
      { ?>
    <div class="col-md-4">
      <div class="card bg-danger text-white">
        <div class="card-body shadow-lg">
           <h3 class="mb-2 mt-1"><?php echo $b['title'];?></h3>
           <p class="card-text mb-auto"><?php echo word_limiter($b['description'],25)?></p>
             <a href="<?php echo base_url().'Home/blogdetail/'.$b['blog_id'];?>">Read more</a>
        </div>
      </div>
    </div>
    <?php  } ?> 
  </div>
    <h1>Technology-</h1>
    <div class="row mb-2">
         <?php 
               foreach($technology as $t)
      { ?>
    <div class="col-md-4">
      <div class="card bg-warning text-white">
        <div class="card-body shadow-lg">
           <h3 class="mb-2 mt-1"><?php echo $t['title']; ?></h3>
           <p class="card-text mb-auto"><?php echo word_limiter($t['description'],25) ?></p>
            <a href="<?php echo base_url().'Home/blogdetail/'.$t['blog_id'];?>">Read more</a>
        </div>
      </div>
    </div>
    <?php  } ?> 
  </div>
  <h1>Gaming-</h1>
    <div class="row mb-2">
         <?php 
               foreach($gaming as $g)
      { ?>
    <div class="col-md-4">
      <div class="card bg-danger text-white">
        <div class="card-body shadow-lg">
           <h3 class="mb-2 mt-1"><?php echo $g['title']; ?></h3>
           <p class="card-text mb-auto"><?php echo word_limiter($g['description'],25)?></p>
          <a href="<?php echo base_url().'Home/blogdetail/'.$g['blog_id'];?>">Read more</a>
        </div>
      </div>
    </div>
    <?php  } ?> 
  </div>
  <h1>News-</h1>
    <div class="row mb-2">
         <?php 
               foreach($news as $n)
      { ?>
    <div class="col-md-4">
      <div class="card bg-warning text-white">
        <div class="card-body shadow-lg">
           <h3 class="mb-2 mt-1"><?php echo $n['title']; ?></h3>
           <p class="card-text mb-auto"><?php echo word_limiter($n['description'],25)?></p>
           <a href="<?php echo base_url().'Home/blogdetail/'.$n['blog_id'];?>">Read more</a>
        </div>
      </div>
    </div>
    <?php  } ?> 
  </div>



<!--start footer-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
<footer class="container-fluid bg-dark mt-5 text-light">
      <div class="container">
        <div class="row py-3">
          <div class="col-md-6"><!-- first coloumn start-->
            <span>Follw us:</span>
            <a href="#" target="_blank" class="pr-2 fi-color text-danger ml-2"><i class="fa fa-facebook-f"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color text-danger"><i class="fa fa-teitter"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color text-danger"><i class="fa fa-youtube"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color text-danger"><i class="fa fa-google"></i></a>
            <a href="#" target="_blank" class="pr-2 fi-color text-danger"><i class="fa fa-rss"></i></a>
          </div><!-- first coloumn end-->
          <div class="col-md-6 text-right"><!-- 2nd coloumn start-->
            <small>Design by Neetesh Maurya &copy; 2019</small>
            <small class="ml-2"><a href="<?php echo base_url().'Login/check_login' ?>" class="text-danger">Admin Login</a></small>
          </div><!-- 2nd coloumn end-->
        </div>
      </div>
    </footer>
    <!--End footer-->
















