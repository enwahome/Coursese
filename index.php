<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> HOME</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 <!--  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!--Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <?php
  session_start();
  ?>


  

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com"></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span></span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.php">COURS<span>ES</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <!-- <li><a class="nav-link scrollto " href="#"> <?php echo $_SESSION['name'];?> </a></li> -->

          <li class="dropdown"><a href="#"><span>Grades</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>A / A-</span><i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#">Medicine<i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <!-------------
                  <li><a href="courseselected/pageSelected.php">Pure medicine</a></li>
                  --------->
                 <!--  <li><a href="courseselected/pageSelected.php?course=Pure medicine">Pure medicine</a></li> -->
                
  

                
                  <li><a href="courseselected/pageSelected.php?course=Clinical medicine">Clinical medicine</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Pharmacy">Pharmacy</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Nursing">Nursing</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Dentistry">Dentistry</a></li>
                </ul>
                  </li>
                  <li class="dropdown"><a href="#">Engineering<i class="bi bi-chevron-right"></i></a> <ul>
                  <li><a href="courseselected/pageSelected.php?course=Electrical and electronic">Electrical and electronic</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Civil Engineering">Civil engineering</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Aeronautical">Aeronautical</a></li>
                 
                  
                </ul>
                  </li>
                  <!-- <li><a href="#">Applied Physics</a></li>
                  <li><a href="#">Sciences</a></li>
                  <li><a href="#">Maths</a></li> -->
                     <li class="dropdown"><a href="courseselected/pageSelected.php?course=Law">Law<i class="bi bi-chevron-right"></i></a> <ul>
                  
                  
                </ul>
                  </li>

                </ul>
              </li>

              <!-- <li class="dropdown"><a href="#"><span>A-</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a  href="#">Medicine<i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="courseselected/pageSelected.php?course=Clinical medicine">Clinical medicine</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Pharmacy">Pharmacy</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Nursing">Nursing</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Dentistry">Dentistry</a></li>
                </ul>
                  </li>
                  <li class="dropdown"><a href="#">Engineering<i class="bi bi-chevron-right"></i></a> <ul>
                  <li><a href="courseselected/pageSelected.php?course=Electrical and electronic">Electrical and electronic</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Civil engineering">Civil engineering</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Aeronautical">Aeronautical</a></li>
                 
                  
                </ul>
                  </li>
                  <li class="dropdown"><a href="#">Applied physics<i class="bi bi-chevron-right"></i></a> <ul>
                  <li><a href="courseselected/pageSelected.php?course=Pure physics">pure physics</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Civil physics">Civil physics</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Aeronautical">Aeronautical</a></li>
                 
                  
                </ul>
                  </li>
                  <li class="dropdown"><a href="courseselected/pageSelected.php">Sciences<i class="bi bi-chevron-right"></i></a> <ul>
                  <li><a href="courseselected/pageSelected.php?course=Biology">Biology</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Pure Mathimathics"> Pure Maths</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Physics">Physics</a></li>
                 
                  
                </ul>
                  </li>
                 <li><a href="#">Maths</a></li> -->
               <!--  </ul>
              </li> --> 
               <!-- <li class="dropdown"><a href="#"><span>B+</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#">Eco-stastis<i class="bi bi-chevron-right"></i></a> <ul>
                  <li><a href="courseselected/pageSelected.php?course=Finance">finance</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Business">businnes</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Statics">Statics</a></li>
                 
                  
                </ul>
                  </li>
                  <li><a href="#">Engineering</a></li>
                  <li><a href="#">Business and Economis</a></li>
                  <li class="dropdown"><a href="#">IT<i class="bi bi-chevron-right"></i></a> <ul>
                  <li><a href="courseselected/pageSelected.php?course=software Engineering">software engineering</a></li>
                  
                 
                  
                </ul>
                  </li>
                  <li><a href="courseselected/pageSelected.php?course=Acturial science">Acturial science</a></li>
                </ul>
              </li> -->
               <li class="dropdown"><a href="#"><span>B+ / B / B-</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  
                  <li class="dropdown"><a href="#">Education (Science)<i class="bi bi-chevron-right"></i></a> <ul>
                  
                  <li><a href="courseselected/pageSelected.php?course=Mathemathics">Mathemathics</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Physics">Physics</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Biology">Biology</a></li>
                    <li><a href="courseselected/pageSelected.php?course=Agriculture">Agriculture</a></li>
                      <li><a href="courseselected/pageSelected.php?course=Chemistry">Chemistry</a></li>
                        <li><a href="courseselected/pageSelected.php?course=Computer">Computer</a></li>
                         
                  
                </ul>

                  </li>
                  
                   
                  <li class="dropdown"><a href="#">Business and ecomonics<i class="bi bi-chevron-right"></i></a> <ul>
                  
                  <li><a href="courseselected/pageSelected.php?course=BBIT">BBIT</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Commerce">Commerce</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Economic and statistics">Economic and statistics</a></li>
                    <li><a href="courseselected/pageSelected.php?course=Economics and Finances">Economics and Finances</a></li>
                      <li><a href="courseselected/pageSelected.php?course=Economics and Mathemathics">Economics and Mathemathics</a></li>
                        
                         
                  
                </ul>
                
                  </li>
                  
                   
                  <li class="dropdown"><a href="#">Engineering and Technology<i class="bi bi-chevron-right"></i></a> <ul>
                  
                  <li><a href="courseselected/pageSelected.php?course=Computer Sceince">Computer Sceince</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Information Technology">Information Technology</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Computer Security and forensics">Computer Security and forensics</a></li>
                    <li><a href="courseselected/pageSelected.php?course=Acturial Sceince">Acturial Sceince</a></li>
                      <li><a href="courseselected/pageSelected.php?course=Telcommunications">Telcommunications</a></li>
                       
                         
                  
                </ul>
                
                  </li>
                  
                  
                </ul>
              </li>
               <!-- <li class="dropdown"><a href="#"><span>B-</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Medicine</a></li>
                  <li><a href="#">Engineering</a></li>
                  <li><a href="#">Applied Physics</a></li>
                  <li><a href="#">Sciences</a></li>
                  <li><a href="#">Maths</a></li>
                </ul>
              </li> -->
               <li class="dropdown"><a href="#"><span>C+ </span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="dropdown"><a href="#">Education (Arts)<i class="bi bi-chevron-right"></i></a> <ul>
                  
                  <li><a href="courseselected/pageSelected.php?course=English">English</a></li>
                  <li><a href="courseselected/pageSelected.php?course=literature">literature</a></li>
                  <li><a href="courseselected/pageSelected.php?course=History">History</a></li>
                    <li><a href="courseselected/pageSelected.php?course=Geography">Geography</a></li>
                      <li><a href="courseselected/pageSelected.php?course=C.R.E">C.R.E</a></li>
                        <li><a href="courseselected/pageSelected.php?course=Kiswahili">Kiswahili</a></li>
                          <li><a href="courseselected/pageSelected.php?course=Business studies">Business studies</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Music">Music</a></li>
                  
                </ul>
                  </li>
                 
                </ul>
              </li>

              <li class="dropdown"><a href="#"><span>C AND BELOW </span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="courseselected/pageSelected.php?course =web and graphic design"><i class="bi bi-chevron-right"></i></a> <ul>
                  
         
                </ul>

                  </li>
                   <li><a href="courseselected/pageSelected.php?course=web and graphic design">web and graphic design</a></li>
                 
                  <li><a href="courseselected/pageSelected.php?course=certificate in IT">certificate in IT</a></li>
                  <li><a href="courseselected/pageSelected.php?course=certificate in Business Adminstration">certificate in Business Adminstration</a></li>
                   <li><a href="courseselected/pageSelected.php?course=Journalism and mass communication">Journalism and mass communication</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Sales and marketing">Sales and marketing </a></li>
                  <li><a href="courseselected/pageSelected.php?course=Human resource management">Human resource management</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Purchasing and Supplies">Purchasing and Supplies</a></li>
                  <li><a href="courseselected/pageSelected.php?course=Tourisim Management">Tourisim Management</a></li>
                   <li><a href="courseselected/pageSelected.php?course=certificate in electrical and electronic engineering">certificate in electrical and electronic engineering</a></li>
                    <li><a href="courseselected/pageSelected.php?course=certificate in food production">certificate  in food production</a></li>
                     <li><a href="courseselected/pageSelected.php?course=certificate in hair dresing and beauty theraphy ">certificate in hair dresing and beauty theraphy </a></li>

                </ul>
              </li>
           
          
            </ul>
          </li>




      <?php
  if (isset($_SESSION['name'])) {
   echo '<li> <a class="nav-link scrollto " href="#">'.$_SESSION['name']; '</a></li>';
   echo ' <li><a class="nav-link scrollto" href="db/logout.php">Logout</a></li>';
 }
    else{
      // show login./register
      echo '<li><a class="nav-link scrollto " href="#hero">Login</a></li>
            <li><a class="nav-link scrollto "href="#hero">Register</a></li>';

    }
  
  ?>

          
          
         
          <li><a class="nav-link scrollto" href="#services">Services</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          
          <li><a class="nav-link scrollto" href="db/addCareer.php">AdminAdd</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">

    <div class="hero-content" data-aos="fade-up">
      <h2>Making <span>your career</span><br>happen!</h2>
      <div>
        <?php
        if (isset($_SESSION['name'])) {
          # code...
        }else{
          echo '<a href="db/login.php" class="btn-get-started scrollto">LOGIN</a>
        <a href="db/register.php" class="btn-projects scrollto">REGISTER</a>';
        }
        ?>
        
      </div>
    </div>

    <div class="hero-slider swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('assets/img/home-carousel/1.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/home-carousel/2.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/home-carousel/3.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/home-carousel/4.jpg');"></div>
        <div class="swiper-slide" style="background-image: url('assets/img/home-carousel/5.jpg');"></div>
      </div>
    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>University and College courses upon different grades</h2>
            <h3>Your trusted source of information for courses offered by Universities and Colleges in Kenya.</h3>

            <ul>
              <li><i class="bi bi-check-circle"></i> Best courses available now.</li>
              <li><i class="bi bi-check-circle"></i> Most marketable courses in different college.</li>
              <li><i class="bi bi-check-circle"></i> Find all Degree courses offered by colleges and universities in Kenya. You can easily search for a course by typing the course name on the search.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Services</h2>
          <p>List of University Courses, Codes and KUCCPS Cut off Points
