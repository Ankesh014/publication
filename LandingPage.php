<!DOCTYPE html>
<html>
<head>
	<title>Book Publishing website</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
	h1,.h1
	{
		margin : 22px;
		font-family: Georgia;
		font-size: 50px;
	}
	#heading1
	{
		font-family: Georgia;
		font-size: 42px;
	}
	#text1
	{
		margin : 22px;
		font-family: Georgia;
		font-size: 20px;
	}
	#form1
	{
  		height: 100px;
  		width: 100%;
    }
    input[type=text], input[type=password]
    {
   		width: 100%;
  		padding: 12px 20px;
  		margin: 0px 4px;
  		display: inline-block;
  		border: 1px solid #ccc;
  		border-radius: 4px;
  		box-sizing: border-box;
	}
	#button1
	{
   		width: 100%;
  		padding: 12px 20px;
  		margin: 0px 4px;
  		display: inline-block;
  		border-radius: 4px;
  		box-sizing: border-box;
	}
	ul 
	{
    	list-style-type: none;
	}
	#span1
	{
		font-family: Georgia; 
	}
	.carousel-inner img 
	{
    	width: 100%;
  	}
	p
	{
		font-family: Georgia;
	}
	.col_white_amrc 
	{ 
		color:#FFF;
	}
    footer 
    { 
    	width:100%; 
    	background-color:#263238; 
    	min-height:250px; 
    	padding:10px 0px 25px 0px ;
    }
 	.pt2 
 	{ 
 		padding-top:40px ; 
 		margin-bottom:20px ;
 	}
	footer p 
	{ 
		font-size:13px; 
		color:#CCC; 
		padding-bottom:0px; 
		margin-bottom:8px;
	}
	.mb10 
	{ 
		padding-bottom:15px ;
	}
	.footer_ul_amrc 
	{ 
		margin:0px ; 
		list-style-type:none ; 
		font-size:14px; 
		padding:0px 0px 10px 0px ; 
	}
	.footer_ul_amrc li 
	{
		padding:0px 0px 5px 0px;
	}
	.footer_ul_amrc li a
	{ 
		color:#CCC;
	}
	.footer_ul_amrc li a:hover
	{ 
		color:#fff; 
		text-decoration:none;
	}
	.fleft 
	{ 
		float:left;
	}
	.padding-right 
	{ 
		padding-right:10px; 
	}

	.footer_ul2_amrc 
	{
		margin:0px; 
		list-style-type:none; 
		padding:0px;
	}
	.footer_ul2_amrc li p 
	{ 
		display:table; 
	}
	.footer_ul2_amrc li a:hover 
	{ 
		text-decoration:none;
	}
	.footer_ul2_amrc li i 
	{ 
		margin-top:5px;
	}
	.bottom_border 
	{ 
		border-bottom:1px solid #323f45; 
		padding-bottom:20px;
	}
	.foote_bottom_ul_amrc 
	{
		list-style-type:none;
		padding:0px;
		display:table;
		margin-top: 10px;
		margin-right: auto;
		margin-bottom: 10px;
		margin-left: auto;
	}
	.foote_bottom_ul_amrc li 
	{ 
		display:inline;
	}
	.foote_bottom_ul_amrc li a 
	{ 
		color:#999; 
		margin:0 12px;
	}
	.social_footer_ul 
	{ 
		display:table; 
		margin:15px auto 0 auto; 
		list-style-type:none;  
	}
	.social_footer_ul li 
	{ 
		padding-left:20px; 
		padding-top:10px; 
		float:left; 
	}
	.social_footer_ul li a 
	{ 
		color:#CCC; 
		border:1px solid #CCC; 
		padding:8px;
		border-radius:50%;
	}
	.social_footer_ul li i 
	{  
		width:20px; 
		height:20px; 
		text-align:center;
	}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-danger navbar-dark" >
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="LandingPage.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php">Login As Writer</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="userlogin.php">Login As Reader</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="AboutUs.php">About US</a>
    </li>
  </ul>
