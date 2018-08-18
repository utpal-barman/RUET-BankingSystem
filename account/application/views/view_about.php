<?php include_once('header.php');

if (!$this->session->userdata('username')==""): ?>

<?php else:?>
<div class="container-fluid" style="padding: 40px 20px 40px 20px;" align="center">
    <h1> <b>  Time! </b> </h1>
</div>
<?php endif; ?>


<!--The Brown Box Time, Date-->
    <br> 
    <div class="w3-card-2 w3-hover-opacity-off w3-padding-16 w3-round w3-hover-blue-grey w3-brown w3-round-jumbo" align="center">
        <?php
            date_default_timezone_set("asia/dhaka");
            echo date("h:ia"); ?> <br> 
        <?php echo date("l"); ?> <br>
        <?php echo date("d M Y"); ?> <br> <br>
       
                
            
        </div>
      <br> <br> <br>
    
<!--      The Slider, Texts-->
    <div class="container w3-card-8" style="padding: 50px">
    
    <div id="sliderFrame">
                <div id="slider">
                    <img src="img/slide1.jpg" alt="RUET Gate"/>
                    <img src="img/slide2.jpg" alt="RUET Shaheed Minar"/>
                    <img src="img/slide3.jpg" alt="Admin Building" />
                    <img src="img/slide4.jpg" alt="Rupali Bank Ltd" />
                    <img src="img/slide5.jpg" alt="Entrance"/>
                </div>
        </div>
             <br> <br> <br>
             
             
<!--       Some Text About Ruet Account-->
<p align="justify">
                Some Text about RUET Account Section will be shown here.
            </p>
    </div>
      <br> <br>
    
    <?php include_once('footer.php'); ?> 
    
  
   