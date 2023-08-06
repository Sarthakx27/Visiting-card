<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Process</title>
</head>

<body>
    <?php
    
        include("database.php");

        if(isset($_POST['submit'])){

            $fullName = $_POST['fullname'];
            $mobileNumber = $_POST['mobilenumber'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmpassword'];

            if($password != $confirmPassword){
                die("Those passwords didn’t match. Try again.🔃");
            }

            $sql = "INSERT into users(id,FullName,MobileNumber,Email,Gender,Pwd,ConfirmPwd)
            values('','$fullName','$mobileNumber','$email','$gender','$password','$confirmPassword')";

            $result = $conn -> query($sql);

            if($result){

                echo "Signup Successfully";
                header("location:http://localhost/DigitalVisitingCard/myindex.php");

            }else{
                echo "Failed to Signup".mysqli_error($conn);
            }
        }


    ?>
</body>

</html>