</nav>
<br>
  
<div class="container-fluid">
	<div class="row">
    <div class="col-sm-6">
  	<h1>Publish Here,</h1>
  	<h1>Sell Everywhere</h1>
  	<p class="text-secondary" id="text1">Get your own team of experts to create your paperback and eBook with our Guided Publishing Program or publish yourself using our Xpress Publishing Platform. Sell in over 30,000 stores in 140+ countries and earn upto 100% of the net profits.</p>
    </div>
    <div class="col-sm-3"><img src="Bookimage.jpeg" /></div>
    <div class="col-sm-3"></div>
  </div>
</div>
<br>
<h2 class="text-dark text-center">JOIN THE FASTEST GROWING NETWORK IN THE WOLRD</h2>
<br>
<br>
<div class="container-fluid">
	<ul class="row">
    <li class="col-sm-4">
    <div class="row">
  	<h2 id="heading1">100K+ </h2> <span id="span1">Community<br>members</span>
  	</div>
    </li>
    <li class="col-sm-4">
  	<div class="row">
  	<h2 id="heading1">50K+ </h2> <span id="span1">Registered<br>writers</span>
  	</div>
    </li>
  	<li class="col-sm-4">
  	<div class="row">
  	<h2 id="heading1">20K+ </h2> <span id="span1">Books<br>published</span>
  	</div>
    </li>
</ul>
</div>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="amish_759.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Amish Gupta</h3>
        <p>Entrepreneur, Digital Marketing</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="COLOR-dowlingweb-900x600.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Robert Dowling</h3>
        <p>Entrepreneur, Public Speaker</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="ravi-nath-khanna-CS-author-publisher-invinicble-900x700.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Ravi Khanna</h3>
        <p>Entrepreneur, Writer</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<h1 class="text-dark text-center">Get the Notion Press advantage</h1>
<p class="text-secondary text-center">No more compromises. Take the smarter way to publish your book.</p>
<div class="col-lg-12">
	<ul class="row list-design">
		<li class="col-lg-3 col-md-6 col-12text-center advantage-li">
			<div class="row">
				<i class="material-icons text-danger" style="font-size:48px;">access_time</i>
				<h3 class="text-danger">Publish your book faster</h3>
				<p class="text-secondary">You no longer have to wait for months to even hear back from a publisher. You have complete control over your book’s publishing timeline.</p>
			</div>
		</li>
		<li class="col-lg-3 col-md-6 col-12text-center advantage-li">
			<div class="row text-center advantage-li">
				<i class="material-icons text-danger" style="font-size:48px;">copyright</i>
				<h3 class="text-danger">Retain the rights to yourself</h3>
				<p class="text-secondary">You don’t have to sign over your rights to a publisher. We believe that it is your book, your story and you should own all the rights.</p>
			</div>
		</li>
		<li class="col-lg-3 col-md-6 col-12text-center advantage-li">
			<div class="row text-center advantage-li">
				<i class="fa fa-dollar text-danger" style="font-size:48px;"></i>
				<h3 class="text-danger">Get real-time sales alert</h3>
				<p class="text-secondary">Why wait for a year to know how well your book is doing? Get notified every time you sell a copy of your book, anywhere in the world.</p>
			</div>
		</li>
		<li class="col-lg-3 col-md-6 col-12text-center advantage-li">
			<div class="row text-center advantage-li">
				<i class="material-icons text-danger" style="font-size:48px;">chrome_reader_mode</i>
				<h3 class="text-danger">Earn more on every sales</h3>
				<p class="text-secondary">Don’t settle for meagre royalties and an annual payout. Earn maximum profits from your book sales and get paid every month.</p>
			</div>
		</li>
	</ul>
