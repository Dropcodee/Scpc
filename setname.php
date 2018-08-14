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
<?php include_once('inc/header.php'); ?>

<body>

  <!--navigarion menu-->
  <header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top header-dark bg-transparent nav-box-width white-link">
      <div class="container-fluid nav-header-container">
        <div class="row">
          <!-- start logo -->
          <div class="col-md-2 col-xs-5">
            <a href="index.php" title="Lmu" class="logo">
              <img src="images/headlogo.png" data-at2x="images/headlogo.png" class="logo-light default" alt="Lmu">
            </a>
          </div>
          <!-- end logo -->
          <div class="col-md-7 col-xs-2 width-auto pull-right accordion-menu xs-no-padding-right">
            <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
              <span class="sr-only">toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse pull-right" id="navbar-collapse-toggle-1">
              <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                <!-- start menu item -->
                <li class="dropdown megamenu-fw">
                  <h4 style="text-align: center;"><?php echo $org; ?> Voting Page</h4>
                    <i class="fa fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                  </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navigation -->
  </header>

  <?php
if(isset($_GET['organization'])) {
    $org = $_GET['organization'];
}
?>

<?php

$readPos = new Voting();
$rtnReadPos = $readPos->READ_POSITION($org);

?>

  <!-- START OF THE VOTING OPTIONS-->
   <section class="wow fadeIn"  style="background-image: url('images/backimg.jpg');" >
            <div class="container">
               <?php if($rtnReadPos) { ?>
                <div class="row equalize xs-equalize-auto margin-three-bottom">
                <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-two-left wow fadeInUp" data-wow-delay="0.2s"> 
            <?php
            if(isset($_POST['vote'])) {
                $org            = trim($_POST['org']);
                $pos            = trim($_POST['pos']);
                $candidate_id   = trim($_POST['nominee']);
                $voters_id       = trim($_POST['voter_id']);


                $insertVote = new Voting();
                $rtnInsertVote = $insertVote->VOTE_NOMINEE($org, $pos, $candidate_id, $voters_id);
            }

            ?>
              <div class="custom-card">
                            <?php while($rowPos = $rtnReadPos->fetch_assoc()) { ?>
                  
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
                  <?php
                        $readNominee = new Voting();
                        $rtnReadNominee = $readNominee->READ_NOMINEES($org, $rowPos['pos']);
                        ?>

                        <?php if($rtnReadNominee) { ?>
                        <?php while($rowNominee = $rtnReadNominee->fetch_assoc()) { ?>
                <div class="image-container">
                    <div class="image-wrapper">
                      <img src="<?php echo $rowNominee['link']; ?>">" alt="">
                    </div>
                  </div>
                  <div class="desc">
                    <strong> <?php echo $rowNominee['id']; ?>"><?php echo $rowNominee['name']; ?></strong>
                  </div>
                  <?php } //End while ?>
                   <?php } //End if ?>
                        <input type="hidden" name="org" value="<?php echo $org; ?>">
                        <input type="hidden" name="pos" value="<?php echo $rowPos['pos']; ?>">
                        <input type="hidden" name="voter_id" value="<?php echo $_SESSION['ID']; ?>">
                        <button type="submit" name="vote" class=" btn-btn btn btn-transparent-white btn-medium margin-20px-top margin-10px-bottom next2" value="Vote" 
                        <?php if($rtnValVote->num_rows > 0) { ?>
                                <?php echo "class='btn btn-default disabled'>"; ?>
                                <?php } else { ?>
                                <?php echo "class='btn btn-info'>"; ?>
                                <?php } //End if ?>
                        >Vote</button>          
                         <a href="index.php" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">...<i class="ti-arrow-up"></i></a> 
                          </form>   
                          <?php } //End while ?>                          
                  <!--<div class="btn-dual btn-custom">
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-up"></i></a>
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-down"></i></a>
                </div>-->
              </div>
            </div>
            </div>
            <?php } //End if ?>
        </div>
        
                    
                    <!-- end feature box item -->
                    <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-two-left wow fadeInUp" data-wow-delay="0.2s"> 
                           <div class="custom-card">
                  <div class="image-container">
                    <div class="image-wrapper">
                      <img src="images/WordArt2.jpeg" alt="">
                    </div>
                  </div>
                  <div class="desc">
                    <strong> Eva Lorde</strong>
                  </div>
                  <div class="btn-dual btn-custom">
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-up"></i></a>
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-down"></i></a>
                </div>
              </div>
        </div>
                    
                    <!-- end feature box item -->
                    <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-two-left wow fadeInUp" data-wow-delay="0.2s"> 
                           <div class="custom-card">
                  <div class="image-container">
                    <div class="image-wrapper">
                      <img src="images/WordArt3.jpeg" alt="">
                    </div>
                  </div>
                  <div class="desc">
                    <strong> Eva Lorde</strong>
                  </div>
                  <div class="btn-dual btn-custom">
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-up"></i></a>
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-down"></i></a>
                </div>
              </div>
        </div>
                    
                    <!-- end feature box item -->
                </div>
                <div class="row equalize xs-equalize-auto">                   
                    <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-two-left wow fadeInUp" data-wow-delay="0.2s"> 
                           <div class="custom-card">
                  <div class="image-container">
                    <div class="image-wrapper">
                      <img src="images/WordArt4.jpeg" alt="">
                    </div>
                  </div>
                  <div class="desc">
                    <strong> Eva Lorde</strong>
                  </div>
                  <div class="btn-dual btn-custom">
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-up"></i></a>
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-down"></i></a>
                </div>
              </div>
        </div>
                    
                    <!-- end feature box item --> 

                    <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-two-left wow fadeInUp" data-wow-delay="0.2s"> 
                           <div class="custom-card">
                  <div class="image-container">
                    <div class="image-wrapper">
                      <img src="images/WordArt5.jpeg" alt="">
                    </div>
                  </div>
                  <div class="desc">
                    <strong> Eva Lorde</strong>
                  </div>
                  <div class="btn-dual btn-custom">
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-up"></i></a>
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-down"></i></a>
                </div>
              </div>
        </div>
                    
                    <!-- end feature box item -->
                     <!-- start features box item -->
                        <div class="col-md-4 col-sm-6 col-xs-12 padding-two-left wow fadeInUp" data-wow-delay="0.2s"> 
                           <div class="custom-card">
                  <div class="image-container">
                    <div class="image-wrapper">
                      <img src="images/WordArt6.jpeg" alt="">
                    </div>
                  </div>
                  <div class="desc">
                    <strong> Eva Lorde</strong>
                  </div>
                  <div class="btn-dual btn-custom">
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-up"></i></a>
                    <a href="tentbk.php" target="_blank" class=" btn-btn btn btn-transparent-white btn-small xs-margin-two-all">Vote<i class="ti-arrow-down"></i></a>
                </div>
              </div>
        </div>
                    
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end about agency section -->
  <!-- END OF VOTING OPTIONS -->

  <!-- JAVASCRIPT LIBRARY -->
  <?php include_once('inc/scripts.php');?>
</body>

</html>