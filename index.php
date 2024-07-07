
<?php
$insert = false;
if(isset($_POST['name'])){

    //set connection variable
    $server = "localhost";
    $username = "root";
    $password = "";

    //create a database connection
    $con = mysqli_connect($server, $username, $password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";


    //collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    //echo $sql;

    //execute the query
    if($con->query($sql) == true){
        //  echo "Successfully Inserted";

        //flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    //close the database connection
    $con->close();
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel form</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <img class="bg" src="bc roy.jpg" alt="">
    <div class="container">
        <h1>Welcome to Dr. BC Roy College Training Tour</h1>
        <p>Enter your Details and submit this form to confirm your participation in this tour</p>
        <?php
        if($insert == true){
        echo "<p style='color: green'>Thanks for Submitting your form. we are happy to see you joining us for 
        the training</p>";
        }
        ?>
    <form action="index.php" method="post">
        <!-- id uniquely identify element and class is given to multiple element has same class -->
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <input type="text" name="age" id="age" placeholder="Enter Your age">
        <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
        <input type="email" name="email" id="email" placeholder="Enter Your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter Your phone no">
        <textarea name="desc" id="desc" cols="30" row="10" placeholder="Enter any other information"></textarea>
        <button class="btn">Submit</button>
    </form>
</div>

    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('1', 'Divya', '20', 'female', 'divya@gmail.com', '9999999999', 'this is a good girl.', current_timestamp()); -->
</body>
</html>
