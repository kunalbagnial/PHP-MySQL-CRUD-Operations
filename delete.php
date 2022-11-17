<?php
# Process delete operation only if URL contain id parameter
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
  # Include connection
  require_once "./config.php";

  # Get URL parameter
  $id = trim($_GET["id"]);

  # Prepare a delete statement
  $sql = "DELETE FROM employees WHERE id = ?";

  if ($stmt = mysqli_prepare($link, $sql)) {
    # Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $param_id);

    # Set parameters
    $param_id = $id;

    # Execute the statement
    if (mysqli_stmt_execute($stmt)) {
      echo "<script>" . "alert('Record has been deleted successfully.');" . "</script>";
      echo "<script>" . "window.location.href='./'" . "</script>";
      exit;
    } else {
      echo "Oops ! Something went wrong. Please try again later.";
    }
  }

  # close statement
  mysqli_stmt_close($stmt);

  # Close connection
  mysqli_close($link);
} else {
  # Redirect to index page if URL doesn't contain id parameter
  echo "<script>" . "window.location.href='./'" . "</script>";
  exit;
}
