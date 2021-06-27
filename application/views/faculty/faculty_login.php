<!DOCTYPE html>
<html>
<head>
  <title>Faculty Login</title>
  <link rel="stylesheet" type="text/css" href="assets/my/login.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ font awosme ---------->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Animations-->
  <link href="css/animations.css" rel="stylesheet">

  <style type="text/css">
    .kpx_authTitle{
          text-align: center;
    line-height: 300%;
    }
  </style>
</head>
<body>
  <div class="container" >
    <div class="kpx_login" align="center" style="margin-top: 10%" >
      <h2 class="kpx_authTitle animated fadeInDown slow">Faculty Login  <a href="#"></a></h2>
    </div>
    <div class="col-md-12 " align="center">
      <div class="col-xs-12 col-sm-6 col-md-offset-3">
        <hr class="kpx_hrOr animated fadeInDown slow">
          
      </div>
    </div>
    <div class="col-md-12 col-md-offset-3" align="center">
      <div class="col-md-12">
      <?php if($error = $this->session->flashdata('login_failed')): ?>
      <div class="col-sm-6" align="center">
        <div class="alert alert-dismissible alert-danger">
          
      <?=  $error //display alert message if username or password is incorrect ?> 
        </div>
      </div>
       <?php endif; ?>
    </div>
  </div>
  <div class="col-md-12 col-md-offset-3" align="center">
      <div class="col-xs-12 col-sm-6">
        <?php  echo form_open('facultylogin/admin_login','class="kpx_loginForm"'); ?>   
          <div class="input-group">
            <span class="input-group-addon animated fadeInLeft slow"><span class="fa fa-user"></span></span>
              <?php echo form_input(['name'=> 'uname','class'=> 'form-control animated fadeInLeft fast','placeholder'=> 'Enter Username','value'=>set_value('uname')]); ?>
          </div>
          <div class="col-sm-12 " >
            <?php echo form_error('uname'); ?>
          </div>
          <hr />
          <div class="input-group">
            <span class="input-group-addon animated fadeInRight slow"><span class="fa fa-key"></span></span>
            <?php echo form_password(['name'=> 'pass','class'=> 'form-control animated fadeInRight fast','placeholder'=> 'Enter Password']); ?>
          </div>
          <div class="col-sm-12" >
            <?php echo form_error('pass'); ?>
          </div>
              
            <hr />

              <button class="btn btn-lg btn-outline-primary btn-block animated fadeInUp slow" type="submit"><i class="fa fa-sign-in"></i> Login</button>
              <!-- <br>
              <?php  
     //echo  form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-sucess']); 
      ?> -->
       <hr / class="animated fadeInUp slow">
      <div class="col-md-12 " align="center">
        <p class="kpx_forgotPwd animated fadeInUp slow">
          <a href="#">Forgot password?</a>
        </p>
      </div> 
        </form>
      </div>
    </div>
</body>
</html>
