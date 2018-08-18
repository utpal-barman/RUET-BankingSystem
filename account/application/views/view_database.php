<?php require('header.php');?>
<?php
        
            $connect = mysqli_connect('localhost','root','');
            mysqli_select_db($connect, 'ruet');
            
            
            if(isset($_POST['addToData'])){
                
                $reason = $_POST['reason']." ".$_POST['semester'];
                if($_POST['dept'] == 'CSE' && $_POST['series'] == 2013){
                    $start = 133001;
                    $end = 133120;
                }
                
                else if($_POST['dept'] == 'EEE' && $_POST['series'] == 2013){
                    $start = 131001;
                    $end = 131120;
                }
                
                else {
                    $start = 123001;
                    $end = 123120;
                }
                
                for($roll=$start;$roll<=$end;$roll++){
                
                    $queryString = "INSERT INTO bill(id, reason, bill, dept, series) VALUES (".$roll.",'".$reason."',".$_POST['bill'].",'".$_POST['dept']."',".$_POST['series'].")";
                    mysqli_query($connect, $queryString);
                    
                    
                
                }
                
            }
        
      
        ?>
    <br><br>




    <center>
        <div class="w3-bar w3-black w3-mobile w3-round-xxlarge" style="width: 700px;">

            <div class="w3-bar-item w3-button w3-red">Admin</div>
            <a href="admin" class="w3-bar-item w3-button w3-hover-green">Import Bill</a>
            <a href="database" class="w3-bar-item w3-button w3-blue ">Databases</a>

        </div>
    </center>

    <br><br>


    <div class="w3-card-2 container w3-padding-large w3-mobile">
        <h2 class="w3-blue w3-round-xxlarge w3-padding-large w3-center"> Databases</h2>



        <div class="w3-bar w3-black w3-round-xxlarge">
            <button class="w3-bar-item w3-button" onclick="openCity('Bill')">Billing Database</button>
            <button class="w3-bar-item w3-button" onclick="openCity('Balance')">Bank Balance Database</button>
            <button class="w3-bar-item w3-button" onclick="openCity('History')">Bank Payment History</button>
            <button class="w3-bar-item w3-button" onclick="openCity('Web')">Web Account Database</button>
        </div>



        <div id="Bill" class="w3-container w3-display-container city">
            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>

            <br> <br>

            <center>
                <h4 class="w3-blue w3-round-xxlarge w3-padding-large" style="width: 40%;">Billing Database</h4>
            </center>


            <br> <br>




            <table class="w3-table-all">
                <tr>
                    <th>Serial</th>
                    <th>Department</th>
                    <th>Series</th>
                    <th>RUET ID</th>
                    <th>Reason</th>
                    <th>Bill</th>
                </tr>
                <?php
                    $connect = mysqli_connect("localhost", "root", "");
                    mysqli_select_db($connect, "ruet");
            
                    $queryString1 = "SELECT * FROM bill";
                    
                    $query = mysqli_query($connect, $queryString1);
            
                    while($row = mysqli_fetch_array($query)){
                        $serial = $row['serial'];
                        $dept = $row['dept'];
                        $series = $row['series'];
                        $id = $row['id'];
                        $reason = $row['reason'];
                        $bill = $row['bill'];
                        
                        ?>

                    <tr>
                        <td>
                            <?php echo $serial; ?>
                        </td>
                        <td>
                            <?php echo $dept; ?>
                        </td>
                        <td>
                            <?php echo $series; ?>
                        </td>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $reason; ?>
                        </td>
                        <td>
                            <?php echo $bill; ?>
                        </td>

                    </tr>

                    <?php
                        
                    }
                
            
            
            
                ?>


            </table>
        </div>

        <div id="Balance" class="w3-container w3-display-container city" style="display:none">
            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>


            <br> <br>

            <center>
                <h4 class="w3-blue w3-round-xxlarge w3-padding-large" style="width: 40%;">Bank Balance Database</h4>
            </center>


            <br> <br>



            <table class="w3-table-all">
                <tr>
                    <th>Account ID</th>
                    <th>RUET ID</th>
                    <th>Balance</th>
                </tr>

                <?php
            
                    $queryString2 = "SELECT * FROM balance";
                    
                    $query = mysqli_query($connect, $queryString2);
            
                    while($row = mysqli_fetch_array($query)){
                        $account_id = $row['account_id'];
                        $id = $row['id'];
                        $balance = $row['balance'];
                        
                        ?>

                    <tr>
                        <td>
                            <?php echo $account_id; ?>
                        </td>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $balance; ?>
                        </td>

                    </tr>

                    <?php
                        
                    }
                
            
            
            
                ?>


            </table>
        </div>

        <div id="History" class="w3-container w3-display-container city" style="display:none">
            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>



            <br> <br>

            <center>
                <h4 class="w3-blue w3-round-xxlarge w3-padding-large" style="width: 40%;">History</h4>
            </center>


            <table class="w3-table-all">
                <tr>
                    <th>Account ID</th>
                    <th>RUET ID</th>
                    <th>Reason</th>
                    <th>Bill</th>
                </tr>

                <?php
            
                    $queryString = "SELECT * FROM history_paid";
                    
                    $query = mysqli_query($connect, $queryString);
            
                    while($row = mysqli_fetch_array($query)){
                        $account_id = $row['account_id'];
                        $id = $row['id'];
                        $reason = $row['reason'];
                        $bill = $row['bill'];
                        
                        ?>

                    <tr>
                        <td>
                            <?php echo $account_id; ?>
                        </td>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $reason; ?>
                        </td>
                        <td>
                            <?php echo $bill; ?>
                        </td>

                    </tr>

                    <?php
                        
                    }
                
            
            
            
                ?>


            </table>
        </div>

        <div id="Web" class="w3-container w3-display-container city" style="display:none">
            <span onclick="this.parentElement.style.display='none'" class="w3-button w3-large w3-display-topright">&times;</span>


            <br> <br>

            <center>
                <h4 class="w3-blue w3-round-xxlarge w3-padding-large" style="width: 40%;">Web Account Creation Database</h4>
            </center>


            <br> <br>
            <table class="w3-table-all">
                <tr>
                    <th>Account ID</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Series</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Username</th>


                </tr>

                <?php

            
                    $queryString3 = "SELECT * FROM account";
                    
                    $query = mysqli_query($connect, $queryString3);
            
                    while($row = mysqli_fetch_array($query)){
                        $account_id = $row['account_id'];
                        $id = $row['id'];
                        $name = $row['name'];
                        $dept = $row['dept'];
                        $series = $row['series'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $username = $row['username'];
                        
                        ?>

                    <tr>
                        <td>
                            <?php echo $account_id; ?>
                        </td>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $name; ?>
                        </td>
                        <td>
                            <?php echo $dept; ?>
                        </td>
                        <td>
                            <?php echo $series; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td>
                            <?php echo $mobile; ?>
                        </td>
                        <td>
                            <?php echo $username; ?>
                        </td>

                    </tr>

                    <?php
                        
                    }
                
            
            
            
                ?>


            </table>
        </div>


    </div>



    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }

    </script>







    <?php require('footer.php');?>
