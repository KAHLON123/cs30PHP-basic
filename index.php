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
$s = (a+b+c) /2;
// continue math formula here!!!
}
?>

<?php include('templates/footer.php'); ?>
</body>
</html>