<?php
// include connection
include 'db_connection.php';

// declare varibales and initialize with empty values
$fnameErr = $lnameErr = $emailErr = $courseErr = $batchErr = $cityErr = $stateErr = "";
$fname = $lname = $email = $course = $batch = $city = $state = "";

// processing form data when form is submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $fnameErr = "*This field is required";
    } else {
        $fname = test_input($_POST["fname"]);
        // check if fname contains only letters
        if (!ctype_alpha($fname)) {
            $fnameErr = "Only letters are allowed";
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "This field is required";
    } else {
        $lname = test_input($_POST["lname"]);
        // check if lname contains only letters
        if (!ctype_alpha($lname)) {
            $lnameErr = "Only letters are allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "*This field is required";
    } else {
        $email = test_input($_POST["email"]);
        // check e-mail address is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address";
        }
    }

    if (empty($_POST["course"])) {
        $courseErr = "*This field is required";
    } else {
        $course = test_input($_POST["course"]);
    }

    if (empty($_POST["batch"])) {
        $batchErr = "*This field is required";
    } else {
        $batch = test_input($_POST["batch"]);
        /* check if batch contains numbers only, also 
        check min and max value to be entered */
        if (!ctype_digit($batch)) {
            $batchErr = "Batch must be a numeric value";
        } elseif ($batch < 2013) {
            $batchErr = "Batch must be greater than or equal to 2013";
        } elseif ($batch > 2021) {
            $batchErr = "Batch must be less than or equal to 2021";
        } else {
            // no code will execute
        }
    }

    if (empty($_POST["city"])) {
        $cityErr = "*This field is required";
    } else {
        $city = test_input($_POST["city"]);
    }

    if (empty($_POST["state"])) {
        $stateErr = "*This field is required";
    } else {
        $state = test_input($_POST["state"]);
    }

    // if no errors then insert data into databse
    if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($courseErr) && empty($batchErr) && empty($cityErr) && empty($stateErr)) {

        $sql = "INSERT INTO students (firstname, lastname, email, course, batch, city, state) VALUES ('$fname', '$lname', '$email', '$course', '$batch' , '$city', '$state')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('New record created successfully');</script>";
            echo "<script>window.location.href='http://localhost/PHP-MySQL/';</script>";
            exit();
        }
    }
    mysqli_close($conn);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Create Data - PHP CRUD</title>
</head>

<body>
    <!-- submit form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h3 class="mb-4 text-center">Create Record</h3>
                <div class="form-body bg-light p-4">
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <label for="fname" class="form-label">Firstname*</label>
                                <input type="text" class="form-control" id="fname" name="fname" value="<?= $fname; ?>">
                                <small class="text-danger"><?= $fnameErr; ?></small>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="lname" class="form-label">Lastname*</label>
                                <input type="text" class="form-control" id="lname" name="lname" value="<?= $lname; ?>">
                                <small class="text-danger"><?= $lnameErr; ?></small>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="email" class="form-label">Email Address*</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= $email; ?>">
                                <small class="text-danger"><?= $emailErr; ?></small>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="course" class="form-label">Course*</label>
                                <input type="text" class="form-control" id="course" name="course" value="<?= $course; ?>">
                                <small class="text-danger"><?= $courseErr; ?></small>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="batch" class="form-label">Batch*</label>
                                <input type="text" class="form-control" id="batch" name="batch" value="<?= $batch; ?>">
                                <small class="text-danger"><?= $batchErr; ?></small>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label for="city" class="form-label">City*</label>
                                <input type="text" class="form-control" id="city" name="city" value="<?= $city; ?>">
                                <small class="text-danger"><?= $cityErr; ?></small>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <label for="state" class="form-label">State*</label>
                                <input type="text" class="form-control" id="state" name="state" value="<?= $state; ?>">
                                <small class="text-danger"><?= $stateErr; ?></small>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary form-control" name="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>