<?php
session_start();
include('common/db.php');
include('common/logedin.php');

    $id=$_GET['id'];
    $query= "SELECT * FROM administrator WHERE adminid = $id";

    $result= mysqli_query($connect, $query);
    
    $row= mysqli_fetch_object($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile setting</title>
    
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="img/xlogo2.ico.pagespeed.ic.qmwUApvH50.html"/>
    <!--start global css-->
    <link type="text/css" rel="stylesheet" href="css/A.app.css%2bcustom.css%2bpages%2c%2c_light_sidebar.css%2cMcc.lp_uw3dA9e.css.pagespeed.cf.-QxG9heMNB.css"/>
    <!-- end of global css -->
    
<style type="text/css">
        .btn-bs-file{
    position:relative;
}
.btn-bs-file input[type="file"]{
    position: absolute;
    top: -9999999;
    filter: alpha(opacity=0);
    opacity: 0;
    width:0;
    height:0;
    outline: none;
    cursor: inherit;
}
    </style>
    
    
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
            <h4><i class='ti-view-grid'> </i> Profile Setting </h4>          
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
<div class="content">
    <form action=".php" method="post" >    
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="heading">Update your information</h5>
                        <div class="m-t-35">
                        <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                    Upload Photo
                                </label>
                                                                             
                                     <label class="btn-bs-file btn  btn-primary">
                                        Upload
                                       <input type="file" name="image" />
                                      </label>
                                    
                            </div>  
                            <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                     Admin ID
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-user text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="employeeid" name="adminid"  value="<?php echo $row->adminid;?>">
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                    User Name
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-user text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="first_name3" name="username" value="<?php echo $row->username;?>">
                                    </div>
                                </div>
                            </div>  
                             <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                    Fathers Name
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-user text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="first_name3" name="fathersname" value="<?php echo $row->fathersname;?>">
                                    </div>
                                </div>
                            </div> 
                             <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                    Mothers Name
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-user text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="first_name3" name="mothersname" value="<?php echo $row->mothersname;?>">
                                    </div>
                                </div>
                            </div>                         
                            <div class="form-group row">
                                <label for="email3" class="col-form-label col-sm-3">
                                    Phone
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-email text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="phone" name="phone" value="<?php echo $row->phone;?>">
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="password3" class="col-form-label col-sm-3">
                                    Date of Birth
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <input type="date" style= "width: 100%; "  id="dob" name="dob" value="<?php echo $row->dob;?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password3" class="col-form-label col-sm-3">
                                    Local Address
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="localaddress" name="localaddress" value="<?php echo $row->localaddress;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="con_password3" class="col-form-label col-sm-3">
                                   Permanent Address
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="con_password3" name="permanentaddress" value="<?php echo $row->permanentaddress;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="con_password3" class="col-form-label col-sm-3">
                                   Gender
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <select name="gender" value="<?php echo $row->gender;?>" class="selectpicker"  style="width: 100%; font-family: cursive;">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="con_password3" class="col-form-label col-sm-3">
                                   Department
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <select name="department" value="<?php echo $row->department;?>"  class="selectpicker"  style="width: 100%; font-family: cursive;">
                                            <option value="1">Engineer</option>
                                            <option value="2">Lecturer</option>
                                            <option value="3">Worker</option>
                                            <option value="4">Guard</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    <h5 class="heading">Account Login</h5>
                            <div class="form-group row">
                                <label for="con_password3" class="col-form-label col-sm-3">
                                   Email Address
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <input type="email" class="form-control " id="email" name="email" value="<?php echo $row->email;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="con_password3" class="col-form-label col-sm-3">
                                  Password
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-key text-info"></i>
                                                        </span>
                                        <input type="password" class="form-control " id="password" name="password" value="<?php echo $row->password;?>">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button class="btn btn-primary layout_btn_prevent" type="submit"> Update</button>
                                    <button class="btn btn-warning layout_btn_prevent" value="reset">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
 <form> 


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

