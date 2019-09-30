<div class="container">
</div>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Welcome <?php echo $user['first_name']; ?>!</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="#"><i class="fa fa-user-circle"></i> Admin </a>
                </li>
                <li><a href="<?php echo base_url('users/logout'); ?>" class="logout"><i class="fa fa-sign-out">Logout</i> </a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        
        <li><a href="#section1"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li><a href="http://localhost/Code/posts"><i class="fa fa-home"></i>Department</a></li>
        <li><a href="http://localhost/Code/employ"><i class="fa fa-user"></i>Empolyee</a></li>
      </ul>
</div>
<hr>
<h2>Welcome To Dashbord!!</h2>
<hr>


    </div>
 




