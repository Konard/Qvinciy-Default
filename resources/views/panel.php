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
                                <h1>Привет, <?= Sentinel::getUser()->first_name; ?><span></span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Главная</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div id="main-content">
                    <div class="row">
                        <!-- /# column -->
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card alert">
                                        <div class="card-header">
                                            <h4 class="m-l-5">Twitter Stats </h4>
                                            <div class="card-header-right-icon">
                                                <ul>
                                                    <li><i class="ti-reload"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="media-stats-content text-center">
                                                <div class="row">
                                                    <div class="col-lg-4 border-bottom">
                                                        <div class="stats-content">
                                                            <div class="stats-digit">5482</div>
                                                            <div class="stats-text">Followers</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 border-bottom border-left">
                                                        <div class="stats-content">
                                                            <div class="stats-digit">8320</div>
                                                            <div class="stats-text">New Followers</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 border-bottom  border-left">
                                                        <div class="stats-content">
                                                            <div class="stats-digit">4712</div>
                                                            <div class="stats-text">New Tweets</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="stats-content">
                                                            <div class="stats-digit">3652</div>
                                                            <div class="stats-text">Retweets</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 border-left">
                                                        <div class="stats-content">
                                                            <div class="stats-digit">9874</div>
                                                            <div class="stats-text">Mentions</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 border-left">
                                                        <div class="stats-content">
                                                            <div class="stats-digit">1254</div>
                                                            <div class="stats-text">Favorites</div>
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

    </div>
    <?php Viewer::file('layouts/scripts.php') ?>
</body>

</html>