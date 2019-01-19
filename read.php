<?php
 include("connection.php");
 $sql = "SELECT * FROM students";
 $data = mysqli_query($conn,$sql);
 $total = mysqli_num_rows($data);
 $result = mysqli_fetch_all($data,MYSQLI_ASSOC);
 //check records
 if($total != 0){
   echo "";
 }else{
   echo "No records Found";
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Read Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
      .table > tbody > tr > td{
        vertical-align:middle;
      }
    </style>       
</head>

<body>
  <div class="container pt-3">
   <h3 class="text-center">View Data</h3><br>
    <div class="row text-center">
      <div class="col-lg-12">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Rollno</th>
              <th>Name</th>
              <th>Class</th>
              <th>Image</th>
              <th colspan="2">Update or Delete</th>
            </tr>
         </thead>
         <tbody>
            <?php
              //loop starts here
               foreach ($result as $value) { ?>
                  <tr>
                    <td><?php echo $value['rollno']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['class']; ?></td>
                    <td><img src="<?php echo $value['img'] ? 'http://localhost/phpMysql/uploads/'.$value['img']:'http://localhost/phpMysql/uploads/dummy_profile.jpg'?>" width="80" height="80"></td>
                    <td><a href="update.php?rn=<?php echo $value['rollno'];?> & sn=<?php echo $value['name'];?> & cl=<?php echo $value['class'];?>" class="btn btn-primary btn-sm">update</a></td>
                    <td><a onclick="return checkDelete()" href="delete.php?id=<?php echo $value['id'];?>" class="btn btn-danger btn-sm">delete</a></td>
                 </tr>
                <?php
                 }
                ?>     
          </tbody>           
     </table>
    <div>
 </div><!-- row -->
</div><!-- container -->
<script type="text/javascript">
   function checkDelete(){
      return confirm("Are you sure that you want to delete this record?");
   }
</script>
</body>
</html>