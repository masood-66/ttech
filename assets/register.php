<?php
session_start();

$conn = new mysqli("localhost", "root", "", "ttech");

if($conn===false){
    die("connection falied");
}

if(isset($_POST['enroll'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];

$course=$_POST['course'];

$branch=$_POST['branch'];

$sql="INSERT INTO enroll_student(first_name,last_name,email,phoneno,course,branch) 
VALUES('$fname','$lname','$email','$phoneno','$course','$branch')";

$result=mysqli_query($conn,$sql);
if($result){
   
    header("location:register.php");
}else{
    echo"Apply failed";

}
}


?>
<!doctype html>
<html lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>t.Tech - IT Services & Technology</title>

    <link rel="shortcut icon" href="img/t.tech.png" type="images/x-icon">

    <!-- css include -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/metisMenu.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/odometer.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/rs6.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>

    <!-- preloder start -->
    <div id="ct-loadding" class="ct-loader style1">
        <div class="loading-spin"></div>
    </div>
    <!-- preloder end -->

    <div class="tx-cursor tx-js-cursor">
        <div class="tx-cursor-wrapper">
            <div class="tx-cursor--follower ct-js-follower"></div>
        </div>
    </div>

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

    <div class="body_wrap">
        <!-- header start -->
        <header
        id="tx-header-area"
        class="site-header header-style-one is-sticky"
      >
        <div class="header__top">
          <div class="container">
            <div class="header__top-info">
              <div class="header__info ul_li">
                <i class="fa fa-map-o"></i> FLH jutial Gilgit
              </div>
              <div class="header__right ul_li">
                <ul class="header__contact-info ul_li mr-100">
                  <li class="live-chat">
                    <a href="https://wa.me/+923555056504">Live Chat</a>
                  </li>
                  <li><a href="../contact.html">Support</a></li>
                  <li><a href="../contact.html">Contact</a></li>
                </ul>
                <div class="header__social ul_li">
                  <a href="#!"><i class="fa fa-facebook-f"></i></a>
                  <a href="#!"><i class="fa fa-twitter"></i></a>
                  <a href="#!"><i class="fa fa-dribbble"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header__middle">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5 col-md-5">
                <div class="header__cta ul_li">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="content">
                    <span>Want to Discuss:</span>
                    <h3>+92 3555056506</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-2">
                <div class="header__bar text-center">
                  <a class="offcanvas-sidebar-btn" href="javascript:void(0);"
                    ><i class="fa fa-th-large"></i
                  ></a>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="header__button text-end">
                  <a href="../contact.html" class="thm-btn thm-btn__white">
                    <span class="btn-anim-wrap">
                      <span class="button-text">Contact us!</span>
                      <span class="button-text">Contact us!</span>
                    </span>
                    <i class="fa fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header__main tx-header">
          <div class="container">
            <div class="header__mobile-wrap d-blcok d-lg-none">
              <div class="header__mobile ul_li_between">
                <div class="header__logo-mobile">
                  <a href="../index.html"
                    ><img src="img/t.tech.png" width="80px" alt=""
                  /></a>
                </div>
                <div class="hamburger_menu">
                  <a href="javascript:void(0);"><i class="fa fa-bars"></i></a>
                </div>
              </div>
            </div>
            <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
              <nav class="main-menu collapse navbar-collapse">
                <ul>
                  <li class="menu-item-has-children active">
                    <a href="../index.html"><span>Home</span></a>
                    <!-- <ul class="submenu">
                                        <li class="active"><a href="index.html"><span>Home One</span></a></li>
                                        <li><a href="home-2.html"><span>Home Two</span></a></li>
                                        <li><a href="home-3.html"><span>Home Three</span></a></li>
                                        <li><a href="home-4.html"><span>Home Four</span></a></li>
                                        <li><a href="home-5.html"><span>Home Five</span></a></li>
                                        <li><a href="home-6.html"><span>Home Six</span></a></li>
                                        <li><a href="home-7.html"><span>Home Seven</span></a></li>
                                    </ul> -->
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#!"
                      ><span>Pages<i class="fa fa-chevron-down"></i></span
                    ></a>
                    <ul class="submenu">
                      <li>
                        <a href="../about.html"><span>About</span></a>
                      </li>
                      <!-- <li class="menu-item-has-children">
                        <a href="portfolio.html"><span>Portfolio</span></a>
                        <ul class="submenu">
                          <li>
                            <a href="portfolio.html"><span>Portfolio</span></a>
                          </li>
                          <li>
                            <a href="portfolio-single.html"
                              ><span>Portfolio Details</span></a>
                          </li>
                        </ul>
                      </li> -->
                      <li>
                        <a class="disabled" href="../about.html"><span>Team</span></a>
                      </li>
                      <!-- <li><a href="testimonial.html"><span>Testimonial</span></a></li> -->
                      <!-- <li><a href="pricing.html"><span>Pricing</span></a></li> -->
                      <!-- <li class="menu-item-has-children">
                                            <a href="career.html"><span>Career</span></a>
                                            <ul class="submenu">
                                                <li><a href="career.html"><span>Career</span></a></li>
                                                <li><a href="career-single.html"><span>Career Details</span></a></li>
                                                <li><a href="job-apply.html"><span>Job Apply</span></a></li>
                                            </ul>
                                        </li> -->
                      <!-- <li><a href="faq.html"><span>FAQ</span></a></li> -->
                      <!-- <li><a href="why-choose-us.html"><span>Why Choose Us</span></a></li> -->
                      <!-- <li><a href="coming-soon.html"><span>Coming Soon</span></a></li> -->
                      <!-- <li><a href="404.html"><span>404</span></a></li> -->
                    </ul>
                  </li>

                  <li class="header__logo">
                    <a href="../index.html"
                      ><img src="img/t.tech.png" width="80px" alt=""
                    /></a>
                  </li>

                  <li class="menu-item-has-children">
                    <a href="../services.html"
                      ><span>Services<i class="fa fa-chevron-down"></i></span
                    ></a>
                    <ul class="submenu">
                      <li>
                        <a href="../web.html"><span>Web Development</span></a>
                      </li>
                      <li>
                        <a href="../ai.html"><span>Ai</span></a>
                      </li>
                      <li>
                        <a href="../e-commerce.html"><span>E-Commerce</span></a>
                      </li>
                      <li>
                        <a href="../ui.html"><span>UI/UX</span></a>
                      </li>
                      <li>
                        <a href="../accounting.html"
                          ><span>Accounting & Bookkeeping</span></a
                        >
                      </li>
                      <li>
                        <a href="../graphic.html"
                          ><span>Graphic Designing</span></a
                        >
                      </li>
                      <li>
                        <a href="../digital.html"
                          ><span>Digital Markiting</span></a
                        >
                      </li>
                    </ul>
                  </li>
                  <!-- <li class="menu-item-has-children">
                                    <a href="shop.html"><span>Shop<i class="fas fa-chevron-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="shop.html"><span>Shop</span></a></li>
                                        <li><a href="shop-single.html"><span>Shop Details</span></a></li>
                                        <li><a href="account.html"><span>Account</span></a></li>
                                    </ul>
                                </li> -->

                  <!-- <li class="menu-item-has-children">
                                    <a href="blog.html"><span>Blog<i class="fa fa-chevron-down"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="blog.html"><span>Blog</span></a></li>
                                        <li><a href="blog-single.html"><span>Blog Details</span></a></li>
                                    </ul>
                                </li> -->
                  <li>
                    <a href="../contact.html"><span>Contact</span></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- header end -->

      <!-- slide bar start -->
      <aside>
        <!-- sidebar-info start -->
        <div class="offcanvas-sidebar">
          <div class="sidebar-menu-close">
            <a class="tx-close" href="javascript:void(0);"></a>
          </div>
          <div class="sidebar-logo mb-30">
            <a href="../index.html">
              <img src="img/t.tech.png" width="70px" alt="logo" />
            </a>
          </div>
          <div class="sidebar-content mb-40">
            <p>
              We have expertise in providing professional services and solutions
              in the areas of IT Services & Technology services.
            </p>
          </div>
          <ul class="sidebar-menu list-unstyled">
            <li><a href="../about.html">About</a></li>
            <li><a href="../services.html">Services</a></li>
            <li><a href="../portfolio.html">Projects</a></li>
            <!-- <li><a href="blog.html">Blog</a></li> -->
            <li><a href="../contact.html">Contact</a></li>
          </ul>
          <div class="ul_li mt-50">
            <div class="s-content-wrap d-flex">
              <div class="ct-title col-auto">Call us:</div>
              <div class="s-content-wrap col">
                <div class="ct-item-wrap row">
                  <div class="ct-item col-auto">
                    <span class="item-content"
                      ><a href="tel:02456787535" class="tel text-white"
                        >+92 3555056504</a
                      ></span
                    >
                  </div>
                  <div class="ct-item col-auto">
                    <span class="item-content"
                      ><a href="mailto:admin@ttechcompany.com"
                        >admin@ttechcompany.com</a
                      ></span
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="sidebar-socials-wrap mt-30">
            <a class="social-item" href="https://facebook.com" target="_blank"
              >Facebook</a
            ><a
              class="social-item"
              href="https://www.behance.net/"
              target="_blank"
              >Behance</a
            ><a class="social-item" href="#" target="_blank">Telegram</a
            ><a class="social-item" href="https://dribbble.com/" target="_blank"
              >Dribbble</a
            >
          </div>
        </div>
        <!-- sidebar-info end -->

        <!-- side-mobile-menu start -->
        <div class="slide-bar">
          <div class="close-mobile-menu">
            <a class="tx-close" href="javascript:void(0);"></a>
          </div>
          <nav class="side-mobile-menu">
            <div class="header-mobile-search">
              <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords" />
                <button type="submit"><i class="ti-search"></i></button>
              </form>
            </div>
            <ul id="mobile-menu-active">
              <li class="dropdown">
                <a href="../index.html"><span>Home</span></a>
                <!-- <ul class="sub-menu">
                                <li class="active"><a href="index.html"><span>Home One</span></a></li>
                                <li><a href="home-2.html"><span>Home Two</span></a></li>
                                <li><a href="home-3.html"><span>Home Three</span></a></li>
                                <li><a href="home-4.html"><span>Home Four</span></a></li>
                                <li><a href="home-5.html"><span>Home Five</span></a></li>
                                <li><a href="home-6.html"><span>Home Six</span></a></li>
                                <li><a href="home-7.html"><span>Home Seven</span></a></li>
                            </ul> -->
              </li>
              <li class="dropdown">
                <a href="#!"><span>Pages</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="../about.html"><span>About</span></a>
                  </li>
                  <!-- <li class="dropdown">
                    <a href="portfolio.html"><span>Portfolio</span></a>
                    <ul class="sub-menu">
                      <li>
                        <a href="portfolio.html"><span>Portfolio</span></a>
                      </li>
                      <li>
                        <a href="portfolio-single.html"
                          ><span>Portfolio Details</span></a
                        >
                      </li>
                    </ul>
                  </li> -->
                  <li class="dropdown">
                    <a href="../about.html"><span>Team</span></a>
                    <!-- <ul class="sub-menu">
                                        <li><a href="team.html"><span>Team</span></a></li>
                                        <li><a href="team-single.html"><span>Team Details</span></a></li>
                                    </ul> -->
                  </li>
                  <!-- <li>
                    <a href="testimonial.html"><span>Testimonial</span></a>
                  </li> -->
                  <!-- <li><a href="pricing.html"><span>Pricing</span></a></li> -->
                  <!-- <li class="dropdown">
                                    <a href="career.html"><span>Career</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="career.html"><span>Career</span></a></li>
                                        <li><a href="career-single.html"><span>Career Details</span></a></li>
                                        <li><a href="job-apply.html"><span>Job Apply</span></a></li>
                                    </ul>
                                </li> -->
                  <!-- <li>
                    <a href="faq.html"><span>FAQ</span></a>
                  </li>
                  <li>
                    <a href="why-choose-us.html"><span>Why Choose Us</span></a>
                  </li>
                  <li>
                    <a href="coming-soon.html"><span>Coming Soon</span></a>
                  </li> -->
                  <!-- <li><a href="404.html"><span>404</span></a></li> -->
                </ul>
              </li>
              <li class="dropdown">
                <a href="../services.html"><span>Services</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="../web.html"><span>Web dDevelopment</span></a>
                  </li>
                  <li>
                    <a href="../ai.html"><span>Ai</span></a>
                  </li>
                  <li>
                    <a href="../ui.html"><span>UI/UX</span></a>
                  </li>
                  <li>
                    <a href="../e-commerce.html"><span>E-Commerce</span></a>
                  </li>
                  <li>
                    <a href="../accounting.html"
                      ><span>Accounting & Bookkeeping</span></a
                    >
                  </li>
                  <li>
                    <a href="../graphic.html"
                      ><span>Graphic designing</span></a
                    >
                  </li>
                  <li>
                    <a href="../markiting.html"
                      ><span>Digital markiting</span></a
                    >
                  </li>
                </ul>
              </li>

              <!-- <li class="dropdown">
                            <a href="shop.html"><span>Shop</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span>Shop</span></a></li>
                                <li><a href="shop-single.html"><span>Shop Details</span></a></li>
                                <li><a href="account.html"><span>Account</span></a></li>
                            </ul>
                        </li> -->

              <!-- <li class="dropdown">
                <a href="blog.html"><span>Blog</span></a>
                <ul class="sub-menu">
                  <li>
                    <a href="blog.html"><span>Blog</span></a>
                  </li>
                  <li>
                    <a href="blog-single.html"><span>Blog Details</span></a>
                  </li>
                </ul>
              </li> -->
              <li>
                <a href="../contact.html"><span>Contact</span></a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- side-mobile-menu end -->
      </aside>
      <div class="body-overlay"></div>
      <!-- slide bar end -->


        <main>


            <div class="col-lg-8 mt-30 mx-auto d-block">
                <div class="contact__form-inner">
                    <h3>Enroll Now</h3>
                    <p>Enroll in the top demanding courses</p>
                    <form class="contact__form-form" method="POST" action="#">
                      <div class="row">
                          <div class="col-lg-6 col-md-6">
                              <div class="contact__form-field">
                                  <label for="fname">First Name<span class="invite-text-gr-color">*</span></label>
                                  <input type="text" name="first_name" id="fname" placeholder="first name" required>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="contact__form-field">
                                  <label for="lname">Last Name<span class="invite-text-gr-color">*</span></label>
                                  <input type="text" name="last_name" id="lname" placeholder="last name">
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="contact__form-field">
                                  <label for="email">Email Address<span class="invite-text-gr-color">*</span></label>
                                  <input type="email" name="email" id="email" placeholder="email address" required>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="contact__form-field">
                                  <label for="email">Mobile Number<span class="invite-text-gr-color">*</span></label>
                                  <input type="tel" name="phoneno" id="Number" placeholder="Phone Number">
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="contact__form-field">
                                  <label for="select">Course*<span class="invite-text-gr-color">*</span></label>
                                  <select name="course" id="select">
                                      <option >select Course</option>
                                      <option >Web Development</option>
                                      <option >UI/UX Designing</option>
                                      <option >Digital Marketing</option>
                                      <option >Artificial Inteligence</option>
                                      <option >Graphic Designing</option>
                                      <option >Accounting & Bookkeeping</option>
                                      <option >E-Commerce</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                              <div class="contact__form-field">
                                  <label for="select">Branch*<span class="invite-text-gr-color">*</span></label>
                                  <select name="branch" id="select" required>
                                      <option  >select Branch</option>
                                      <option value="1">FLH Jutial, Gilgit</option>
                                      <option value="2">Zulfiqarabad Jutial, Gilgit</option>
                                      <option value="3" >STP Konodas, Gilgit</option>
                                  
                                  </select>
                              </div>
                          </div>
                         
                          <div class="col-lg-12">
                              <div class="contact_form_btn">
                                  <button class="thm-btn thm-btn__gradient" name="enroll" type="submit">Enroll Now</button>
                              </div>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
   

            <!-- cta start -->
            <section class="cta cta__bg">
                <div class="container">
                    <div class="cta__wrap ul_li_between">
                        <h2 class="cta__title">Looking for the Best IT Business Solutions?</h2>
                        <div class="cta__btn">
                            <a href="#" class="thm-btn thm-btn__gradient">
                                <span class="btn-anim-wrap">
                                    <span class="button-text">Get a quote</span>
                                    <span class="button-text">Get a quote</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- cta start -->

        </main>

        <footer class="site-footer pt-80 bg_img" data-background="img/bg/footer_bg.jpg">
            <div class="container">
                <div class="row pb-65 mt-none-30">
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                        <div class="footer__widget">
                            <div class="footer__logo">
                                <a href="../index.html"><img src="img/t.tech.png" width="70px" alt=""></a>
                            </div>
                            <p>We work with a passion of taking challenges and creating new ones in advertising sector.</p>
                            <a href="../about.html" class="thm-btn thm-btn__gradient mt-35">
                                    <span class="btn-anim-wrap">
                                        <span class="button-text">About us</span>
                                        <span class="button-text">About us</span>
                                    </span>
                                </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                        <div class="footer__widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <p>Subscribe our newsletter to get our latest update & news</p>
                            <form class="footer__newslater" action="#">
                                <input type="text" placeholder="Your mail address">
                                <button><i class="fa fa-paper-plane"></i></button>
                            </form>
                            <div class="social-links mt-20">
                                <a href="#!">
                                        <i class="fa fa-facebook-f"></i>
                                        <i class="fa fa-facebook-f"></i>
                                    </a>
                                <a href="#!">
                                        <i class="fa fa-twitter"></i>
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                <a href="#!">
                                        <i class="fa fa-dribbble"></i>
                                        <i class="fa fa-dribbble"></i>
                                    </a>
                                <a href="#!">
                                        <i class="fa fa-behance"></i>
                                        <i class="fa fa-behance"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                        <div class="footer__widget">
                            <h3 class="widget-title">Official info:</h3>
                            <ul class="footer__info list-unstyled">
                                <li>
                                    <a href="#!">
                                            <i class="invite-text-gr-color fa fa-map-marker"></i>
                                            <p>FLH  <br> Jutial, Gilgit </p>
                                        </a>
                                </li>
                                <li>
                                    <a href="#!">
                                            <i class="invite-text-gr-color fa fa-map-marker"></i>
                                            <p>STP  <br> konodas, Gilgit </p>
                                        </a>
                                </li>
                                <li>
                                    <a href="tel:+923555056504">
                                            <i class="invite-text-gr-color  fa fa-phone"></i>
                                            <p>+92 3555056504</p>
                                        </a>
                                </li>
                            </ul>
                            <div class="footer__open-hour mt-15">
                                <h5>Open Hours: </h5>
                                <p>Mon - Sat: 8:00 am - 2:00 am, <br> Sunday: CLOSED</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mt-30">
                        <div class="footer__widget">
                            <h3 class="widget-title">Gallery</h3>
                            <ul class="widget-gallery list-unstyled">
                              <li>
                                <a class="popup-image" href="img/gallery/gallery8.jpeg"><img src="img/gallery/gallery8.jpeg" alt=""></a>
                            </li>
                            <li>
                                <a class="popup-image" href="img/gallery/gallery2.jpeg"><img src="img/gallery/gallery2.jpeg" alt=""></a>
                            </li>
                            <li>
                                <a class="popup-image" href="img/gallery/gallery3.jpeg"><img src="img/gallery/gallery3.jpeg" alt=""></a>
                            </li>
                            <li>
                                <a class="popup-image" href="img/gallery/gallery4.jpeg"><img src="img/gallery/gallery4.jpeg" alt=""></a>
                            </li>
                            <li>
                                <a class="popup-image" href="img/gallery/gallery5.jpeg"><img src="img/gallery/gallery5.jpeg" alt=""></a>
                            </li>
                            <li>
                                <a class="popup-image" href="img/gallery/gallery6.jpeg"><img src="img/gallery/gallery6.jpeg" alt=""></a>
                            </li>
                            <li>
                                <a class="popup-image" href="img/gallery/gallery7.jpeg"><img src="img/gallery/gallery7.jpeg" alt=""></a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright-text text-center">
                    © 2024 <a href="">t.Tech Pvt(LTD)</a>. All rights reserved.
                </div>
            </div>
        </footer>
    </div>

    <!-- jquery include -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/sticky-header.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="js/jqueryui.js"></script>
    <script src="js/touchspin.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/jarallax.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/scroll-trigger.js"></script>
    <script src="js/split-text.js"></script>
    <script src="js/cursor.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/twin.js"></script>
    <script src="js/rbtools.min.js"></script>
    <script src="js/rs6.min.js"></script>
    <script src="js/rev-slider.js"></script>
    <script src="js/main.js"></script>





</body>

</html>