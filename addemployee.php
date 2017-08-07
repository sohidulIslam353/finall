<?php
session_start();
include('common/db.php');
include('common/logedin.php');


// $destination ="img/".$_FILES['image']['name'];
// $filename    = $_FILES['image']['tmp_name'];
// move_uploaded_file($filename , $destination);



//     $employeeid         = $_POST["employeeid"];
//     $username           = $_POST["username"];
//     $fathersname        = $_POST["fathersname"];
//     $mothersname        = $_POST["mothersname"];
//     $phone              = $_POST["phone"];
//     $dob                = $_POST["dob"];
//     $localaddress       = $_POST["localaddress"];
//     $permanentaddress   = $_POST["permanentaddress"];
//     $gender             = $_POST["gender"];
//     $department         = $_POST["department"];
//     $email              = $_POST["email"];
//     $password           = $_POST["password"];
    
    
    
//     $query = "INSERT INTO `employee` (employeeid,username,fathersname,mothersname,phone,dob,localaddress,permanentaddress,gender,department,email,password)
//             VALUES 
//             ('$employeeid','$username','$fathersname','$mothersname','$phone','$dob','$localaddress','$permanentaddress','$gender','$department','$email','$password')";
    
//     $result = mysqli_query($connect, $query);
    

//     header("Location: addemployee.php");







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employee</title>
    
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="img/xlogo2.ico.pagespeed.ic.qmwUApvH50.html"/>
    <!--start global css-->
    <link type="text/css" rel="stylesheet" href="css/A.app.css%2bcustom.css%2bpages%2c%2c_light_sidebar.css%2cMcc.lp_uw3dA9e.css.pagespeed.cf.-QxG9heMNB.css"/>
    <!-- end of global css -->
    <link rel="stylesheet" type="text/css" href="js/sweetalert.css">
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

<!-----------white menubar---------------->
<div class="right-aside view-port-height"> 
<div class="content-header container-fluid bg-white">
    <div class="row">
        <div class="col-sm-4">
            <h4><i class='ti-view-grid'> </i> Add Employee </h4>           
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
            <?php
               if (isset($result)) {
                   echo "<div class='alert alert-success text-center ' style='width:100%; '> Successfully Member Added!! </div>";
               }

            ?>
    <!-- Main content -->
<div class="content">
    <form action="upload.php" method="post" enctype="multipart/form-data">    
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="heading">Horizontal Form</h5>
                         <div class="m-t-35">
                            <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                    Upload Photo
                                </label>
                                     <label class="btn-bs-file btn  btn-primary">
                                        Upload
                                       <input type="file" name="image" id="image">
                                      </label>                                   
                            </div>  
                            <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                     EmployeeId
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-microphone-alt text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="employeeid" name="employeeid" placeholder="Enter your name" required="">
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
                                        <input type="text" class="form-control " id="first_name3" name="username" placeholder="Enter your name" required="">
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
                                                            <i class="ti-user text-danger"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="first_name3" name="fathersname" placeholder="Enter your Father's name" required="">
                                    </div>
                                </div>
                            </div> 
                             <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3" required="">
                                    Mothers Name
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-user text-success"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="first_name3" name="mothersname" placeholder=" Enter your Mother's name" required="">
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
                                                            <i class="ti-mobile text-primary"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="phone" name="phone" placeholder="Phone Number" required="">
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
                                                            <i class="ti-calendar text-info"></i>
                                                        </span>
                                        <input type="date" style= "width: 100%; "  id="dob" name="dob" required="">
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
                                                            <i class="ti-map text-primary"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="localaddress" name="localaddress" placeholder="Local Address" required="">
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
                                                            <i class="ti-map text-success"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="con_password3" name="permanentaddress" placeholder="Permanent Address" required="">
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
                                                            <i class="ti-crown text-success"></i>
                                                        </span>
                                        <select name="gender" class="selectpicker" required="" style="width: 100%; font-family: cursive;">
                                            <option></option>
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
                                                            <i class="ti-layout text-info"></i>
                                                        </span>
                                        <select name="department"  class="selectpicker" required="" style="width: 100%; font-family: cursive;">
                                            <option></option>
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
                                                            <i class="ti-email text-info"></i>
                                                        </span>
                                        <input type="email" class="form-control " id="email" name="email" placeholder="Permanent Address" required="">
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
                                        <input type="password" class="form-control " id="password" name="password" placeholder="Permanent Address" required="">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button class="btn btn-primary layout_btn_prevent btn-block" type="submit" onclick="validation();" name="submit">Add Employee</button>
                                    
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
<script src="js/sweetalert.min.js"></script>
<!-- <script type="text/javascript">
    function validation(){
        swal("Good job!", "Member Successfully added", "success")

      }
     
    

    
</script>
 -->

</body>
</html>

