<?php include_once('header.php'); ?>

<style>
    .w3-input{
        max-width: 60%;
        min-width: 30px;
    }
    
    .w3-select{
        max-width: 60%;
        min-width: 30px;
    }

</style>

    

<div class="w3-center w3-padding-large w3-margin">
    <h2> Create a new account!</h2>
</div>

<div class="w3-card-2 w3-container w3-padding">

    <h4 class="w3-teal w3-center w3-padding-large">
        <b> Sign Up Form </b>
    </h4>
    <center>
        <div class="w3-padding-large">
            <style>
                span {
                    color: red
                }
            </style>

            <form method="post" action="<?php echo site_url('signup/register'); ?>" class="formstyle">
                <h5 style="color: red;"> * All fields are mandatory.</h5>

                <?php $not_success_msg = $this->session->userdata('not_success_msg'); ?>
                <?php if($not_success_msg): ?>
                <h5 style="color: red;">
                    <?php echo $this->session->userdata('not_success_msg') ?>
                </h5>

                <?php $this->session->unset_userdata('not_success_msg') ?>
                <?php endif; ?> <br>

                <table class="w3-table-all w3-mobile">

                    <tr>
                        <td> <label for="account_id" style="height: 30px" class="w3-right-align"> Rupali Bank account </label> </td>
                        <td> <input type="text" class="w3-input" name="account_id" placeholder="1XXXX" style="height: 40px;" /> <span> * </span> </td>
                    </tr>

                    <tr>
                        <td> <label for="id" style="height: 30px" class="w3-right-align"> RUET  ID </label> </td>
                        <td> <input type="text" class="w3-input" name="id" placeholder="13XXXX" style="height: 40px;" /> <span> * </span> </td>
                    </tr>

                    <tr>
                        <td> <label for="name" style="height: 30px" class="w3-right-align"> Name </label> </td>
                        <td> <input type="text" class="w3-input" name="name" placeholder="Utpal Barman" style="height: 40px;" /> <span> * </span> </td>
                    </tr>

                  

                    <tr>
                        <td> <label for="email" style="height: 30px" class="w3-right-align"> Email  </label> </td>
                        <td> <input type="text" class="w3-input" name="email" placeholder="name@example.com" style="height: 40px; " /> <span> * </span> </td>
                    </tr>

                    <tr>
                        <td> <label for="mobile" style="height: 30px" class="w3-right-align"> Mobile  </label> </td>
                        <td> <input type="text" class="w3-input" name="mobile" placeholder="016XXXXXXXX" style="height: 40px; " /> <span> * </span> </td>
                    </tr>
                    
                    
                      <tr>
                        <td> <label for="dept" style="height: 30px" class="w3-right-align"> Department </label> </td>
                        <td>
                            <select name="dept" class="w3-select w3-border" style="height: 40px; ">
                                <option value="-">---</option>    
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="CE">CE</option>
                                <option value="ME">ME</option>
                                <option value="ETE">ETE</option>
                                <option value="ECE">ECE</option>
                                <option value="IPE">IPE</option>
                                <option value="GCE">GCE</option>
                                <option value="MTE">MTE</option>
                                <option value="ARCHI">ARCHI</option>
                                <option value="URP">URP</option>
                                <option value="CFPE">CFPE</option>
                            </select> <span> * </span>
                        </td>
                    </tr>

                    <tr>
                        <td> <label for="series" style="height: 30px" class="w3-right-align"> Series </label> </td>
                        <td>
                            <select name="series" class="w3-select w3-border" style="height: 40px;">
                                <option value="-">---</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2009">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                
                            </select> <span> * </span> </td>
                    </tr>

                    <tr>
                        <td> <label for="username" style="height: 30px" class="w3-right-align"> Username </label> </td>
                        <td> <input type="text" class="w3-input" name="username" placeholder="username" style="height: 40px; " /> <span> * </span> </td>
                    </tr>

                    <tr>
                        <td> <label for="password" style="height: 30px" class="w3-right-align"> Password  </label> </td>

                        <td> <input type="password" name="password" style="height: 40px; " class="w3-input" /> <span> *  </span> </td>
                    </tr>



                </table>
                <br>

                <input type="submit" class="w3-button w3-round-xxlarge w3-green" value="Submit" />

            </form><br>
            <a href="signin" class="w3-hover-text-green"> I already have an account. Sign in here! </a>
        </div>
    </center>
</div>


<?php include_once('footer.php'); ?>