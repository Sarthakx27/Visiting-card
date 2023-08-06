<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>

<body>
    <?php
    session_start();
    include("database.php");

    if(isset($_POST['submit'])){

        $userEmail = $_POST['email'];
        $password = $_POST['password'];

        $sql = "select * from users where Email = '$userEmail' and Pwd = '$password'";

        $result = $conn -> query($sql);        

        if($result -> num_rows > 0){

            $row = $result -> fetch_assoc();
            $user_id =  $row['id'];
            $_SESSION['user_id'] = $user_id;
            $_SESSION['logged_in'] = true;

            echo "Login Successfully";
            header("location:http://localhost/DigitalVisitingCard/dashboard.php");

        }else{
            echo "<p>Create account First to unlock exclusive benefits and features.".mysqli_error($conn)."</p>";
        }
    }
    
    
    ?>
</body>

</html>