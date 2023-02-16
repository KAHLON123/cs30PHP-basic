<!DOCTYPE html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <section>
        <h1>Student Grades</h1>
        <form action="studentGrades.php" method="POST">
            <label>Options:</label><br>
            <select name="s">
                <option value="all-grades">Display All Grades</option>
                <option value="honours">Display Honours</option>
                <option value="stats">Stats</option>
                <option value="random">Randomize Grades</option>
                <option value="exit">Exit</option>
            </select>
            <input type="submit" value="submit" name="submit">
    </section>
    <?php
    $grades = randomGradeArray();
    if (isset($_POST['submit'])){
        $s = $_POST['s'];
        if ($s == 'all-grades') {
            echo allGrades($grades);
        } elseif ($s == 'honours'){
            echo honours($grades);
        } elseif ($s == 'stats'){
            echo stats($grades);
        } elseif ($s == 'random'){
            echo randomGradeArray();
            echo "GRADES HAVE BEEN RANDOMIZED";
        } elseif ($s == 'exit'){
            echo "Bye-bye";
        }
    }
    function allGrades($grades){
        echo 'ALL GRADES <br />';
        for ($n = 0; $n < count($grades); $n++){
            echo $grades[$n] . '<br />';
        }
    }
    function honours($grades){
        for ($n = 0; $n< count($grades); $n++){
            if ($grades[$n] > 80){
                echo $grades[$n], '<br />';
            }
        }
    }
    function stats($grades){
        $highest = 1;
        $lowest = 100;
        for ($n = 0; $n < count($grades); $n++){
            if ($grades[$n] > $highest){
                $highest = $grades[$n];
            } elseif ($grades[$n] < $lowest)
        }
        echo $highest;
    }
    function randomGradeArray(){
        $temp = [];
        for ($n = 0; $n < 35; $n++){
            $randNum = rand(0, 100);
            array_push($temp, $randNum);
        }
        return $temp;
    }
    ?>
</body>