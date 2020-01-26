<?php
// if(!isset($_POST['submit']))
// {
// 	This page should not be accessed directly. Need to submit the form.
// 	echo "error; you need to submit the form!";
// 	exit();
// }
// if the url field is empty, but the message field isn't
if(isset($_POST['url']) && $_POST['url'] == '' && $_POST['email'] != ''){


	// put your email address here
	$youremail = 'dicksoniprince@gmail.com';
	$subject = "NEWSLETTER MAILING LIST";

	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "NEW EMAIL SUBSCRIPTION:
	E-Mail: $_POST[email]";

	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}
	
	// finally, send the message
	mail($youremail,$subject,$body);

}

// otherwise, let the spammer think that they got their message through

// uncomment these lines to redirect instead of displaying HTML
//header('Location: http://www.mysite.com/thankyou.html');
//exit('Redirecting you to http://www.mysite.com/thankyou.html');

?>