<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
</head>
<body>
 <div class="container mt-5 text-center">
    <?php
        error_reporting(0);
        include("connection.php");
        $id=$_GET['id'];
        $sql = "DELETE FROM students WHERE id='$id'";
        $data = mysqli_query($conn,$sql);
        //check
       if($data){
           echo "<p class='lead success-text'>Record has been deleted Successfully</p>";
           header('Location: http://www.localhost/phpMysql/read.php');
       }else{
           echo "<p class='lead error-text'>Oops something went wrong!!</p>";
       }
    ?>
     <a class="btn btn-info btn-sm mt-3" href="read.php">Go back to previous page</a>
 </div>
</body>
</html>
