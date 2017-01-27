<?php
if(!isset($_POST['submit']))
{
	echo "error; you need to submit the form!";
}
$yes = $_POST['chooseone'];
$no = $_POST['chooseone'];
$copyone = $_POST['emotion'];
$copytwo = $_POST['reasonlineone'];
$copythree = $_POST['reasonlinetwo'];
$diet = $_POST['diet'];
$name = $_POST['name'];

// if(empty($name)||empty($visitor_email)) 
// {
//     echo "Name and email are mandatory!";
//     exit;
// }

// if(IsInjected($visitor_email))
// {
//     echo "Bad email value!";
//     exit;
// }

$email_from = 'boddytobe@gmail.com';
$email_subject = "New Wedding RSVP";
$email_body = "You have received a new RSVP from $name.\n".
    "I / We are $copyone to $copytwo $copythree.\n"<br>
    "You should know, I'm a $diet\n"<br>
    "Peace and love, $name\n"
    
$to = 'boddytobe@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 