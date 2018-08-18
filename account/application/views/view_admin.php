<?php require('header.php');?>



<br><br>




<center>
    <div class="w3-bar w3-black w3-mobile w3-round-xxlarge" style="width: 700px;">

        <div class="w3-bar-item w3-button w3-red">Admin</div>
        <a href="admin" class="w3-bar-item w3-button w3-blue">Import Bill</a>
        <a href="database" class="w3-bar-item w3-button w3-hover-green">Databases</a>

    </div>
</center>

<br><br>

<div class="container w3-card-2">

    <div class="w3-container w3-padding-large">


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
                    $start = 123001; /*this is just a demo*/
                    $end = 123120;
                }
                
                for($roll=$start;$roll<=$end;$roll++){
                
                    $queryString = "INSERT INTO bill(id, reason, bill, dept, series) VALUES (".$roll.",'".$reason."',".$_POST['bill'].",'".$_POST['dept']."',".$_POST['series'].")";
                    mysqli_query($connect, $queryString);
                    
                    
                
                }
                
            }
        
      
        ?>


            <h2 class="w3-blue w3-round-xxlarge w3-padding-large w3-center">Import Bill</h2>
            <hr>
            <p>Fill up all the boxes carefully</p> <br/>


            <form action="database" method="post">

                <h4>Reason of Bill</h4>
                <select name="reason" style="height: 40px;" class="w3-select w3-border">
                    <option value="-">---</option>    
                    <option value="Course Registration">Course Registration Fee</option>
                    <option value="Semester Fee">Semester Fee</option>
                    <option value="Year Change">Year Change Fee</option>
                    <option value="Departmental Association">Departmental Association Fee</option>
                    <option value="Grade Sheet Fee">Grade Sheet Fee</option>

                </select>

                <h4>Name of Semester</h4>
                <select name="semester" style="height: 40px;" class="w3-select w3-border">
                    <option value="-">---</option>    
                    <option value="(1st Year Odd)">1st Year Odd</option>
                    <option value="(1st Year Even)">1st Year Even</option>
                    <option value="(2nd Year Odd)">2nd Year Odd</option>
                    <option value="(2nd Year Even)">2nd Year Even</option>
                    <option value="(3rd Year Odd)">3rd Year Odd</option>
                    <option value="(3rd Year Even)">3rd Year Even</option>
                    <option value="(4th Year Odd)">4th Year Odd</option>
                    <option value="(4th Year Even)">4th Year Even</option>
                    <option value="(Backlog)">Backlog</option>
                    <option value="(Others)">Others</option>

                </select>

                <h4>Amount of Bill</h4>
                <input type="text" name="bill" class="w3-input" style="height: 40px;" />

                <h4>Enter Series</h4>
                <select name="series" style="height: 40px;" class="w3-select w3-border">
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
                    <option value="Others">Others</option>

                </select>

                <h4>Enter Department</h4>
                <select name="dept" style="height: 40px;" class="w3-select w3-border">
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
                </select>


                <br> <br><br>
                <input class="w3-round-xxlarge w3-center w3-btn w3-blue" name="addToData" type="submit" value="Insert to Database" />

            </form>






    </div>


</div>

<?php require('footer.php');?>