
<?php 
include 'head.php';
?>
<body>
<!-- navbar -->
<div class="navbar-wrapper">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<h1 class="brand"><a href="index.html">Maxim</a></h1>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
					<li><a title="team" href="index.html#about">About</a></li>
					<li><a title="services" href="index.html#services">Services</a></li>
					<li><a title="works" href="index.html#works">Works</a></li>
					<li><a title="blog" href="index.html#blog">Blog</a></li>
					<li><a title="contact" href="index.html#contact">Contact</a></li>
					<li><a href="page.html">Page</a></li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<!-- spacer section -->
<section class="spacer green" style="height: 500px;">
<div class="container">
	<div class="row">
		<div class="span12 aligncenter flyUp">
			<h2 class="pagetitle">LIVE <strong>FIT</strong></h2>
			<button type="button" class="btn btn-primary btn-large" data-toggle="modal" data-target="#signup">Sign Up</button>   <button type="button" class="btn btn-primary btn-large" data-toggle="modal" data-target="#signin">Sign In</button>
		</div>
	</div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->


<!-- sign in modal -->
<div class="modal fade" id="signin" role="dialog" class="modal-dialog modal-lg-12">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Welcome to Livefit </h4>
        </div>
        <div class="modal-body" class="modal-dialog modal-lg-12">
          <p>Some text in the modal.Some text in the modal.</p>

          	

         	



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- sign up modal -->
<div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Welcome to Livefit</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
<div >
  <h2>Horizontal form</h2>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>





        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<footer>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
			<ul class="social-networks">
				<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
				<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
				<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
				<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
			</ul>
			<p class="copyright">
				&copy; 2013 Maxim Inc corporate. All rights reserved.
			</p>
		</div>
	</div>
</div>
<!-- ./container -->
<?php 
include 'footer.php';
?>