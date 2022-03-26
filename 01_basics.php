<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Practice</title>
</head>
<body>
    <div class="container">
        This is my first website.
        <?php

        // echo "<br>"
            echo "Hello Everyone";
            
        
            // variables in php 

            $variable1 = 9;
            $variable2 = 3;
            echo $variable1;
            echo $variable2;

            echo $variable1 + $variable2;

            // operators in php
            // 5types of operators are there.
            // 1.Arithmatic Operator 
                echo "<br>";
                echo"The value of variable1 + variable2 is ";
                echo $variable1 + $variable2;
                echo "<br>";
                echo"The value of variable1 - variable2 is ";
                echo $variable1 - $variable2;
                echo "<br>";
                echo"The value of variable1 * variable2 is ";
                echo $variable1 * $variable2;
                echo "<br>";
                echo"The value of variable1 / variable2 is ";
                echo $variable1 / $variable2;
                echo "<br>";
            // 2.Assignment operator
            $newVar = $variable1;
            // $newVar +=1;
            // $newVar -=1;
            $newVar *=5;
            // $newVar /=3;
            echo "The value of new variable is ";
            echo $newVar;
            echo "<br>";
            // 3.Comparision operator 
            echo "The value of 1==4 is ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is ";
            echo var_dump(1<=4);
            echo "<br>";

            // 4.Increment/decrement operator
            echo $variable1++;
            echo "<br>";
            echo $variable1;
            // echo $variable1--;
            // echo "<br>";
            // echo ++$variable1;
            // echo "<br>";
            // echo --$variable1;
            // echo "<br>";

            // 5.Logical operator 
            // 4types of logical operator
            // and (&&)
            // or(||)
            // xor
            // not (!)

            $myVar = (true and true);
            echo "<br>";
            echo var_dump ($myVar);


        ?>

        <!-- Single line comment -->
        
        <!-- This
        is
        a 
        multiline 
        comment -->
        <?php
        define('pi',3.14);
        echo"<br>";
            echo "Hello world";

            // Data types in php
            // 1. String
            // 2. Integer
            // 3. Float
            // 4. Boolean
            // 5. Array
            // 6. Object
            echo"<br> Data types <br>";
            $var = "This is a string";
            echo var_dump($var);
            echo"<br>";

            $var = 68;
            echo var_dump($var);
            echo"<br>";

            $var = 67.6;
            echo var_dump($var);
            echo"<br>";

            $var = true;
            echo var_dump($var);
            echo "<br>";
            
            echo pi;

        ?>

    </div>
</body>
</html>