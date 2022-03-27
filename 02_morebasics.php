<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- using Externals CSS -->
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container {
        width: 70%;
        background-color: orange;
        margin: auto;
        padding: 22px;
    }
</style>
<body>
    <div class="container">
        <h2>Lets start php tutorial</h2>
        <p>This is a container.</p>
        <?php
            // Conditional statements(if...else..statements) using in php

            $age = 28;
            if($age>18){
                echo"You can watch";
            }
            elseif($age==8){
                echo"You are in 8 years old";
            }
            else{
                echo"You can't watch";
            }
            echo "<br>";

            // Arrays in php
            $languages = array("python","php","c++","NodeJs");
            // echo count($languages); 
            // echo "<br>";
            // echo $languages[1];

            // Loops in php

            // loops are 4 types.
            // 1)While
            // 2)DoWhile
            // 3)For
            // 4)Foreach
            
            $a = 5;
            while ($a <= 20) {
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            }
            // Interacting Array in PHP using while loop
            $a = 0;
            while ($a < count($languages)) {
                echo "<br>The value of languages is: ";
                echo $languages[$a];
                $a++;
            }

            // Do while loop
            $b = 30;
            do {
                echo "<br>The value of b is: ";
                echo $b;
                $b++;  
            } while ($b < 10);


            // for loop
            for ($i=10; $i < 20; $i++) { 
                echo "<br>The value of i from the for loop is: ";
                echo $i;
            }

            // for each loop
            foreach ($languages as $value) {
                echo "<br>The vaue is: ";
                echo $value;
            }

            // Function in php-->
            
            // print a name
            function printname(){
                echo"<br>Santos";
            }
            printname();
            
            // print a number
            function print10(){
                echo"<br>TEN";
            }
            print10();

            function print_number($number){
                echo"<br>Your number is ";
                echo "$number";
            }
            print_number(54);
            print_number(588);
            print_number(5);

        ?>
    </div>
</body>
</html>