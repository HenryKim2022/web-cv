<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$Curr_Url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$base_Url = $protocol . $_SERVER['HTTP_HOST'];
$website = "www." . $_SERVER['HTTP_HOST'];
$Site_Build = "2023";
$Curr_Year = date("Y");

// My Bio's
$Author = "Hendri";
$Author_al = "Henry .K";
$Site_Title = "My Curiculum Vitae";
$Phone = "+62 82 2811 9007 2";
$Email = "abgn@arpanet.com";
$Addr = "Puspitek Streets, Setu, Serpong Reg, 
South Tangerang City, Banten 15314
";

$BirthD = "08 Oct 2000";
$BirthD_alias = "10/08/2000";
$City = "Tangerang Selatan, Indonesia";
$Age = "";
$Degree = "D3 Electrical Enginnering";
$Freelance_Stats = "Available";
?>

<!-- AGE Generator -->
<?php
//explode the date to get month, day and year
$BirthD_alias = explode("/", $BirthD_alias);
//get age from date or birthdate
$Age = (date("md", date("U", mktime(0, 0, 0, $BirthD_alias[0], $BirthD_alias[1], $BirthD_alias[2]))) > date("md")
    ? ((date("Y") - $BirthD_alias[2]) - 1)
    : (date("Y") - $BirthD_alias[2]));
?>



<!--  -->
<!-- HEAD -->
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="robots" content="noindex, nofollow">
    <link rel="icon" type="image/x-icon" href="<?= $base_Url ?>favicon.ico">
    <title><?= $Author ?> | <?= $Site_Title ?></title>


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Plugin CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" type="text/css">

    <link href="css/boxicons.min.css" rel="stylesheet" type="text/css">
    <link href="css/aos.css" rel="stylesheet" type="text/css">
    <link href="css/glightbox.min.css" rel="stylesheet" type="text/css">
    <link href="css/swiper-bundle.min.css" rel="stylesheet" type="text/css">



    <!-- Main CSS File -->
    <link href="css/main-style.css" rel="stylesheet" type="text/css">

</head>


