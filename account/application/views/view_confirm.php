<?php include_once('header.php'); ?>



<br>


<?php
    $connect = mysqli_connect("localhost", "root", "");
    $select = mysqli_select_db($connect, "ruet");

    $query = mysqli_query($connect, "SELECT balance FROM balance WHERE account_id = '".$_SESSION['account_id']."'");
    
    $getBalance = mysqli_fetch_array($query);
?>


<!--Left Division-->
<div class="w3-third w3-padding">
    <table class="w3-table-all">
        <tr>
            <td> Name</td>
            <td>
                <?php echo $_SESSION['name'] ?> </td>
        </tr>

        <tr>
            <td> Account ID </td>
            <td>
                <?php echo $_SESSION['account_id'] ?> </td>
        </tr>

        <tr>
            <td> RUET ID </td>
            <td>
                <?php echo $_SESSION['id'] ?> </td>
        </tr>

        <tr>
            <td> Account Balance </td>
            <td>
                <h5>
                    <b>
                    <font color="green"> ৳ <?php echo $getBalance['balance'] ?></font>
                </b>
                </h5>
            </td>
        </tr>

    </table>
</div>

<!--Rest of the division-->

<div class="w3-rest w3-border w3-round-xxlarge w3-padding-large">
    <button onclick="location.href='pay#active'" class="w3-button w3-blue w3-padding w3-round-xlarge"> ← Go back </button> <br> <br>


<?php
    if(isset($_POST['checked_array'])){

        $checkedItems = array();
        $checkedItems = $_POST['checked_array'];

        $bill = 0;
?>

        <center>
            <h2> The following payments are ready to pay: </h2> <br/>

            <table class="w3-table-all" style="width: 90%;">
                <tr class="w3-teal">

                    <th> Reason </th>
                    <th> Bill </th>
                </tr>

<?php

        foreach ($checkedItems as $id){

            $queryString = "SELECT reason, bill FROM bill WHERE id = ".$_SESSION['id']." AND reason = '".$id."'";

            $query = mysqli_query($connect, $queryString) ;



            while($row = mysqli_fetch_array($query)){
                echo "<tr>";

                echo "<td>"; echo $row["reason"];   echo " </td>";
                echo "<td>"; echo $row["bill"];     echo "</td>";
                $bill = $bill + $row["bill"];
                echo "</tr>";
            }
        }
    

?>

            </table>

            <br/>

<?php
        $currentBalance = $getBalance['balance'];
        $projectedBalance = $currentBalance - $bill;


?>

                <h2> Billing Summary: </h2> <br/>

                <div class="w3-row">

                    <div class="w3-third w3-green">
                        <h4>Current Balance</h4>
                        <h2> ৳
                            <?php echo $currentBalance;
                            $_SESSION['previous_balance'] = $currentBalance;?>
                                
                            </h2>
                    </div>

                    <div class="w3-pink w3-third">
                        <h4>Pay Bill</h4>
                        <h2> ৳
                            <?php echo $bill;
                            $_SESSION['bill_paid'] = $bill;?> </h2>
                    </div>

                    <div class="w3-third w3-blue">
                        <h4>Future Balance</h4>
                        <h2> ৳
                            <?php
                                if($projectedBalance < 0)
                                    echo "Insufficient";
                                else
                                    echo $projectedBalance;
                                $_SESSION['after_pay'] = $projectedBalance;
                            ?>
                        </h2>
                    </div>



                </div>

                <?php
        if($projectedBalance < 0){
             echo " <br> <br>  <div class=\"w3-red w3-round-xlarge w3-padding\"> <center> <img src=\"img/warn.png\" /> </center> <b> <h3> Sorry, you don't have sufficient balance to pay.</h3> </b>  </div>";
        }

        else{

            echo "<form action=\"success\" method=\"post\">";
            
            ?>
                <input type="hidden" value="<?php echo $projectedBalance;?>" name="projectedBalance"/>
                <input type="hidden" value="<?php echo $currentBalance;?>" name="currentBalance"/>
            

            <?php
            foreach ($checkedItems as $id){
                ?>
                <input type="hidden" value="<?php echo $id;?>" name="citems[]"/>
            <?php
            
            }
            
            echo "<br> <br>  <input class=\"w3-btn w3-green w3-round w3-animate-zoom w3-hover-light-grey\" type=\"submit\" name=\"confirmPay\" value=\"Confirm Pay\" />";


            echo "</form>";


        }
     }

    else {
        echo "<center><b> <h2> Please select at least one item to pay </h2> </b>
        </center>";

    }

?>

                        <br>



        </center>


        <br>




</div>



<?php include_once('footer.php'); ?>
