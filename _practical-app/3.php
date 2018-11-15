<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
//if statement
if(1 > 10)
{
    echo "I hate PHP";
}
elseif(100 == 5)
{
    echo "I hate php";
}
else
{
    echo "I love PHP" . "<br>";
}

//forloop
$number = 1;
for ($i = 1; $i <= 10; $i++)
{
    $number *= $i;
    echo $i . " factorial: " . $number . "<br>";
}

$number = 5;
switch ($number)
{
    case 5:
        echo "CORRECT NUMBER" . "<br>";
        break;
    case 4:
        echo "INCORRECT NUMBER";
        break;
    case 11:
        echo "INCORRECT NUMBER";
        break;
    case 3:
        echo "INCORRECT NUMBER";
        break;
    case 1:
        echo "INCORRECT NUMBER";
        break;
    default:
        echo "NOTHING";
}

?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>