<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP sandbox</title>
</head>
<body>
    <h1>Hello! Lets do some math.</h1>
    <h2><?php echo "Here's the question:<br><br>
    if M / 5 has a remainder of 2,<br>
    and N / 5 has a remainder of 4,<br>
    what is the remainder of (M + N) / 5?" ?></h2>
<?php
/*
if M % 5 = 2
and N % 5 = 4
what is M + N % 5?
*/
$testN = 0;
$testM = 0;

do {
    $testM++;
    if ($testM % 5 == 2){
        echo "M = ", $testM, "<br />";
        break;
    }
} while ($testM % 5 != 2);

do {
    $testN++;
    if($testN % 5 == 4){
        echo "N = ", $testN;
        break;
    } 
} while ($testN % 5 != 4);

?>

</body>
</html>