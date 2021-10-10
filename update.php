<?php
// include connection
include 'db_connection.php';

// processing form data when form is submit
if (isset($_POST["update"])) {
    // get post values
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $batch = $_POST["batch"];
    $city = $_POST["city"];
    $state = $_POST["state"];

    $sql = "UPDATE students SET firstname='$fname', lastname='$lname', email='$email', course='$course', batch='$batch', city='$city', state='$state' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record updated Successfully');</script>";
        echo "<script>document.location='index.php';</script>";
        exit;
    }
}

// check if url contain id, if not redirect to index page
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // get id from url
    $id = $_GET["id"];

    // retrieve record associated with id
    $sql = "SELECT * FROM students WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $record = mysqli_num_rows($result);

    if ($record == 1) {
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        // retrieve individual field value
        $fname = $row["firstname"];
        $lname = $row["lastname"];
        $email = $row["email"];
        $course = $row["course"];
        $batch = $row["batch"];
        $city = $row["city"];
        $state = $row["state"];
    }
} else {
    echo "<script>alert('Please select record to update');</script>";
    echo "<script>document.location='index.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Update Data - PHP CRUD</title>
</head>

<body>
    <!-- update form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h3 class="mb-4 text-center">Update Record</h3>
                <div class="form-body bg-light p-4">
                    <form action="<?= $_SERVER["REQUEST_URI"]; ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="fname" class="form-label">Firstname*</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="<?= $fname; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="lname" class="form-label">Lastname*</label>
                                <input type="text" class="form-control" id="lname" name="lname" value="<?= $lname; ?>" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="email" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $email; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="course" class="form-label">Course*</label>
                                <input type="text" class="form-control" id="course" name="course" value="<?= $course; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="batch" class="form-label">Batch*</label>
                                <input type="number" class="form-control" id="batch" name="batch" value="<?= $batch; ?>" min="2013" max="2021" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="city" class="form-label">City*</label>
                                <input type="text" class="form-control" id="city" name="city" value="<?= $city; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label for="state" class="form-label">State*</label>
                                <input type="text" class="form-control" id="state" name="state" value="<?= $state; ?>" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="hidden" class="form-control" name="id" value="<?= $id; ?>">
                                <input type="submit" class="btn btn-secondary form-control" name="update" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>