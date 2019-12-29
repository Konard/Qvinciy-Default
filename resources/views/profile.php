<!DOCTYPE html>
<html lang="en" class="dark">

<?php
$data = [ 'title' => 'StupidlySimple PHP | Home' ];
Core\Viewer::file('layouts/head.php', $data); ?>

<body>

    <?php Viewer::file('layouts/menu.php') ?>

    <?php
        $top_data = ['is_admin' => true];
        Viewer::file('layouts/top.php', $top_data) ?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Account Setting</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card alert">
                                <div class="card-header pr">
                                    <h4>Account Setting</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                                <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul>
                                            </li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <form>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Frist Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>School Code</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form m-t-20">
                                        <div class="form-group">
                                            <label>Session</label>
                                            <input type="text" class="form-control border-none input-flat bg-ash" placeholder="">
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <select class="form-control bg-ash border-none">
                                                
                                                <option>English</option>
                                                <option>Frace</option>
                                                <option>Gric</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="basic-form">
                                        <div class="form-group pr">
                                            <label>Joining Date</label>
                                            <input type="text" class="form-control calendar bg-ash" placeholder="dd/mm/yyyy" id="text-calendar">
                                            <span class="ti-calendar form-control-feedback booking-system-feedback m-t-30"></span>
                                        </div>
                                    </div>
                                </form>
                                <button class="btn btn-default btn-lg m-b-10 bg-warning m-t-30 border-none m-r-5 sbmt-btn" type="button">Submit</button>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Use Profile</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                                <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul>
                                            </li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile m-t-15">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="user-photo m-b-10">
                                                    <img class="img-responsive" src="/resources/assets/panel/images/user-profile.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="user-profile-name">Mr. Ajay</div>
                                                <div class="custom-tab user-profile-tab">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="1">
                                                            <div class="contact-information">
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Name:</span>
                                                                    <span class="phone-number">Mr. Ajay</span>
                                                                </div>
                                                                <div class="website-content">
                                                                    <span class="contact-title">Class:</span>
                                                                    <span class="contact-website">4</span>
                                                                </div>
                                                                <div class="skype-content">
                                                                    <span class="contact-title">Section:</span>
                                                                    <span class="contact-skype">A</span>
                                                                </div>
                                                                <div class="address-content">
                                                                    <span class="contact-title">Roll:</span>
                                                                    <span class="mail-address">#2905</span>
                                                                </div>
                                                                <div class="gender-content">
                                                                    <span class="contact-title">Gender:</span>
                                                                    <span class="gender">Male</span>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Father Name:</span>
                                                                    <span class="phone-number">-----</span>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Mother Name:</span>
                                                                    <span class="phone-number">------</span>
                                                                </div>
                                                                <div class="birthday-content">
                                                                    <span class="contact-title">Date of Birth:</span>
                                                                    <span class="birth-date">January 31, 1990 </span>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Father Occupation:</span>
                                                                    <span class="phone-number">Banker</span>
                                                                </div>
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Religion:</span>
                                                                    <span class="phone-number">---</span>
                                                                </div>
                                                                <div class="email-content">
                                                                    <span class="contact-title">Email:</span>
                                                                    <span class="contact-email">eduin@example.com</span>
                                                                </div>
                                                                <div class="email-content">
                                                                    <span class="contact-title">Admission Date:</span>
                                                                    <span class="contact-email">10/02/2017</span>
                                                                </div>
                                                                <div class="address-content">
                                                                    <span class="contact-title">Address:</span>
                                                                    <span class="mail-address">12-Canada</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->

                    </div>
                    <!-- /# row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="/resources/assets/panel/js/lib/jquery.min.js"></script>
    <script src="/resources/assets/panel/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="/resources/assets/panel/js/lib/menubar/sidebar.js"></script>
    <script src="/resources/assets/panel/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="/resources/assets/panel/js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="/resources/assets/panel/js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="/resources/assets/panel/js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="/resources/assets/panel/js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="/resources/assets/panel/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="/resources/assets/panel/js/lib/calendar-2/pignose.init.js"></script>
    <script src="/resources/assets/panel/js/scripts.js"></script>
    <!-- scripit init-->





</body>

</html>