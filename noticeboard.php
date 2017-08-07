<?php
session_start();
include('common/db.php');
include('common/logedin.php');

     if (isset($_POST['noticedate']) && isset($_POST['subject'])){
        $noticedate = $_POST['noticedate'];
        $subject = $_POST['subject'];
        $notice = $_POST['notice'];
       
 
         $query = "INSERT INTO `notice` (noticedate,subject,notice)
            VALUES 
            ('$noticedate','$subject','$notice')";
                  
        $result = mysqli_query($connect, $query);
       
    }  

        $sql="select * from notice ";
        $notice=mysqli_query($connect,$sql);
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notice Board</title>
    
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
            <h4><i class='ti-view-grid'> </i>Notice Board </h4>
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
    <form action="noticeboard.php" method="post" >    
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="heading">Notice for all.</h5>
                         <div class="m-t-35">
                            
                            <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                     Notice Date
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-calendar text-info"></i>
                                                        </span>
                                        <input type="date" style= "width: 100%; "  id="Notice" name="noticedate" >
                                    </div>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                   Notice subject
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-user text-info"></i>
                                                        </span>
                                        <input type="text" class="form-control " id="subject" name="subject" placeholder="Subject of Notice">
                                    </div>
                                </div>
                            </div>  
                             <div class="form-group row">
                                <label for="first_name3" class="col-form-label col-sm-3">
                                    Notice
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-map text-info"></i>
                                                        </span>
                                                <!--  <input type="text" name="notice" class="form-control" style="height: 150px;">   -->     
                                         <textarea  style="height:120px; width: 100%; " placeholder="write your notice"
                                        name="notice"></textarea>              
                                      
                                    </div>
                                </div>
                            </div>                           
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button class="btn btn-primary layout_btn_prevent" type="submit"  name="submit" style="float: right; width: 100%;">Add Notice</button>
                                    
                                </div>
                            </div>

<div class="table-responsive">
                                    <table id="table" class="display table table-stripped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>noticedate</th>
                                            <th>subject</th>
                                            <th>notice</th>
                                           <th>Action</th>                                          
                                        </tr>
                                        </thead>
                                        <tfoot>
                                       <tr>
                                            <th>noticedate</th>
                                            <th>subject</th>
                                            <th>notice</th>
                                            <th>Action</th>                                           
                                        </tr>
                                        </tfoot>
                                        <tbody>

                                       <?php
                                         
                                        while ($row=mysqli_fetch_object($notice)) {
                                        ?>
                                            <tr>
                                               <td><?php echo $row->noticedate;          ?></td>
                                               <td><?php echo $row->subject;          ?></td>                                              
                                               <td><?php echo $row->notice;          ?></td>
                                               <td>
                                                    <a  href="delete.php?id=<?php echo $row->employeeid;    ?>" id="deletee">
                                                      <button class="btn btn-danger" ><i class="ti-trash text-white"></i></button> </a>
                                    
                                                      <a href="edit.php?id=<?php echo $row->employeeid;      ?>">
                                                     <button class="btn btn-primary"><i class="ti-pencil text-white"></i></button> </a>
                                               </td>
                                            <tr>
                                                                          
                                        
                                         <?PHP } ?>
                                </tbody>
                            </table>                               
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

