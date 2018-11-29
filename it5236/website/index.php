
<?php
	
// Import the application classes
require_once('include/classes.php');
// Create an instance of the Application class
$app = new Application();
$app->setup();
// Declare an empty array of error messages
$errors = array();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>it5236 annesa robinson</title>
	<meta name="description" content="Annesa Robinson's personal website for IT 5236">
	<meta name="author" content="Annesa Robinson">
	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	

	<?php include 'include/header.php'; ?>
		<h2>Suggestions</h2>
	<p>
		This website allows people to put in suggestions for what type of companies they would like to incorporate in their communities.   
		 In order to put in your suggestion you must <a href="login.php">create an account</a> or proceed directly to the 
		<a href="login.php">login page</a>. For more information about different companies, click the information tab on the top right hand corner of the page.
	</p>
<img src="https://www.lib.umd.edu/binaries/content/gallery/public/services/suggestions1.jpg" alt="suggest" width="100" height="333">
<?php include 'include/footer.php'; ?>
	<script src="js/site.js"></script>
</body>
</html>