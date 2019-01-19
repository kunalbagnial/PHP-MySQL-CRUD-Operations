<?php
  error_reporting(0);
  include("connection.php");
  $rn = $_GET['rn'];
  $nm = $_GET['sn'];
  $cl = $_GET['cl'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Update data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css"  href="css/main.css" />
</head>
<body>
  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-lg-4"></div>
       <div class="col-lg-4 form-container">
         <h4 class="text-center">Update Details</h4>
         <!-- form start here -->
          <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
           <label>*Roll no:</label>
           <input class="form-control"  type="text" name="rollno" placeholder="enter roll no.." value="<?php echo $rn;?>">
          </div>
          
          <div class="form-group">
           <label>*Name:</label>
           <input class="form-control"  type="text" name="name" placeholder="enter name.." value="<?php echo $nm;?>">
          </div>

          <div class="form-group">
           <label>*Class:</label>
           <input class="form-control"  type="text" name="class" placeholder="enter class.."
           value="<?php echo $cl;?>">
          </div>
           <!-- submit button -->
           <input type="submit" class="btn btn-info btn-block" name="submit" value="Click to Update">
         </form>
       </div>
       <div class="col-lg-4"></div>
    </div><!-- row closed -->
</div><!-- container closed --> 

  <?php
   //update record
   if($_POST['submit']){
    
     $rollno = $_POST['rollno'];
     $name = $_POST['name'];
     $class = $_POST['class'];
      
     $sql = "UPDATE students SET name = '$name', class = '$class' WHERE rollno = '$rollno'";
     $update = mysqli_query($conn,$sql);
     if($update){
         echo "<p class='text-center mt-2 success-text'>Record updated Successfully <a href='read.php' class='btn-block'>&larr; Back to view data</a></p>";
     }
     else{
         echo "<p class='text-center mt-2 error-text'>Sorry Something went Wrong</p>";
     }
  }
 ?>
</body>
</html>