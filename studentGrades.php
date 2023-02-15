<!DOCTYPE html>
<head>
    <title>Student Grades</title>
</head>
<body>
    <?php
    $grades = array();
    for ($n = 0; $n < 35; $n++){
        $randNum = rand(0, 100);
        array_push($grades, $randNum);
    }
    echo var_dump($grades);
    ?>
    <section>
        <h1>Student Grades</h1>
        <form action="studentGrades.php" method="POST">
            <label>Options:</label><br>
            <select>
                <option value="all-grades">Display All Grades</option>
                <option value="honours">Display Honours</option>
                <option value="stats">Stats</option>
                <option value="random">Randomize Grades</option>
                <option value="exit">Exit</option>
            </select>
            <input type="submit" value="submit" name="submit">
    </section>
    <?php
    if (isset($_POST['submit'])){
        if (s == $_POST['all-grades']) {
            echo allGrades();
        } elseif (s == $_POST['honours']){
            echo honours();
        } elseif (s == $_POST['stats']){
            echo stats();
        } elseif (s == $_POST['random']){
            echo random();
        } elseif (s == $_POST['exit']){
            echo "Bye-bye";
        }
    }
    function allGrades(){
        for ($n = 0; $n < count($grades); $n++){
            echo $grades[$n];
        }
    }
    function honours(){

    }
    function stats(){

    }
    function random(){

    }
    ?>
</body>