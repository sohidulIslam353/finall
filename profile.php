<?php
session_start();
include('common/db.php');
include('common/logedin.php');

//$sql = "SELECT * FROM employee JOIN employee_transection USING (employeeid) WHERE employee.employeeid = employee_transection.employeeid";
?>
                            
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Employee</title>
    
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="img/xlogo2.ico.pagespeed.ic.qmwUApvH50.html"/>
    <!--start global css-->
    <link type="text/css" rel="stylesheet" href="css/A.app.css%2bcustom.css%2bpages%2c%2c_light_sidebar.css%2cMcc.lp_uw3dA9e.css.pagespeed.cf.-QxG9heMNB.css"/>
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
    
<div class="content-header container-fluid bg-white">
    <div class="row">
        <div class="col-sm-4">
            <h4><i class='ti-user'> </i> 
                 <?php 
                    echo ucfirst($_SESSION['username']);
                  ?> </h4>
        </div>
        <div class="col-6 col-sm-4 offset-md-2 col-md-3 offset-xl-4 col-xl-2 header_left_xs_up pt-2">
            <div class="row">
                <div class="col-6">
                    <span>Users</span><br/>
                    <span>250 <i class="ti-angle-up text-primary"> </i></span>
                </div>
                <div class="col-6">
                    <div class="sparkline_users"></div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-xl-2 header_left pt-2">
            <div class="row">
                <div class="col-6">
                    <span>Sales</span><br/>
                    <span>150 <i class="ti-angle-up text-danger"> </i></span>
                </div>
                <div class="col-6">
                    <div class="sparkline_sales"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Main content -->
       
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="cover_photo" style="background-color: #6E7275;">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row justify-content-center m-t-30">
                                    <div class="col-lg-3 text-center">
                                        <img src="img/sdsd.jpg" class="img-fluid rounded-circle" alt="admin"/>
                                        <h4 class="text-white m-t-10"> <?php 
                                                       echo ucfirst($_SESSION['username']);
                                                      ?>                                         
                                     </h4>
                                        <div class="justify-content-center social_icons d-inline-flex">
                                            <div>
                                                <a class="hvr-shutter-out-horizontal facebook " href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                                            </div>
                                            
                                            <div>
                                                <a class="hvr-shutter-out-horizontal facebook " href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-success br_0 m-0">
                        <div class="card-block p-1">
                            <div class="row">
                                <div class="col-12">
                                    <span class="user_status text-white">
                                    <?php 
                                     echo ucfirst($_SESSION['username']);
                                     ?>

                
                
                                        Well come .
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
               <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="heading">Chat List</h5>
                            </div>
                        </div>
                        <div class="row m-t-20">
                            <div class="col-12">
                                <form>
                                    <div class="form-group m-0">
                                        <div class="input_icon">
                                            <input id="search-field" type="text" class="form-control user_icon br_25 m-0 icon_right_input" name="user" placeholder="Search...">
                                            <i class="icon_in_input input_icon_right ti-search text-info"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 m-t-10 user_chatlist ">
                                <ul class="list-group chat_scroll">
                                    <li class="list-group-item status_height border-0 chat-list m-t-15">
                                        <p class="m-0">
                                            &nbsp; Adela
                                            <span class="float-left">
                                            <img src="img/xpeople4.png.pagespeed.ic.j5XEVD0PAw.jpg" class="rounded-circle img-responsive float-left inbox_contact_img" alt="Image"></span>
                                            <span class="status-online  m-t-10"></span>
                                            <span class="float-right text-sm pr-1 text-success">Online</span>
                                        </p>
                                    </li>                             
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-block">
                        <div class="tabs tabs-bordered tabs-icons">
                            <ul class="nav nav-tabs">
                                <li class="nav-item " id="primary2">
                                    <a href="#user_profile" class="nav-link " data-toggle="tab" aria-expanded="true">Profile</a>
                                </li>

                                <li class="nav-item " id="user_activities2">
                                    <a href="#user_activities" class="nav-link active" data-toggle="tab" aria-expanded="false">Activities</a>
                                </li>
                                <li class="nav-item " id="promotions2">
                                    <a href="#user_friends" class="nav-link" data-toggle="tab" aria-expanded="false">Friends</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane reset padding-all fade" id="user_profile">
                                    <div class="row border_bottom">
                                        <div class="col-12 m-t-30">
                                            <h4>Basic Information</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="m-t-30">
                                                <tbody>
                                                <tr>
                                                    <th>User Name </th>
                                                    <td><?php   echo ucfirst($_SESSION['username']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Father's Name </th>
                                                    <td> <?php 
                                                         echo ucfirst($_SESSION['fathersname']);
                                                         ?>                                         
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Mother's Name </th>
                                                    <td><?php   echo ucfirst($_SESSION['mothersname']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth </th>
                                                    <td><?php   echo ucfirst($_SESSION['dob']); ?></td>

                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td><?php   echo ($_SESSION['gender'] == 1) ? 'Male' : 'Female' ; ?></td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--chat list---------->

                                    <div class="row border_bottom">
                                        <div class="col-12 m-t-30">
                                            <h4>Contact Information</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="m-t-30">
                                                <tbody>
                                                <tr>
                                                    <th>Email </th>
                                                    <td><?php   echo ucfirst($_SESSION['email']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Local Address</th>
                                                    <td><?php   echo ucfirst($_SESSION['localaddress']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Permanent Address</th>
                                                    <td><?php   echo ucfirst($_SESSION['permanentaddress']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Department</th>
                                                    <td><?php   echo ucfirst($_SESSION['department']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Phone Number</th>
                                                    <td><?php   echo ucfirst($_SESSION['phone']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>City </th>
                                                    <td><?php   echo ucfirst($_SESSION['city']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td><?php   echo ucfirst($_SESSION['country']); ?></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane reset padding-all fade active show" id="user_activities">
                                    <div class="row">
                                         <div class="col-12 m-t-30 border_bottom">
                                            <div class="media">
                                                <img  class="d-flex mr-3 img-fluid rounded-circle user_avtar" src="img/sdsd.jpg" height="100px" width="100px" alt="image">
                                                <div class="media-body">
                                                    <h5><?php   echo ucfirst($_SESSION['username']); ?></h5>

                                                    <p class="m-0"><?php  echo date('Y-m-d H:i:s'); ?></p>
                                                    <div class="activity_body">
                                                        <p>Hi buddies this is my new car....</p>
                                                        <img class="img-fluid" src="img/users/xcar.png.pagespeed.ic.6eKXUVnXwz.png" alt="car"/>
                                                    </div>
                                                    <div class="activity_likes m-t-10">
                                                        <p><a href="javascript:void(0)" class="text-gray-dark"><span class="ti-thumb-up"></span> Like</a>  <a href="javascript:void(0)" class="text-gray-dark"><span class="ti-thumb-down"></span> Unlike</a> <a href="javascript:void(0)" class="text-gray-dark"><span class="ti-comment"></span> 1 Comment</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane  reset  fade" id="user_friends">
                                    <div class="row m-t-10">
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Sandy Chris</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople4.png.pagespeed.ic.j5XEVD0PAw.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">  Adela</h5>
                                                    <p class="m-0">Web Designer</p>
                                                    <span class="userfrd_offline"> </span> &nbsp;Offline
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople5.png.pagespeed.ic.Ff0Fmpp446.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Symons</h5>
                                                    <p class="m-0">Web Developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople2.png.pagespeed.ic.GEQOLGMLGN.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Benjamin</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Timmothy</h5>
                                                    <p class="m-0">PHP developer</p>
                                                    <span class="userfrd_offline"> </span> &nbsp;Offline
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Sandy Chris</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople4.png.pagespeed.ic.j5XEVD0PAw.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">  Adela</h5>
                                                    <p class="m-0">Web Designer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople5.png.pagespeed.ic.Ff0Fmpp446.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Symons</h5>
                                                    <p class="m-0">Web Developer</p>
                                                    <span class="userfrd_offline"> </span> &nbsp;Offline
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople2.png.pagespeed.ic.GEQOLGMLGN.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Benjamin</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Timmothy</h5>
                                                    <p class="m-0">PHP developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Sandy Chris</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
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
    </div>
</div>
</div>
<footer>
    <div class="bg-white container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer_content"> Copyright ©2017 made by <span class="text text-info">Sohidul Islam</span></div>
            </div>
        </div>
    </div>

</footer>
<script type="text/javascript" src="js/app.js.pagespeed.jm.PVZQb7x2om.js"></script>
<!--end global js -->
<script type="text/javascript" src="js/custom.js.pagespeed.jm.d52yjq59xU.js"></script>



</body>


</html>

