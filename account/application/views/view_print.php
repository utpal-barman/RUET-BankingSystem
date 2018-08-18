<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- W3 CSS -->
    <link href="css/w3.css" rel="stylesheet">


<center>
    <img src="img/ruetl.png" style="width: 100px;"/>
    <h1>রাজশাহী প্রকৌশল ও প্রযুক্তি বিশ্ববিদ্যালয়, রাজশাহী</h1>

    
</center>

    <hr>
    
    <div class="container">
        
        <table>
        
            <tr> <td> <b>হিসাবের শিরোনাম/TITLE OF THE ACCOUNT:</b> </td> <td> ভি.সি. রুয়েট </td></tr>
            <tr> <td> <b>হিসাব নং/ACCOUNT NUMBER:</b></td> <td> 2434 </td></tr>
            <tr> <td> তারিখ/DATE:</td> <td><?php echo date('d-M-Y'); ?> </td></tr>
            <tr><td>একাউন্ট আইডি/ACCOUNT ID:</td> <td><?php echo $_SESSION['account_id']; ?> </td></tr>
            <tr><td>নাম/NAME:</td> <td><?php echo $_SESSION['name']; ?> </td></tr>
            <tr><td>রুয়েট রোল/RUET ROLL:</td> <td><?php echo $_SESSION['id']; ?> </td></tr>
            <tr><td>ডিপার্টমেন্ট/DEPARTMENT:</td> <td><?php echo $_SESSION['dept']; ?></td></tr>
            <tr><td>সিরিজ/SERIES:</td> <td><?php echo $_SESSION['series']; ?> </td></tr>
            

            
        </table>
        
        <hr>
        
        <center>
            <h3><U>বিলের বিবরণ/DETAILS OF BILL</U></h3>
        
        </center>
        <br>
            
            <?php
                $connect = mysqli_connect('localhost','root','');
                mysqli_select_db($connect, 'ruet');
        
                if(isset($_POST['printIsClicked'])){
                    $reasonArray = array();
                    $reasonArray = $_POST['passingItems'];
        
                echo "<table class=\"w3-table-all\">";
                echo "<tr> <td> Reason </td> <td> Bill </td> </tr>";
            

                foreach ($reasonArray as $id){
            

                    $queryString = "SELECT reason, bill FROM history_paid WHERE id = ".$_SESSION['id']." AND reason = '".$id."'";
                    
                    
                    $query = mysqli_query($connect, $queryString) ;
                    
                    while($row = mysqli_fetch_array($query)){
                        echo "<tr>
                                <td>" . $row['reason'] .  "</td>
                                <td>" . $row['bill'] . "  </td>
                                
                            </tr>";
                    }
                    
                    
                    
                }
                echo "</table> <br> <hr>";
        
        
                echo "মোট বিল/TOTAL BILL :  ".$_SESSION['bill_paid']." TAKA ONLY.";
                }
        
        else{
            echo "No Bill is to paid";
        }
        ?>
        
        
        <hr>
        
        <br> <br>
        
        <center>ব্যাংকিং সহায়তায়, <br><img src="img/rupali.png" /> </center>
        

        
            
            
        
        
        
    </div>


