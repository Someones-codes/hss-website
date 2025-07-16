<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "admin@hss.co.za"; // School admin email
  $subject = "New Form Submission";
  $message = "";
  
  foreach ($_POST as $key => $value) {
    $message .= "$key: $value\n";
  }
  
  mail($to, $subject, $message);
  header("Location: thank-you.html"); // Redirect after submission
}
?>