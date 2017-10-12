<?php echo validation_errors();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>css/sb-admin.css" rel="stylesheet">
  <script language="javascript">

  function validasi(form){
    if (form.username.value==""){
	  alert("Username masih kosong");
	  form.username.focus();
	  return (false);
	}
    if (form.password.value==""){
	  alert("Password masih kosong");
	  form.password.focus();
	  return (false);
	}
  return (true);
  }
  </script>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <?php
            $frm_login = array('onsubmit' => 'return validasi(this)');
            echo form_open('admin/login', $frm_login);
           ?>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <!-- <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email"> -->
            <?php $txtuser = array('name' => 'username', 'class' => 'form-control', 'placeholder' => 'Masukan Username', 'autofocus' =>'autofocus');
    	     echo form_input($txtuser);?>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <!-- <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password"> -->
            <?php $txtpass = array('name' => 'password', 'class' => 'form-control', 'placeholder' => 'Masukan Password');
        	 echo form_password($txtpass); ?>
          </div>

          <?php $button = array('name' => 'login', 'class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit'); ?>
          <?php echo form_button($button,'Login'); ?>
          <?php echo form_close(); ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
