<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="With a list of 53 different types of kotas and more than 12 different sources, there's definitely a kota that is tailored for you.">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu | Our Menus</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="images/Ntsitsi-fast-food-logo-1.png" rel="shortcut icon">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
 <script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>

</head>
<body>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

</script>

<div id="home-page-banner"> <!-- -->
  <div class="container">
  <div class="row" >
    <!--<div id="home-page-banner">-->
    <div class="col-lg-3 "></div>
    <div class="col-lg-6 col-md-12" >
      <a href="index.php"><img src="images/Ntsitsi-fast-food-logo-1.png" class="img-responsive" height="250" alt=""></a>
     <!-- <h2 style="color:#ffffff; background-color: #333333;" class="text-center">If you can name it - We can make it.</h2>-->
    </div>
    <div class="col-lg-3"></div>
    <!--</div>-->
  </div>
  </div>
</div>
 
<nav class="navbar navbar-inverse navbar" id="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="index.php"><!--<img src="images/Tsitsisfunfood_LOGO_1.png" id="logo" class="img-responsive" width="200" height="100">-->Ntsitsi's Fun Food</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="topFixedNavbar1">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="about.php">About Us<span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="menu.php">Menu<span class="sr-only">(current)</span></a></li>
        <li><a href="news-and-updates.php">News &amp; Updates<span class="sr-only"></span></a></li>
        <li><a href="contact.php">Contact Us<span class="sr-only">(current)</span></a></li>
        <!--<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>


<div class="container-fluid" >
  <div class="row">
    
    <div class="col-lg-12" id="first-menu-heading"><br>
      
      <h1 class="first-headings" >Our Menu <br>  <small>Kota menu</small></h1><br>

    </div>

  </div>

  
</div>


<?php include('Includes/kota-menu.php');?><br>

<div class="container-fluid">
  <div class="row">
    
    <div class="col-lg-12"  id="second-menu-heading" ><br>
      
      <h1 class="first-headings">Our Menu <br> <small>2 Slice Menu </small></h1><br>


    </div>
   <?php include('Includes/two-slice-menu.php');?>
   <br>
  </div>
</div>




<?php include('Includes/widgets.php');?>

<div class="container-fluid footer">
	<footer>
		
		<p class="text-center">&#169; 2018 - Ntsitsi's Fun Food | Web design by   <a href="https://www.digitalmarketco.co.za" rel="nofollow" target="_blank">Digital Market Co.</a></p>
		
	</footer>
</div>

</body>
</html>
