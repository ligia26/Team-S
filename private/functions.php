<?php require_once "Mail.php"; ?> 

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

  echo ('reached send mail');
  $from = 'ticketmachineproject@gmail.com';
  $to      = $email; 
  echo($email);
  echo ($subject);                 
  // $headers = 'From:noreply@chesssoc.com' . "\r\n"; 
  $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject);

    $smtp = @Mail::factory('smtp', array(
                  'host' => 'smtp.gmail.com',
                  'port' => '587',
                  'auth' => true,
                  'STMPSecure' => "tls",
                  'username' => 'ticketmachineproject@gmail.com',
                  'password' => 'KCLproject'
              ));
              if (PEAR::isError($smtp)) {
                echo $smtp->getMessage() . "\n" . $smtp->getUserInfo() . "\n";
            }
  echo ('stmp set up ! ');
  echo($from);
  echo($to);
     $mail = $smtp->send($to, $headers, $message);
    echo($mail);  
              if (@PEAR::isError($mail)) {
                  echo('<p>' . $mail->getMessage() . '</p>');
                   return false;
              } else {
                  echo('<p>Message successfully sent!</p>');
                  echo ('successful');
                  return true;
              }
            }

?>
