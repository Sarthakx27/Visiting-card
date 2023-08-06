<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/myindex.css?v=<?=$version?>">
</head>

<body>
    <?php    
        session_start();              
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true ){     
     
        }
         else{
            header("location:http://localhost/PHP/DigitalVisitingCard/myindex.php");
        }     
        include("database.php");
        $id = $_SESSION['user_id'];         
            
        $sql = "SELECT * from cards where FKId = $id";  
        $result = $conn -> query($sql);       
    
        if($result -> num_rows > 0){
            
            while($row = mysqli_fetch_assoc($result)){  
                $data[] = $row;
            }
        }        
    ?>
    <?php
    
       $sqlQuery = "select * from users where id = '$id'";
      
       $resultQuery = $conn -> query($sqlQuery);       

       if($resultQuery -> num_rows > 0){
            while($rowQuery = $resultQuery -> fetch_assoc() ){
                $dataQuery[] = $rowQuery;
            }
       }
    ?>

    <!--Header Section Start-->
    <div class="hero-section">
        <div class="container">
            <header>
                <nav class="flex">
                    <div class="nav-logo">
                        <span>Dashboard</span>
                    </div>
                    <div class="nav-links">
                        <ul class="flex">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Service</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                    <div class="nav-button flex">
                        <a href="#" class="primary-button createcard">Create Card</a>
                        <a href="logout.php" class="secondary-button">Logout
                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                stroke-linecap="round" stroke-linejoin="round" class="ml-2 text-xl" height="1em"
                                width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                <polyline points="10 17 15 12 10 7" />
                                <line x1="15" y1="12" x2="3" y2="12" />
                            </svg>
                        </a>
                    </div>
                </nav>
            </header>
            <div class="main-section flex">
                <div class="left-section">
                    <span class="title">Inspire Your Client Digitally</span>
                    <p>We Convert Your Normal Visiting Card into Digital Business Card. Our platform allows
                        professionals to easily share their Business information without the need for paper business
                        cards.
                    </p>
                    <span id="user-name"><?php echo "Welcome ".$dataQuery[0]['FullName']?></span>
                </div>
                <div class="right-section">
                    <img src="assets/asset 1.webp" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--Header Section End-->

    <!-- Card form Start -->
    <div class="card-form">
        <span>Card Details</span>
        <i class="uil uil-times cardclosebutton"></i>
        <form action="cardprocess.php" method="post" enctype="multipart/form-data">
            <div class="fields flex">
                <div class="input-fields">
                    <label for="#">Business Name</label>
                    <input type="text" placeholder="Enter Business Name" name="businessname"
                        value="Full Stack Development">
                </div>

                <div class="input-fields">
                    <label for="#">Enter Name</label>
                    <input type="text" placeholder="Enter Your Name" name="name" value="Naveen Riyal">
                </div>

                <div class="input-fields">
                    <label for="#">Country</label>
                    <input type="text" placeholder="Enter Country Name" name="country" value="India">
                </div>

                <div class="input-fields">
                    <label for="#">Mobile Number</label>
                    <input type="text" placeholder="Enter Mobile Number" name="mobilenumber" value="9149294941">
                </div>

                <div class="input-fields">
                    <label for="#">Whatsapp Number</label>
                    <input type="text" placeholder="Enter Whatsapp Number" name="whatsappnumber" value="9149294941">
                </div>

                <div class="input-fields">
                    <label for="#">Address</label>
                    <input type="text" placeholder="Enter Address" name="address" value="Uttarakhan Rishikesh">
                </div>

                <div class="input-fields">
                    <label for="#">Email</label>
                    <input type="text" placeholder="Enter Your Email" name="email" value="example@gmail.com">
                </div>

                <div class="input-fields">
                    <label for="#">Website Url</label>
                    <input type="text" placeholder="https://www.domain.com" name="websiteurl"
                        value="https://www.dezloper.com/">
                </div>

                <div class="input-fields">
                    <label for="#">Google Map</label>
                    <input type="text" placeholder="Google Map Link" name="googlemap"
                        value="https://goo.gl/maps/Eq8ydez83dr2K5f2A">
                </div>

                <div class="input-fields">
                    <label for="#">Facebook</label>
                    <input type="text" placeholder="Enter Business Name" name="facebook"
                        value="https://www.facebook.com/">
                </div>

                <div class="input-fields">
                    <label for="#">Instagram</label>
                    <input type="text" placeholder="Instagram Account Link" name="instagram"
                        value="https://www.instagram.com/">
                </div>

                <div class="input-fields">
                    <label for="#">Twitter</label>
                    <input type="text" placeholder="Twitter Account Link" name="twitter" value="https://twitter.com/">
                </div>

                <div class="input-fields">
                    <label for="#">You Tube</label>
                    <input type="text" placeholder="Youtube Account Link" name="youtube"
                        value="https://www.youtube.com/">
                </div>

                <div class="input-fields">
                    <label for="name">Upload Logo/Profile</label>
                    <input class="logo" type="file" name="myfile" required>
                </div>

                <div class="input-fields">
                    <label>Select Your Card</label>
                    <select name="carddesign">
                        <option disabled selected>None</option>
                        <option value="Design1">Design1</option>
                        <option value="Design2">Design2</option>
                    </select>
                </div>
            </div>
            <div class="submit-fields">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
    <!-- Card form End -->

    <!-- Card Section Start-->


    <?php

    echo '<div class="container-card-design flex">';        

        if (isset($data)) {
            for ($i = 0; $i < sizeof($data); $i++) {
                if ($data[$i]['CardDesign'] == "Design1") {
                    echo '
                        <div class="card-section">
                            <div class="card">
                                <div class="card-box profile-image">
                                    <img src="' . $data[$i]['ProfileImages'] . '"/>
                                </div>
                            <div class="card-box business-name">' . $data[$i]['BusinessName'] . '</div>
                            <hr class="card-box hr-line">
                            <div class="card-box name">' . $data[$i]['Name'] . '</div>
                            <div class="card-box icon">
                                <a href="#"><i class="fa-solid fa-phone"></i></a>
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                            </div>
                            <div class="card-box location card-icon">
                                <a href="' . $data[$i]['GoogleMap'] . '">
                                    <i class="fa-solid fa-location-dot"></i>
                                    https://www.google.com/maps
                                </a>
                            </div>
                            <div class="card-box country card-icon">
                                <i class="fa-solid fa-earth-asia"></i>
                                ' . $data[$i]['Country'] . '
                            </div>
                            <div class="card-box mail card-icon">
                                <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                ' . $data[$i]['Email'] . '
                            </div>
                            <div class="card-box whatsapp-no card-icon">
                                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                ' . $data[$i]['WhatsappNumber'] . '
                            </div>
                            <div class="card-box contact-no card-icon">
                                <a href="#"><i class="fa-solid fa-phone"></i></a>
                                ' . $data[$i]['MobileNumber'] . '
                            </div>
                            <div class="card-box website-url card-icon">
                                <i class="fa-solid fa-globe"></i>
                                <a href="' . $data[$i]['WebsiteUrl'] . '">' . $data[$i]['WebsiteUrl'] . '</a>
                            </div>
                            <div class="card-box social-media-icon">
                                <a href="' . $data[$i]['Facebook'] . '"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="' . $data[$i]['Instagram'] . '"><i class="fa-brands fa-instagram"></i></a>
                                <a href="' . $data[$i]['Twitter'] . '"><i class="fa-brands fa-twitter"></i></a>
                                <a href="' . $data[$i]['Youtube'] . '"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>';
                }   
                elseif ($data[$i]['CardDesign'] == 'Design2') {
                    echo '
                        <div class="card-section-2">
                            <div class="card">
                                <div class="top-section">
                                    <div class="card-box profile-image">
                                        <img src="' . $data[$i]['ProfileImages'] . '" alt="">
                                    </div>
                                <div class="card-box business-name">' . $data[$i]['BusinessName'] . '</div>
                                <div class="card-box name">' . $data[$i]['Name'] . '</div>
                            </div>
                            <div class="bottom-section">
                                <div class="icon">
                                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="#"><i class="fa-solid fa-location-dot"></i></a>
                                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                </div>
                                <div class="card-box location card-icon">
                                    <a href="' . $data[$i]['GoogleMap'] . '">
                                        <i class="fa-solid fa-location-dot"></i>
                                        https://www.google.com/maps
                                    </a>
                                </div>
                                <div class="card-box country card-icon">
                                    <i class="fa-solid fa-earth-asia"></i>
                                    ' . $data[$i]['Country'] . '
                                </div>
                                <div class="card-box mail card-icon">
                                    <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                    ' . $data[$i]['Email'] . '
                                </div>
                                <div class="card-box whatsapp-no card-icon">
                                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                                    ' . $data[$i]['WhatsappNumber'] . '
                                </div>
                                <div class="card-box contact-no card-icon">
                                    <a href="#"><i class="fa-solid fa-phone"></i></a>
                                    ' . $data[$i]['MobileNumber'] . '
                                </div>
                                <div class="card-box website-url card-icon">
                                    <i class="fa-solid fa-globe"></i>
                                    <a href="' . $data[$i]['WebsiteUrl'] . '">' . $data[$i]['WebsiteUrl'] . '</a>
                                </div>
                                <div class="card-box social-media-icon">
                                    <a href="' . $data[$i]['Facebook'] . '"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="' . $data[$i]['Instagram'] . '"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="' . $data[$i]['Twitter'] . '"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="' . $data[$i]['Youtube'] . '"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>';
            } else {
                echo "Enter the right number.";
            }
        }
    }
?>



    <!-- Card-Section End-->
    <script>
    const createCard = document.querySelector('.createcard');
    const cardForm = document.querySelector('.card-form');
    const cardCloseButton = document.querySelector('.cardclosebutton');

    createCard.addEventListener('click', function() {
        cardForm.classList.add('active-card');
    });

    cardCloseButton.addEventListener('click', function() {
        cardForm.classList.remove('active-card');
    });
    </script>
   <script src="https://kit.fontawesome.com/383c0fae97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!-- <div style=" height:100vh"></div> -->
</body>

</html>