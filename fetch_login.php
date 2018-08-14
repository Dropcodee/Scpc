<?php

?>
<style>
    #second {
        display: none;
    }
    #signup, #signin {
        cursor: pointer;
    }
</style>
<script>
    $(document).ready(function(){
    // $('#first').show();
    // $('#second').hide();
    // To load Login form
    $(document).on('click', '#signup', function(){
        $('#first').fadeOut("fast", function(){
            $("#second").fadeIn("fast");
        });
    });

    //To load signup form
    $('#signin').click(function(){
        $('#first').fadeIn("fast", function(){
            $('#second').fadeOut('fast');
        });
    });
});
</script>
<form action="" id="first">
    <input type="text" placeholder="Name">
    <br>
    <input type="password" placeholder="Password">
    <br>
    <input type="submit" value="Signup">
    <br>
    Do you have an acct with us?  <a id="signup">login</a>
</form>
<form action="" id="second">
    <input type="text" placeholder="Name">
    <br>
    <input type="password" placeholder="Password">
    <br>
    <input type="submit" value="Signup">
    <br>
    Not yet a member?  <a id="signin">signup</a>
</form>