<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/

	$inputText = "superCALI00!!";

    $hashFormat = "$2y$10$";
    $salt = "4k0kK9Nn8luk56K9n82l103knF80143K54";
    $hashF_and_salt = $hashFormat . $salt;

    $result = crypt($inputText, $hashF_and_salt);

    echo $result;
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>