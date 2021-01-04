
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
                <a href="#">
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
                                    <h2 class="title-1">Employee List</h2>
                                    <!-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item
                                    </button> -->
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            
                                        </div>
                                        
                                    </div>
                                    <div class="table-data__tool-right">
                                        
                                        <form class="form-header" action="" method="POST">
                                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search by employee username" />
                                                <button class="au-btn--submit btn-sm bg-primary" type="submit">
                                                    <i class="zmdi zmdi-search "></i>
                                                </button>
                                            </form>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Address</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admins as $data)
                                            <tr class="tr-shadow">
                                                
                                                <td>{{$data->fullname}}</td>
                                                <td>
                                                    <span class="block-email">{{$data->email}}</span>
                                                </td>
                                                <td class="desc"><a href="tel:{{$data->contactno}}">{{$data->contactno}}</a></td>
                                                <td>{{$data->address}}</td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a href="/admin/employee/{{$data->adminid}}/edit">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>&nbsp;&nbsp;
                                                        <a href="/admin/employee/{{$data->adminid}}/delete" onclick="return sureFunc();">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                            @endforeach
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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
    <script type="text/javascript">
        sureFunc= function(){
            if(!confirm('Are you sure you want to delete this staff?')){
                return false;
            }
        }
    </script>
    

</body>

</html>
<!-- end document-->
