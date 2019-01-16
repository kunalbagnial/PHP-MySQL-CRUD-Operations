<?php
  include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Insert Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" type="text/css"  href="css/main.css" />
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-4"></div>
       <div class="col-lg-4 form-container">
         <h4 class="text-center">Student form</h4>
         <!-- form start here -->
          <form method="post" action="" enctype="multipart/form-data">
          <div class="form-group">
           <label>*Roll no:</label>
           <input class="form-control"  type="text" name="rollno" placeholder="enter your roll no..">
          </div>
          
          <div class="form-group">
           <label>*Name:</label>
           <input class="form-control"  type="text" name="name" placeholder="enter your name..">
          </div>

          <div class="form-group">
           <label>*Class:</label>
           <input class="form-control"  type="text" name="class" placeholder="enter your class..">
          </div>
           
          <div class="form-group">
           <input class="form-control-file" type="file" name="upload_file">
          </div> 
          <!-- submit button -->
           <input type="submit" class="btn btn-primary btn-block" name="submit" value="Submit">
         </form>
       </div>
       <div class="col-lg-4"></div>
    </div><!-- row closed -->
</div><!-- container closed --> 

 <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      //getting form input values
       $rollno = $_POST["rollno"];
       $name = $_POST["name"];
       $class = $_POST["class"];
      //image upload
       $file_name = $_FILES["upload_file"]["name"];
       $temp_name = $_FILES["upload_file"]["tmp_name"];
       $dir = "C:/wamp64/www/phpMysql/uploads/";
       move_uploaded_file($temp_name,$dir.$file_name);

      //validation
      if($rollno!= "" && $name!= "" && $class!= ""){
        // sql statement
        $sql = "INSERT INTO students (rollno, name, class, img) VALUES ('$rollno','$name','$class','$file_name')";
        $data = mysqli_query($conn,$sql);
         if($data){
          echo "<p class='text-center success-text mt-2'>Your details have been submitted</p>";
         }
      }
      else{
        echo "<p class='text-center error-text mt-2'>*All fields are Required</p>";
      }
    }
?>
</body>
</html>