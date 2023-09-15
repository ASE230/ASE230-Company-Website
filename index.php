<?php
require_once('./lib/display.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>NaturaTech Solutions Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- icon -->
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7-stroke.css" />

    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/colors/cyan.css" id="color-opt">
</head>

<body data-bs-theme="light">

    <!-- STRAT NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-white navbar-custom sticky sticky-white" role="navigation" id="navbar">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.html">
                <i class="mdi mdi-alien"></i>NaturaTech Solutions Inc.
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center" id="navbar-navlist">
                    <li class="nav-item">
                        <a data-scroll href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-scroll href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="section bg-home home-half" id="home" data-image-src="images/bg-home.jpg">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center">
                    <h1 class="home-title"><?= displayMissionStatement(); ?></h1>
                    <p class="pt-3 home-desc mx-auto"><?= displayOverview(); ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--END HOME-->

    <!--START FEATURES-->
    <section class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="features-box mt-5 mt-lg-0">
                        <h3>Our awards</h3>
                        <ul class="text-muted list-unstyled mt-4 features-item-list">
                            <?= displayAwards() ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="features-img mx-auto me-lg-0">
                        <img src="images/growth-analytics.svg" alt="macbook image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END FEATURES-->

    <!--START SERVICES-->
    <section class="section bg-light " id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Our Services</h1>
                    <div class="section-title-border mt-3"></div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-diamond text-primary"></i>
                            <div class="ms-4">
                                <h4>Digital Design</h4>
                                <p class="pt-2 text-muted">Some quick example text to build on the card title and make
                                    up the bulk of the card's content. Moltin gives platform.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-display2 text-primary"></i>
                            <div class="ms-4">
                                <h4>Unlimited Colors</h4>
                                <p class="pt-2 text-muted">Credibly brand standards compliant users without extensible
                                    services. Anibh euismod tincidunt laoreet Ipsum passage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-piggy text-primary"></i>
                            <div class="ms-4">
                                <h4>Strategy Solutions</h4>
                                <p class="pt-2 text-muted">Separated they live in Bookmarksgrove right at the coast of
                                    the Semantics, and large language ocean neary regelia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-science text-primary"></i>
                            <div class="ms-4">
                                <h4>Awesome Support</h4>
                                <p class="pt-2 text-muted">It is a paradisematic country, in which roasted parts of
                                    sentences fly into your mouth leave for the far World.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-news-paper text-primary"></i>
                            <div class="ms-4">
                                <h4>Truly Multipurpose</h4>
                                <p class="pt-2 text-muted">Even the all-powerful Pointing has no control about the blind
                                    texts it is an almost unorthographic.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-plane text-primary"></i>
                            <div class="ms-4">
                                <h4>Easy to customize</h4>
                                <p class="pt-2 text-muted">Question Marks and devious Semikoli, but the Little Blind
                                    Text didn’t listen. She packed her seven versalia.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-arc text-primary"></i>
                            <div class="ms-4">
                                <h4>Pixel Perfect Design</h4>
                                <p class="pt-2 text-muted">There are many variations of passages of Lorem Ipsum
                                    available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-tools text-primary"></i>
                            <div class="ms-4">
                                <h4>Perfect Toolbox</h4>
                                <p class="pt-2 text-muted">Hampden-Sydney College in Virginia, looked up one of the more
                                    obscure Latin words, consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="services-box">
                        <div class="d-flex">
                            <i class="pe-7s-timer text-primary"></i>
                            <div class="ms-4">
                                <h4>Awesome Design</h4>
                                <p class="pt-2 text-muted">All the Lorem Ipsum generators on the Internet tend to repeat
                                    predefined chunks as necessary.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--START SERVICES-->

    <!--START ABOUT-US-->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="about-title mx-auto text-center">
                        <h2><?= displayMissionStatement(); ?></h2>
                        <p class="text-muted pt-4"><?= displayOverview(); ?></p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-1.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Frank Johnson</h4>
                        <p class="text-uppercase team-designation">CEO</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-2.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Elaine Stclair</h4>
                        <p class="text-uppercase team-designation">Designer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-3.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Wanda Arthur</h4>
                        <p class="text-uppercase team-designation">Developer</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box text-center">
                        <div class="team-wrapper">
                            <div class="team-member">
                                <img alt="" src="images/team/img-4.jpg" class="img-fluid rounded">
                            </div>
                        </div>
                        <h4 class="team-name">Joshua Stemple</h4>
                        <p class="text-uppercase team-designation">Manager</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--END ABOUT-US-->

    <!-- CONTACT FORM START-->
    <section class="section " id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1 class="section-title text-center">Get In Touch</h1>
                    <div class="section-title-border mt-3"></div>
                    <p class="section-subtitle text-muted text-center font-secondary pt-4">We thrive when coming up with
                        innovative ideas but also understand that a smart concept should be supported with faucibus
                        sapien odio measurable
                        results.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="mt-4 pt-4">
                        <p class="mt-4"><span class="h5">Office Address 1:</span><br> <span class="text-muted d-block mt-2">4461 Cedar Street Moro, AR 72368</span></p>
                        <p class="mt-4"><span class="h5">Office Address 2:</span><br> <span class="text-muted d-block mt-2">2467 Swick Hill Street <br />New Orleans, LA
                                70171</span></p>
                        <p class="mt-4"><span class="h5">Working Hours:</span><br> <span class="text-muted d-block mt-2">9:00AM To 6:00PM</span></p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="custom-form mt-4 pt-4">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email*">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject" placeholder="Your Subject.." />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM END-->

    <!-- javascript -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/gumshoe.polyfills.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>

</html>