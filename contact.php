<!DOCTYPE html>
<html lang="en">
<head>
        <title>Raj Goldar | Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">

        <!-- Start Include All CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/animate.css"/>
        <link rel="stylesheet" href="assets/css/stroke-gap-icons.css"/>
        <link rel="stylesheet" href="assets/css/icofont.css"/>
        <link rel="stylesheet" href="assets/css/flaticon.css"/>
        <link rel="stylesheet" href="assets/css/Interest.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/lightslider.css">
        <link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
        
        <link rel="stylesheet" href="assets/css/preset.css"/>
        <link rel="stylesheet" href="assets/css/ignore_for_wp.css"/>
        <link rel="stylesheet" href="assets/css/theme.css"/>
        <link rel="stylesheet" href="assets/css/responsive.css"/>
        <link rel="stylesheet" href="assets/css/light.css"/>
        <link rel="stylesheet" href="assets/css/light.css"/>
        <!-- End Include All CSS -->

        <!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/images/favicon.png">
        <!-- Favicon Icon -->
    </head>
    <body class="dark">
        
        <!-- Preloader Start -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-box">
                    <div class="letter">L</div>
                    <div class="letter">O</div>
                    <div class="letter">A</div>
                    <div class="letter">D</div>
                    <div class="letter">I</div>
                    <div class="letter">N</div>
                    <div class="letter">G</div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->
        
        <div class="container">
            <div class="row">
            <?php include('shared/profile-sidebar.php');?>
                
                <div class="col-lg-8 contentColumn">
                <?php include('shared/header.php');?>
                   
                <?php include('shared/right-sidebar.php');?>

                    <div class="sidebarOverlay"></div>
                    <div class="bodyContent">
                        <div class="pageCointainer">
                            <section class="comonSection mapSection mb30">
                                <div class="map" id="map"></div>
                            </section>
                            <section class="comonSection contactSection">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h2 class="sectionTitle">Contact Me</h2>
                                        </div>
                                    </div>
                                    <div class="row mb30">
                                        <div class="col-lg-8">
                                            <div class="contact_form">
                                                <form method="post" action="#" id="contactForm">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <input type="text" class="required" name="full_name" placeholder="Full Name *"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="required" name="email" placeholder="Email *"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="phone" placeholder="Phone"/>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <input type="text" class="required" name="sjubject" placeholder="Subject *"/>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <textarea name="message" class="required" placeholder="Message *"></textarea>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <button type="submit" class="btt_btn"><span><i class="icon icon-Mail"></i>Send Message</span></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="icon_box_01">
                                                <i class="icon icon-Mail"></i>
                                                <h3>Email Address</h3>
                                                <p>rajgoldar@outlook.com</p>
                                            </div>
                                            <div class="icon_box_01">
                                                <i class="icon icon-Phone"></i>
                                                <h3>Phone Number</h3>
                                                <p>+91 9599449373</p>
                                            </div>
                                            <div class="icon_box_01 addrBox">
                                                <i class="icon icon-Pointer"></i>
                                                <h3>Address</h3>
                                                <p>
                                                    55B, St 6, Sector 5,
                                                    Gurgaon, 122001
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php include('shared/footer.php');?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bact To Top -->
        <a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
        <!-- Bact To Top -->

        <!-- Start Include All JS -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/mixer.js"></script>
        <script src="assets/js/lightslider.min.js"></script>
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
        <script src="assets/js/gmaps.js"></script>
        <script src="assets/js/anime.min.js"></script>
        <script src="assets/js/folio.js"></script>
        <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        
        <script src="assets/js/theme.js"></script>
        <!-- End Include All JS -->
    </body>

</html>