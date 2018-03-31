<!DOCTYPE html>
<html>
<head>
	<title>Whiteplates Catering Services</title>

	  <!-- Bootstrap modal CSS -->
    <link href="jsa/bootstrap.min.css" rel="stylesheet">
    <link href="assets/stylemodal.css" rel="stylesheet">
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
		
	<!--//fonts-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<link href="css/about9.css" rel="stylesheet" type="text/css" media="all" />
	
    <link rel="stylesheet" type="text/css" href="css/styleb.css">

	<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Favorites Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->	
	<!-- js -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- cart -->
		<script src="js/simpleCart.min.js"> </script>
	<!-- cart -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

</head>
<body>

<!-- Bootstrap Modal -->
    
    
    <!--Login, Signup, Forgot Password Modal -->
    <div id="login-signup-modal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
    
      <!-- login modal content -->
        <div class="modal-content" id="login-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Login Now!</h4>
      </div>
        
        <div class="modal-body">
          <form method="post" id="Login-Form" role="form">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email" >
                </div>                      
            </div>
            
            
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input name="password" id="login-password" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                </div>                      
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">LOGIN</button>
      <br>
          </form>
          <br>                    
        </div>    
         
        <div class="modal-footer">         
          <p>
          <a id="FPModal" href="javascript:void(0)">Forgot Password?</a> | 
          <a id="signupModal" href="javascript:void(0)">Register Here!</a>
          </p>
        </div>
        
       </div>
        <!-- login modal content -->
        
        <!-- signup modal content -->
        <div class="modal-content" id="signup-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Signup Now!</h4>
      </div>
                
       <div class="modal-body">
          <form method="post" id="Signin-Form" role="form">
          
             <div class="form-group">
             <div class="row">
             <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="firstname" id="firstname" type="firstname" class="form-control input-lg" placeholder="Enter Firstname" required data-parsley-type="firstname">
                </div> 
            </div>                    

             <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="lastname" id="lastname" type="lastname" class="form-control input-lg" placeholder="Enter Lastname" required data-parsley-type="lastname">
                </div> 
            </div>                    

            <div class="col-md-6">  
            <div class="input-group">
             <input type="radio" name="gender" id="gender" value="Female" />Female       
      <input type="radio" name="gender" id="gender" value="Male" />Male                 
            </div> 
            </div>                    

            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="bday" id="datepicker" type="text" class="form-control input-lg" placeholder="Enter Birthdate" required data-parsley-type="bday">
                </div> 
            </div> 
            </div>
            </div>

            <div class="form-group">
            <div class="row">
            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="Email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                </div>     
            </div>    

            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="contact" id="contact" type="text" class="form-control input-lg" placeholder="Enter Phone/Mobile Number" required data-parsley-type="contact">
                </div> 
            </div> 
            </div>
            </div>    

            <div class="form-group">
            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="address" id="address" type="text" class="form-control input-lg" placeholder="Enter Address" required data-parsley-type="address">
                </div> 
            </div>                  
            
            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input name="password" id="Passwd" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                </div>
            </div>

            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                <input name="confirmpassword" id="confirmpassword" type="password" class="form-control input-lg" placeholder="Enter Password" required data-parsley-length="[6, 10]" data-parsley-trigger="keyup">
                </div>
            </div>

            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>

                <select type="question" class="form-control" name="question" id="question" required>
              <option value=></option>
              <option value="Favorite food">What is your favorite food?</option>
              <option value="Favorite color">What is your favorite color?</option>
              <option value="Favorite pet">What is the name  of your favorite pet?</option>
              <option value="Favorite actor">Who is your favorite actor, musician, or artist?</option>
              <option value="First School">What is the name of your first school?</option>
              </select>
                </div>
            </div>

            <div class="col-md-6">  
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="answer" id="answer" type="text" class="form-control input-lg" placeholder="Enter Answer" required data-parsley-type="answer">
                </div> 
            </div>


            </div>



            <button type="submit"  name="insert" id="insert" class="btn btn-success btn-block btn-lg">CREATE ACCOUNT!</button>
            <br>
          </form>
          <br>
      </div>
        
        <div class="modal-footer">
          <p>Already a Member ? <a id="loginModal" href="javascript:void(0)">Login Here!</a></p>
        </div>
        
      </div>
      </div>
        <!-- signup modal content -->
        
        <!-- forgot password content -->
         <div class="modal-content" id="forgot-password-modal-content">
        
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-lock"></span> Recover Password!</h4>
      </div>
        
        <div class="modal-body">
          <form method="post" id="Forgot-Password-Form" role="form">
          
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                <input name="email" id="email" type="email" class="form-control input-lg" placeholder="Enter Email" required data-parsley-type="email">
                </div>                     
            </div>
                        
            <button type="submit" class="btn btn-success btn-block btn-lg">
              <span class="glyphicon glyphicon-send"></span> SUBMIT
            </button>
          </form>
        </div>
        <br><br>
        <div class="modal-footer">
          <p>Remember Password ? <a id="loginModal1" href="javascript:void(0)">Login Here!</a></p>
        </div>
        
      </div>        
        <!-- forgot password content -->

    
    
      <!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>

        <!--Login, Signup, Forgot Password Modal -->
              
        
  <!-- Bootstrap Modal -->
   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jsa/jquery.min.js"></script>
    <script src="jsa/bootstrap.min.js"></script> 
    <script src="assets/parsley.min.js"></script>
    <script src="assets/modal.js"></script>
