<?php
/* Set e-mail recipient */
$myemail = "nathanmcb1@gmail.com";

/* Check all form inputs using check_input function */
$title = check_input($_POST['title'], "Select your title");
$forename = check_input($_POST['forename'], "Enter your first name");
$surname = check_input($_POST['surname'], "Enter your surname");
$gender = check_input($_POST['gender'], "Enter your gender");
$subject = check_input($_POST['subject'], "Enter a subject");
$email = check_input($_POST['email']);
$message = check_input($_POST['message'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("E-mail address not valid");
}
/* Let's prepare the message for the e-mail */
$message = "

Title: $title
Name: $forename
		$surname
Gender: $gender
E-mail: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thankyou.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
	<head>
		<link rel="stylesheet" href="Design.css" />
		<title>Fredy Mack - Express Courier</title>
	</head>
	<body>
		<!--Heading Content Goes Here-->
		<div id="container">
			<img id="logo" src="IMG/logo.png" />
			<div id="margin">
				<img src="IMG/error.jpg" id="slide" class="landing" />
				
				<script type="text/javascript">
					//variable that will increment through the images
					var step=0

					function slideit(){
					 //if browser does not support the image object, exit.
					 if (!document.images)
					  return
					 document.getElementById('slide').src = slideimages[step].src
					 if (step<2)
					  step++
					 else
					  step=0
					 //call function "slideit()" every 2.5 seconds
					 setTimeout("slideit()",2500)
					}

					slideit()
				</script>
				
				<h2>Error!</h2>
				<br />
				<h1>Fredy Mack!</h1>
				
				<div id="quote"></div>
				<hr />
				
				<!--Quotes Go Here-->
				<script type="text/javascript">
					(function() {
					  var quotes = [
						{
						  text: "\"Small Enough to Care, Big Enough to Cope.\"",

						},
						{
						  text: "\"On Time. Every Time.\"",
						},
						{
						  text: "\"We Care.\"",

						},
						{
						  text: "\"Giving 100%, 24/7.\"",
						}
					  ];
					  var quote = quotes[Math.floor(Math.random() * quotes.length)];
					  document.getElementById("quote").innerHTML =
						'<p>' + quote.text + '</p>';
					})();
				</script>	
				<!--Content Goes Here! -->	
				<p id="error">Please correct the following error:</p>
				<strong id="error2"><?php echo $myError; ?></strong>
				<a href="contact.html"> Click here to return</a>
				<br />
				<p>We are sorry for this inconvenience!</p>
				
				<br />
				<center>
				
				<p>Have an apology puppy!</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/amtuB-2wGeQ" frameborder="0" allowfullscreen></iframe>
				
				</center>
				
			</div>
		</div>
	</body>
</html>
<?php
exit();
}
?>