<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal | Sign UP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		 body{
			/*background-color: #edf2f4;*/
			/*margin-bottom: 20px;*/
			background-image: url('/images/bg1.png');
			/*background-image: url('/images/wallpaper2.jpg');*/
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
		}
		nav, footer{
			background-color: #365783;
		}
		h2{
			color: #563d7c;
		}
		.footer{
			margin: 0px auto;
			margin-top: 5px;
			color: #FFFF;
			padding: 20px 0px 0px 0px;
		}
		#footerAddres{
			font-size: 80%;
		}
		#footerAddressHeader{
			font-family: Impact, Charcoal, sans-serif;
		}
		.inner-addon {
		  position: relative;
		}

		/* style glyph */
		.inner-addon .fa {
		  position: absolute;
		  padding: 10px;
		  pointer-events: none;
		}

		/* align glyph */
		.left-addon .fa  { left:  0px;}
		.right-addon .fa { right: 0px;cursor: pointer;}

		/* add padding  */
		.left-addon input  { padding-left:  30px; }
		.right-addon input { padding-right: 30px; }

	</style>
</head>
<body>
	<nav class=" navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="/">
	  	<img src="/images/logo.png" width="40" height="40" class="d-inline-block" alt="" style="border-radius: 50%;"> &nbsp; <font style="font-size: 120%;"><b>Scholarship Portal</b></font></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
	    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="/index">
	           Home
	          <!-- <span class="sr-only">(current)</span> -->
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" style="cursor: pointer;" href="/aboutus">
	           About Us</a>
	      </li>
	      <li class="nav-item dropdown active">
	        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Create Account
	        </a>
	        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	          <!-- <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a> -->
	          	<div class="dropdown-item">
	          		<div class="card border-1 m-0 p-0" style="width: 15rem; height: 10rem;">
					  	<div class="card-body">
					  		<p ><b>University</b><br><font style="font-size: 80%;">Do you want to create account for <br>your university scholarship offering?</font></p>
						    <a href="/signup-university"><button class="btn btn-xs btn-success">Create</button></a>
				  		</div>
					</div>
	          	</div>
	          	<div class="dropdown-divider"></div>
	          	<div class="dropdown-item">
	          		<div class="card border-1 m-0 p-0" style="width: 15rem; height: 10rem;">
					  	<div class="card-body">
					  		<p ><b>Student</b><br><font style="font-size: 80%;">Do you want to create account for <br>applying scholarship?</font></p>
						    <a href="/signup-student"><button class="btn btn-xs btn-success">Create</button></a>
				  		</div>
					</div>
	          	</div>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="/signin">
	          <i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="mailto:contactus@scholarship-portal.com">
	           <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
	      </li>
	      <!-- <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false">
	          <i class="fas fa-user"></i> Profile </a>
	        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
	          <a class="dropdown-item" href="#">My account</a>
	          <a class="dropdown-item" href="#">Log out</a>
	        </div>
	      </li> -->
	    </ul>
	  </div>
	</nav>

	<div class="container mb-3 mt-5 pt-5 pb-5">
		
		<div class="row row-content">
			<div class="col-12 col-sm-6 offset-sm-3 border-1 bg-light pt-3 pb-2">
				<form method="POST" name="universityreg">
					{{csrf_field()}}
					<h2 class="text-center mb-2">Sign Up</h2>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="email">Email</label>
				      <input type="email" onkeyup="validateEmail()" class="form-control" id="username" name="email" placeholder="Email" required>
				      <small id="emailerr" style="color: red;"></small>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="password">Password</label>
					      <input type="password" onkeyup="validatePass()"  class="form-control" id="password" name="password" placeholder="Password" required>
				      <small id="passworderr" style="color: red;"></small>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="universityname">University Name</label>
				    <input type="text" class="form-control" onkeyup="validateName()" autocomplete="false" id="universityname" name="universityname" placeholder="XYZ University" required>
				    <small id="uninameerr" style="color: red;"></small>
				  </div>
				  <div class="form-group">
				    <label for="abcd">User Name</label>
				    <input type="text" class="form-control" onkeyup="validateUser()" autocomplete="false" id="abcd" name="abcd" placeholder="XU (For XYZ University)" required>
				    <small id="usererr" style="color: red;"></small>
				  </div>
				  <div class="form-group">
				    <label for="country">Country</label>
				    <input type="text" class="form-control" onkeyup="validateCountry()" autocomplete="false" id="country" name="country" placeholder="Country Name" required>
				    <small id="coountryerr" style="color: red;"></small>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="city">City</label>
				      <input type="text" class="form-control" onkeyup="validateCity()" autocomplete="false" id="city" name="city" required>
				      <small id="cityerr" style="color: red;"></small>
				    </div>
				    <div class="form-group col-md-4">
				      <label for="state">State</label>
				      <input type="text" class="form-control" onkeyup="validateState()" autocomplete="false" id="state" name="state" required>
				      <small id="stateerr" style="color: red;"></small>
				    </div>
				    <div class="form-group col-md-2">
				      <label for="zip">Zip</label>
				      <input type="text" class="form-control" onkeyup="validateZip()" autocomplete="false" id="zip" name="zip" required>
				      <small id="ziperr" style="color: red;"></small>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="contact">Contact Number</label>
				    <input type="text" class="form-control" onkeyup="validatePhone()" autocomplete="false" id="contact" name="contact" placeholder="+8800000000000" required>
				    <small id="contacterr" style="color: red;"></small>
				  </div>
				  <div class="text-center"><button type="submit" class="btn btn-primary mt-2 ">Create Account</button>
				  <br>Already have an account? <a href="/signin">Sign in here!</a></div>
				</form>
			</div>
		</div>
	</div>
	<footer class="footer mt-5 mb-0">
     <div class="container">
            <div class="row border-bottom pb-1  border-secondary">             
                <div class="col-4 offset-1 offset-sm-0 col-sm-3" id="footerAddres">
                    <h5 id="footerAddressHeader">Find&nbsp;&nbsp;Scholarships&nbsp;&nbsp;In</h5>
                    <a  href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">Asia</u></a><br>
                    <a href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">Europe</u></a><br>
                    <a  href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">America</u></a><br>
                    <a  href="" style="text-decoration: none; color: inherit;"><u style="border-bottom: 2px dotted #fff;text-decoration: none;">Australia</u></a><br>
                </div>
                <div class="col-7 col-sm-6  text-center">
                    
                    <b>Scholarship Portal</b><br>
                    <small>For getting our latest scholarship updates<br><a href="" style="text-decoration: none; color: inherit;"><u>Subscribe Here !</u></a><br>
                    	To get any info,contact through email below<br><i class="fa fa-envelope fa-lg" aria-hidden="true"></i> <a href="mailto:support@schorship-portal.com" style="text-decoration: none;color: white;"> &nbsp;support@scholarship-portal.com</a></small>

                </div>
                <div class="col-12 col-sm-3 pt-3 pt-sm-0 pb-3 pb-sm-0">
                    <div class="text-center text-sm-right">
                      <h5 id="footerAddressHeader">Follow&nbsp;&nbsp;Us</h5>
                      <a class="btn btn-social-icon btn-facebook btn-xs" href="http://www.facebook.com/profile.php?id=" id="headerSocialFacebook"><i class="fa fa-facebook fa-xs"></i></a>
                      <a class="btn btn-social-icon btn-linkedin btn-xs" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin fa-xs" aria-hidden="true"></i> </a>
                      <a class="btn btn-social-icon btn-twitter btn-xs" href="http://twitter.com/"><i class="fa fa-twitter fa-xs" aria-hidden="true"></i> </a>             
                      <a class="btn btn-social-icon btn-google btn-xs" href="http://youtube.com/"><i class="fa fa-youtube fa-xs" aria-hidden="true"></i> </a>
                    </div>
                </div>
           </div>
           <div class="row mt-1">             
                <div class="col-12 text-center text-sm-center text-muted">
                    <p class="" style="font-family: Times New Roman, Times, serif;"><i>Copyright © 2020 Scholarship-Portal.com</i></p>
                </div>
           </div>
        </div>
   </footer>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script type="text/javascript">
		/*$(document).ready(function(){
			var namecheck=/^[a-zA-z ]*$/;
			$('#universityname').onkeyup(function(){
				if(!$('#universityname').value.match(namecheck))
					alert("Name false");
			}

				);
		});*/
		var namecheck=/^[a-zA-z -()&]*$/;
		var emailcheck= /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		var passCcheck=/^[A-Z]*$/;
		var passScheck=/^[a-z]*$/;
		var passNcheck=/^[0-9]*$/;
		var userDcheck=/^[a-zA-Z0-9@_]*$/;
		var passCheck=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,12}$/;
		function validateName(){
			var uname= document.forms["universityreg"]["universityname"];
			var uninameerr=document.getElementById("uninameerr");
			if(!uname.value.match(namecheck)){
				uninameerr.innerHTML="Numbers or Special Character Not Allowed";
				return false;
			}
			else{
				uninameerr.innerHTML="";
				return true;
			}


		}
		function validateCountry(){
			var countryname= document.forms["universityreg"]["country"];
			var coountryerr=document.getElementById("coountryerr");
			if(!countryname.value.match(namecheck)){
				coountryerr.innerHTML="Numbers or Special Character Not Allowed";
				return false;
			}
			else{
				coountryerr.innerHTML="";
				return true;
			}


		}
		function validateState(){
			var countryname= document.forms["universityreg"]["state"];
			var coountryerr=document.getElementById("stateerr");
			if(!countryname.value.match(namecheck)){
				coountryerr.innerHTML="Numbers or Special Character Not Allowed";
				return false;
			}
			else{
				coountryerr.innerHTML="";
				return true;
			}


		}
		function validateCity(){
			var countryname= document.forms["universityreg"]["city"];
			var coountryerr=document.getElementById("cityerr");
			if(!countryname.value.match(namecheck)){
				coountryerr.innerHTML="Numbers or Special Character Not Allowed";
				return false;
			}
			else{
				coountryerr.innerHTML="";
				return true;
			}


		}
		function validateZip(){
			var countryname= document.forms["universityreg"]["zip"];
			var coountryerr=document.getElementById("ziperr");
			if(!countryname.value.match(passNcheck)){
				coountryerr.innerHTML="Enter correct zip";
				return false;
			}
			else{
				coountryerr.innerHTML="";
				return true;
			}


		}
		var phoneCheck=/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

		function validatePhone(){
			var countryname= document.forms["universityreg"]["contact"];
			var coountryerr=document.getElementById("contacterr");
			if(countryname.value.length!=14){
				coountryerr.innerHTML="Enter correct contact with country code";
				return false;
			}
			else{
				coountryerr.innerHTML="";
				return true;
			}


		}
		function validateEmail(){
			var email= document.forms["universityreg"]["email"];
			var emailerr=document.getElementById("emailerr");
			if(!email.value.match(emailcheck)){
				emailerr.innerHTML="Please enter correct email";
				return false;
			}
			else{
				emailerr.innerHTML="";
				return true;
			}
		}
		function validatePass(){
			var password= document.forms["universityreg"]["password"];
			var passworderr=document.getElementById("passworderr");
			if(password.value==""){
				passworderr.innerHTML="";
				return false;
			}
			else if(!password.value.match(passCheck)){
				passworderr.innerHTML="Password should contain at least one capital letter,one small letter,one number and one special character";
				return false;	
			}
			
			else{
				passworderr.innerHTML="";
				return true;
			}
		}
		function validateUser(){
			var userd= document.forms["universityreg"]["abcd"];
			var usererr=document.getElementById("usererr");
			if(userd.value==""){
				usererr.innerHTML="";
				return false;
			}
			else if(!userd.value.match(userDcheck)){
				usererr.innerHTML="Username accept only Letters,numbers and @ or_";
				return false;	
			}
			
			else{
				usererr.innerHTML="";
				return true;
			}
		}
		var my_form = document.forms.universityreg;

	    my_form.onsubmit = function(){
	    	if(!validateEmail()){
	    		return false;
	    	}
	    	else if(!validatePass()){
	    		return false;
	    	}
	    	else if(!validateName()){
	    		return false;
	    	}
	    	else if(!validateUser()){
	    		return false;
	    	}
	    	else if(!validateCountry()){
	    		return false;
	    	}
	    	else if(!validateCity()){
	    		return false;
	    	}
	    	else if(!validateState()){
	    		return false;
	    	}
	    	else if(!validateZip()){
	    		return false;
	    	}
	    	else if(!validatePhone()){
	    		return false;
	    	}
	    	else{
	    		return true;
	    	}
	    };
	</script>
</body>
</html>