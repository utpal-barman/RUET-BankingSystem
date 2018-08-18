<?php include_once('header.php'); ?>
<!-----Starting 1st row------>
<br> <br>
<div class="w3-row">
    <!--    Left-->


    <div class="w3-quarter">
        
        <br>

        <div class="w3-card-4">
            <ul class="w3-ul w3-border w3-hoverable">
                <li class="w3-blue-gray w3-padding-large">
                    <h4>
                        <center> <i class="fa fa-file-text"> </i>  Notice </center>
                    </h4>
                </li>
                <li class="w3-padding-large">  Result published for 2013 series (3rd Year Odd Semester) </li>
                <li class="w3-padding-large"> Class will be started for 2014 series (3rd Year Odd Semester) from 29 April, 2017 </li>
                <li class="w3-padding-large"> Examination re-scheduled for 2012 series (4th Year Odd Semester) to 09 April, 2017 </li>
            </ul>
        </div>

        <br>
        <div class="w3-card-4">
            <ul class="w3-ul w3-border w3-hoverable">
                <li class="w3-blue-gray w3-padding-large">
                    <h4>
                        <center><i class="fa fa-comments"> </i> Message from VC</center>
                    </h4>
                </li>
            </ul> <br>
            <div class="w3-center w3-margin">
                <img src="img/ruet_vc.jpeg" class="w3-circle"/>
            
            </div>
            
            <div class="w3-padding-large w3-justify">
                Welcome to the RUET website. It is my great pleasure to welcome you to Rajshahi University of Engineering &amp; Technology which is the 2nd oldest prestigious engineering university in Bangladesh.
            </div>
        </div>

    </div>


    <!--    Middle -->
    <div class="w3-half w3-center w3-padding-large">
        <h3 class="w3-blue w3-padding w3-round-xxlarge"> Welcome to RUET Website!</h3>
        <br>

        <!--    Image Slider -->
        <?php include_once('view_slider.php'); ?>


        <br> <br> 

        <!--       Some Text About Ruet-->
        <div align="justify">
            Rajshahi University of Engineering &amp; Technology (RUET) is the prestigious public Engineering University &amp; center of excellence offers high quality education and research in the field of engineering and technology. RUET is well balanced urban and natural environment and convenience. Rapid globalization, industrialization, presence of problems, depletion of natural resources, environmental damage, world financial insecurity, poverty, etc are the global challenge for human being as a whole. Handling such global issues require wide range of quality people share their knowledge to cooperate and take action. RUET is the center of excellence to cultivate such talented individuals who take the lead of such issues sharing their technical knowledge and experience is the most important duty of this university. RUET not only serve for the expectation of public but also contribute to human society as a whole. The university comprises engineering and sciences departments’ offers under-graduate and post-graduate degrees. Every year most brilliant students are enrolled for the undergraduate program through transparent and standard admission test. The graduates from this university is well enough to cope any challenge in the field of engineering, technology, research, leadership, management, etc on demand of national and global needs. Many of the students and faculty members receive full funded international scholarship for their higher study and appoint in world top rank universities as a quality faculty members and researchers upon completion the degree. RUET is committed to continue the progress and contributes on national and global development.
        </div>
    </div>

    <!--    Right Division -->
    <div class="w3-quarter">
        <br>

        <ul class="w3-ul w3-border w3-hoverable w3-card-4">
            <li class="w3-blue-gray w3-padding-8">
                <h4>
                    <center> <i class="fa fa-edit"></i> Quick Links</center>
                </h4>
            </li>
            <li>
                <button onclick="location.href='stu_main';"   class="w3-button w3-ripple">
                    <h5> 
                        <i class="fa fa-address-book"></i> &nbsp; &nbsp; RUET Account 
                    </h5>
                </button>
            </li>
            <li>
                <button data-target="#myModal" data-toggle="modal" class="w3-button w3-ripple">
                    <h5>
                        <i class="fa fa-bank"></i> &nbsp; &nbsp; Departments
                    </h5>
                </button>
            </li>
            <li>
                <button data-target="stu_main" data-toggle="modal" class="w3-button w3-ripple"> 
                    <h5> 
                        <i class="fa fa-mortar-board"> </i> &nbsp; &nbsp; Admission 
                    </h5>
                </button>
            </li>
            <li>
                <button data-target="about" data-toggle="modal" class="w3-button w3-ripple"> 
                    <h5> 
                        <i class="fa fa-exclamation-circle"> </i> &nbsp; &nbsp; About 
                    </h5>
                </button>
            </li>
            <li>
                <button onclick="location.href='#';" class="w3-button w3-ripple">
                    <h5> <i class="fa fa-handshake-o"></i> &nbsp; &nbsp; Help </h5>
                </button>
            </li>

        </ul>
    </div>

</div>






<!--End of 1st row-->





<?php include_once('footer.php'); ?>