<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zabeel</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="public/images/fav.png" type="image/png" />
    <link rel="apple-touch-icon" sizes="128x128" href="public/images/niceicon.png" />

    <!-- Libraries -->
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="public/css/lib/slick-full.css" />
    <link rel="stylesheet" href="public/css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/lib/jquery.fancybox.min.css" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Main Style -->
    <link rel="stylesheet" href="public/scss/style.css" />
</head>

<body>

    <header id="header" role="banner">
        <div class="container-header">
            <div class="d-flex justify-content-between align-items-center flex-wrap header-row">
                <!-- Logo with alt text for screen readers -->
                <a href="index.php" class="brand" alt="Zabeel logo" aria-label="Go to homepage">
                    <picture><img src="public/images/logo.png" alt="Zabeel logo" width="95" height="103" /></picture>
                </a>

                <!-- Navigation bar for desktop users -->
                <nav class="d-none d-xl-block" role="navigation" aria-label="Primary navigation">
                    <ul class="d-flex flex-wrap">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="blogs.php">Blogs</a></li>
                        <li><a href="media.php">Media</a></li>
                        <li><a href="careers.php">Careers</a></li>
                        <li><a href="contact-us.php">Contact Us</a></li>
                    </ul>
                </nav>

                <!-- Button and mobile hamburger menu -->
                <div class="button-wrapper d-flex align-items-center">

                    <a href="" target="_blank" class="btn btn-connect-mbs">Connect With <img
                            src="public/images/mbs.png" width="50" height="48" alt=""></a>
                    <a href="" target="_blank" class="btn btn-pay-online">Pay Online </a>
                    <a href="mailto:info@zppdubai.com" target="_blank" class="btn btn-mail">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
                            <path
                                d="M1.00012 3C1.00012 2.46957 1.21084 1.96086 1.58591 1.58579C1.96098 1.21071 2.46969 1 3.00012 1H17.0001C17.5306 1 18.0393 1.21071 18.4143 1.58579C18.7894 1.96086 19.0001 2.46957 19.0001 3V13C19.0001 13.5304 18.7894 14.0391 18.4143 14.4142C18.0393 14.7893 17.5306 15 17.0001 15H3.00012C2.46969 15 1.96098 14.7893 1.58591 14.4142C1.21084 14.0391 1.00012 13.5304 1.00012 13V3Z"
                                stroke="#DE4D50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M1.00012 2.99999L10.0001 8.99999L19.0001 2.99999" stroke="#DE4D50" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" /> </svg>
                        <span>Email : </span> info@zppdubai.com
                    </a>
                    <!-- Book Now button -->
                    <!-- <button data-bs-toggle="modal" data-bs-target="#siteEnquiryForm" class="btn theme-btn round" aria-label="Click to book now">Book Now</button> -->

                    <!-- Hamburger menu for mobile (trigger for offcanvas menu) -->
                    <button class="navbar-toggler d-none d-xl-block"   type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#burgerMenu"
                        aria-controls="burgerMenu"
                        aria-expanded="false"
                        aria-label="Open navigation menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M2 18C2 16.46 2 15.69 2.347 15.124C2.541 14.807 2.807 14.541 3.124 14.347C3.689 14 4.46 14 6 14C7.54 14 8.31 14 8.876 14.347C9.193 14.541 9.459 14.807 9.653 15.124C10 15.689 10 16.46 10 18C10 19.54 10 20.31 9.653 20.877C9.459 21.193 9.193 21.459 8.876 21.653C8.311 22 7.54 22 6 22C4.46 22 3.69 22 3.124 21.653C2.80735 21.4593 2.54108 21.1934 2.347 20.877C2 20.31 2 19.54 2 18ZM14 18C14 16.46 14 15.69 14.347 15.124C14.541 14.807 14.807 14.541 15.124 14.347C15.689 14 16.46 14 18 14C19.54 14 20.31 14 20.877 14.347C21.193 14.541 21.459 14.807 21.653 15.124C22 15.689 22 16.46 22 18C22 19.54 22 20.31 21.653 20.877C21.4589 21.1931 21.1931 21.4589 20.877 21.653C20.31 22 19.54 22 18 22C16.46 22 15.69 22 15.124 21.653C14.8073 21.4593 14.5411 21.1934 14.347 20.877C14 20.31 14 19.54 14 18ZM2 6C2 4.46 2 3.69 2.347 3.124C2.541 2.807 2.807 2.541 3.124 2.347C3.689 2 4.46 2 6 2C7.54 2 8.31 2 8.876 2.347C9.193 2.541 9.459 2.807 9.653 3.124C10 3.689 10 4.46 10 6C10 7.54 10 8.31 9.653 8.876C9.459 9.193 9.193 9.459 8.876 9.653C8.311 10 7.54 10 6 10C4.46 10 3.69 10 3.124 9.653C2.80724 9.45904 2.54096 9.19277 2.347 8.876C2 8.311 2 7.54 2 6ZM14 6C14 4.46 14 3.69 14.347 3.124C14.541 2.807 14.807 2.541 15.124 2.347C15.689 2 16.46 2 18 2C19.54 2 20.31 2 20.877 2.347C21.193 2.541 21.459 2.807 21.653 3.124C22 3.689 22 4.46 22 6C22 7.54 22 8.31 21.653 8.876C21.459 9.193 21.193 9.459 20.877 9.653C20.31 10 19.54 10 18 10C16.46 10 15.69 10 15.124 9.653C14.8072 9.45904 14.541 9.19277 14.347 8.876C14 8.311 14 7.54 14 6Z"
                                stroke="#D91F24" stroke-width="1.5" /> </svg>
                    </button>
                    <button class="navbar-toggler d-xl-none" type="button" data-bs-toggle="offcanvas"
                        aria-label="Click to open menu" aria-controls="mobileMenu" data-bs-target="#mobileMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M20.25 7.00101H3.75C3.33579 7.00101 3 7.33679 3 7.75101C3 8.16522 3.33579 8.50101 3.75 8.50101H20.25C20.6642 8.50101 21 8.16522 21 7.75101C21 7.33679 20.6642 7.00101 20.25 7.00101Z"
                                fill="#D91F24" />
                            <path
                                d="M17.25 11.251H3.75C3.33579 11.251 3 11.5868 3 12.001C3 12.4152 3.33579 12.751 3.75 12.751H17.25C17.6642 12.751 18 12.4152 18 12.001C18 11.5868 17.6642 11.251 17.25 11.251Z"
                                fill="#D91F24" />
                            <path
                                d="M20.25 15.499H3.75C3.33579 15.499 3 15.8348 3 16.249C3 16.6632 3.33579 16.999 3.75 16.999H20.25C20.6642 16.999 21 16.6632 21 16.249C21 15.8348 20.6642 15.499 20.25 15.499Z"
                                fill="#D91F24" /> </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>