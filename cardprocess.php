<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Process</title>
</head>

<body>
    <?php
        session_start();
        $fkid = $_SESSION['user_id'];     
      
        include("database.php");
           
        if(isset($_POST['submit'])){  
            
            $fileName = $_FILES['myfile']['name'];
            $tempName = $_FILES['myfile']['tmp_name'];
            $folder = "Images/". $fileName;
            move_uploaded_file($tempName,$folder); 
          
            $businessName = $_POST['businessname'];
            $name = $_POST['name'];
            $country = $_POST['country'];
            $mobileNumber = $_POST['mobilenumber'];
            $whatsappNumber = $_POST['whatsappnumber'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $websiteUrl = $_POST['websiteurl'];
            $googleMap = $_POST['googlemap'];
            $facebook = $_POST['facebook'];
            $instagram = $_POST['instagram'];
            $twitter = $_POST['twitter'];
            $youtube = $_POST['youtube'];
            $cardDesign = $_POST['carddesign'];            
            $sql = "INSERT into cards (id,BusinessName,Name,Country,MobileNumber,WhatsappNumber,Address,Email,
            WebsiteUrl,GoogleMap,Facebook,Instagram,Twitter,Youtube,ProfileImages,FKID,CardDesign)
            values
            ('','$businessName','$name','$country','$mobileNumber','$whatsappNumber','$address','$email',
            '$websiteUrl','$googleMap','$facebook','$instagram','$twitter','$youtube','$folder','$fkid','$cardDesign') ";

            $result = $conn -> query($sql);
            if($result){

                echo "Query Executed Successfully";
                header("location:http://localhost/DigitalVisitingCard/dashboard.php");

            }else{

                echo "Query Failed to Executed".mysqli_error($conn);

            } 
        }
    
    
    ?>
</body>

</html>