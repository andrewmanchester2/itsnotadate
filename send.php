<?php
# Check and removal of honeypot field
if ($_POST['email_confirm'] != "") {
	# We return our bots to the same location as our humans, so the bots don't know it failed
   die(header("Location: http://" . $_POST['url'] . "?result=success"));
   
} else {
   # Set these here so we can empty the vars before $form[] catches them
   $to   = $_POST['to_address'];
   $url  = $_POST['url'];
   $fail = $_POST['fail'];
   $fid  = $_POST['fid'];

   # unset system used post vars so they don't appear in the final message
   unset($_POST['to_address']);
   unset($_POST['url']);
   unset($_POST['fid']);
   unset($_POST['fail']);
   unset($_POST['email_confirm']);

   # Iterate thru each field, setting the $form array, and catching any required fields.
   foreach($_POST AS $k=>$v) {
   
      # Send back to page with error set if values required are not filled in
      if(substr($k,-4,4) == "_req" && $v == "") { die(header("Location: http://" . $fail . "?result=error")); }
   
   	  # Set our key/value pairs, stripping _req from the key
      $key = str_replace("_req","",$k);
      $value = trim($v);
		
		# Store the info in the $form array for use in the $message building foreach below
      $form[$key] = $value;
   }

   # Set this to any subject desired, as it will appear in the email subject line
   $subject = "Contact Form Submission from " . $fid;
   
   # First we build the headers so our email is interpreted correctly
   $headers = "MIME-Version: 1.0\r\n".
   "Content-Type: text/html; charset=utf-8\r\n".
   "From: \"" . $form['name'] . "\" <" . $form['email'] . ">\r\n".
   "Date: " . date("r") . "\r\n".
   "Subject: " . $subject . "\r\n";

   # Our message 'header' - this can be customized to a specific message if need be
   $message = "You have recently recieved an information submission from " . $fid . ". Below is the information collected:\r\n<br>";
   $message .= "============================================================================\r\n<br><br>";

	# Iterate thru each of the $form array values set from our form fields and add them to the message
   foreach($form AS $k=>$v) {
   	# We strip underscores, and capitalize our keys to make it human friendly
      $message .= ucwords(str_replace("_"," ",$k)) . ": " . $v . "\r\n<br>";
 
   }
require_once 'KeywordTracker.php';
$tracker=new KeywordTracker(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
 if (isset($tracker) && is_object($tracker)) {
      $message .= "<br /><br />".$tracker->formatEmail(true);
    }
	# Now we send the message
   mail($to, $subject, $message, $headers);

	# Let's return to the form location to spit out a success message
   die(header("Location: http://" . $url . "?result=success"));
}
?>
