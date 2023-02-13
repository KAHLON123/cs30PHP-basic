<!DOCTYPE html>
<html lang="en">

<body>
<?php include('templates/header.php'); ?>

<section class="container">

<h4>Student feedback</h4>
<form action="index.php" method="GET">
    <label>Student Name:</label>
    <input type="text" name="stuName"><br>
    <label>Student Performance</label>
    <input type="text" name="stuPerform">
    <div>
        <input type="submit" name="submit1" value="submit">
    </div>
</form>
</section>
<?php
if(isset($_GET['submit1'])){
    echo $_GET['stuName'], ' is doing ' ,$_GET['stuPerform'], ' in this class';
} 
?>
<section class="container">
<h4>Heron's formula</h4>
<form action="index.php" method="GET">
    <label>Side lengths</label>
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="number" name="c">
    <div>
        <input type="submit" name="submit2" value="submit">
    </div>
</form>
</section>

<?php
if(isset($_GET['submit2'])){
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
$s = ($a+$b+$c) /2;
$output = sqrt($s * ($s-$a) * ($s-$b) * ($s-$c));
echo $output;
}
?>
<h4>Series sum</h4>
<?php
function seriesSum($start, $stop, $step){
    for($n = $start; $n <= $stop; $n += $step){
        $sum = 0;
        $sum += $n;
    }
    echo "The sum of that series is ", $sum, "<br />";
}
seriesSum(1, 10, 1);
?>
<h4>Analyze number</h4>
<?php
function analyzeNumber($n){
    if ($n<0){
        echo "n is negative <br />";
    } elseif ($n==0){
    echo "n is 0";
    } else {
        echo "n is positive <br />";
    }
}
analyzeNumber(5);
?>
<h4>Is even?</h4>
<?php
function isEven($n){
    if ($n % 2 == 0){
        echo "true";
    } else {
        echo "false";
    }
}
isEven(8);
?>
<?php include('templates/footer.php'); ?>
</body>
</html>