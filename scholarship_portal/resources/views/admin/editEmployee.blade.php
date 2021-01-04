
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Scholarship-Portal | Admin</title>

    <!-- Fontfaces CSS-->
    <link href="/css/font-face.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/css/theme.css" rel="stylesheet" media="all">

</head>

<body >
    <div class="page-wrapper">
        
        <aside class="menu-sidebar d-none d-lg-block" >
            <div class="logo">
                <a href="/admin">
                    <img src="/images/logo.png" alt="Cool Admin" width="40px" height="40px" style="border-radius: 50%;" /> <font style="color: white; font-size: 120%;">Scholarship Portal</font>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        @if($st===99)
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-account"></i>Employees
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin/add-employee">Add Employee</a>
                                </li>
                                <li>
                                    <a href="/admin/employee-list">All Employees</a>
                                </li>
                                
                            </ul>
                        </li>
                        @endif
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-face"></i>Students</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin/add-student">Add Student</a>
                                </li>
                                <li>
                                    <a href="/admin/view-student">View Student</a>
                                </li>
                                <li>
                                    <a href="/admin/student-list">All Students</a>
                                </li>
                                
                            </ul>
                        </li> -->
                        <!-- <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fa fa-university" aria-hidden="true"></i>Universities</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin/add-university">Add University</a>
                                </li>
                                <li>
                                    <a href="/admin/view-university">View University</a>
                                </li>
                                <li>
                                    <a href="/admin/university-list">All Universities</a>
                                </li>
                                
                            </ul>
                        </li> -->
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="zmdi zmdi-calendar-note"></i>Scholarships</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/admin/scholarship-requests">New Requests</a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="/admin/messages">
                                <i class="zmdi zmdi-notifications-active"></i>Messages</a>
                        </li> -->
                        <li>
                            <a href="/admin/emails">
                                <i class="zmdi zmdi-email"></i>Emails</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop" style="background-color: #365783;">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit bg-success" type="submit">
                                    <i class="zmdi zmdi-search "></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                </div>
                                <div class="account-wrap" >
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#" style="color: white;"><i class="fa fa-user"></i>&nbsp;&nbsp; {{session('username')}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/images/icon/avatar-01.jpg" alt="{{session('username')}}" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{session('username')}}</a>
                                                    </h5>
                                                    <span class="email">Employee@Scholarship-portal.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                @if($st!=99)
                                                <div class="account-dropdown__item">
                                                    <a href="/admin/profile">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                @endif
                                                <div class="account-dropdown__item">
                                                    <a href="/admin/change-password">
                                                        <i class="zmdi zmdi-settings"></i>Change Password</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="/logout">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1 offset-1">Edit Employee</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item
                                    </button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-lg-9 offset-1">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Full</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="POST" name="addEmp">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                            <label for="fullname" class=" form-control-label">Full Name</label>
                                            <input type="text" id="fullname" name="fullname" placeholder="Enter full name" class="form-control" value="{{$admin->fullname}}" required>
                                        </div>
                                        <div class="row form-group">
                                            
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="contact" class=" form-control-label">Contact No</label>
                                                    <input type="text" id="contact" name="contactno" placeholder="Enter Contact No" class="form-control"  value="{{$admin->contactno}}"required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="address" class=" form-control-label">Address</label>
                                            <input type="text" id="address" name="address" placeholder="Enter Address" class="form-control" value="{{$admin->address}}" required>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="city" class=" form-control-label">City</label>
                                                    <input type="text" name="city" value="{{$admin->city}}" id="city" placeholder="Enter city" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="postal-code" class=" form-control-label">Postal Code</label>
                                                    <input type="text" id="postal-code" value="{{$admin->postalcode}}" name="postalcode" placeholder="Postal Code" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class=" form-control-label">Country</label>
                                            <input type="text" id="country" name="country" value="{{$admin->country}}" placeholder="Country name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" class="btn btn-success" value="Edit" required>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Scholarship-Portal. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="/vendor/slick/slick.min.js">
    </script>
    <script src="/vendor/wow/wow.min.js"></script>
    <script src="/vendor/animsition/animsition.min.js"></script>
    <script src="/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/js/main.js"></script>
    <script>
        var myForm= document.forms.addEmp;
        myForm.onsubmit = function () {
            // body...
            if(!confirm("Continue ?")){
                return false;
            }
            
        }
    </script>
    

</body>

</html>
<!-- end document-->
