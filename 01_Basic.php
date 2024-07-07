<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container" style="background-color: yellow">
        this is my first php
        <?php echo "Hello"; 
        //single line comment
        /* this is
        multiline comment */

        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable1+$variable2;
        echo "<br>";

        //operators in PHP
        //Arithmetic Operator
        echo "the value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";

        //Assignment Operator
        $newVar = $variable1;
        $newVar +=1;
        echo " the value of new variable is ";
        echo $newVar;
        echo "<br>";

        //comparision Operator
        echo "the value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";

        echo "the value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "the value of 1>=4 is ";
        echo var_dump(1==4);
        echo "<br>";

        //Incremental/Decrement operators
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo "<br>";

        echo $variable1--;
        echo "<br>";

        echo ++$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo "<br>";

        echo --$variable1;
        echo "<br>";

        //logical operator
        // and (&&)
        // or (||)
        // xor 
        // !
        $myVar = (true) && (true);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true && false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false && false);
        echo var_dump($myVar);
        echo "<br>";
        echo "<br>";

         // or (||)
         $myVar = (false || false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true or false);
        echo var_dump($myVar);
        echo "<br>";
        
        $myVar = (true or true);
        echo var_dump($myVar);
        echo "<br>";
        echo "<br>";

        // xor 
        $myVar = (true xor false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false xor false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true xor true);
        echo var_dump($myVar);
        echo "<br>";
        echo "<br>";
        ?>

        <?php 
        define('PI', 3.14);
        // Data types in php
        // 1. String
        // 2. Integer
        // 3. float
        // 4. boolean
        // 5. Array
        // 6. Object
       
        echo "<br>Data Types<br>";
        // 1. String
        $var="this is me";
        echo var_dump($var);
        echo "<br>";

        $var=67;
        echo var_dump($var);
        echo "<br>";

        $var=true;
        echo var_dump($var);
        echo "<br>";

        $var=67.1;
        echo var_dump($var);
        echo "<br>";

        echo PI;

        
        ?>

    </div>
</body>
</html>