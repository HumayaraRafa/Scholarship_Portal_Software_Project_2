<!DOCTYPE html>
<html>
<head>
	<title>Scholarship Portal</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#viewtable {
          border-collapse: collapse;
          width: 100%;
        }

        #viewTbaleData {
          padding: 8px;
          text-align: center;
          border-bottom: 1px solid #ddd;
        }
        #indexCar img {
		  width: 100%;
		  height: 400px !important;
		  object-fit: cover;
		  opacity: .3;
		}
		
		body{
			background-color: #edf2f4;
			/*margin-bottom: 20px;*/
		}
		nav, footer{
			background-color: #365783;
		}
		#modaltext{
			color: #365783;
		}
		.popup-btn a{
		    top:40%;
		    position:fixed;
		    right:-45px;
		    z-index: 1000;
		    transform: rotate(-90deg);
		    background-color: red;
		    padding:10px 20px 35px;
		    height: 0px;
		    background-color: #96DA10;
		    color:#fff;
		}
		.popup-btn a:hover{
		    text-decoration: none;
		    color:#fff;
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
		#homeJumbotron{
			position: relative;
		    background-color: #000;

		}
		#homeJumbotron::before{
			content: ' ';
		    display: block;
		    position: absolute;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 0;
		    opacity: 0.5;
		    background:       url("/images/home.jpg") no-repeat center center;
		    background-size: cover;

		}
		

		.bg-opacity{
		    position: relative;
		    background-color: #000;
		}

		.bg-opacity::before{
		    content: ' ';
		    display: block;
		    position: absolute;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    z-index: 0;
		    opacity: 0.5;
		    background:       url("/images/home.jpg") no-repeat center center;
		    background-size: cover;
		}

		.content{
		  position: relative;
		  width: 100%;
		  height: 220px;
		}
		#loader {
                transition: all 0.3s ease-in-out;
                opacity: 1;
                visibility: visible;
                position: fixed;
                height: 100vh;
                width: 100%;
                background: #fff;
                z-index: 90000;
            }
            #loader.fadeOut {
                opacity: 0;
                visibility: hidden;
            }
            
            .spinner {
                width: 40px;
                height: 40px;
                position: absolute;
                top: calc(50% - 20px);
                left: calc(50% - 20px);
                background-color: #333;
                border-radius: 100%;
                -webkit-animation: sk-scaleout 1s infinite ease-in-out;
                animation: sk-scaleout 1s infinite ease-in-out;
            }
            @-webkit-keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                }
                100% {
                    -webkit-transform: scale(1);
                    opacity: 0;
                }
            }
            @keyframes sk-scaleout {
                0% {
                    -webkit-transform: scale(0);
                    transform: scale(0);
                }
                100% {
                    -webkit-transform: scale(1);
                    transform: scale(1);
                    opacity: 0;
                }
            }
            svg:hover{
            	height: 3em;
            	width: 3em;
            }
	</style>
