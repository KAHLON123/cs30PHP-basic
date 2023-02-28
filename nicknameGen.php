<!-- 
    SQL FOR USERS NAME
    TEXT FILE FOR NICKNAMES
-->

<?php
//  connect and check connection
    $conn = mysqli_connect('localhost', 'nicknameUser', 'localhost', 'nickname_gen');

    if (!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    $sql = 'SELECT * FROM user_name';
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
    <input type="submit" name="submit" value="submit">
    <h2>See your nicknames below:</h2>
    <form>
        <input type="text" name="add-nick">
        <input type="text" name="remove-nick"><br />
        <label>ADD or REMOVE a nickname</label>
    </form>
</section>

<?php
$nicknamesArr = file("nicknames.txt", NULL);
//var_dump($nicknamesArr);

var_dump($name);
if (isset($_GET['submit'])){
    $selection = $_GET['s'];
    if ($selection == "change"){
        changeName($_GET['first'], $_GET['last']);
    } elseif ($selection == "display-rand"){
        displayRand();
    }
//     } elseif ($selection == "display-all"){
        
//     } elseif ($selection == "add"){
        
//     } elseif ($selection == "remove"){
        
//     } elseif ($selection == "exit"){
        
//     }
 }

function changeName($first, $last){
    $addToSql = "UPDATE user_name SET first=$first, last=$last";
    if (mysqli_query($conn, $addToSql)){
        echo "Name updated successfully";
    } else {
        echo "Error updating name: " . mysqli_error($conn);
    }
}
function displayRand(){
    for ($n = 0; $n < $nicknames; $n++){
        echo $name[1], $nicknames[$n], $name[1], "<br />";

    }

}

mysqli_close($conn);
?>

</body>