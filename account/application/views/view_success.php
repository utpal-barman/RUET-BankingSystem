<?php require('header.php') ?>

<?php
    $connect = mysqli_connect('localhost','root','');
    mysqli_select_db($connect, 'ruet');
    
    if (isset($_POST['confirmPay'])){
        $checkedItems = array();
        $checkedItems = $_POST['citems']; ?>


    <form action="printp" method="post">
        

    <?php

        foreach ($checkedItems as $id){

            
            $queryS = "SELECT reason, bill FROM bill WHERE id = ".$_SESSION['id']." AND reason = '".$id."'";
            $query = mysqli_query($connect, $queryS) ;
            



            while($row = mysqli_fetch_array($query)){
                $queryInsertHistory = "INSERT INTO history_paid(account_id, id, username, reason, bill) VALUES (".$_SESSION['account_id'].",".$_SESSION['id'].",'".$_SESSION['username']."','".$row['reason']."',".$row['bill'].")";
                
                mysqli_query($connect, $queryInsertHistory) ;
            }
            
            $queryDeleteString = "DELETE FROM bill WHERE id = ".$_SESSION['id']." AND reason = '".$id."'";
            
            mysqli_query($connect, $queryDeleteString) ;/*each item is paid, so delete each*/
            
            ?>
            
            <input type="hidden" name="passingItems[]" value="<?php echo $id;?>"/>
        <?php
            
            
        }

            $queryUpdateString = "UPDATE balance SET balance = ".$_POST['projectedBalance']."
                    WHERE balance = ".$_POST['currentBalance']." AND account_id = ".$_SESSION['account_id']."";

            mysqli_query($connect, $queryUpdateString) ;
            
            ?>

        
        <?php

            $queryString = "SELECT reason, bill FROM bill WHERE id = ".$_SESSION['id']." AND reason = '".$id."'";
            

            $query = mysqli_query($connect, $queryString) ;
            




        }

        

?>



<br>

<div class="w3-container">
<center>
    
    
    
    
    
    <h2 class="w3-round-xxlarge w3-blue w3-padding" style="width: 60%;">Your due payments were successfully paid!</h2>
    
    <br>
    
    <img src="img/tick.png"/ style="width: 120px;">
    
    <br><br>
    
    <br><br>
    
<input type="submit" name="printIsClicked" class="w3-red w3-round-xxlarge w3-button" value="Print"/>
    

</center>
</div>


</form>
<center>
    <button class="w3-btn w3-round-xxlarge w3-green" onclick="location.href='pay'"><i class="fa fa-reload"> </i> Click to return</button>
</center>





<?php require('footer.php') ?>