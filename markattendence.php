<?php
session_start();
function convert_status($value) {
    $values = [
        1 => 'Engineer',
        2 => 'Lecturer',
        3 => 'Worker',
        4 => 'Guard',
    ];
return $values[$value];
}    


include('common/db.php');
include('common/logedin.php');
// $query="SELECT employee.employeeid, employee_transection.facebook, employee.username
// FROM Orders
// INNER JOIN employee ON employee.employeeid=employee_transection.employeeid;"
 $query="select * from employee ";
$result=mysqli_query($connect, $query) or die('error found on database connection');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mark Attendence</title>
    
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
            <h4><i class='ti-view-grid'> </i>Attendence </h4>
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
 <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="heading">All Employee Attendence</h5>
                        <div class="row basic_tables m-t-30">
                            <div class="col-12 ">
                             
                                <div class="table-responsive">
                                <form>  
                                    <table id="table" class="display table table-stripped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            
                                           <th>Attendence</th>                                          
                                        </tr>
                                        </thead>
                                        <tfoot>
                                       <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            
                                            <th>Attendence</th>                                           
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                       <?php while ($row=mysqli_fetch_object($result)) {
                                        ?>
                                            <tr>
                                               <td><?php echo $row->employeeid;          ?></td>
                                               <td><?php echo $row->username;          ?></td>
                                               <td>
                                               <div class="btn-group" data-toggle="buttons" id="timer">
                                                  <label class="btn btn-info">
                                                    <input type="radio"  name="present" class="green" id="option2" autocomplete="off" > Present
                                                  </label>
                                                  
                                                  <label class="btn btn-info">
                                                    <input type="radio" name="absent" id="option3" autocomplete="off"> Absent
                                                  </label>
                                                </div>



                                                    <!-- <a  href="delete.php?id=<?php echo $row->employeeid;    ?>" id="deletee">
                                                      <button class="btn btn-danger" ><i class="ti-trash text-white"></i></button> </a>
                                    
                                                      <a href="edit.php?id=<?php echo $row->employeeid;      ?>">
                                                     <button class="btn btn-primary"><i class="ti-pencil text-white"></i></button> </a> -->
                                               </td>
                                            <tr>
                                                                          
                                        
                                        <?PHP } ?>
                                </tbody>
                            </table>
                            <button class="btn btn-success btn-block" value="submit">Submit</button>
                            </form>                                
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

<script type="text/javascript">

</script>
</body>
</html>

