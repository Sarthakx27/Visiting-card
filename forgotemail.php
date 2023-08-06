<?php include ('config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/myindex.css?v=<?=$version?>">

</head>

<body>
    <div class="login-form-section-forgot">
        <span class="">Forgot Password?</span>
        <i class="uil uil-times loginclosebutton"></i>
        <form action="#" method="post">
            <div class="fields flex">
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Your Email">
                </div>                            

                <div class="input-field">
                    <input type="Submit" value="Reset Password" name="submit">
                </div>
            </div>
        </form>
    </div>

    <?php
    session_start();
    include("database.php");
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
    // echo $email;

    $sql = "SELECT * FROM `users` WHERE Email = '$email'";

    $result = $conn -> query($sql);

    if($result -> num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        // echo $row[];
        // return;
        $id= $row['id'];
        $_SESSION['user_id'] = $id;

       header("location:http://localhost/DigitalVisitingCard/forgotpassword.php");
    }else{
        echo "false";
    }
    }


    
    
    ?>
</body>

</html>