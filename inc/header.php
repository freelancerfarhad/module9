<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="">
    <title>blog</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <!-- Stylesheets -->
    <link href="assets/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="assets/frontend/css/swiper.css" rel="stylesheet">
    <link href="assets/frontend/css/ionicons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="assets/frontend/css/home/styles.css" rel="stylesheet">
    <link href="assets/frontend/css/home/responsive.css" rel="stylesheet">
    <link href="assets/frontend/css/category/styles.css" rel="stylesheet">
    <link href="assets/frontend/css/category/responsive.css" rel="stylesheet">
    <link href="assets/frontend/css/single-post/styles.css" rel="stylesheet">
    <link href="assets/frontend/css/single-post/responsive.css" rel="stylesheet">
    <style>
             .header-bg{
            height: 400px;
            width: 100%;
            background-image: url(assets/frontend/images/laravel.jpg);
            background-size: cover;
        }
        .favorite_posts{
            color: blue;
        }
    </style>
</head>
<body>
    <header>
        <div class="container-fluid position-relative no-side-padding">
            <a href="" class="logo">
            <img src="assets/frontend/images/logo.png" alt="">
            </a>
            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>
            <ul class="main-menu visible-on-click" id="main-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="allblogpost.php">Posts</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul><!-- main-menu -->
            <div class="src-area">
                <form method="GET" action="">
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    <input class="src-input" value="" name="query" type="text" placeholder="Search">
                </form>
            </div>
    
        </div><!-- conatiner -->
    </header>
    