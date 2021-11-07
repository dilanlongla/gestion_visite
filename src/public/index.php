<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/laravel/public/add-department by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 15:39:09 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Departments</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/summernote/dist/summernote-bs4.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<div class="main-wrapper">

    <div class="header">

        <div class="header-left">
            <a href="index-2.html" class="logo">
                <img src="assets/img/logo.png" alt="Logo">
            </a>
            <a href="index-2.html" class="logo logo-small">
                <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
            </a>
        </div>

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Search here">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>


        <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
        </a>

        <ul class="nav user-menu">

            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
                                        <span class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>


            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>Ryan Taylor</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="inbox.html">Inbox</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>

        </ul>

    </div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main Menu</span>
                    </li>
                    <li class="">
                        <a href="index-2.html"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="students.html">Student List</a></li>
                            <li><a class="" href="student-details.html">Student View</a></li>
                            <li><a class="" href="add-student.html">Student Add</a></li>
                            <li><a class="" href="edit-student.html">Student Edit</a></li>
                        </ul>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="teachers.html">Teacher List</a></li>
                            <li><a class="" href="teacher-details.html">Teacher View</a></li>
                            <li><a class="" href="add-teacher.html">Teacher Add</a></li>
                            <li><a class="" href="edit-teacher.html">Teacher Edit</a></li>
                        </ul>
                    </li>
                    <li class="submenu active">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="departments.html">Department List</a></li>
                            <li><a class="active" href="add-department.html">Department Add</a></li>
                            <li><a class="" href="edit-department.html">Department Edit</a></li>
                        </ul>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="subjects.html">Subject List</a></li>
                            <li><a class="" href="add-subject.html">Subject Add</a></li>
                            <li><a class="" href="edit-subject.html">Subject Edit</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">
                        <span>Management</span>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="fees-collections.html">Fees Collection</a></li>
                            <li><a class="" href="expenses.html">Expenses</a></li>
                            <li><a class="" href="salary.html">Salary</a></li>
                            <li><a class="" href="add-fees-collection.html">Add Fees</a></li>
                            <li><a class="" href="add-expenses.html">Add Expenses</a></li>
                            <li><a class="" href="add-salary.html">Add Salary</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                    </li>
                    <li class="">
                        <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                    </li>
                    <li class="">
                        <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                    </li>
                    <li class="">
                        <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                    </li>
                    <li class="">
                        <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                    </li>
                    <li class="">
                        <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                    </li>
                    <li class="menu-title">
                        <span>Pages</span>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="login.html">Login</a></li>
                            <li><a class="" href="register.html">Register</a></li>
                            <li><a class="" href="forgot-password.html">Forgot Password</a></li>
                            <li><a class="" href="error-404.html">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                    </li>
                    <li class="menu-title">
                        <span>Others</span>
                    </li>
                    <li class="">
                        <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                    </li>
                    <li class="">
                        <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                    </li>
                    <li class="">
                        <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
                    </li>
                    <li class="menu-title">
                        <span>UI Interface</span>
                    </li>
                    <li class="">
                        <a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="form-basic-inputs.html">Basic Inputs </a></li>
                            <li><a class="" href="form-input-groups.html">Input Groups </a></li>
                            <li><a class="" href="form-horizontal.html">Horizontal Form </a></li>
                            <li><a class="" href="form-vertical.html"> Vertical Form </a></li>
                            <li><a class="" href="form-mask.html"> Form Mask </a></li>
                            <li><a class="" href="form-validation.html"> Form Validation </a></li>
                        </ul>
                    </li>
                    <li class="submenu ">
                        <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="" href="tables-basic.html">Basic Tables </a></li>
                            <li><a class="" href="data-tables.html">Data Table </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu">
                                <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>


<footer>
    <p>Copyright © 2020 Dreamguys.</p>
</footer>

</div>

</div>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

<script src="assets/js/form-validation.js"></script>

<script src="assets/js/jquery.maskedinput.min.js"></script>
<script src="assets/js/mask.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>


<script src="assets/js/script.js"></script>
</body>

</html>