<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">



    <?php


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

    echo "2^5: " . pow(2,5);
    echo "<br>";

    $string = "Grant Kveton";

    echo $string . " reversed is: " . strrev($string);
    echo "<br>";

    $numbers = [3,2,1,7,6,8,5,10,9];
    echo "Unsorted array: ";
    echo "<br>";
    print_r($numbers);
    echo "<br>";
    sort($numbers);
    echo "Sorted array: ";
    echo "<br>";
    print_r($numbers);
    echo "<br>";

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>