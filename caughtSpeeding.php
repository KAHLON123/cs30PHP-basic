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
    <input type="number" name="speed"><br>
    <label>Enter the speed limit</label>
    <input type="number" name="limit"><br>
    <label>Enter driver 3 speed</label>
    <input type="number" name="speed"><br>
    <label>Enter the speed limit</label>
    <input type="number" name="limit"><br>
<div>
    <input type="submit" name="submit" value="submit">
</div><br>
</form>
</section>
<?php
if (isset($_POST['submit'])){
    determineTicket($_POST['driver'], $_POST['speed'], $_POST['limit']);
}

function determineTicket($driverNum, $speed, $limit){
    $output = "";
for (n=1;n<=3;n++){
        if ($speed > $limit += 40) {
        $output = "a really big ticket!";
    } elseif ($speed > $limit+=20) {
        $output = "a big ticket...";
    } elseif ($speed> $limit) {
        $output = "a small ticket :(";
    } else {
        $output = "no ticket :)";
    }
    
    echo "Driver ", $driverNum, " is going to get ", $output;
}
}
?>
</body>