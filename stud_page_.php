<?php
//Include authentication
require("process/auth.php");

//Include database connection
require("config/db.php");

//Include class Voting
require("classes/Voting.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/header.php');?>
<body>

 <style>
        /*é
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
                                                    <!--<form method="post" action="process/login.php" role="form"> -->
                                                         <form id="msform" action="javascript:void(0)" method="post">
                                                        <!-- fieldsets -->
                                                        <fieldset>
                                                            <h3 class="fs-title">Welcome <?php echo $_SESSION['NAME']; ?></h3>
                                                            <div class="display-table-cell vertical-align-middle loadLinks">
                                                                <ul class="login hamburger-menu-links main-font">
                                                                    <li>
                                                                        <a href="maintenance.html" title="tents">Tents</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="maintenance.html" title="hotel">Hotels</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="stud_page.php" title="vote" class="none-active">Vote</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="maintenance.html" title="Profile" class="none-active">Year Book</a>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </fieldset> </form>
                                                        
                                                    <!--</form> -->
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 display-table">
                                                    <div class="display-table-cell vertical-align-middle social-style-3">
                                                        <span class="text-extra-large text-deep-pink alt-font display-block margin-15px-bottom">LANDMARK UNIVERSITY PLANNING COMMITEE,</span>
                                                        <span class="text-medium alt-font display-block font-weight-300 margin-15px-bottom line-height-30">Landmark University,
                                                            <br> Kwara State, Omu-Aran
                                                            <br/>Call - +44 (0) 123 456 7890
                                                            <br/>Email -
                                                            <a href="Lmu@domain.com" class="text-white" target="_blank">scpc@lmu.edu.ng</a>
                                                        </span>
                                                        <span class="text-deep-pink text-large alt-font display-block margin-15px-bottom text-deep-pink"><a href="process/logout.php">Logout</a></span>
                                                         

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

            <section class="wow fadeIn parallax height-100" data-stellar-background-ratio="0.5" style="background-image:url('images/grad8.jpg');">

            <?php
            $readOrganization = new Voting();
            $rtnReadOrg = $readOrganization->READ_ORG();
            ?>

            <div class="container-fluid padding-five-lr">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="text-wrapper">
                         <h3> MAKE YOUR VOICE LOUDER </h3>
                        <h6>START VOTING NOW !</h6>
                        <?php if($rtnReadOrg) { ?>
                        <form action="voting_page.php" method="GET" role="form">
                           <div class="btn-dual">
                                        
                             <?php while($rowOrg = $rtnReadOrg->fetch_assoc()) { ?>
                        <a href="<?php echo $rowOrg['link']; ?>.php" target="_blank" class="btn btn-transparent-white btn-medium xs-margin-two-all"><?php echo $rowOrg['org']; ?>
                            
                        </a>
                        <?php } //End while ?>
                        <input type="submit" name="submit" value="<?php echo $rowOrg['org']; ?>" class="" > 
                        
                            </div> </form>
                            <?php $rtnReadOrg->free(); ?>
            <?php } //End if ?>
                      </div>
                        
                  </div>
   
                </div>
            </div>
        </section>
    <?php include_once('inc/scripts.php'); ?>
</body>
</html>