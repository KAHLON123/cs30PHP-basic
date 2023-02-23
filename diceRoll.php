<!DOCTYPE html>
<head>
    <title>Roll Some Die</title>
</head>
<body>
<section>
        <h1>Dice Roll Simulator</h1>
        <form action="diceRoll.php" method="GET">
            <label>Options:</label><br>
            <select name="s">
                <option value="once">1. Roll Dice Once</option>
                <option value="5-times">2. Roll Dice 5 Times</option>
                <option value="n-times">3. Roll Dice 'n' Times</option>
                <option value="snake-eyes">4. Roll Dice Until Snake Eyes</option>
                <option value="exit">5. Exit</option>
            </select>
            <input type="number" name="roll-num">
            <input type="submit" value="submit" name="submit">
    </section>
    <?php
    if(isset($_GET['submit'])){
        $selection = $_GET['s'];
        if($selection == "once"){
            roll2Dice();
        } elseif ($selection == "5-times"){
            Roll(5);
        } elseif ($selection == "n-times"){
            Roll($_GET["roll-num"]);
        } elseif ($selection == "snake-eyes"){
            snakeEyes();
        } elseif ($selection == "exit"){
            echo "Bye-bye!";
        }
    }
    function Roll($rollNum){
        for ($n = 0; $n < $rollNum; $n++){
        $dice1 = rand(0, 6);
        $dice2 = rand(0, 6);
        echo $dice1, ", ", $dice2;
        echo " Sum: ", $dice1+$dice2, '<br />';
        }
    }
    function roll2Dice(){
        $dice1 = rand(0, 6);
        $dice2 = rand(0, 6);
        echo $dice1, ", ", $dice2;
        echo " Sum: ", $dice1+$dice2;
    }
    function snakeEyes(){
        $count = 0;
        $bool = True;
        while ($bool){
            $dice1 = rand(0, 6);
            $dice2 = rand(0, 6);
            $count++;
            echo $dice1, ", ", $dice2, " Sum: ", $dice1+$dice2, '<br />';
            if ($dice1 == 1 && $dice2 == 1) {
                echo "SNAKE EYES! It took ", $count, " roll(s) to get snake eyes";
                break;
            }
        }
    }
    ?>
</body>