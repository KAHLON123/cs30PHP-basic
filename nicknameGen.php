<!DOCTYPE html>
<head>
    <title>Nickname Generator</title>
</head>
<body>
<section>
<h1>Nickname Generator!</h1>
    <form action="nicknameGen.php" method="POST">
        <label>Put your first name here</label><br>
        <input type="text" name="first"><br><br>
        <label>And your last name here</label><br>
        <input type="text" name="last">
    <br>
    <label>OPTIONS:</label><br>
    <select name="s">
        <option value="">Select An Option</option>
        <option value="change">Change Name</option>
        <option value="display-rand">Display a Random Nickname</option>
        <option value="display-all">Display All Nicknames</option>
        <option value="add">Add a Nickname</option>
        <option value="remove">Remove a Nickname</option>
        <option value="exit">Exit</option>
    </select>
    <input type="submit" name="submit" value="submit">
    <h2>See your nicknames below:</h2>
        <input type="text" name="nick"><br>
        <label>ADD or REMOVE a nickname</label>
    </form>
</section>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="nickname_gen";
//  connect and check connection
$conn = mysqli_connect($servername, $username, $password, $dbname); // why define $conn twice? otherwise shows as undefined in changename()

    // if (!$conn){
    //     echo 'Connection error: ' , mysqli_connect_error();
    // }
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

//$sql = 'SELECT * FROM user_name';
//$result = mysqli_query($conn, $sql);
//$name = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($name);

$nicknamesArr = file("nicknames.txt", NULL);

//var_dump($nicknamesArr);
// var_dump($name);
if (isset($_POST['submit'])){
    $selection = $_POST['s'];
    switch ($selection){
        case "change":
            echo "test 1";
            changeName($_POST['first'], $_POST['last']);
            break;
        case "display-rand":
            displayRand();
            break;
        case "display-all":
            displayAll($conn);
            //displayAll($_POST['first'], $_POST['last']);
            break;
        // case "add":
        //     addNickname();
        //     break;
        // case "remove":
        //     removeNickname();
        case "exit":
            echo "byebye!";
            break;
        default:
            echo "Invalid option selected";
            break;
    }
} 

function changeName($first, $last){
    echo "test 2";
    $addToSql = "UPDATE user_name SET first= '[${first}]', last= '[${last}]' WHERE 1";
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="nickname_gen";
    if ($conn){
        echo "Name updated successfully";
    } else {
        echo "Error updating name: " , mysqli_error($conn);
    }
}

function displayRand(){
    $n = rand(1, count($nicknamesArr));
    echo $nicknamesArr[$n];
}

function displayAll($){
    for ($n = 0; $n < count($nicknamesArr); $n++){
        // retrieve first/last name from sql
       echo $first, $nicknames[$n], $last, "<br />";
   }
}
// function displayAll($conn) {
//     $sql = "SELECT nick FROM nicknames";
//     $result = mysqli_query($conn, $sql);
//     if (mysqli_num_rows($result) > 0) {
//         while ($row = mysqli_fetch_assoc($result)) {
//             echo $row["nick"] . "<br>";
//         }
//     } else {
//         echo "No nicknames found";
//     }
// }
?>

</body>