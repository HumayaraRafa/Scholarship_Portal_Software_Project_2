<!DOCTYPE html>
<html>
<head>
	<title>Scholarship|Details</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			background-color: #edf2f4;
			/*margin-bottom: 20px;*/
		}
		nav, footer{
			background-color: #365783;
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
	</style>
</head>
<body>
	<nav class=" navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="/student">
	  	<img src="/images/logo.png" width="40" height="40" class="d-inline-block" alt="" style="border-radius: 50%;"> &nbsp; <font style="font-size: 120%;"><b>Scholarship Portal</b></font></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
	    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="/student">
	           Home
	          <!-- <span class="sr-only">(current)</span> -->
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" style="cursor: pointer;" href="/student/aboutus">
	           About Us</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="mailto:contactus@scholarship-portal.com">
	           <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
	      </li>
	      <li class="nav-item dropdown active">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
	          <i class="fa fa-user"></i> {{session('username')}} </a>
	        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
	          <a class="dropdown-item" href="/student/applies">My Applies</a>
	          <a class="dropdown-item active" href="/student/profile">My Profile</a>
	          <a class="dropdown-item" href="/student/change-password">Change Password</a>
	          <a class="dropdown-item" href="/logout">Log out</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container mb-5 mt-5">
		<div class="row row-content p-3">
			<nav aria-label="breadcrumb" style="background-color: initial;">
			  <ol class="breadcrumb" style="background-color: #edf2f4;">
			    <li class="breadcrumb-item text-muted">Home</li>
			    <li class="breadcrumb-item text-muted">Student</li>
			    <li class="breadcrumb-item text-muted active" aria-current="page">{{$student->fullname}}</li>
			  </ol>
			</nav>
			<div class="col-12 text-center">
				<h2>Profile</h2>
			</div>
		</div>
		<div class="row row-content mb-5">
			<div class="col-12 col-sm-6 offset-sm-3 bg-light pt-3 pb-2">
				<form method="POST" name="infoForm" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="email">Email</label>
					      <input type="email" readonly class="form-control-plaintext" name="email" id="email" value="{{$email}}">
					    </div>
					    <div class="form-group col-md-6">
					    <label for="fullname">Student Name</label>
					    <input type="text" readonly class="form-control-plaintext" name="fullname" id="fullname" value="{{$student->fullname}}">
					  </div>
				  </div>
					
				  <div class="form-row">
				  	<div class="form-group col-md-6">
					    <label for="country">Country</label>
					    <input type="text" readonly class="form-control-plaintext" name="country" id="country" value="{{$student->country}}">
					  </div>
					  <div class="form-group col-md-6">
				      <label for="city">City</label>
				      <input type="text" readonly class="form-control-plaintext" name="city" id="city" value="{{$student->city}}">
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="state">State</label>
				      <input type="text" readonly class="form-control-plaintext" name="state" id="state" value="{{$student->state}}">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="zip">Zip</label>
				      <input type="text" readonly class="form-control-plaintext" name="zip" id="zip" value="{{$student->zip}}">
				    </div>
				  </div>
				  <div class="form-group" >
				    <label for="userdegree">Scholarship you are looking for</label>
				    <input type="text" readonly class="form-control-plaintext" name="userdegree" id="userdegree" value="{{$student->prefferedDegree}}">
				      <select id="prefferedDegree" name="prefferedDegree" class="form-control d-none">
				        <option value=" " selected>Choose degree</option>
				        <option value="Bachelor">Bachelor</option>
				        <option value="Masters">Masters</option>
				        <option value="Ph.D">Ph.D</option>
				        <option value="Others">Others</option>
				      </select>
				  </div>
				  <div class="form-group d-none" id="CVform">
				  	<label class="form-label" for="cv">Add your CV</label>&nbsp;
			      	<input type="file" class="form-control-sm" name="cv" id="cv" accept="application/pdf" />
			      	<input type="checkbox" id="updateCv" name="updateCv" value="1">
  					<label for="updateCv"> Update My CV</label><br>
				  </div>
				  
				  <div class="text-center d-none" id="submitProfile"><button type="submit" class="btn btn-warning mt-2 ">Confirm Information</button></div>

				</form>
				<div class="text-center d-block" id="editProfile"><button class="btn btn-primary mt-2" id="editBtn">Edit Profile</button></div>
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
   <!-- <p id="deadline"></p> -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$("#editBtn").click(function(){
		  	$("#submitProfile").removeClass('d-none');
		  	$("#editBtn").addClass('d-none');
		  	$("#fullname").removeClass('form-control-plaintext');
		  	$("#fullname").addClass('form-control');
		  	$("#fullname").attr("readonly",false);
		  	$("#email").removeClass('form-control-plaintext');
		  	$("#email").addClass('form-control');
		  	$("#email").attr("readonly",true);
		  	$("#userdegree").addClass('d-none');
		  	$("#prefferedDegree").removeClass('d-none');
		  	$("#prefferedDegree").addClass('d-block');
		  	$("#city").removeClass('form-control-plaintext');
		  	$("#city").addClass('form-control');
		  	$("#city").attr("readonly",false);
		  	$("#country").removeClass('form-control-plaintext');
		  	$("#country").addClass('form-control');
		  	$("#country").attr("readonly",false);
		  	$("#state").removeClass('form-control-plaintext');
		  	$("#state").addClass('form-control');
		  	$("#state").attr("readonly",false);
		  	$("#zip").removeClass('form-control-plaintext');
		  	$("#zip").addClass('form-control');
		  	$("#zip").attr("readonly",false);
		  	$("#CVform").removeClass("d-none");
		  });
		var my_form = document.forms.infoForm;

		my_form.onsubmit = function(){
		    if (my_form.prefferedDegree.value==" ") {
		    	alert('Please Select Preffered Degree');
		    	return false;
		    }
		    if(document.getElementById("updateCv").checked){
		    	var filex=my_form.cv.value.split('.').pop();

			    if(filex!="pdf"){
			    	alert("Please attach pdf file only");
			    	return false;
			    }
		    }
		    
		};
	</script>
</body>
</html>