<div class="bg">
<!-- header -->
<div class="header">
	<div class="container">
		<div class="top-header">
				<div class="header-left">
					
				</div>
				<div class="login-section">
					<ul class="nav navbar-nav navbar-right">
                  <li><a href="javascript:void(0)" data-toggle="modal" data-target="#login-signup-modal">Login/Signup</a></li>
                </ul>
				</div>				
				<div class="clearfix"></div>
		</div>
	</div>
</div>

<!-- //header -->




<!-- banner -->
<div class="banner-slider">
	<div class="banner-pos">
		<div class="banner four page-head">
			<div class="container" style="width: 100%; height: 100%;">
				<div class="navigation text-center">
					<span class="menu"><img src="images/menu.png" alt=""/></span>
						<ul class="nav1">
							<li><a href="index.php">HOME</a></li>
							<li><a href="about.php">ABOUT US</a></li>
							<li><a href="portfolio.php">PORTFOLIO</a></li>
							<li><a class="active" href="package.php">PACKAGE</a></li>
								<div class="clearfix"></div>
						</ul>
									<!-- script for menu -->
										<script> 
											$( "span.menu" ).click(function() {
											$( "ul.nav1" ).slideToggle( 300, function() {
											 // Animation complete.
											});
											});
										</script>
									<!-- //script for menu -->
				</div>
			</div>
			
			
			<div class="container" style="padding-top:100px;padding-bottom:100px;">
				<div class="transbox" style="text-align:center;">
					<p>Package</p>
				</div>	 
			</div>
			
			
		</div>
	</div>
</div>
<!-- good -->
	adasdas
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<!-- footer -->
<div class="footer">
	<div class="container">
		
		<div class="footer-right">
			<ul>
			<br><br>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</div>

    <script src="jsa/jquery.easing.min.js"></script>
    <script src="jsa/jquery.mixitup.min.js"></script>
    <script src="jsa/custom.js"></script>


</body>
</html>
<script>  
$(document).ready(function(){
 $('#Signin-Form').on("submit", function(event){  
  event.preventDefault();  
  if($('#Email').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#Passwd').val() == '')  
  {  
   alert("Address is required");  
  }  
   
  else  
  {  
   $.ajax({  
    url:"insert.php",  
    method:"POST",  
    data:$('#Signin-Form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#Signin-Form')[0].reset();  
     $('#login-signup-modal').modal('hide');  
    }  
   });  
  }  
 });


});  
 </script>