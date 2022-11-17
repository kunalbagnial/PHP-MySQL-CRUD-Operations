<?php
mysqli_report(MYSQLI_REPORT_OFF);

# Database credentials
define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "crud");

# Create connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  echo "Connection error: " . mysqli_connect_error();
}
