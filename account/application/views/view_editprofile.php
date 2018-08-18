<div class="w3-padding-large w3-green w3-center">
    <h4>Edit Profile</h4>
</div>
<div class="w3-padding-large w3-center">

    <style>
        span {
            color: red
        }

    </style>

    <form method="post" action="<?php echo site_url('edit_profile/update_database'); ?>" class="formstyle">


        <?php $not_success_msg = $this->session->userdata('not_success_msg'); ?>
        <?php if($not_success_msg): ?>
        <h5 style="color: red;">
            <?php echo $this->session->userdata('not_success_msg') ?>
        </h5>

        <?php $this->session->unset_userdata('not_success_msg') ?>
        <?php endif; ?> <br>

        <h3> <b> Student ID: <?php echo $this->session->userdata('id') ?> </b></h3>

        <br/>

        <div align="center">

            <table>

<!--                <tr>
                    <td> <label for="account_id" style="height: 30px" class="w3-right-align"> Bank Account ID :</label> </td>
                    <td> <input type="text" name="account_id" value="<?php // echo $this->session->userdata('account_id') ?>" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>-->


                <tr>
                    <td> <label for="name" style="height: 30px" class="w3-right-align"> Name :</label> </td>
                    <td> <input type="text" name="name" value="<?php echo $this->session->userdata('name') ?>" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>

                <tr>
                    <td> <label for="dept" style="height: 30px" class="w3-right-align"> Department :</label> </td>
                    <td> <input type="text" name="dept" style="height: 30px; margin-left: 30px" value="<?php echo $this->session->userdata('dept') ?>" /> <span> * </span> </td>
                </tr>

                <tr>
                    <td> <label for="series" style="height: 30px" class="w3-right-align"> Series :</label> </td>
                    <td> <input type="text" name="series" style="height: 30px; margin-left: 30px" value="<?php echo $this->session->userdata('series') ?>" /> <span> * </span> </td>
                </tr>

                <tr>
                    <td> <label for="email" style="height: 30px" class="w3-right-align"> Email  :</label> </td>
                    <td> <input type="text" name="email" value="<?php echo $this->session->userdata('email') ?>" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>

                <tr>
                    <td> <label for="mobile" style="height: 30px" class="w3-right-align"> Mobile  :</label> </td>
                    <td> <input type="text" name="mobile" value="<?php echo $this->session->userdata('mobile') ?>" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>

                <tr>
                    <td> <label for="username" style="height: 30px" class="w3-right-align"> Username :</label> </td>
                    <td> <input type="text" name="username" value="<?php echo $this->session->userdata('username') ?>" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>

                <!--                <tr>
                    <td> <label for="password" style="height: 30px" class="w3-right-align"> <b>New Password  :</b></label> </td>

                    <td> <input type="password" name="password" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>

                <tr>
                    <td> <label for="repassword" style="height: 30px" class="w3-right-align"> <b>Repeat New Password  :</b></label> </td>

                    <td> <input type="password" name="repassword" style="height: 30px; margin-left: 30px" /> <span> * </span> </td>
                </tr>-->


            </table>
        </div>
        <br>

        <input type="submit" class="btn btn-success btn-large" value="Submit" />

    </form>
    
    
    <br> <br>
    



</div>
