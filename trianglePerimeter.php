<!DOCTYPE html>
<head>
    <title>Perimeter</title>
</head>
<body>
    <section>
<h1>
    Triangle Perimeter
</h1>
<h2>Enter the vertices of your triangle below</h2>
<form action="caughtSpeeding.php" method="POST">
    <label>xa</label>
    <input type="number" name="xa"><br>
    <label>ya</label>
    <input type="number" name="ya"><br>
    <label>xb</label>
    <input type="number" name="xb"><br>
    <label>yb</label>
    <input type="number" name="yb"><br>
    <label>xc</label>
    <input type="number" name="xc"><br>
    <label>yc</label>
    <input type="number" name="yc"><br>
<div>
    <input type="submit" name="submit" value="submit">
</div><br>
</form>
</section>
<?php
if (isset($_GET['submit'])){
    define("AB", dist($_GET['xa'], $_GET['ya'], $_GET['xb'], $_GET['yb']));
    define("AC", dist($_GET['xa'], $_GET['ya'], $_GET['xc'], $_GET['yc']));
    define("BC", dist($_GET['xb'], $_GET['yb'], $_GET['xc'], $_GET['yc']));
    echo display("AB", "AC", "BC");
}
dist($x2, $y1, $x2, $y2){
    echo "hi";
    //return sqrt(($x2-$x1)**2+($y2-$y1)**2);
}
display($AB, $AC, $BC){
    echo 'AB = ', $AB;
    echo 'AC = ', $AC;
    echo 'BC = ', $BC;
    echo 'Perimeter = ', ($AB+$AC+$BC);
}
?>
</body>