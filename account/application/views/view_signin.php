<?php include_once('header.php'); ?>

<div class="w3-row">
    <!--    Left Division -->
    <div class="w3-half w3-center w3-padding">
            
        <br> <h3 class="w3-blue w3-padding w3-round-xxlarge"> Welcome to RUET Website!</h3>
        <br>

        <!--    Image Slider -->
        <?php include_once('view_slider.php'); ?>

        <br> <br> <br>

    </div>

    <!--    Right Division -->

    <div class="w3-half w3-center">
        <br> <br>
        <div class="w3-card-4 w3-padding-large"> 
        <center>
            
            <h2> Welcome</h2>
            <br>
            <h4 class="w3-container w3-teal w3-padding-large w3-round-xxlarge"> Login here </h4>


            <form method="post" action="<?php echo site_url('signin/login_index'); ?>" class="formstyle">
                <?php $error_message = $this->session->userdata('error_msg'); ?>
                <?php if($error_message): ?>
                <h4 style="color:red;">
                    <?php echo $this->session->userdata('error_msg') ?>
                </h4>
                <?php $this->session->unset_userdata('error_msg') ?>
                <?php endif; ?>
                <br>


                <table class="w3-table">
                    <tr>
                        <td> <label for="username" class="w3-right-align" style="height: 30px"> Username  </label> </td>
                        <td> <input type="text" name="username" style="height: 30px;" class="w3-input" /> </td>
                    </tr>

                    <tr>
                        <td> <label for="password" class="w3-right-align" style="height: 30px"> Password </label> </td>
                        <td> <input type="password" name="password" style="height: 30px;" class="w3-input" /> </td>
                    </tr>
                </table>
                <br>

                <input type="submit" class="w3-button w3-green w3-round-xxlarge" value="Log in" />
            </form>
            
            <br>

            <a href="signup" class="w3-hover-text-green"> Need an account? Sign Up Here. </a>
        </center>
    </div>
    </div>
</div>


<?php include_once('footer.php'); ?>
