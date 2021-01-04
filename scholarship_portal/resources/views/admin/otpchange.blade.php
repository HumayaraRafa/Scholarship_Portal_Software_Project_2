<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal | Change Admin OTP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link href="css/theme.css" rel="stylesheet" media="all">
	<style type="text/css">

		 body{

			background-image: url('/images/bg1.png');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
		}
		nav, footer{
			background-color: #365783;
		}
		h4{
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
	</style>
</head>
<body >

	<div class="container" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" >
		
		<div class="row row-content">
			<!-- <div class="col-12 col-sm-4 offset-2 offset-sm-4 border-1 bg-light pt-3 pb-2"> -->
				<div class="col-lg-4 offset-4">
                                <div class="card">
                                    <div class="card-header">Change OTP</div>
                                    <div class="card-body card-block">
                                        <form name ="cpform" method="post" class="">
                                        	{{csrf_field()}}
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="password" id="newpass" name="newpass" placeholder="Enter new password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                    </div>
                                                    <input type="password" id="confpass" name="confpass" placeholder="Confirm new password" class="form-control">
                                                </div>
                                            </div>
                                          
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                </div>
			<!-- </div> -->
		</div>
	</div>
	
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script type="text/javascript">
		var my_form = document.forms.cpform;

		my_form.onsubmit = function(){
			var confpass=my_form.confpass.value;
			var newpass=my_form.newpass.value;
			if(newpass!=confpass){
				alert("New password did not match with confirmed new password");
				return false;
			}
			if(my_form.oldpass.value==""){
				alert("Please enter your old password");
				return false;	
			}
		    
		};
	</script>
</body>
</html>