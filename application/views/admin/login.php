<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
     <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form class="form" method="post" action="<?php echo base_url()."Login/check_login"?>">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="uname" class="form-control" value="<?php echo set_value('uname') ;?>">
                                <p><?php echo form_error('uname');?></p>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pword" class="form-control">
                                <p><?php echo form_error('pword');?></p>
                            </div>
                            <div class="form-group">
                               
                                <input type="submit" name="submit" class="btn btn-info btn-block" value="submit">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>