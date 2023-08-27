<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted data
  $data = json_decode($_POST['data']);

  // Extract data
  $name = $data->name;
  $email = $data->email;
  $message = $data->message;

  // Send email
  $to = 'your-email@example.com'; // Enter your email address here
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = 'From: webmaster@example.com' . "\r\n" .
             'Reply-To: ' . $email . "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $body, $headers)) {
    http_response_code(200);
  } else {
    http_response_code(500);
  }
} else {
  http_response_code(403);
}
?>