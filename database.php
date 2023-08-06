<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
    /* * {
        font-family: sans-serif;
        color: green;
        font-size: 1rem;
        text-align: center;
    } */
    </style>
</head>

<body>
    <?php
        $server = "localhost";
        $userName = "root";
        $password = "";
        $database = "digitalvisitingcard";

        $conn = mysqli_connect($server,$userName,$password,$database);


        // $sql ="CREATE table users
        // (
        //    id int not null auto_increment,
        //    FullName varchar(50) not null,         
        //    MobileNumber varchar(20) not null unique,           
        //    Email varchar(50) not null unique,
        //    Gender varchar(10) not null,
        //    Pwd varchar(16) not null,
        //    ConfirmPwd varchar(16) not null,
        //    primary key(id)
        // )";

        // $sql ="CREATE table cards
        // (
        //    id int not null auto_increment,
        //    BusinessName varchar(50) not null,
        //    Name varchar(20) not null,
        //    Country varchar(20) not null,
        //    MobileNumber varchar(20) not null,
        //    WhatsappNumber varchar(20) not null,
        //    Address varchar(50) not null,
        //    Email varchar(50) not null,
        //    WebsiteUrl varchar(300) not null,
        //    GoogleMap varchar(300) not null,
        //    Facebook varchar(300) not null,
        //    Instagram varchar(300) not null,
        //    Twitter varchar(300) not null,
        //    Youtube varchar(300) not null,
        //    ProfileImages varchar(300) not null,
        //    FKID varchar(50) not null,
        //    primary key(id)
        // )";
        // $result = $conn -> query($sql);

        // if($result){

        //     echo "Query Executed Successfully";

        // }else{

        //     echo "Query Failed to Executed".mysqli_error($conn);

        // } 
    ?>
</body>

</html>