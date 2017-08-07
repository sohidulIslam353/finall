<?php
session_start();

include('common/db.php');
include('common/logedin.php');





?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.rareadmin.com/light-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 08:03:20 GMT -->
<head>
    <title>Dashboard  | MVS admin</title>
    
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="img/xlogo2.ico.pagespeed.ic.qmwUApvH50.html"/>
    <!--start global css-->
    <link type="text/css" rel="stylesheet" href="css%2c_app.css%2bcss%2c_custom.css%2bvendors%2c_c3%2c_css%2c_c3.min.css%2bcss%2c_pages%2c_index1.css%2bcss%2c_pages%2c_light_sidebar.css.pagespeed.cc.pd5wVVtuBm.css"/>
    <!-- end of global css -->

    
</head>

<body>
<div class="preloader">
    <div class="preloader_img">
        <img src="img/loader.gif.pagespeed.ce.hzUa_66CCA.gif" class="pre_img" alt="loading...">
    </div>
</div>
<?php include('common/header.php'); ?>


<?php include('common/navbar.php'); ?>

    <div class="right-aside view-port-height">    
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-9">
                <div class="card main_chart2">
                    <div class="card-header bg-white">
                        <div><h5 class="float-left mt-2"> Statistics</h5><div class="float-right"><div class="btn-group br_25" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-primary">Daily</button>
                            <button type="button" class="btn btn-outline-primary">Weekly</button>
                            <button type="button" class="btn btn-outline-primary">Monthly</button>
                        </div></div></div>

                    </div>
                    <div class="card-block">
                        <div class="m-t-10" id="spline_chart"></div>
                        <div class="row">
                            <div class="col-12 m-t-10">
                                <div class="bg-white info_widgets">
                                    <div class="row">
                                        <div class="col-sm-3 border_right_sm m-t-10">
                                            Daily Views
                                            <div class="widget2_bar2 m-t-10"><canvas width="216" height="70" style="display: inline-block; width: 216px; height: 70px; vertical-align: top;"></canvas></div>


                                        </div>
                                        <div class="col-sm-3 border_right_sm m-t-10">
                                            Weekly Views
                                            <div class="widget2_bar1 m-t-10"><canvas width="206" height="70" style="display: inline-block; width: 206px; height: 70px; vertical-align: top;"></canvas></div>


                                        </div>
                                        <div class="col-sm-3 border_right_sm m-t-10">
                                            Monthly Views
                                            <div class="widget2_bar3 m-t-10"><canvas width="216" height="70" style="display: inline-block; width: 216px; height: 70px; vertical-align: top;"></canvas></div>

                                        </div>
                                        <div class="col-sm-3 m-t-10">
                                            Anual Views
                                            <div class="widget2_bar4 m-t-10"><canvas width="206" height="70" style="display: inline-block; width: 206px; height: 70px; vertical-align: top;"></canvas></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-lg-3">
                <div class="row">
                    <div class="col-lg-12 col-sm-6 m-t-30">
                        <div id="top_widget4" style="perspective: 480px; position: relative; transform-style: preserve-3d;">


                            <div class="bg-info widg-bg-icon br_5px info_widgets front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out;">
                                <div class="row" style="backface-visibility: hidden;">
                                    <div class="col-6" style="backface-visibility: hidden;">

                                        <p class="text-white mb-0" style="backface-visibility: hidden;">Worker</p>
                                        <p class="text-white font_18" style="backface-visibility: hidden;">470</p>

                                    </div>
                                    <div class="col-6" style="backface-visibility: hidden;">
                                        <i class="ti-eye" style="backface-visibility: hidden;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white widg-bg-icon br_5px info_widgets back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out;">
                                <div class="row" style="backface-visibility: hidden;">
                                    <div class="col-4" style="backface-visibility: hidden;">

                                        <h6 style="backface-visibility: hidden;">Total Employeer</h6>
                                        <h4 style="backface-visibility: hidden;">1470</h4>

                                    </div>
                                    <div class="col-8" style="backface-visibility: hidden;">
                                        <div class="sparkline_flip1" style="backface-visibility: hidden;"><canvas width="120" height="70" style="display: inline-block; width: 120px; height: 70px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 m-t-30">
                        <div id="top_widget3" style="perspective: 480px; position: relative; transform-style: preserve-3d;">

                            <div class="bg-danger widg-bg-icon br_5px info_widgets front" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 1; height: 100%; width: 100%; transition: all 0.5s ease-out;">
                                <div class="row" style="backface-visibility: hidden;">
                                    <div class="col-6" style="backface-visibility: hidden;">

                                        <p class="text-white mb-0" style="backface-visibility: hidden;">Toatal Employeers</p>
                                        <p class="text-white font_18" style="backface-visibility: hidden;">1220</p>
                                    </div>
                                    <div class="col-6" style="backface-visibility: hidden;">
                                        <i class="ti-comment" style="backface-visibility: hidden;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white widg-bg-icon br_5px info_widgets back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 0; height: 100%; width: 100%; transform: rotateY(-180deg); transition: all 0.5s ease-out;">
                                <div class="row" style="backface-visibility: hidden;">
                                    <div class="col-4" style="backface-visibility: hidden;">

                                        <h6 style="backface-visibility: hidden;">Comments</h6>
                                        <h4 style="backface-visibility: hidden;">120</h4>
                                    </div>
                                    <div class="col-8" style="backface-visibility: hidden;">
                                        <div class="sparkline_widget4" style="backface-visibility: hidden;"><canvas width="106" height="70" style="display: inline-block; width: 106px; height: 70px; vertical-align: top;"></canvas></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 m-t-30">
                        <div class="bg-white info_widgets">
                            <div class="row">
                                <div class="col-5">
                                    <p><i class="ti-user text-success info_icon"></i></p>
                                </div>
                                <div class="col-7 text-right">
                                    <span class="info_num" id="info6">25</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span>Engineer</span>
                                    <div class="progress">
                                        <div class="progress-bar w-75 bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 m-t-30">
                        <div class="bg-primary">
                            <div class="row p-3">
                                <div class="col-5 text-center ">
                                    <p><i class="ti-twitter-alt text-white client_icon"></i></p>

                                </div>
                                <div class="col-7 text-right text-white">
                                    <span class="client_count"><span id="info13">30k</span>+</span>
                                    <p><b>Followers</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4 m-t-30">
                        <div class="text-center p-3 widget_social_icons facebook">
                            <div class=" widget_social_inner1" style="top: 20px;">
                                <i class="ti-facebook" style="font-size: 45px;"></i>
                            </div>
                            <div class="widget_social_inner2" style="display: none;">
                                <h4 class="mb-0">7565</h4>
                                <p class="m-0">Likes</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 m-t-30">
                        <div class="text-center p-3 widget_social_icons twitter">
                            <div class="widget_social_inner1" style="top: 20px;">
                                <i class="ti-twitter-alt" style="font-size: 45px;"></i></div>
                            <div class="widget_social_inner2" style="display: none;">
                                <h4 class="mb-0">1245</h4>
                                <p class="m-0">Followers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 m-t-30">
                        <div class="text-center p-3 widget_social_icons google">
                            <div class=" widget_social_inner1" style="top: 20px;">
                                <i class="ti-google" style="font-size: 45px;"></i>
                            </div>
                            <div class="widget_social_inner2" style="display: none;">
                                <h4 class="mb-0">742</h4>
                                <p class="m-0">Messages</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 m-t-30">
                        <div class="text-center p-3 widget_social_icons linkedin">
                            <div class=" widget_social_inner1" style="top: 20px;">
                                <i class="ti-linkedin" style="font-size: 45px;"></i>
                            </div>
                            <div class="widget_social_inner2" style="display: none;">
                                <h4 class="mb-0">8125</h4>
                                <p class="m-0">Connections</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 m-t-30">
                        <div class="text-center p-3 widget_social_icons youtube">
                            <div class=" widget_social_inner1" style="top: 20px;">
                                <i class="ti-youtube" style="font-size: 45px;"></i>
                            </div>
                            <div class="widget_social_inner2" style="display: none;">
                                <h4 class="mb-0">125k</h4>
                                <p class="m-0">Views</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4 m-t-30">
                        <div class="text-center  p-3 widget_social_icons instagram">
                            <div class=" widget_social_inner1" style="top: 20px;">
                                <i class="ti-instagram" style="font-size: 45px;"></i>
                            </div>
                            <div class="widget_social_inner2" style="display: none;">
                                <h4 class="mb-0">550+</h4>
                                <p class="m-0">Pictures</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-block weather_section1">
                        <div class="row">
                            <div class="col-6 text-white">
                                <h3 class="m-t-40 m-b-0 text-white">Dhaka city</h3> Bangladesh
                            </div>
                            <div class="col-6">
                                <div><span class="weather_num text-white float-right">34°</span></div>
                            </div>
                        </div>
                        <div class="row text-white">
                            <div class="col-12 col-sm-12">
                                <div>
                                    <div class="cloud_icon float-left "><i class="ti-cloud"></i></div>
                                    <div class="current_status float-left">Snowing currently                                        </div>
                                </div>

                            </div>
                        </div>
                        <div class="row bottom_row">
                            <div class="col-3 text-white text-center bottom_weather_sections">
                                <p>now</p>
                                <i class="ti-cloud-down bottom_weather_icons"></i>
                                <p>snow</p>
                            </div>
                            <div class="col-3 text-white text-center bottom_weather_sections">
                                <p>8:00am</p>
                                <i class="ti-cloud bottom_weather_icons"></i>
                                <p>clear</p>
                            </div>
                            <div class="col-3 text-white text-center bottom_weather_sections">
                                <p>1:00pm</p>
                                <i class="ti-cloud bottom_weather_icons"></i>
                                <p>windy</p>
                            </div>
                            <div class="col-3 text-white text-center bottom_weather_sections">
                                <p>5:00pm</p>
                                <i class="ti-cloud bottom_weather_icons"></i>
                                <p>clear</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="table-responsive">
                  sdsdsdsdsdsdsds
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
<footer>
    <div class="bg-white container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer_content"> Copyright ©2017 made by Sohidul Islam</div>
            </div>
        </div>
    </div>

</footer>
<script type="text/javascript" src="js/app.js.pagespeed.jm.PVZQb7x2om.js"></script>
<!--end global js -->
<script type="text/javascript" src="js/custom.js.pagespeed.jm.d52yjq59xU.js"></script>



<script type="text/javascript" src="js/pluginjs/sparkline.js.pagespeed.jm.PgTHNPyYgG.js"></script>
<script type="text/javascript" src="vendors/d3/js/d3.min.js.pagespeed.jm.hcZ4wO0QRk.js"></script>
<script type="text/javascript" src="vendors/c3/js/c3.min.js.pagespeed.jm.F8GMEIG-qq.js"></script>
<script type="text/javascript" src="js/pages/index1.js.pagespeed.jm.VKTtlBPvIw.js"></script>

</body>

<!-- Mirrored from demo.rareadmin.com/light-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2017 08:05:28 GMT -->
</html>