KUCCPS cut-off points & revision of courses 2021/22. How to check KUCCPS course application results for applicants.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <div class="icon"><i class="bi bi-briefcase"></i></div>
              <h4 class="title"><a href="">schools.kuccps.net</a></h4>
              <p class="description">If the school does not have an account in the KUCCPS portal, create one through the 'New Account' link. Fill in the relevant verification details and submit..</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <div class="icon"><i class="bi bi-card-checklist"></i></div>
              <h4 class="title"><a href="">cut-off</a></h4>
              <p class="description">KUCCPS cut-off points and cluster points calculation formula. KUCCPS - Kenya universities courses, course codes and scholarships.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <div class="icon"><i class="bi bi-bar-chart"></i></div>
              <h4 class="title"><a href="">What is the procedure for submitting students' choices through the portal for the first time?</a></h4>
              <p class="description">.</p>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <div class="icon"><i class="bi bi-binoculars"></i></div>
              <h4 class="title"><a href="">Who is eligible to apply</a></h4>
              <p class="description">All candidates quality for placement to universities or colleges irrespective of their KCSE examination results (grades A to E). Candidates have an opportunity to choose their preferred courses as shown below:
              Degree courses choices: 1(a), 1(b), 1(C), 2, 3 and 4
              Craft course choices: 1, 2, 3 and 4
              Artisan course choices: 1, 2, 3 and 4</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

   
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3 class="cta-title">Call To Action</h3>
            <p class="cta-text"> </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div>
        </div>
      </div>
    </section><!-- End Call To Action Section -->

    

    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Contact Us</h2>
        <!--   <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p -->
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>NAKURU, NAIROBI, KENYA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+254705330676">+254718522008</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">coursesystem@gmail.com</a></p>
            </div>
          </div>

        </div>
      </div>

      <div class="container mb-4">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
      </div>

      <div class="container">
        <div class="form">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6 mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>

            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Erick</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
      -->
        Designed by <a href="#">Evans</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>