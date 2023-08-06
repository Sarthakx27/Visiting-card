<?php include ('config.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Visiting Card</title>
    <link rel="stylesheet" href="css/myindex.css?v=<?=$version?>">
</head>

<body>
    <!--Header Section Start-->
    <div class="hero-section">
        <div class="container">

            <header>
                <nav class="flex">
                    <div class="nav-logo">
                        <span>Digital Visiting Card</span>
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
                        <a href="#" class="primary-button">Signup</a>
                        <a href="#" class="secondary-button">Login
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
                        cards.</p>
                </div>
                <div class="right-section">
                    <img src="assets/asset 1.webp" alt="">
                </div>
            </div>

        </div>
    </div>
    <!--Header Section End-->

    <!-- Signup Form Start -->
    <div class="signup-form-section">
        <span class="">Signup Details</span>
        <i class="uil uil-times close"></i>
        <form action="signupprocess.php" method="post">
            <div class="fields flex">
                <div class="input-field">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" placeholder="Enter Full Name " requird>
                </div>
                <div class="input-field">
                    <label for="mobilenumber">Mobile Number</label>
                    <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Enter Mobile Number " requird>
                </div>
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email " requird>
                </div>

                <div class="input-field">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" name="gender" placeholder="Enter Gender " requird>
                </div>
                <div class="input-field">
                    <label for="password"> Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password " requird>
                </div>
                <div class="input-field">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter Confirm Password "
                        requird>
                </div>
                <div class="input-field">
                    <input type="Submit" value="Submit" name="submit">
                </div>
            </div>
        </form>
    </div>
    <!-- Signup Form End -->

    <!--Login Form Start-->
    <div class="login-form-section">
        <span class="">Login Details</span>
        <i class="uil uil-times loginclosebutton"></i>
        <form action="loginprocess.php" method="post">
            <div class="fields flex">
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Your Email">
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" id="email" name="password" placeholder="Enter Your Password">
                </div>

                <div class="input-field forgot-password">
                    <a href="forgotemail.php">Forgot Password?</a>
                </div>

                <div class="input-field">
                    <input type="Submit" value="Submit" name="submit">
                </div>
            </div>
        </form>
    </div>
    <!--Login Form End-->

    <!-- <script src="js/script.js"></script> -->
    <script>
    // Signup Form Section
    const primaryButton = document.querySelector('.primary-button');
    const signupForm = document.querySelector('.signup-form-section');
    const closeBtn = document.querySelector('.close');

    primaryButton.addEventListener('click', function() {
        signupForm.classList.add('active');
    });

    closeBtn.addEventListener('click', function() {
        signupForm.classList.remove('active');
    });

    // login Form Section

    const secondaryButton = document.querySelector('.secondary-button');
    const loginForm = document.querySelector('.login-form-section');
    const loginCloseButton = document.querySelector('.loginclosebutton');

    secondaryButton.addEventListener('click', function() {
        loginForm.classList.add('active-login');
    });

    loginCloseButton.addEventListener('click', function() {
        loginForm.classList.remove('active-login');
    });
    </script>
    <script src="https://kit.fontawesome.com/58e682b38d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

</body>

</html>