</head>
<body>
	<nav class=" navbar navbar-expand-lg navbar-dark">
	  <a class="navbar-brand" href="#">
	  	<img src="/images/logo.png" width="40" height="40" class="d-inline-block" alt="" style="border-radius: 50%;"> &nbsp; <font style="font-size: 120%;"><b>Scholarship Portal</b></font></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
	    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href='#'>
	           Home
	          <span class="sr-only">(current)</span>
	        </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" style="cursor: pointer;" href="/university/new-scholarship">
	           Offer New Scholarship</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="mailto:contactus@scholarship-portal.com">
	           <i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
	          aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
	          <i class="fa fa-user"></i> {{session('username')}} </a>
	        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
	          <a class="dropdown-item" href="/university/profile">My Profile</a>
	          <a class="dropdown-item" href="/university/change-password">Change Password</a>
	          <a class="dropdown-item" href="/logout">Log out</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div id="indexCar" class="carousel slide m-0 p-0 " data-bs-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item ">
		      <img src="/images/wallpaper1.jpg"  alt="...">
		    </div>
		    <div class="carousel-item active">
		      <img src="/images/wallpaper2.jpg" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="/images/wallpaper3.jpg" alt="...">
		    </div>
		  </div>
		  <div class="carousel-caption">
		  	<h1 style="position: absolute;font-weight: 200%; left: 0%;top: -400%; right: 0%;bottom: 0%;color: #365783;" >{{$universityname}}</h1>
		  </div>
	</div>
	<div class="container mb-5 mt-5">
		<div class="row row-content p-3">
			<div class="col-12 text-center">
				<h2>Offered Scholarships</h2>
			</div>
		</div>
		<div class="row row-content mb-5">
			<table  id="viewtable"> 
                <tr>
                  <th id="viewTbaleData">Posting Date</th>
                  <th id="viewTbaleData" style="width: 30%;">Headline</th>
                  <th id="viewTbaleData">Degree type</th>
                  <th id="viewTbaleData">Status</th>
                  <th id="viewTbaleData">Deadline</th>
                  <th id="viewTbaleData">Applied Count</th>
                  <th id="viewTbaleData">Student List</th>
                  <th id="viewTbaleData">Actions</th>
                </tr>
                @foreach ($scholarships as $scholarship)
                <tr >
                  <td id="viewTbaleData">{{$scholarship->postingdate}}</td>
                  <td id="viewTbaleData">{{$scholarship->headline}}</td>
                  <td id="viewTbaleData">{{$scholarship->degreetype}}</td>
                  @if($scholarship->removed==3)
                  <td id="viewTbaleData"><font style="color: green;">On Approval</font></td>
                  @elseif($scholarship->removed==4)
                  <td id="viewTbaleData"><font style="color: green;">Requested to edit</font></td>
                  @elseif($scholarship->removed==5)
                  <td id="viewTbaleData"><font style="color: red;">Rejected</font></td>
                  @elseif($scholarship->removed==2)
                  <td id="viewTbaleData"><font style="color: red;">Deleted</font></td>
                  @elseif($scholarship->removed==1)
                  <td id="viewTbaleData"><font style="color: red;">Deadline Expired</font></td>
                  @elseif($scholarship->removed==0)
                  <td id="viewTbaleData"><font style="color: green;">Ongoing</font></td>
                  @else 
                  @endif
                  <td id="viewTbaleData">{{$scholarship->deadline}}</td>
                  <td id="viewTbaleData">{{$scholarship->applicationcount}}</td>
                  @if($scholarship->removed==3)
                  <td id="viewTbaleData"><button class="btn btn-outline-primary" disabled><a style="text-decoration: none;color: inherit;" href="#">See list</a></button></td>
                  @elseif($scholarship->removed==4)
                  <td id="viewTbaleData"><button class="btn btn-outline-primary" disabled><a style="text-decoration: none;color: inherit;" href="#">See list</a></button></td>
                  @elseif($scholarship->removed==5)
                  <td id="viewTbaleData"><button class="btn btn-outline-primary" disabled><a style="text-decoration: none;color: inherit;" href="#">See list</a></button></td>
                  @elseif($scholarship->removed==2)
                  <td id="viewTbaleData"><button class="btn btn-outline-primary" disabled><a style="text-decoration: none;color: inherit;" href="#">See list</a></button></td>
                  @elseif($scholarship->removed==1)
                  <td id="viewTbaleData"><button class="btn btn-outline-primary"><a style="text-decoration: none;color: inherit;" href="/university/scholarship-{{$scholarship->scholarshipid}}/students">See list</a></button></td>
                  @elseif($scholarship->removed==0)
                  <td id="viewTbaleData"><button class="btn btn-outline-primary"><a style="text-decoration: none;color: inherit;" href="/university/scholarship-{{$scholarship->scholarshipid}}/students">See list</a></button></td>
                  @else 
                  @endif

                  @if($scholarship->removed==3)
                  <td id="viewTbaleData">
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="text-decoration: none;color: inherit;" href="/university/scholarship-{{$scholarship->scholarshipid}}/edit">Edit Details</a></button>
                  </td>
                  @elseif($scholarship->removed==4)
                  <td id="viewTbaleData">
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="text-decoration: none;color: inherit;" href="/university/scholarship-{{$scholarship->scholarshipid}}/edit">Edit Details</a></button>
                  </td>
                  @elseif($scholarship->removed==5)
                  <td id="viewTbaleData">
                    <button class="btn btn-outline-success my-2 my-sm-0" disabled><a style="text-decoration: none;color: inherit;" href="#">Edit Details</a></button>
                  </td>
                  @elseif($scholarship->removed==2)
                  <td id="viewTbaleData">
                    <button class="btn btn-outline-success my-2 my-sm-0" disabled><a style="text-decoration: none;color: inherit;" href="#">Edit Details</a></button>
                  </td>
                  @elseif($scholarship->removed==1)
                  <td id="viewTbaleData">
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="text-decoration: none;color: inherit;" href="/university/scholarship-{{$scholarship->scholarshipid}}/edit">Edit Details</a></button>
                  </td>
                  @elseif($scholarship->removed==0)
                  <td id="viewTbaleData">
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="text-decoration: none;color: inherit;" href="/university/scholarship-{{$scholarship->scholarshipid}}/edit">Edit Details</a></button>
                  </td>
                  @else 
                  @endif
                  
                </tr> 
                @endforeach 
              </table>
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
</body>
</html>