<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/laravel/public/add-books by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 15:39:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Preskool - Rapports</title>

    <link rel="shortcut icon" href="../../assets/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="../../assets/plugins/summernote/dist/summernote-bs4.css">

    <link rel="stylesheet" href="../../assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="../../assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="../../assets/plugins/fullcalendar/fullcalendar.min.css">

    <link rel="stylesheet" href="../../assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index-2.html" class="logo">
                    <img src="../../assets/img/logo.png" alt="Logo">
                </a>
                <a href="index-2.html" class="logo logo-small">
                    <img src="../../assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>

            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>

            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="">
                            <a href="../../index.php"><i class="fas fa-th-large"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="views/rapport/index.php"><i class="fas fa-user-graduate"></i> <span> Rapports</span></a>
                        </li>

                        <li class="">
                            <a href="views/medecin/index.php"><i class="fas fa-user-graduate"></i> <span>Medecin</span></a>
                        </li>
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Books</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="library.html">Library</a></li>
                                <li class="breadcrumb-item active">Add Books</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Info Rapport</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Medecin</label>
                                                <select class="form-control">
                                                    <option>Selectione Medecin</option>
                                                    <option>English</option>
                                                    <option>Turkish</option>
                                                    <option>Chinese</option>
                                                    <option>Spanish</option>
                                                    <option>Arabic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Medicaments</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Language</label>
                                                <select class="form-control">
                                                    <option>Select Language</option>
                                                    <option>English</option>
                                                    <option>Turkish</option>
                                                    <option>Chinese</option>
                                                    <option>Spanish</option>
                                                    <option>Arabic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Department</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Class</label>
                                                <select class="form-control">
                                                    <option>Select Class</option>
                                                    <option>LKG</option>
                                                    <option>UKG</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Type</label>
                                                <select class="form-control">
                                                    <option>Select Type</option>
                                                    <option>Book</option>
                                                    <option>DVD</option>
                                                    <option>CD</option>
                                                    <option>Newspaper</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control">
                                                    <option>Select Status</option>
                                                    <option>In Stock</option>
                                                    <option>Out of Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <p>Copyright © 2020 ViZit.</p>
            </footer>
        </div>

    </div>


</body>

</div>

</div>

<script src="../../assets/js/jquery-3.5.1.min.js"></script>

<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<script src="../../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="../../assets/plugins/summernote/dist/summernote-bs4.min.js"></script>

<script src="../../assets/js/form-validation.js"></script>

<script src="../../assets/js/jquery.maskedinput.min.js"></script>
<script src="../../assets/js/mask.js"></script>

<script src="../../assets/plugins/select2/js/select2.min.js"></script>

<script src="../../assets/js/moment.min.js"></script>
<script src="../../assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="../../assets/plugins/datatables/datatables.min.js"></script>

<script src="../../assets/js/jquery-ui.min.js"></script>
<script src="../../assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="../../assets/plugins/fullcalendar/jquery.fullcalendar.js"></script>


<script src="../../assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/laravel/public/add-books by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Aug 2021 15:39:17 GMT -->

</html>