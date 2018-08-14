 <?php
    include ('contact.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include('inc/header.php');?>
<body>
    <style>
        /*
                                                                ------------------- WRITTEN BY TEAM --------------------------
                                                                +                                                              +
                                                                 +                                                              +
                                                                  +                                                              +
                                                                   +                                                              +
                                                                --------------------HIDDEN HYVE------------------------------------
                                                                */
    </style>
    <header>
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav navbar-top bg-transparent header-dark white-link">
            <div class="container-fluid nav-header-container height-85px padding-three-half-lr xs-height-70px xs-padding-15px-lr">
                <!-- Start Header Navigation -->
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-6 hidden-xs text-left">
                        <div class="social-icon">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank">
                                <i class="fa fa-facebook text-white text-deep-pink-hover" aria-hidden="true"></i>
                            </a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank">
                                <i class="fa fa-twitter text-white text-deep-pink-hover"></i>
                            </a>
                            <a class="instagram text-white" href="https://instagram.com/" target="_blank">
                                <i class="fa fa-instagram no-margin-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 text-center xs-text-left">
                        <a class="logo custom-logo" href="index.php">
                            <img src="images/headlogo.png" data-at2x="images/headlogo.png" class="default" alt="LUPC">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 text-right">
                        <div class="hamburger-menu">
                            <div class="btn btn-hamburger border-none">
                                <button class="navbar-toggle mobile-toggle" type="button" id="open-button" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                                <!--<span class="close-menu text-white font-weight-300 alt-font text-extra-large">x</span>-->
                            </div>
                            <div class="hamburger-menu-wrepper xs-text-center">
                                <div class="hamburger-logo text-left">
                                    <a href="index.php" class="logo">
                                        <img src="images/headlogo.png" data-at2x="images/headlogo.png" alt="LUPC" />
                                    </a>
                                </div>
                                <div class="btn btn-hamburger border-none" id="hamburgar-color">
                                    <button class="close-menu close-button-menu" id="close-button"></button>
                                </div>
                                <div class="animation-box">
                                    <div class="menu-middle">
                                        <div class="menu-wrapper display-table-cell vertical-align-middle text-left">
                                            <div class="equalize no-margin">
                                                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                    <form id="msform" action="javascript:void(0)" method="post">
                                                        <!-- fieldsets -->
                                                        <fieldset>
                                                            <h2 class="fs-title">Login</h2>
                                                            <input type="text" name="email" placeholder="Email" class="input border-color-medium-dark-grey bg-transparent" />
                                                            <input type="password" name="pass" class="medium-input border-color-medium-dark-grey bg-transparent" placeholder="Password"
                                                            />
                                                            <br /> Forgot Password ?
                                                            <a href="changepwd.php"> Change Password </a>
                                                            <input type="button" name="next2" class=" btn btn-deep-pink btn-rounded btn-medium margin-20px-top margin-10px-bottom next2"
                                                                value="Login" /> &nbsp;
                                                            <br /> Dont have an account ?
                                                            <a name="next" class="next">SIGN UP </a>
                                                        </fieldset>
                                                        <fieldset>
                                                            <h2 class="fs-title">Register Now!</h2>
                                                            <input type="text" name="Uname" placeholder="Name" />
                                                            <input type="text" name="Usurname" placeholder="Surname" class="input border-color-medium-dark-grey bg-transparent" />
                                                            <input type="text" name="Udept" placeholder="Department" class="input border-color-medium-dark-grey bg-transparent" />
                                                            <input type="text" name="Umatric" placeholder="Matric No" class="input border-color-medium-dark-grey bg-transparent" />
                                                            <select name="budget" id="budget" class="bg-transparent border-color-medium-dark-gray medium-input">
                                                                <option value="">select Level</option>
                                                                <option value="">400L</option>
                                                                <option value="">500L</option>
                                                            </select>
                                                            <input type="button" name="next" class=" next btn btn-deep-pink btn-rounded btn-medium margin-20px-top xs-no-margin-top"
                                                                value="Sign Up" />
                                                            <br /> Already have an account ?
                                                            <a name="previous" class="previous">SIGN IN </a>


                                                        </fieldset>
                                                        <fieldset>
                                                            <h2 class="fs-title">Change Your Password</h2>
                                                            <input type="password" name="Mpass" placeholder="Password" class="input border-color-medium-dark-grey bg-transparent" />
                                                            <input type="password" name=t ype="button" name="previous2" class=" previous2 btn btn-deep-pink btn-rounded btn-medium margin-20px-top xs-no-margin-top"
                                                                value="Confirm" />
                                                        </fieldset>

                                                        <fieldset>
                                                            <div class="display-table-cell vertical-align-middle loadLinks">
                                                                <ul class="login hamburger-menu-links main-font">
                                                                    <li>
                                                                        <a href="tentbk.php" title="tents">Tents</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="hotelbk.php" title="hotel">Hotels</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="voting.php" title="vote" class="none-active">Vote</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="maintenance.html" title="Profile" class="none-active">Year Book</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 display-table">
                                                    <div class="display-table-cell vertical-align-middle social-style-3">
                                                        <span class="text-extra-large text-deep-pink alt-font display-block margin-15px-bottom">LANDMARK UNIVERSITY PLANNING COMMITEE,</span>
                                                        <span class="text-medium alt-font display-block font-weight-300 margin-15px-bottom line-height-30">Landmark University,
                                                            <br> Kwara State, Omu-Aran
                                                            <br/>Call - +44 (0) 123 456 7890
                                                            <br/>Email -
                                                            <a href="Lmu@domain.com" class="text-white" target="_blank">Lmu@domain.com</a>
                                                        </span>
                                                        <div class="separator-line-horrizontal-medium-light2 bg-deep-pink margin-25px-tb xs-margin-15px-tb display-inline-block"></div>
                                                        <div class="social-icon-style-9">
                                                            <ul class="small-icon">
                                                                <li>
                                                                    <a class="margin-20px-right facebook" href="https://www.facebook.com/"
                                                                        target="_blank">
                                                                        <i class="fa fa-facebook"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="margin-20px-right twitter" href="http://twitter.com/"
                                                                        target="_blank">
                                                                        <i class="fa fa-twitter"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="margin-20px-right google" href="http://google.com/"
                                                                        target="_blank">
                                                                        <i class="fa fa-google"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="margin-20px-right dribbble" href="http://dribbble.com/"
                                                                        target="_blank">
                                                                        <i class="fa fa-dribbble"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="inkedin" href="http://linkedin.com/" target="_blank">
                                                                        <i class="fa fa-linkedin "></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Navigation -->
        </nav>
        <!-- End Navigation -->

    </header>
    <!--START OF THE SLIDER-->

    <section class="no-padding main-slider height-100 mobile-height wow fadeIn">
        <div class="swiper-full-screen swiper-container height-100 width-100 white-move">
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('images/grad8.jpg');">
                    <div class="opacity-extra-medium bg-black"></div>
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <h6 class="text-very-light-gray padding-ten-lr font-weight-300 margin-two-bottom sm-margin-four-bottom xs-margin-15px-bottom">SCPC</h6>
                                    <div class="alt-font text-white text-uppercase font-weight-700 letter-spacing-minus-3 title-extra-large margin-two-bottom width-60 center-col md-width-80 sm-margin-four-bottom xs-width-90 xs-margin-25px-bottom xs-letter-spacing-0">CLASS '18</div>
                                    <div class="btn-dual">
                                        <a href="tentbk.php" target="_blank" class="btn btn-transparent-white btn-small xs-margin-two-all">Tent Booking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('images/grad4.jpg');">
                    <div class="opacity-extra-medium bg-black"></div>
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <h6 class="text-very-light-gray padding-ten-lr font-weight-300 margin-two-bottom sm-margin-four-bottom xs-margin-15px-bottom">SCPC</h6>
                                    <div class="alt-font text-white text-uppercase font-weight-700 letter-spacing-minus-3 title-extra-large margin-two-bottom width-60 center-col md-width-80 sm-margin-four-bottom xs-width-90 xs-margin-25px-bottom xs-letter-spacing-0">CLASS '18</div>
                                    <div class="btn-dual">
                                        <a href="hotelbk.php" target="_blank" class="btn btn-transparent-white btn-small xs-margin-two-all">Hotel Booking</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('images/grad10.jpg');">
                    <div class="opacity-extra-medium bg-black"></div>
                    <div class="container position-relative full-screen">
                        <div class="slider-typography text-center">
                            <div class="slider-text-middle-main">
                                <div class="slider-text-middle">
                                    <h6 class="text-very-light-gray padding-ten-lr font-weight-300 margin-two-bottom sm-margin-four-bottom xs-margin-15px-bottom">SCPC</h6>
                                    <div class="alt-font text-white text-uppercase font-weight-700 letter-spacing-minus-3 title-extra-large margin-two-bottom width-60 center-col md-width-80 sm-margin-four-bottom xs-width-90 xs-margin-25px-bottom xs-letter-spacing-0">CLASS '18</div>
                                    <div class="btn-dual">
                                        <a href="maintenance.html" target="_blank" class="btn btn-transparent-white btn-small xs-margin-two-all">Year Book Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-square swiper-pagination-white"></div>
            <div class="swiper-button-next swiper-button-black-highlight display-none"></div>
            <div class="swiper-button-prev swiper-button-black-highlight display-none"></div>
            <!-- end slider pagination -->
        </div>
    </section>
    <!-- end slider section -->


    <!-- begining of the information section or minimal info section-->

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-11 col-xs-12 center-col text-center margin-six-bottom xs-margin-30px-bottom wow fadeInDown">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-large">About CLASS '18</div>
                    <h6 class="font-weight-300 text-extra-dark-gray no-margin">The focus is to assist the nation and indeed the
                        <strong class="font-weight-400">continent of Africa</strong> in self -discovery. The goal is to set the pace in making the
                        <strong
                            class="font-weight-400">Nigerian nation</strong> profitably engage her comparative advantage in human and agricultural resource
                            potentials and development.</h6>

                </div>
            </div>
            <div class="row equalize xs-equalize-auto wow fadeInUp">
                <!-- start feature box item -->
                <div class="col-md-3 col-sm-4 col-xs-12 sm-margin-six-bottom xs-margin-30px-bottom last-paragraph-no-margin  wow wobble">
                    <div class="feature-box">
                        <div class="content">
                            <a href="voting.php" <i class="icon-browser text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom"></i></a>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">VOTE</div>
                            <p class="width-85 margin-lr-auto sm-width-100">Get the opotunity to choose your desired set name, make your choice.</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-3 col-sm-4 col-xs-12 sm-margin-four-bottom xs-margin-30px-bottom last-paragraph-no-margin wow wobble">
                    <div class="feature-box">
                        <div class="content">
                            <a href="tentbk.php" <i class="icon-pricetags text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom">
                                </i>
                            </a>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">GET YOUR TENTS FAST</div>
                            <p class="width-85 margin-lr-auto sm-width-100">be the first to Get the best tents, choose size and type of tent. Hurry now!</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
                <!-- start feature box item -->
                <div class="col-md-3 col-sm-4 col-xs-12 sm-margin-four-bottom xs-margin-30px-bottom last-paragraph-no-margin wow wobble">
                    <div class="feature-box">
                        <div class="content">
                            <a href="hotelbk.php" <i class="icon-wallet text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom">
                                </i>
                            </a>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">BOOK HOTEL ROOM NOW</div>
                            <p class="width-85 margin-lr-auto sm-width-100">Hurry and book your exquisite rooms now before they are taken. start booking !</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 sm-margin-four-bottom xs-margin-30px-bottom last-paragraph-no-margin wow wobble">
                    <div class="feature-box">
                        <div class="content">
                            <a href="maintenance.html" <i class="icon-chat text-medium-gray icon-large margin-25px-bottom sm-margin-15px-bottom">
                                </i>
                            </a>
                            <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom sm-margin-5px-bottom">YEAR BOOK PROFILE</div>
                            <p class="width-85 margin-lr-auto sm-width-100"> updat your year book profile highlight those splendid campus moments !</p>
                        </div>
                    </div>
                </div>
                <!-- end feature box item -->
            </div>
            <!-- end feature box item -->
        </div>
    </section>
    <!-- end of the minimal info section -->


    <!--begining of the video section -->

    <section class="position-relative wow fadeIn">
        <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 display-table small-screen center-col">
                    <div class="display-table-cell vertical-align-middle text-center">
                        <div class="container position-relative countdown-wrapper">
                            <div class="row">
                                <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                                    <div class="position-relative overflow-hidden width-100">
                                        <span class="text-large text-outside-line-full alt-font font-weight-600 text-uppercase">Countdown To Convocation</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- start timer -->
                                <div class="col-md-12 col-sm-12 center-col">
                                    <div data-enddate="2018/07/14 09:05:00" class="countdown text-center text-white counter-box-5"></div>
                                </div>
                                <!-- end timer -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start HTML5 video -->
        <video loop="" autoplay="" controls="" muted class="html-video" poster="images/maintenance-bg.jpg">
            <source type="video/mp4" src="video/video.mp4">
            <source type="video/ogg" src="video/video.ogg">
            <source type="video/webm" src="video/video.webm">
        </video>
        <!-- end HTML5 video -->
    </section>

    <!-- end of the video section of the page-->

    <!-- begining of the info slider-->

    <section class="wow fadeIn no-padding main-slider mobile-height content-right-slider">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 col-sm-12 col-xs-12 cover-background sm-height-500px xs-height-350px wow fadeIn" style="background-image:url('images/grad11.jpg')"></div>
                <div class="swiper-full-screen swiper-container col-md-6 col-sm-12 col-xs-12 no-padding-lr white-move bg-extra-dark-gray text-center xs-padding-20px-tb wow fadeIn">
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <div class="swiper-slide last-paragraph-no-margin">
                            <div class="padding-eighteen-all md-padding-eight-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">01</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">VOTE YOUR PREFERRED SET NAME</p>
                                </div>
                                <h4 class="alt-font text-white"> VOTE YOUR PREFERRED SET NAME</h4>
                                <p class="width-90 xs-width-85 center-col">More information will be given on this page about the voting, and please note that the voting
                                    process will be based on your prefered choice so choose wisely, Thank You and God bless.</p>
                                <a href="javascript:void(0);" class="btn btn-small btn-white margin-35px-top"> Vote</a>
                            </div>
                        </div>
                        <!-- end slider item -->

                        <!-- start slider item -->
                        <div class="swiper-slide last-paragraph-no-margin">
                            <div class="padding-eighteen-all md-padding-eight-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">02</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">TTG INFORMATION.</p>
                                </div>
                                <h4 class="alt-font text-white"> About Our TTG date</h4>
                                <p class="width-90 xs-width-85 center-col">Management are making a decision about this, we will always keep you posted on all the current
                                    news about when the TTG will commence, Remain ever blessed.</p>

                            </div>
                        </div>
                        <!-- end slider item -->

                        <!-- start slider item -->
                        <div class="swiper-slide last-paragraph-no-margin">
                            <div class="padding-eighteen-all md-padding-eight-all xs-padding-15px-lr">
                                <div class="margin-30px-bottom text-center position-relative">
                                    <span class="title-large alt-font font-weight-100 text-dark-gray opacity4">03</span>
                                    <p class="alt-font font-weight-600 text-deep-pink text-uppercase position-absolute left-0 right-0 top-35 sm-top-25 xs-top-12">Tents & Hotel booking</p>
                                </div>
                                <h4 class="alt-font text-white">Closing of tent and hotel booking</h4>
                                <p class="width-90 xs-width-85 center-col">This is to inform the graduating students that they should start making all booking for hotels
                                    and tents now, because the remaining tents and hotels will soon be taken please start
                                    booking now, Remain ever blessed Thank You.</p>
                                <a href="hotelbk.php" class="btn btn-small btn-white margin-35px-top">Hotel Booking</a>
                            </div>
                        </div>
                        <!-- end slider item -->
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-button-next slider-long-arrow-white"></div>
                    <div class="swiper-button-prev slider-long-arrow-white"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of the info slider -->

    <!-- begining of the news section-->

    <section class="wow fadeIn bg-light-gray">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                    <div class="position-relative overflow-hidden width-100">
                        <span class="text-medium text-outside-line-full alt-font font-weight-600 text-uppercase">NEWS UPDATE</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-sx-12">
                    <!-- start accordion -->
                    <div class="panel-group accordion-style2" id="accordion-main">
                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseOne">
                                    <div class="panel-title">
                                        <span class="alt-font font-weight-600 text-deep-pink tab-tag">01</span>
                                        <span class="text-extra-dark-gray xs-width-80 display-inline-block">Tent & Hotel Booking</span>
                                        <i class="fa fa-angle-down pull-right text-extra-dark-gray "></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">This is to inform the graduating students that they should start making all booking for hotels
                                    and tents now, because the remaining tents and hotels will soon be taken please start
                                    booking now, Remain ever blessed Thank You.</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseTwo">
                                    <div class="panel-title">
                                        <span class="alt-font font-weight-600 text-deep-pink tab-tag">02</span>
                                        <span class="text-extra-dark-gray xs-width-80 display-inline-block">TTG countdown update</span>
                                        <i class="indicator fa fa-angle-down pull-right text-extra-dark-gray "></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">This is to inform the graduating students that they should start making all booking for hotels
                                    and tents now, because the remaining tents and hotels will soon be taken please start
                                    booking now, Remain ever blessed Thank You.</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseThree">
                                    <div class="panel-title">
                                        <span class="alt-font font-weight-600 text-deep-pink tab-tag">03</span>
                                        <span class="text-extra-dark-gray xs-width-80 display-inline-block">Vote prefered set name</span>
                                        <i class="indicator fa fa-angle-down pull-right text-extra-dark-gray "></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">More information will be given on this page about the voting, and please note that the voting
                                    process will be based on your prefered choice so choose wisely, Thank You and God bless.</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end accordion -->
                </div>

                <div class="col-md-6 col-sm-12 col-sx-12">
                    <!-- start accordion -->
                    <div class="panel-group accordion-style2" id="accordion">
                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseFour">
                                    <div class="panel-title">
                                        <span class="alt-font font-weight-600 text-deep-pink tab-tag">04</span>
                                        <span class="text-extra-dark-gray xs-width-80 display-inline-block">Vote prefered set name</span>
                                        <i class="fa fa-angle-down pull-right text-extra-dark-gray "></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse in">
                                <div class="panel-body">More information will be given on this page about the voting, and please note that the voting
                                    process will be based on your prefered choice so choose wisely, Thank You and God bless.</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseFive">
                                    <div class="panel-title">
                                        <span class="alt-font font-weight-600 text-deep-pink tab-tag">05</span>
                                        <span class="text-extra-dark-gray xs-width-80 display-inline-block">Tent & Hotel Booking</span>
                                        <i class="indicator fa fa-angle-down pull-right text-extra-dark-gray "></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">This is to inform the graduating students that they should start making all booking for hotels
                                    and tents now, because the remaining tents and hotels will soon be taken please start
                                    booking now, Remain ever blessed Thank You.</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main" href="#collapseSix">
                                    <div class="panel-title">
                                        <span class="alt-font font-weight-600 text-deep-pink tab-tag">06</span>
                                        <span class="text-extra-dark-gray xs-width-80 display-inline-block">TTG countdown update</span>
                                        <i class="indicator fa fa-angle-down pull-right text-extra-dark-gray "></i>
                                    </div>
                                </a>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="panel-body">Management are making a decision about this, we will always keep you posted on all the current
                                    news about when the TTG will commence, Remain ever blessed.</div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                    <!-- end accordion -->
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--end of the news section-->


    <!-- START OF ORGANIZERS LOGO -->

    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.4" style="background-image:url('images/grad4.jpg');">
        <div class="opacity-full bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                    <div class="position-relative overflow-hidden width-100">
                        <span class="text-medium text-outside-line-full alt-font font-weight-600 text-uppercase">OUR ORGANIZERS</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="swiper-slider-clients swiper-container white-move">
                    <div class="swiper-wrapper">
                        <!-- start slider slide -->
                        <div class="swiper-slide text-center">
                            <img src="images/logo2.png" alt="Lmu Logo">
                        </div>
                        <!-- end slider slide -->
                        <!-- start slider slide -->
                        <div class="swiper-slide text-center">
                            <img src="images/logo2.png" alt="Lmu Logo">
                        </div>
                        <!-- end slider slide -->
                        <!-- start slider slide -->
                        <div class="swiper-slide text-center">
                            <img src="images/logo2.png" alt="Lmu Logo">
                        </div>
                        <!-- end slider slide -->
                        <!-- start slider slide -->
                        <div class="swiper-slide text-center">
                            <img src="images/logo2.png" alt="Lmu Logo">
                        </div>
                        <!-- end slider slide -->
                        <!-- start slider slide -->
                        <div class="swiper-slide text-center">
                            <img src="images/logo2.png" alt="Lmu Logo">
                        </div>
                        <!-- end slider slide -->
                        <!-- start slider slide -->
                        <div class="swiper-slide text-center">
                            <img src="images/logo2.png" alt="Lmu Logo">
                        </div>
                        <!-- end slider slide -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END OF THE ORGANIZERS LOGO SECTION-->


    <!-- start of the commitee members -->

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-12 center-col text-center margin-100px-bottom xs-margin-40px-bottom">
                    <div class="position-relative overflow-hidden width-100">
                        <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">PLANNING COMMITEE</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="position-relative">
                    <div class="swiper-container black-move blog-slider swiper-four-slides swiper-pagination-bottom">
                        <div class="swiper-wrapper">
                            <!-- start team item -->
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp">
                                <figure>
                                    <div class="team-image xs-width-100">
                                        <img src="images/team13.jpg" alt="">
                                        <div class="overlay-content text-center">
                                            <div class="display-table height-100 width-100">
                                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-six-all">
                                                    <span class="text-white text-small display-inline-block no-margin text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                        dummy text.</span>
                                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                                    <a href="http://www.facebook.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="http://www.twitter.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="http://www.plus.google.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="http://www.instagram.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                                    </div>
                                    <figcaption>
                                        <div class="team-member-position margin-20px-top text-center">
                                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Herman Miller</div>
                                            <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end team item -->
                            <!-- start team item -->
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp" data-wow-delay="0.2s">
                                <figure>
                                    <div class="team-image xs-width-100">
                                        <img src="images/team16.jpg" alt="">
                                        <div class="overlay-content text-center">
                                            <div class="display-table height-100 width-100">
                                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-six-all">
                                                    <span class="text-white text-small display-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                        dummy text.</span>
                                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                                    <a href="http://www.facebook.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="http://www.twitter.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="http://www.plus.google.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="http://www.instagram.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                                    </div>
                                    <figcaption>
                                        <div class="team-member-position margin-20px-top text-center">
                                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Herman Miller</div>
                                            <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end team item -->
                            <!-- start team item -->
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp" data-wow-delay="0.4s">
                                <figure>
                                    <div class="team-image xs-width-100">
                                        <img src="images/team17.jpg" alt="">
                                        <div class="overlay-content text-center">
                                            <div class="display-table height-100 width-100">
                                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-six-all">
                                                    <span class="text-white text-small display-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                        dummy text.</span>
                                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                                    <a href="http://www.facebook.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="http://www.twitter.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="http://www.plus.google.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="http://www.instagram.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                                    </div>
                                    <figcaption>
                                        <div class="team-member-position margin-20px-top text-center">
                                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Herman Miller</div>
                                            <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end team item -->
                            <!-- start team item -->
                            <div class="swiper-slide padding-10px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp" data-wow-delay="0.6s">
                                <figure>
                                    <div class="team-image xs-width-100">
                                        <img src="images/team17.jpg" alt="">
                                        <div class="overlay-content text-center">
                                            <div class="display-table height-100 width-100">
                                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-six-all">
                                                    <span class="text-white text-small display-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                        dummy text.</span>
                                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                                    <a href="http://www.facebook.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="http://www.twitter.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="http://www.plus.google.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="http://www.instagram.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                                    </div>
                                    <figcaption>
                                        <div class="team-member-position margin-20px-top text-center">
                                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Herman Miller</div>
                                            <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end team item -->
                            <!-- start team item -->
                            <div class="swiper-slide padding-15px-lr team-block text-left team-style-1 md-margin-40px-bottom wow fadeInUp">
                                <figure>
                                    <div class="team-image xs-width-100">
                                        <img src="images/team18.jpg" alt="">
                                        <div class="overlay-content text-center">
                                            <div class="display-table height-100 width-100">
                                                <div class="vertical-align-bottom display-table-cell icon-social-small padding-six-all">
                                                    <span class="text-white text-small display-inline-block no-margin">Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                        dummy text.</span>
                                                    <div class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb"></div>
                                                    <a href="http://www.facebook.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="http://www.twitter.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="http://www.plus.google.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a href="http://www.instagram.com/" target="_blank" class="text-white">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="team-overlay bg-extra-dark-gray opacity8"></div>
                                    </div>
                                    <figcaption>
                                        <div class="team-member-position margin-20px-top text-center">
                                            <div class="text-small font-weight-500 text-extra-dark-gray text-uppercase">Herman Miller</div>
                                            <div class="text-extra-small text-uppercase text-medium-gray">Co-Founder / Design</div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end team item -->
                        </div>
                        <div class="swiper-pagination swiper-pagination-four-slides"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end of the comittee section of the page-->
    <style>
        /*
        ------------------- WRITTEN BY TEAM --------------------------
        +                                                              +
         +                                                              +
          +                                                              +
           +                                                              +
        --------------------HIDDEN HYVE------------------------------------
        */
    </style>

    <!-- start of the contact form-->

<section id="contact" class="wow fadeIn no-padding bg-extra-dark-gray">
        <div class="container-fluid">
            <div class="row equalize sm-equalize-auto">
                <div class="col-md-6 col-sm-12 col-xs-12 cover-background sm-height-550px xs-height-350px wow fadeIn" style="background: url(images/grad5.jpg)"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="padding-eleven-all text-center xs-no-padding-lr bg-extra-dark-gray ">
                        <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom xs-margin-three-bottom">Fill out the form and we'll be in touch soon!</div>
                        <h5 class="margin-55px-bottom text-dark-gray alt-font font-weight-600 text-uppercase sm-margin-30px-bottom xs-margin-15px-bottom">Let us know if you have any issues</h5>
                        <div>
                        <?php if($msg != ''):?>
                                <div class="alert <?php echo $msgClass;?> wow fadeInDown" role="alert"><?php echo $msg?></div>
                        <?php endif; ?>
                            <form id="contact-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
                                <div id="success-contact-form" class="no-margin-lr"></div>
                                <input type="text" name="name" id="name" placeholder="Name*" class="input-border-bottom">
                                <input type="text" name="email" id="email" placeholder="E-mail*" class="input-border-bottom">
                                <input type="text" name="subject" id="subject" placeholder="Subject" class="input-border-bottom">
                                <textarea type="text" name="message" id="comment" placeholder="Your Message" class="input-border-bottom"></textarea>
                                <button id="contact-us-button" name="send" type="submit" class="btn btn-small btn-deep-pink margin-30px-top sm-margin-10px-top xs-margin-three-top">send message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- END OF THE CONTACT FORM -->

    <!-- start of the footer -->
    <footer class="footer-standard-dark bg-extra-dark-gray">
        <div class="footer-widget-area padding-five-tb xs-padding-30px-tb">
            <div class="container">
                <div class="row equalize xs-equalize-auto">
                    <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray sm-no-border-right sm-margin-30px-bottom xs-text-center">

                        <!--<div class="col-md-3 col-sm-6 col-xs-12 sm-margin-six-bottom xs-margin-20px-bottom last-paragraph-no-margin"> -->

                        <!-- start logo -->
                        <a href="index.html" class="margin-20px-bottom display-inline-block">
                            <img class="footer-logo" src="images/headlogo.png" data-at2x="images/headlogo.png" alt="LUPC">
                        </a>
                        <!-- end logo -->
                        <p class="text-small width-95 xs-width-100">Here at Landmark University, We train leaders that are capable of making unique impacts in the world
                            .</p>
                        <!-- start social media -->
                        <div class="social-icon-style-8 display-inline-block vertical-align-middle">
                            <ul class="small-icon no-margin-bottom">
                                <li>
                                    <a class="facebook text-white" href="https://www.facebook.com/" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="twitter text-white" href="https://twitter.com/" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="google text-white" href="https://plus.google.com/" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram text-white" href="https://instagram.com/" target="_blank">
                                        <i class="fa fa-instagram no-margin-right" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end social media -->
                    </div>
                    <!-- start additional links -->
                    <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-no-border-right sm-margin-30px-bottom xs-text-center">
                        <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Additional Links</div>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-small" href="maintenance.html">YEAR BOOK</a>
                            </li>
                            <li>
                                <a class="text-small" href="https://webmail2.lmu.edu.ng/">WEBMAIL</a>
                            </li>
                            <li>
                                <a class="text-small" href="https://iportal.lmu.edu.ng/gateway">STUDENT PORTAL</a>
                            </li>
                            <li>
                                <a class="text-small" href="tentbk.php">TENT BOOKING</a>
                            </li>
                            <li>
                                <a class="text-small" href="hotelbk.php">HOTEL BOOKING</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end additional links -->
                    <!-- start contact information -->
                    <div class="col-md-3 col-sm-6 col-xs-12 widget border-right border-color-medium-dark-gray padding-45px-left sm-padding-15px-left sm-clear-both sm-no-border-right  xs-margin-30px-bottom xs-text-center">
                        <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-10px-bottom font-weight-600">Contact Info</div>
                        <p class="text-small display-block margin-15px-bottom width-80 xs-center-col">Landmark University
                            <br> Omu-Aran, Kwara State, Nigeria.</p>
                        <div class="text-small">Email:
                            <a href="lmu@domain.com">lmu@domain.com</a>
                        </div>
                        <div class="text-small">Phone: +44 (0) 123 456 7890</div>
                        <a href="contact-us-modern.html" class="text-small text-uppercase text-decoration-underline">View Direction</a>
                    </div>
                    <!-- end contact information -->
                    <!-- start instagram -->

                    <div class="col-md-3 col-sm-6 col-xs-12 widget padding-45px-left sm-padding-15px-left xs-text-center">
                        <div class="widget-title alt-font text-small text-medium-gray text-uppercase margin-20px-bottom font-weight-600">Instagram posts</div>
                        <div class="instagram-follow-api">
                            <ul id="instaFeed-footer"></ul>
                            <!-- InstaWidget -->
                            <a href="https://instagram.com/lmupathfinders_slaying" id="link-da850e070a0effb511268a2de46d8eceeabf793cce06dbf682eedf4422a60916">@lmupathfinders_slaying</a>
                            <script src="https://instawidget.net/js/instawidget.js?u=da850e070a0effb511268a2de46d8eceeabf793cce06dbf682eedf4422a60916&width=300px"></script>
                            <script>
                                // onclick event is assigned to the #button element.
                                document.getElementById(
                                        "link-da850e070a0effb511268a2de46d8eceeabf793cce06dbf682eedf4422a60916").onclick =
                                    function () {
                                        window.location.href = "https://instagram.com/lmupathfinders_slaying";
                                    };
                            </script>
                            <!-- Instawidget end -->
                        </div>
                    </div>
                    <!-- end instagram -->
                </div>
            </div>
        </div>
        <div class="bg-dark-footer padding-50px-tb text-center xs-padding-30px-tb">
            <div class="container">
                <div class="row">
                    <!-- start copyright -->
                    <div class="col-md-4 col-sm-4 col-xs-12 text-left text-small xs-text-center">&copy; 2017 Student Council Planning Commitee.
                        <a href="https://lmu.edu.ng/" target="_blank" class="text-dark-gray">Landmark University</a>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-left text-small xs-text-center">&copy; Proudly Hidden Hyve.</div>
                    <div class="col-md-4 col-sm-4 col-xs-12 text-right text-small xs-text-center">
                        <a href="javascript:void(0);" class="text-dark-gray">Term and Condition</a>&nbsp;&nbsp;|&nbsp;
                        <a href="javascript:void(0);" class="text-dark-gray">Privacy Policy</a>
                    </div>
                    <!-- end copyright -->
                </div>
            </div>
        </div>
    </footer>
    <!-- end of the footer -->
    <a class="scroll-top-arrow" href="javascript:void(0);">
        <i class="ti-arrow-up"></i>
    </a>
    <!-- end scroll to top  -->
    <!-- javascript libraries -->
   <?php include('inc/scripts.php');?>
   <!-- end of javascript library-->
    <style>
        /*
        ------------------- WRITTEN BY TEAM --------------------------
        +                                                              +
         +                                                              +
          +                                                              +
           +                                                              +
        --------------------HIDDEN HYVE------------------------------------
        */
    </style>
</body>

</html>