<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>McDarkness::Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="This is the website description">
      <!--Google Font -->
      <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
      <!-- Bootstrap Stylesheet-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	 <!--Font Awesome -->
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
      <!-- Custom styles - must be the last stylesheet -->
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="icon" href="images/logosmall.png">
      <meta name="description" content="Portfolio Website by Mark McGuiness::Contact Action">
<meta name="keywords" content="HTML,CSS,Bootstrap,Photoshop,Illustrator,Blender,3D,animation,portfolio,music, Dead Larry">
<meta name="author" content="Mark McGuiness">
   </head>
   <body>
     <header>
         <img src="images/header2.png" alt="logo" height="540" width="1920" class="img-fluid">
     </header>
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon">
             </span>
       </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                   <a class="nav-link" href="index.html">Home
                   </a>
                     </li>
                 <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="portfolio.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Portfolio</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="images.html">Images</a>
               <a class="dropdown-item" href="videos.html">Videos</a>
                 <a class="dropdown-item" href="misc".html">Miscellaneous</a>
               <a class="dropdown-item" href="music.html">Music</a>
             </div>
                 <li class="nav-item"><a class="nav-link" href="resume.html">Resume</a></li>
                 <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
             </ul>
             </div>
         </nav>
<div class="container">
<div class="row">
  <div class="col-sm-12">
    <h1>Thank You</h1>
    <?php
				/*These are the variables in form. In PHP, all variables start with a $ sign.
				They are used below to generate an email notice. The fields come from the field name in the contact.php script. */
				$request = $_POST['describe']; /* In English: Get the field with the name of "describe" and make a variable named, $request. */
				$name = $_POST['name'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];

				/*This is the message that is generated to the user when the form is submitted. */
				$success = "Thank you for submitting the form! Your message has been sent.<br /> ";

				/*Change the email address to your email address. */
				$to = "marksmcguiness@gmail.com";

				/*This set of variables is what you will receive back in an email to alert you to the message.
				The message is not stored in a database and is only in the email you or your designee receives. The "/n" starts a new line in the form. In PHP*/
				$subject = "Contact Form Submission";
				$msg =
					"Message:   $describe\n" .
					"Name:   $name\n" .
					"Email:  $email\n" .
					"Phone:  $phone\n";

				mail($to, $subject, $msg);

				echo $success ;
			?>
    <a href="index.html">Return to home page</a><br>
  </div>
</div>
<footer class="container-fluid text-center">
<small>
  &copy; Mark McGuiness</small>
</footer>
<!--jQuery, Popper, and Bootstrap Javascript files-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
