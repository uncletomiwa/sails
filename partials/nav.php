<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Second Adams International | <?php echo $title; ?></title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <style>
    	.navbar .brand {
		    max-height: 40px;
		    overflow: visible;
		    margin-top: -25px;
		    white-space: nowrap;
		    text-overflow: ellipsis;
		    width: 100px;
		    display: block;
		}
    </style>
    <link href="css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="home" class="brand brand-bootbus"><img src="img/sails-icon.png">SecondAdams INTL. LTD.</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="services" >Products and Services</a>              
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="company">Our Company</a></li>
                    <li><a href="ourexperience">Past Projects</a></li>
                    <li><a href="team">Our Team</a></li>
                  </ul>
                </li>
                <li><a href="contact">Contact us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>