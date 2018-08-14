<!DOCTYPE html>
<html lang="en">
<?php include_once('inc/header.php');?>
<body>
            <section class="wow fadeIn parallax height-100" data-stellar-background-ratio="0.5" style="background-image:url('images/grad8.jpg');">
            <div class="container-fluid padding-five-lr">
              <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="text-wrapper">
                         <h3> MAKE YOUR VOICE LOUDER </h3>
                        <h6>START VOTING NOW !</h6>
                      </div>
                  </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-xs-12">
                            <div class="custom-card" >
                    <div class="desc">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
                            <p class="help-block"><b><?php echo $rowPos['pos']; ?></b></p>
                        <?php
                        $readNominee = new Voting();
                        $rtnReadNominee = $readNominee->READ_NOMINEES($org, $rowPos['pos']);
                        ?>

                        <?php if($rtnReadNominee) { ?>
                            <div class="form-group">
                                <select name="nominee" class="form-control">
                                    <option value="">*****Select Nominee*****</option>
                                    <?php while($rowNominee = $rtnReadNominee->fetch_assoc()) { ?>
                                    <option value="<?php echo $rowNominee['id']; ?>"><?php echo $rowNominee['name']; ?></option>
                                    <?php } //End while ?>
                                </select>
                            </div>
                        <?php } //End if ?>
                        <input type="hidden" name="org" value="<?php echo $org; ?>">
                        <input type="hidden" name="pos" value="<?php echo $rowPos['pos']; ?>">
                        <input type="hidden" name="voter_id" value="<?php echo $_SESSION['ID']; ?>">

                    <?php
                    $validateVote = new Voting();
                    $rtnValVote = $validateVote->VALIDATE_VOTE($org, $rowPos['pos'], $_SESSION['ID'])
                    ?>
                        <button type="submit" name="vote"
                                <?php if($rtnValVote->num_rows > 0) { ?>
                                <?php echo "class='btn btn-default disabled'>"; ?>
                                <?php } else { ?>
                                <?php echo "class='btn btn-info'>"; ?>
                                <?php } //End if ?>
                            Vote
                        </button>
                </form><hr />
                    </div>
                </div>
                    </div>
                    </div>
        </section>

    <!-- voting options select -->

    <section class="wow fade-In ">

    </section>
    <?php include_once('scripts.php'); ?>
</body>
</html>