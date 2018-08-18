<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RUET | Rajshahi University of Engineering &amp; Technology</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- W3 CSS -->
    <link href="css/w3.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />
    
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <!--   For Slider Only -->
    <link rel="stylesheet" type="text/css" href="slide/engine1/style.css" />
    <script type="text/javascript" src="slide/engine1/jquery.js"></script>

    <!--    NavBar Styling-->
    <style>
        body {
            margin: 0;
        }
        
        ul.topnav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        
        ul.topnav li {
            float: left;
        }
        
        ul.topnav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        ul.topnav li a:hover:not(.active) {
            background-color: #777;
        }
        
        ul.topnav li a.active {
            background-color: #4CAF50;
        }
        
        ul.topnav li.right {
            float: right;
        }
        
        
        @media screen and (max-width: 600px) {
            ul.topnav li.right,
            ul.topnav li {
                float: none;
            }
        }
    </style>
</head>


<!--Start of Body-->

<body>
    <!--    Navbar list-->
    <ul class="topnav navbar-fixed">
        <li><a class="active" href="home"> <i class="fa fa-home"> </i> Home</a></li>
        <?php if(empty($this->session->userdata('username'))) :?>
        <li><a href="signin"> <i class="fa fa-user">   </i> Sign in</a></li>
        <li><a href="signup"> <i class="fa fa-user-plus">   </i> Sign Up</a></li>
        <?php else : ?>
        <li><a href="stu_main">Profile</a></li>
        <li><a href="signin/logout">Logout</a></li>
        <?php endif; ?>
        <li class="right"><a href="#about"> <i class="fa fa-home"> </i> About</a></li>
    </ul>


    <!--    RUET Logo-->
    <div class="container-fluid" style="background: linear-gradient(-90deg, #002200 , #23db38);">

        <div class="w3-row">
            <div class="w3-quarter w3-center">
                <br>
                <div class="w3-padding w3-round-xxlarge w3-deep-purple">
                    <i class="fa fa-calendar-times-o">   </i> 
                    <?php echo date("l, d M, Y");?> 
                </div>
            </div>

            <div class="w3-half">
                <center>
                    <img src="img/ruet_banner.png" />
                </center>
            </div>

            <!--            Profile Dropdown-->

            <div class="w3-quarter w3-center">
                <br>

                <!-- If logged in-->
                <?php if (!empty($this->session->userdata('username'))) : ?>
                <div class="w3-dropdown-hover">
                    <button class="w3-button w3-blue w3-round-xxlarge">
                        <h6>
                            <?php echo 'Hi, '.$this->session->userdata('name');?> ▼
                        </h6>
                    </button>
                    <div class="w3-dropdown-content w3-bar-block w3-card-2 w3-animate-zoom">
                        <a href="stu_main" class="w3-bar-item w3-button"> <i class="fa fa-user"> </i> Profile</a> 
                        <a href="signin/logout" class="w3-bar-item w3-button"><i class="fa fa-upload"> </i> Logout</a>
                    </div>
                </div>

                <!-- Otherwise-->
                <?php else : ?>

                <button onclick="location.href='signin';"
                        class="w3-btn w3-green w3-round-xxlarge w3-animate-zoom w3-hover-light-grey w3-right">
                    
                    Login <i class="fa fa-user">   </i> 
                    
                </button>
                
                <br> <br>
                <button onclick="location.href='signup';"
                        class="w3-btn w3-green w3-round-xxlarge w3-animate-zoom w3-hover-light-grey w3-right">
                    
                    Need Account? Sign Up Now! <i class="fa fa-user-plus">   </i> 
                    
                </button>

                <?php endif; ?>


            </div>


        </div>
    </div>

    <!--    Latest Information Marquee Scroll -->
    <div class="container-fluid" style="background: linear-gradient(180deg, #005500 , #000000); color: white; padding: 5px;">
        <marquee id = "active">
            <i class="fa fa-newspaper-o"></i> International Conference on Mechanical, Industrial and Materials Engineering (ICMIME2017) will be held on 28-30 December, 2017. 
            <i class="fa fa-newspaper-o"></i> RUET has been publishing "RUET Bulletin" periodically for focusing various activities.
        </marquee>
    </div>

<div class="container-fluid">