</div>
<h1  class="text-dark text-center">Sell your book worldwide</h1>
<p class="text-secondary text-center">Maximise your book's sales potential. Reach readers all over the world.</p>
<br>
<div class="container">
	<div class="col-lg-12">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-6">
					<img src="globalnetwork.jpeg" height="400"> 		
			</div>
			<div class="col-lg-2 col-md-6"></div>
			<div class="col-lg-5 col-md-6">
				<ul class="row">
					<li>
						<h3 class="text-danger">Publish and sell in eBook formats</h3>
						<p class="text-secondary">Don’t restrict yourself. Sell in eBook formats all over the world.</p>
					</li>
					<li>
						<h3 class="text-danger">Reach readers from over 150+ countries</h3>
						<p class="text-secondary">Reach readers from all over the world with our extensive print and distribution network.</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>




<h1 class="text-dark text-center">Get everything you need in one place</h1>
<p class="text-secondary text-center">Access all tools and reports directly from your author dashboard.</p>
<br>
<div class="container">
	<div class="col-lg-12">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-7">
				<ul class="row">
					<li>
						<h3 class="text-danger">Monthly profit payout</h3>
						<p class="text-secondary">Receive earnings through your bank account each month</p>
					</li>
					<li>
						<h3 class="text-danger">Promote your book</h3>
						<p class="text-secondary">Run exciting campaigns for your readers from your dashboard</p>
					</li>
					<li>
						<h3 class="text-danger">Order Direct Sales</h3>
						<p class="text-secondary">Get copies of your book shipped directly to your house at the click of a button</p>
					</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-5">
					<img src="phone.jpeg" class="mx-auto d-block" height="400"> 		
			</div>
		</div>
	</div>
</div>
<br>
<br>
<footer class="footer">
	<div class="container bottom_border">
		<div class="row">
			<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
				<ul class="footer_ul_amrc">
					<li style="font-family: Georgia;"><a href="#">How to Publish</a></li>
					<li style="font-family: Georgia;"><a href="#">Academic Publishing</a></li>
					<li style="font-family: Georgia;"><a href="#">Resources</a></li>
					<li style="font-family: Georgia;"><a href="#">Calculate Author Earnings</a></li>
					<li style="font-family: Georgia;"><a href="#">Pricing</a></li>
				</ul>
			</div>
			<div class=" col-sm-4 col-md  col-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Read</h5>
					<ul class="footer_ul_amrc">
						<li style="font-family: Georgia;"><a href="#">Trending this Week</a></li>
						<li style="font-family: Georgia;"><a href="#">New Releases</a></li>
						<li style="font-family: Georgia;"><a href="#">Editor's Picks</a></li>
						<li style="font-family: Georgia;"><a href="#">Best Sellers</a></li>
					</ul>
			</div>
			<div class=" col-sm-4 col-md  col-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">About Us</h5>
					<ul class="footer_ul_amrc">
						<li style="font-family: Georgia;"><a href="#">Company</a></li>
						<li style="font-family: Georgia;"><a href="#">Careers</a></li>
						<li style="font-family: Georgia;"><a href="#">Reviews</a></li>
						<li style="font-family: Georgia;"><a href="#">FAQ</a></li>
						<li style="font-family: Georgia;"><a href="#">Blog</a></li>
						<li style="font-family: Georgia;"><a href="#">Contact Us</a></li>
					</ul>
			</div>
			<div class=" col-sm-4 col-md  col-12 col">
				<br>
				<br>
					<p style="font-family: Georgia;">
						Self-publishing services of the highest quality and the most affordable rates is what you get. We are the fastest growing Self-publishing company in the world, with a growing author community of more than 110,000 authors. Self-publishing a book has been made significantly easier with our guided publishing program and our Xpress publishing platform.
					</p>		
			</div>
		</div>
	</div>
<div class="container">
	<ul class="foote_bottom_ul_amrc">
		<li><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Pricing</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
	<p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>
	<ul class="social_footer_ul">
		<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
		<li><a href="#"><i class="fab fa-twitter"></i></a></li>
		<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
		<li><a href="#"><i class="fab fa-instagram"></i></a></li>
	</ul>
</div>
</footer>
</body>
</html>