<?php

$page_title = $page_title ?? 'Workvorai';
$page_description = $page_description ?? $page_title;
$current_page = $current_page ?? '';
$head_extra = $head_extra ?? '';

if (!function_exists('e')) {
    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

$css_file = __DIR__ . '/../assets/css/styles.css';
$css_version = file_exists($css_file) ? filemtime($css_file) : time();

?>

<!DOCTYPE html>
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">

    <title><?php echo e($page_title); ?></title>

    <meta name="author" content="Workvorai">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="<?php echo e($page_description); ?>">

    <link rel="stylesheet" href="assets/font/fonts.css">
    <link rel="stylesheet" href="assets/icons/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">

    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo $css_version; ?>">

    <link rel="shortcut icon" href="assets/images/logo-sq.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/logo-sq.png">

    <?php echo $head_extra; ?>

</head>

<body>

<main id="wrapper">

    <div class="preload preload-container">
        <div class="spinner-circle lg">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>

    <header class="header header-fixed style-2">
        <div class="container">

            <div class="header-content">

                <a class="logo" href="/">
                    <img
                        src="assets/images/logo.png"
                        alt="Workvorai"
                        width="200"
                    >
                </a>

                <div class="header-center d-none d-xl-block">
                    <nav class="box-navigation">
                        <ul class="box-nav-menu style-2">

                            <li class="menu-item has-sub_menu style-2">
                                <a
                                    class="item-link <?php echo $current_page === 'home' ? 'active' : ''; ?>"
                                    href="/"
                                >
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="menu-item has-sub_menu style-2">
                                <a
                                    class="item-link <?php echo $current_page === 'about' ? 'active' : ''; ?>"
                                    href="/about"
                                >
                                    <span>About</span>
                                </a>
                            </li>

                            <li class="menu-item style-2">
                                <a
                                    class="item-link <?php echo $current_page === 'pricing' ? 'active' : ''; ?>"
                                    href="/pricing"
                                >
                                    <span>Pricing</span>
                                </a>
                            </li>

                            <li class="menu-item style-2">
                                <a
                                    class="item-link <?php echo $current_page === 'faq' ? 'active' : ''; ?>"
                                    href="/faq"
                                >
                                    <span>FAQ</span>
                                </a>
                            </li>

                            <li class="menu-item style-2">
                                <a
                                    class="item-link <?php echo $current_page === 'contact' ? 'active' : ''; ?>"
                                    href="/contact"
                                >
                                    <span>Contact</span>
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <div class="header-right d-flex align-items-center g-20">

                    <div class="d-sm-block d-none">
                        <a class="tf-btn style-gradient-2" href="/contact">
                            <span class="text-btn">Book a Free Consultation</span>

                            <span class="icon-btn">
                                <i class="icon-chevron-right"></i>
                            </span>
                        </a>
                    </div>

                    <div class="d-xl-none">
                        <a
                            class="mobile-button"
                            data-bs-toggle="offcanvas"
                            href="#mobileMenu"
                        >
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </header>