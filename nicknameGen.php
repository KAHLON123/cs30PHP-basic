<?php

    $conn = mysqli_connect('localhost', 'nicknameUser', 'localhost', 'nickname_gen');

    if (!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $sql = 'SELECT * FROM user_name'
    $result = mysqli_query($conn, $sql);
    $name = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<head>
    <title>Student Grades</title>
</head>
<body>
<section>
<h1>Nickname Generator!</h1>
    <form>
        <label>Put your first name here</label><br>
        <input type="text" name="first"><br><br>
        <label>And your last name here</label><br>
        <input type="text" name="last">
    </form><br>
    <label>OPTIONS:</label><br>
    <select name="s">
        <option value="change">Change Name</option>
        <option value="display-rand">Display a Random Nickname</option>
        <option value="display-all">Display All Nicknames</option>
        <option value="add">Add a Nickname</option>
        <option value="remove">Remove a Nickname</option>
        <option value="exit">Exit</option>
    </select>
    <h2>See your nicknames below:</h2>
</section>
<?php
// if (isset($_GET['submit'])){
//     $selection = $_GET['s'];
//     if ($selection ==){

//     } elseif ($selection ==){

//     } elseif ($selection ==){
        
//     } elseif ($selection ==){
        
//     } elseif ($selection ==){
        
//     } elseif ($selection ==){
        
//     }
// }
?>

</body>