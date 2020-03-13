<?php

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function u($string="") {
  return urlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}
function send_email($email,$subject,$messgae){

  $from = 'pmpriya.music@gmail.com';
  $to      = $email; 
  
                       
  // $headers = 'From:noreply@chesssoc.com' . "\r\n"; 
  $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject, 'Reply-To' => 'pmpriya.music@gmail.com');
    $smtp = Mail::factory('smtp', array(
                  'host' => 'ssl://smtp.gmail.com',
                  'port' => '465',
                  'auth' => true,
                  'username' => 'pmpriya.music@gmail.com',
                  'password' => 'Priya@010'
              ));
      
     $mail = $smtp->send($to, $headers, $body);
    
              if (PEAR::isError($mail)) {
                  echo('<p>' . $mail->getMessage() . '</p>');
                   return false;
              } else {
                  echo('<p>Message successfully sent!</p>');
                  return true;
              }
            
  // mail($to, $subject, $message, $headers); 

}
// function send_mail ($from,$to,$subject,$body) {
//   $from = '<fromaddress@gmail.com>';
//   $to = '<toaddress@yahoo.com>';
//   $subject = 'Hi!';
//   $body = "Hi,\n\nHow are you?";
  
//   $headers = array(
//       'From' => $from,
//       'To' => $to,
//       'Subject' => $subject
//   );
  
//   $smtp = Mail::factory('smtp', array(
//           'host' => 'ssl://smtp.gmail.com',
//           'port' => '465',
//           'auth' => true,
//           'username' => 'johndoe@gmail.com',
//           'password' => 'passwordxxx'
//       ));


?>

