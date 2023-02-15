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
<form action="trianglePerimeter.php" method="POST">
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
if (isset($_POST['submit'])){
    $AB = dist($_POST['xa'], $_POST['ya'], $_POST['xb'], $_POST['yb']);
    $AC = dist($_POST['xa'], $_POST['ya'], $_POST['xc'], $_POST['yc']);
    $BC = dist($_POST['xb'], $_POST['yb'], $_POST['xc'], $_POST['yc']);
    echo display($AB, $AC, $BC);
}
function dist($x1, $y1, $x2, $y2){
    return sqrt(($x2-$x1)**2+($y2-$y1)**2);
}
function display($AB, $AC, $BC){
    echo 'AB = ', $AB, '<br />';
    echo 'AC = ', $AC, '<br />';
    echo 'BC = ', $BC, '<br />';
    echo 'Perimeter = ', $AB+$AC+$BC;
}
?>
</body>