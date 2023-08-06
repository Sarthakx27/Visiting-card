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
        <span class="">Enter New Password</span>
        <i class="uil uil-times loginclosebutton"></i>
        <form action="#" method="post">
            <div class="fields flex">

                <div class="input-field">
                    <label for="email">Password</label>
                    <input type="text" name="pwd" placeholder="Enter New Pawword">
                </div>  

                <div class="input-field">
                    <label for="email">Confirm Password</label>
                    <input type="text" name="confirmpwd" placeholder="Enter Confirm Password">
                </div>                            

                <div class="input-field">
                    <input type="Submit" value="Change Password" name="submit">
                </div>
            </div>
        </form>
    </div>

    <?php
        session_start();
        $id = $_SESSION['user_id'];

        include("database.php");
        if(isset($_POST['submit'])){

            $pwd = $_POST['pwd'];
            $confirmPwd = $_POST['confirmpwd'];

            $sql = "UPDATE `users` SET `Pwd` = '$pwd',`ConfirmPwd` = '$confirmPwd' WHERE  `id` = '$id'";
            $result = $conn -> query($sql);

            if($result){

                echo "password Change sucessfully";
                header("location:http://localhost/DigitalVisitingCard/myindex.php");

            }else{
                echo "faild to change password" .mysqli_error($conn);

            }

        }

    
    
    ?>
</body>

</html>