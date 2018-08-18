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
            <div class="w3-left w3-padding-large w3-border w3-round-xxlarge w3-gray w3-animate-right"> <img  src="img/icon_pro.png" class="w3-animate-right"/>

            <button class="btn-success tablink w3-red w3-padding" onclick="openLink(event,'profile')">Profile</button>
            <button class="btn-success tablink w3-padding" onclick="openLink(event,'edit')">Edit Profile</button>
            <button class="btn-success tablink w3-padding" onclick="openLink(event,'help')">Help</button>
        </div>    

       

            <div class="w3-right w3-padding-large"> <img src="img/icon_pay.png" class="w3-animate-opacity"/>
                <button class="btn-success w3-padding" type="submit"  onclick="location.href='pay#active'"> Payments </button></div>
            
        </div>
    
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
                        <tr> <td> <h6> Bank ID: </h6> </td> <td> <h4>  <?php echo $_SESSION['account_id'] ?> </h4></td>  </tr>
                        <tr> <td><h6> Account Balance: </h6></td> <td> <h4><font color="green"> ৳ <?php echo $getBalance['balance'] ?></font> </h4> </td> </tr>
                    </table>
                <br> <br>
                

                <form action="stu_main" method="post" enctype="multipart/form-data">
                <center>
                    
                        <h6 class="w3-round-xxlarge  w3-indigo w3-padding"> Change Profile picture: </h6>
                        <input type="file" name="fileToUpload" id="fileToUpload"> <br> <br>  <br>
                        <input class="w3-button w3-round-xxlarge w3-blue" type="submit" value="Upload Image" name="image-submit"> <br>
                </center>
                </form>
                
                <!--Some code for handing pro pic uploading error-->
                
                <?php
                
                

                // Check if image file is a actual image or fake image
                if(isset($_POST["image-submit"])) {
                    $username = $_SESSION['username'];

                    $target_dir = "uploads/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

                    $target_file = $target_dir . $username . '.' . $imageFileType;
                    
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                    }


                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "jpeg") {
                    echo "Sorry, only JPG file is allowed.";
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "Profile picture has been updated!!!";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                    
                }
                        
                        ?> <!--End of pro pic eror handling-->



                
                <br> <br>
                


            </div>
            
<!--            Rest Division for addition Infromation-->

            <div class="w3-rest w3-light-gray">
                
                <!--Profile-->

                <div id="profile" class="city">
                    <div class="w3-padding-large w3-teal w3-center">
                        <h4>Your Profile Information</h4>
                    </div>

                    <table class="w3-table-all">
                        <tr>
                            <td class="w3-right">Account No: </td>
                            <td> <i> <?php echo $this->session->userdata('account_id'); ?> </i> </td>
                        </tr>

                        <tr>
                            <td class="w3-right">Name: </td>
                            <td>
                                <?php echo $this->session->userdata('name'); ?> </td>
                        </tr>
                        <tr>
                            <td class="w3-right">RUET ID: </td>
                            <td>
                                <?php echo $this->session->userdata('id'); ?> </td>
                        </tr>

                        <tr>
                            <td class="w3-right">Email : </td>
                            <td>
                                <?php echo $this->session->userdata('email'); ?> </td>
                        </tr>

                        <tr>
                            <td class="w3-right">Department: </td>
                            <td>
                                <?php echo $this->session->userdata('dept'); ?> </td>
                        </tr>

                        <tr>
                            <td class="w3-right">Series: </td>
                            <td>
                                <?php echo $this->session->userdata('series'); ?> </td>
                        </tr>

                        <tr>
                            <td class="w3-right">Mobile: </td>
                            <td>
                                <?php echo $this->session->userdata('mobile'); ?> </td>
                        </tr>

                        <tr>
                            <td class="w3-right">Username: </td>
                            <td>
                                <?php echo $this->session->userdata('username'); ?> </td>
                        </tr>
                    </table>
                </div>
                
                
                
                <!--Edit Profile-->

                <div id="edit" class="city" style="display:none">
                    <?php include_once('view_editprofile.php'); ?>
                </div>
                
              
                <!--Help-->

                <div id="help" class="city" style="display:none">
                    <div class="w3-padding-large w3-teal w3-center">
                        <h4>Help</h4>
                    </div> <br/>
                    <div class="w3-center">
                        <p class="w3-padding-large">Contact with the RUET Adminstration for more enquiery.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>








<script>
    function openLink(evt, linkName) {

        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
        }
        document.getElementById(linkName).style.display = "block";
        evt.currentTarget.className += " w3-red";
    }

</script>




<?php include_once('footer.php'); ?>
