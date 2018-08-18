<?php include_once('header.php'); ?>

<div class="container-fluid">

    <!--    Header-->

    <div class="w3-center">

        <div class="w3-wide" style="margin-top: 30px;">
            <h3> Welcome to RUET account! </h3>
        </div>

        <br/>

        <!--    button bars-->

        <div class="container w3-padding" style="width : 60%;">
            <div class="w3-left w3-padding-large "> <img src="img/icon_pro.png" class="w3-animate-opacity" />

                <button class="btn-success w3-red w3-padding" onclick="location.href='stu_main#active'">Profile</button>
                <button class="btn-success tablink w3-padding w3-grayscale" onclick="openLink(event,'edit')">Edit Profile</button>
                <button class="btn-success tablink w3-padding w3-grayscale" onclick="openLink(event,'help')">Help</button>
            </div>



            <div class="w3-right w3-padding-large w3-border w3-round-xxlarge w3-gray w3-animate-left"> <img src="img/icon_pay.png" class="w3-animate-left" />
                <button class="btn-success w3-padding" type="submit" onclick="location.href='pay#active'"> Payments </button></div>

        </div>

        <br/>

        <!--Start of black borderd box-->

        <div style="border: 2px solid black; margin: 60px;">

            <?php 
            $current_user_data = array();
            $current_user_data['account_id'] = $this->welcome_model->get_profile_info()->account_id;
            $current_user_data['id'] = $this->welcome_model->get_profile_info()->id;
            $current_user_data['name'] = $this->welcome_model->get_profile_info()->name;
            $current_user_data['email'] = $this->welcome_model->get_profile_info()->email;
            $current_user_data['dept'] = $this->welcome_model->get_profile_info()->dept;
            $current_user_data['series'] = $this->welcome_model->get_profile_info()->series;
            $current_user_data['mobile'] = $this->welcome_model->get_profile_info()->mobile;

            $this->session->set_userdata($current_user_data);
        ?>


<?php
    $connect = mysqli_connect("localhost", "root", "");
    $select = mysqli_select_db($connect, "ruet");

    $query = mysqli_query($connect, "SELECT balance FROM balance WHERE account_id = '".$_SESSION['account_id']."'");
    
    $getBalance = mysqli_fetch_array($query);
            
                    $username = $_SESSION['username'];
?>


                <!--        Left Column for Profile Pic and Username-->

                <div class="w3-row">
                    <div class="w3-third w3-padding">
                        <center> <br>
                            <img src="uploads/<?php echo $username; ?>.jpg?random=<?php echo time();?>" class="w3-circle" style="max-width: 100px;" /> <br/>
                            <b> <h2> <?php echo $_SESSION['name'] ?> </h2> </b>
                        </center>

                        <table class="w3-table-all">
                            <tr>
                                <td>
                                    <h6> Bank ID: </h6>
                                </td>
                                <td>
                                    <h4>
                                        <?php echo $_SESSION['account_id'] ?> </h4>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6> Account Balance: </h6>
                                </td>
                                <td>
                                    <h4>
                                        <font color="green"> ৳
                                            <?php echo $getBalance['balance'] ?>
                                        </font>
                                    </h4>
                                </td>
                            </tr>
                        </table>

                    </div>

                    <!--            Rest Division for addition Infromation-->

                    <div class="w3-rest w3-light-gray">




                        <div class="w3-padding-large w3-teal w3-center">
                            <h4>Payments</h4>
                        </div> <br>



                        <?php
                            $connect = mysqli_connect("localhost", "root", "");
                            $select = mysqli_select_db($connect, "ruet");
                            
                            $query = mysqli_query($connect, "SELECT * FROM bill WHERE id = '".$_SESSION['id']."'");
                        
                            $count = 1;
                            $sum = 0; ?>




                            <form action="confirm" name="form" method="post">

                                <center>
                                    <table class="w3-hoverable w3-table-all" style="width: 60%;">
                                        <tr class="w3-teal">


                                            <th> &nbsp; </th>
                                            <th> &nbsp; </th>
                                            <th> Reason </th>
                                            <th> Bill </th>
                                        </tr>

                                        <?php
                                
                            while($row = mysqli_fetch_array($query)){

                                
                                echo "<tr>";
                                    echo "<td>"; echo $count;     echo "</td>";
                                    echo "<td>"; ?> <input class="w3-hoverable" type="checkbox" name="checked_array[]" value="<?php echo $row["reason"]; ?>" />
                                            <?php echo "</td>";
                                    echo "<td>"; echo $row["reason"];   echo "</td>";
                                    echo "<td>"; echo $row["bill"];     echo "</td>";
                                    $sum = $sum + $row["bill"];
                                echo "</tr>";
                                $count++;
                            }
                                        
                            if($sum == 0)
                                echo "<tr> <td colspan=\"4\"> <center> No Due Payments! </center> </td> </tr>";
                            
                            ?>

                                    </table>
                                </center>

                                <br>
                                <?php
                                if($sum > 0)
                                    echo "<div class=\"w3-right w3-padding-large\">
                                    <input class=\"w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey\" type=\"submit\" value=\"Proceed to Pay\" /> </div>";

                            ?>



                            </form>







                            <div class="w3-left w3-padding-large">

                                <h1> <b> Bills due : <font color="red"> <?php echo $sum ;?> </font> </b> </h1>

                            </div>





                    </div>
                </div>
        </div>

    </div>
</div>




<?php include_once('footer.php'); ?>
