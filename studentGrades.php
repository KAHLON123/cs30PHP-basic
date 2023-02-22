<!DOCTYPE html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <section>
        <h1>Student Grades</h1>
        <form action="studentGrades.php" method="GET">
            <label>Options:</label><br>
            <select name="s">
                <option value="all-grades">1. Display All Grades</option>
                <option value="honours">2. Display Honours</option>
                <option value="stats">3. Stats</option>
                <option value="random">4. Randomize Grades</option>
                <option value="exit">5. Exit</option>
            </select>
            <input type="submit" value="submit" name="submit">
    </section>
    <?php
    $grades = randomGradeArray();
    if (isset($_GET['submit'])){
        $s = $_GET['s'];
        if ($s == 'all-grades') {
            echo allGrades($grades);
        } elseif ($s == 'honours'){
            echo honours($grades);
        } elseif ($s == 'stats'){
            echo stats($grades);
        } elseif ($s == 'random'){
            $grades = randomGradeArray();
            echo "GRADES HAVE BEEN RANDOMIZED";
        } elseif ($s == 'exit'){
            echo "Bye-bye";
        }
    }
    function allGrades($grades){
        echo 'ALL GRADES <br />';
        for ($n = 1; $n < count($grades); $n++){
            echo $grades[$n] . '<br />';
        }
    }
    function honours($grades){
        $count = 0;
        for ($n = 1; $n< count($grades); $n++){
            if ($grades[$n] > 80){
                echo $grades[$n], '<br />';
            $count++;
            }
        }
        echo "There are ", $count, " honours students";
    }
    function stats($grades){
        $highest = $grades[0];
        $lowest = $grades[0];
        $temp = 0;
        for ($n = 0; $n < count($grades); $n++){
            if ($grades[$n] > $highest){
                $highest = $grades[$n];
            } elseif ($grades[$n] < $lowest) {
                $lowest = $grades[$n];
            }
            $temp += $grades[$n];
        }
        $ave = $temp / 35;
        echo "Highest Grade: ", $highest, '<br />';
        echo "Lowest Grade: ", $lowest, '<br />';
        echo "Average Grade: ", $ave;
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