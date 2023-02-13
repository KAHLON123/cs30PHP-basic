<!DOCTYPE html>
<head>
    <title>Caught speeding</title>
</head>
<body>
<section >
<h1>Caught speeding!</h1>

<form action="caughtSpeeding.php" method="POST">
    <label>Enter driver 1 speed</label>
    <input type="number" name="speed"><br>
    <label>Enter the speed limit</label>
    <input type="number" name="limit"><br>
    <label>Enter driver 2 speed</label>
    <input type="number" name="speed2"><br>
    <label>Enter the speed limit</label>
    <input type="number" name="limit2"><br>
    <label>Enter driver 3 speed</label>
    <input type="number" name="speed3"><br>
    <label>Enter the speed limit</label>
    <input type="number" name="limit3"><br>
<div>
    <input type="submit" name="submit" value="submit">
</div><br>
</form>
</section>
<?php
if (isset($_POST['submit'])){
    determineTicket(1, $_POST['speed'], $_POST['limit']);
    determineTicket(2, $_POST['speed2'], $_POST['limit2']);
    determineTicket(3, $_POST['speed3'], $_POST['limit3']);
}

function determineTicket($driverNum, $speed, $limit){
    $output = "";

        if ($speed > $limit += 40) {
        $output = "a really big ticket!";
    } elseif ($speed > $limit += 20) {
        $output = "a big ticket...";
    } elseif ($speed > $limit) {
        $output = "a small ticket :(";
    } else {
        $output = "no ticket :)";
    }
    
    echo "Driver ", $driverNum, " is going to get ", $output, "<br />";
}
?>
</body>