<!--  -->
<!-- BODY -->

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Sidebar Header ======= -->
    <header id="header">
        <div class="d-flex flex-column">
            <div class="profile">
                <img src="assets/img/profile-img-smaller.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="<?= $base_Url ?>"><?= $Author ?></a></h1>
                <div class="social-links mt-3 text-center">
                    <a id="fb" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a id="ig" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a id="github" class="github"><i class="bx bxl-github"></i></a>
                </div>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skills</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- ======= 1st Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container aos-init aos-animate" data-aos="fade-in">
            <h1><?= $Author ?></h1>
            <p>I'm <span class="typed" data-typed-items="Student , Junior Mobile Programmer , Freelancer , Junior Web Developer , Electrician , IT Support "> </span>
        </div>
    </section><!-- End 1st Section -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title section-title-about">
                    <h2>About</h2>
                </div>

                <div class="row mt-0">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="assets/img/profile-img-smaller.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>IT Support &amp; Junior Mobile Programmer.</h3>
                        <p class="fst-italic">
                            Here is a brief information about me.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= $BirthD ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span class="website-lbl"><?= $website ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $Phone ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= $City ?></span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= $Age ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= $Degree ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $Email ?></span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><?= $Freelance_Stats ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <p class="justify-text-p">
                            I am someone who adapts quickly, hardworking, responsible, and loves to learn.
                            I am a D3 graduate of Electronic Engineering, currently continuing my tertiary education in the S1 Informatics
                            Engineering Employee Class (Saturday and Sunday classes).
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title mb-3">
                    <h2>Skills</h2>
                    <p>Here are some of the many skills that I have.</p>
                </div>

                <div class="row skills-content">
                    <!-- Skill List -->
                    <?php {
                        include 'my_skills.php';
                    } ?>
                    <!-- /.Skill List -->

                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                    <p class="justify-text-p">
                        With respect, with this job Resumer,
                        I intend to apply for a job for the position of Teacher/ Web Devs/ Mobile Programmer.

                        The following is my educational background and some of my work experience.
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 aos-init" data-aos="fade-up">
                        <h3 class="resume-title">Sumary</h3>
                        <div class="resume-item pb-0">
                            <h4><?= $Author ?></h4>
                            <p>
                                <em>
                                    Someone who is innovative and likes to learn things
                                    related to the world of IT/Developer with theoretical experience,
                                    designing and developing programs from concept to end.
                                </em>
                            </p>
                            <ul>
                                <li><?= $City ?></li>
                                <li><?= $Phone ?></li>
                                <li><?= $Email ?></li>
                            </ul>
                        </div>

                        <h3 class="resume-title">Education</h3>
                        <!-- SKILLS -->
                        <div class="my-skills">
                            <?php {
                                include 'my_edu.php';
                            } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Working Experience</h3>
                        <?php {
                            include 'my_working_exp.php';
                        } ?>

                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->


        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p class="justify-text-p">
                        Praise the authors pray to the presence of Allah SWT,
                        for His mercy and grace that has been bestowed upon the author so that I can complete the portfolio.
                        Portfolio writing aims to apply for a job.
                    </p>
                </div>

                <div class="row aos-init" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-bnsp">BNSP</li>
                            <li data-filter=".filter-digitalent">DigiTalent</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container aos-init" data-aos="fade-up" data-aos-delay="100" style="position: relative; height: 835.5px;">
                    <?php {
                        include 'my_portfolio.php';
                    } ?>

                </div>

            </div>
        </section><!-- End Portfolio Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact pb-15">
            <div class="container">

                <div class="section-title mb-3">
                    <h2>Contact</h2>
                    <p>If you are interested in talking about work, you can contact me at this address, or send me an email.</p>
                </div>

                <div class="row aos-init" data-aos="fade-in">

                    <div class="col-lg-12 d-flex align-items-stretch">
                        <div class="info">
                            <div class="my-contact-details">
                                <div class="contact float-md-start">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p><?= $Addr ?></p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p><?= $Email ?></p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Call:</h4>
                                        <p><?= $Phone ?></p>
                                    </div>

                                </div>

                                <div class="maps float-sm-end">
                                    <div id="online-status"></div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.388055774171!2d106.673528514081!3d-6.343763863830164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5ab3d01e03b%3A0xb98f4c27e24202ec!2sInstitut%20Teknologi%20Indonesia!5e0!3m2!1sid!2sid!4v1679294329477!5m2!1sid!2sid" width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->


        <footer id="footer">
            <div class="container ml-0 pl-0">
                <div id="copyright" class="copyright"></div>
            </div>
        </footer>



    </main><!-- End #main -->


    <a id="src-downloader" class="src-downloader d-flex align-items-center justify-content-center active">
        <i class="bx bx-cloud-download"></i>
    </a>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center active">
        <i class="bi bi-arrow-up-short"></i>
    </a>

</body>


<!--  -->
<!--  -->
<!-- INDEPENDENT: SCRIPT -->
<!-- FOOTER COPYRIGHT GENERATOR -->
<script type="text/javascript">
    let paragraph1 = `<p class='d-flex align-items-center justify-content-center' style='margin-bottom:0px'>
                <i>Copyright &copy; <?= $Curr_Year ?> <a href="<?= $base_Url; ?>"><?= $Author ?> (alias <?= $Author_al ?>)</a>.<br>All rights reserved</i>  
            </p>`;
    let paragraph2 = `<p class='d-flex align-items-center justify-content-center' style='margin-bottom:0px'>
                <i>                    
                    Copyright &copy; <?= $Site_Build ?>-<?= $Curr_Year ?> <a href="<?= $base_Url; ?>">Henry .K</a>.<br>
                    All rights reserved
                </i>  
            </p>`;

    if (<?= $Site_Build ?> == <?= $Curr_Year ?>) {
        document.getElementById('copyright').innerHTML = paragraph1;
    } else {
        document.getElementById('copyright').innerHTML = paragraph2;
    }
</script>
<!-- /.FOOTER COPYRIGHT GENERATOR -->


<!-- Theme Changer -->
<script>
    function changeTheme() {

    }
</script>




<!--  -->
<!--  -->
<!-- SCRIPT'S -->
<script src="js/purecounter_vanilla.js" type="text/javascript"></script>
<script src="js/glightbox.min.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="js/swiper-bundle.min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/noframework.waypoints.js" type="text/javascript"></script>
<script src="js/validate.js" type="text/javascript"></script>



<!-- Vendor JS Files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
<!-- Animation -->
<script src="js/aos.js" type="text/javascript"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<!-- Template Main JS File -->
<script src="js/main-js.js" type="text/javascript"></script>


<!--  -->
<!--  -->
<!-- SCRIPT'S -->





</html>