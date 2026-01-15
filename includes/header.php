
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wellbing</title>

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
        <div class="container-ctn">
            <div class="d-flex justify-content-between align-items-center flex-wrap header-row">
                <div class="header-left d-flex align-items-center">
                    <a href="index.php" class="brand" alt="Wellbing logo" aria-label="Go to homepage">
                    <picture><img src="public/images/logo.png" alt="Wellbing logo" width="180" height="41" /></picture>
                    </a>
                    <button class="navbar-toggler  d-md-flex align-items-center" type="button" data-bs-toggle="offcanvas" aria-label="Click to open menu" aria-controls="mobileMenu" data-bs-target="#mobileMenu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="18" viewBox="0 0 29 18" fill="none"> <line x1="1" y1="1" x2="28" y2="1" stroke="black" stroke-width="2" stroke-linecap="round"/> <line x1="1" y1="9" x2="28" y2="9" stroke="black" stroke-width="2" stroke-linecap="round"/> <line x1="1" y1="17" x2="28" y2="17" stroke="black" stroke-width="2" stroke-linecap="round"/> </svg>
                        Products
                    </button>
                </div>
                <div class="header-right d-flex align-items-center">
                    <a href="mailto:sales1@wellbingmachinery.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"> <path d="M14.25 3H3.75C3.15326 3 2.58097 3.23705 2.15901 3.65901C1.73705 4.08097 1.5 4.65326 1.5 5.25V12.75C1.5 13.3467 1.73705 13.919 2.15901 14.341C2.58097 14.7629 3.15326 15 3.75 15H14.25C14.8467 15 15.419 14.7629 15.841 14.341C16.2629 13.919 16.5 13.3467 16.5 12.75V5.25C16.5 4.65326 16.2629 4.08097 15.841 3.65901C15.419 3.23705 14.8467 3 14.25 3ZM13.7475 4.5L9 8.0625L4.2525 4.5H13.7475ZM14.25 13.5H3.75C3.55109 13.5 3.36032 13.421 3.21967 13.2803C3.07902 13.1397 3 12.9489 3 12.75V5.4375L8.55 9.6C8.67982 9.69737 8.83772 9.75 9 9.75C9.16228 9.75 9.32018 9.69737 9.45 9.6L15 5.4375V12.75C15 12.9489 14.921 13.1397 14.7803 13.2803C14.6397 13.421 14.4489 13.5 14.25 13.5Z" fill="#EF4136"/> </svg>
                        sales1@wellbingmachinery.com
                    </a>
                    <a href="tel:+971-65277252">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.29977 1.53247C5.21252 0.624972 6.71552 0.786223 7.47977 1.80772L8.42627 3.07072C9.04877 3.90172 8.99327 5.06272 8.25452 5.79697L8.07602 5.97547C8.05578 6.0504 8.05372 6.12909 8.07002 6.20497C8.11727 6.51097 8.37302 7.15897 9.44402 8.22397C10.515 9.28897 11.1675 9.54397 11.478 9.59197C11.5563 9.60771 11.6371 9.6054 11.7143 9.58522L12.0203 9.28072C12.6773 8.62822 13.6853 8.50597 14.4983 8.94772L15.9308 9.72772C17.1585 10.3937 17.4683 12.0617 16.4633 13.0615L15.3975 14.1205C15.0615 14.4542 14.61 14.7325 14.0595 14.7842C12.702 14.911 9.53927 14.749 6.21452 11.4437C3.11177 8.35822 2.51627 5.66722 2.44052 4.34122C2.40302 3.67072 2.71952 3.10372 3.12302 2.70322L4.29977 1.53247ZM6.57977 2.48197C6.19952 1.97422 5.49152 1.93372 5.09252 2.33047L3.91502 3.50047C3.66752 3.74647 3.54902 4.01797 3.56402 4.27747C3.62402 5.33122 4.10402 7.75897 7.00802 10.6465C10.0545 13.675 12.8678 13.7657 13.9553 13.6637C14.1773 13.6435 14.3978 13.528 14.604 13.3232L15.669 12.2635C16.1025 11.833 16.0073 11.0485 15.3938 10.7155L13.9613 9.93622C13.5653 9.72172 13.1018 9.79222 12.8138 10.0787L12.4725 10.4185L12.075 10.0195C12.4725 10.4185 12.4718 10.4192 12.471 10.4192L12.4703 10.4207L12.468 10.423L12.4628 10.4275L12.4515 10.438C12.4199 10.4674 12.3857 10.494 12.3495 10.5175C12.2895 10.5572 12.21 10.6015 12.1103 10.6382C11.9078 10.714 11.6393 10.7545 11.3078 10.7035C10.6575 10.6037 9.79577 10.1605 8.65052 9.02197C7.50602 7.88347 7.05902 7.02697 6.95852 6.37747C6.90677 6.04597 6.94802 5.77747 7.02452 5.57497C7.06662 5.46102 7.1269 5.35465 7.20302 5.25997L7.22702 5.23372L7.23752 5.22247L7.24202 5.21797L7.24427 5.21572L7.24577 5.21422L7.46177 4.99972C7.78277 4.67947 7.82777 4.14922 7.52552 3.74497L6.57977 2.48197Z" fill="#EF4136"/> </svg>
                        +971-65277252
                    </a>
                  <div class="language-switcher" id="langSwitcher">
                    <button class="lang-btn" type="button" aria-haspopup="listbox" aria-expanded="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"> <path d="M12 2.25C6.61547 2.25 2.25 6.61547 2.25 12C2.25 17.3845 6.61547 21.75 12 21.75C17.3845 21.75 21.75 17.3845 21.75 12C21.75 6.61547 17.3845 2.25 12 2.25Z" stroke="#272424" stroke-width="1.5" stroke-miterlimit="10"/> <path d="M12.0002 2.25C9.27812 2.25 6.71875 6.61547 6.71875 12C6.71875 17.3845 9.27812 21.75 12.0002 21.75C14.7222 21.75 17.2816 17.3845 17.2816 12C17.2816 6.61547 14.7222 2.25 12.0002 2.25Z" stroke="#272424" stroke-width="1.5" stroke-miterlimit="10"/> <path d="M5.5 5.5C7.2925 6.77266 9.54906 7.53156 12.0002 7.53156C14.4512 7.53156 16.7078 6.77266 18.5003 5.5M18.5003 18.5003C16.7078 17.2277 14.4512 16.4687 12.0002 16.4687C9.54906 16.4687 7.2925 17.2277 5.5 18.5003" stroke="#272424" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path d="M12 2.25V21.75M21.75 12H2.25" stroke="#272424" stroke-width="1.5" stroke-miterlimit="10"/> </svg>
                        <span class="current-lang">English</span>
                        <span class="chevron"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"> <path d="M16.1589 5.95402C15.9479 5.74312 15.6618 5.62464 15.3635 5.62464C15.0652 5.62464 14.7791 5.74312 14.5681 5.95402L8.9994 11.5228L3.43065 5.95402C3.21847 5.74909 2.93429 5.6357 2.63932 5.63826C2.34435 5.64083 2.06218 5.75914 1.8536 5.96773C1.64502 6.17631 1.5267 6.45847 1.52414 6.75345C1.52157 7.04842 1.63497 7.33259 1.8399 7.54477L8.20402 13.9089C8.41499 14.1198 8.70109 14.2383 8.9994 14.2383C9.29771 14.2383 9.5838 14.1198 9.79477 13.9089L16.1589 7.54477C16.3698 7.3338 16.4883 7.04771 16.4883 6.7494C16.4883 6.45109 16.3698 6.16499 16.1589 5.95402Z" fill="#272424"/> </svg></span>
                    </button>

                    <ul class="lang-menu" role="listbox">
                        <li data-lang="en">English</li>
                        <li data-lang="ar">العربية</li>
                    </ul>
                    </div>


                    <button class="navbar-toggler d-flex align-items-center"   type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#burgerMenu"
                        aria-controls="burgerMenu"
                        aria-expanded="false"
                        aria-label="Open navigation menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="18" viewBox="0 0 29 18" fill="none"> <line x1="1" y1="1" x2="28" y2="1" stroke="black" stroke-width="2" stroke-linecap="round"/> <line x1="1" y1="9" x2="28" y2="9" stroke="black" stroke-width="2" stroke-linecap="round"/> <line x1="1" y1="17" x2="28" y2="17" stroke="black" stroke-width="2" stroke-linecap="round"/> </svg>
                        Menu
                    </button>
                  
                </div>
            </div>
        </div>
    </header>