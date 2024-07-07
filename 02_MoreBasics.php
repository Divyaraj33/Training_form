<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            background-color: pink;
            max-width: 80%;
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn about php</h1>
        This is a container
        <?php 
        $age = 4;
        if($age>18){
            echo "You can vote";
        }
        else if($age == 4){
            echo "you can go to party";
        }
        else{
            echo "You cannot vote";
            echo "<br>";
        }
        
        echo "Array";
        echo "<br>";

        //Array
        $language = array("php","react","nodejs");
        echo $language[0];
        echo "<br>";
        echo count($language);
        echo "<br>";
        echo "<br>";

        //while Loops in php
        $a=0;
        while($a <= 10){
            echo "the value of a is";
            echo $a;
            echo "<br>";
            $a++;
        }
        echo "<br>";echo "<br>";

        //do while loop
        $a=20;
        do{
            echo "the value of a is";
            echo $a;
            echo "<br>";
            $a++;
        }while($a < 10);

        //Iterating array IN PHP USING while loop
        $a=0;
            do{
            echo "<br>the value of language is ";
            echo $language[$a];
            $a++;
        } while($a < count($language));
        echo "<br>";

        //for loop
        $a = 200;
        for ($a=0; $a < 10; $a++) { 
            echo "<br> the value of a from the for loop ";
            echo $a;
        }
        echo "<br>";
        
        //foreach
        foreach ($language as $key => $value) {
            echo "<br>the value foreach loop is";
            echo $value;
        }
        echo "<br>";
        echo "<br>";
        
        function print5(){
            echo "FIVE";
        }
        print5();
        echo "<br>";

        function print_number($number){
            echo "<br>Your number is ";
            echo $number;
        }
        print_number(45);
        ?>

    </div>
</body>
</html>