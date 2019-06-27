<!DOCTYPE html>  
<html lang="en">  
    <head>  
        <meta charset="utf-8">  
            
                <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">  
                    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->  
                    <title>POMS-Portal SNTI</title>  
                    <!-- Bootstrap -->  
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">  
                        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->  
                        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->  
                        <!--[if lt IE 9]>  
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  
                        <![endif]--> 
                        <style>
                            .navbar
                            {
                                margin-bottom: 0;
                                border-radius: 0;
                                background-color: #5E4485;
                                color: #fff;
                                padding: 1% 0;
                                font-size: 1.2em;
                                border: 0;
                            }

                            .navbar-brand
                            {
                                float: left;
                                min-height: 45px;
                                padding: 0 15px 15px;
                            }

                            .navbar-inverse .navbar-nav .active a, .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a:hover
                            {
                                color: #fff;
                                background-color: #5E4485;
                            }

                            .navbar-inverse .navbar-nav li a 
                            {
                                color: #D5D5D5;
                            }

                            .btn
                            {
                                font-size: 18px;
                                color: #fff;
                                padding: 12px 22px;
                                background:#5E4485;
                                border:2px solid #fff ;
                            }

                            .carousel-caption
                            {
                                top:35%;
                                transform: translateY(-50%);
                                
                            }

                            #icon
                            {
                                max-width: 200px;
                                margin: 1% auto;
                            }

                            #grad1
                            {
                                background-image: url("img/snti.jpg");
                                background-size: cover;
                                height: cover;
                            }

                            #grad2
                            {
                                color:blue;
                            }
                            #grad3
                            { 
                                color: black;
                            }

                        </style> 
                    </head>  
                    <body style="background-color:#b7abca ;">  
                        <nav class="navbar navbar-inverse" role="navigation">  
                            <div class="container-fluid"></div>
                            <div class="navbar-header">  
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
                                    <span class="icon-bar"></span>  
                                    <span class="icon-bar"></span>  
                                    <span class="icon-bar"></span>  
                                </button>  
                                <a class="navbar-brand" href="aboutus.html"> <img src="img/logo.jpg"></a>  
                            </div>  
                            <div class="navbar-collapse collapse" id="myNavbar">  
                                <ul class="nav navbar-nav navbar-right">  
                                    <li class="active">  
                                        <a href="index.php">Home</a>  
                                    </li> 
                                    <li>  
                                        <a href="regform1.php">Cadet Register</a>  
                                    </li>   
                                    <li>  
                                        <a href="admin_login_page.php">Admin Login</a>  
                                    </li>  
                                    <li>  
                                        <a href="cadet_login_page.php">Cadet Login</a>  
                                    </li>  
                                    <li>  
                                        <a href="aboutus.html">About Us</a>  
                                    </li>  
                                    <li>  
                                        <a href="#">Contact Us </a>  
                                    </li>
                                </ul>  
                            </div>  
                            <!-- jQuery (necessary for Bootstrap's JavaScript plugins)   Order is important -->  
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>  
                            <!-- Include all compiled plugins (below), or include individual files as needed -->  
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
                        </div>
                        </nav>
                       
                            <div id="myCarousel" class="carousel slide" data-interval="5000
                            " data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
                                    <li data-target="#myCarousel" data-slide-to="1" ></li>  
                                    <li data-target="#myCarousel" data-slide-to="2" ></li>  
                                    <li data-target="#myCarousel" data-slide-to="3" ></li>  
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img class="img-responsive" src="img/snti2.jpg">
                                        <div class="carousel-caption">
                                            <h1> ATHLETE DEVELOPMENT  </h1>
                                            <br>
                                            <h4>Helping coaches, teachers, parents and young athletes to be the best they can be..</h4><br>

                                            <h3>THE ACADEMY <br>A long-term training programme for youth aged 8-17 years who want to improve faster and achieve more in the sports that they love by developing their physical and mental performance.</h3><br>
                                            <br>
                                            <button type="button" class="btn btn-default">Get Started</button>
                                        </div>
                                    </div><!--  End of active --> 
                                    <div class="item">
                                        <img class="img-responsive" src="img/car1.jpg">
                                        <div class="carousel-caption">
                                            <h1> ATHLETE DEVELOPMENT  </h1>
                                            <br>
                                            <h4>Helping coaches, teachers, parents and young athletes to be the best they can be..</h4><br>

                                            <h3>THE ACADEMY <br>A long-term training programme for youth aged 8-17 years who want to improve faster and achieve more in the sports that they love by developing their physical and mental performance.</h3><br>
                                            <br>
                                            <button type="button" class="btn btn-default">Get Started</button>
                                        </div>
                                    </div><!--  End of active --> 
                                    <div class="item ">
                                        <img class="img-responsive" src="img/car2.jpg">
                                        <div class="carousel-caption">
                                            <h1> ATHLETE DEVELOPMENT  </h1>
                                            <br>
                                            <h4>Helping coaches, teachers, parents and young athletes to be the best they can be..</h4><br>

                                            <h3>THE ACADEMY <br>A long-term training programme for youth aged 8-17 years who want to improve faster and achieve more in the sports that they love by developing their physical and mental performance.</h3><br>
                                            <br>
                                            <button type="button" class="btn btn-default">Get Started</button>
                                        </div>
                                    </div><!--  End of active --> 
                                    <div class="item ">
                                        <img class="img-responsive" src="img/car3.jpeg">
                                        <div class="carousel-caption">
                                            <h1> ATHLETE DEVELOPMENT  </h1>
                                            <br>
                                            <h4>Helping coaches, teachers, parents and young athletes to be the best they can be..</h4><br>

                                            <h3>THE ACADEMY <br>A long-term training programme for youth aged 8-17 years who want to improve faster and achieve more in the sports that they love by developing their physical and mental performance.</h3><br>
                                            <br>
                                            <button type="button" class="btn btn-default">Get Started</button>
                                        </div>
                                    </div><!--  End of active --> 
                                </div>
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>                                

                            </div><!--  End of slider -->  







                        <div id="grad1">
                            <div class="container text-center" id="grad2">
                                <h2>ACTIVITIES WE PERFORM FOR DEVELOPMENT OF SKILLS </h2>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="img/snti3.jpg" id="icon">
                                        <h4>PERSONALITY DEVELOPMENT</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/snti4.jpg" id="icon">
                                        <h4>PERFORMANCE MONITORING</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/snti5.jpg" id="icon">
                                        <h4>PHYSICAL FITNESS</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="container text-center"  id="grad3">
                                <h2>SPORTS IN WHICH WE PROVIDE TRAININGS </h2>
                                <div class="row">
                                    
                                    <div class="col-sm-4">
                                        <img src="img/cricket.jpeg" id="icon">
                                        <h4>CRICKET</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/archery.jpg" id="icon">
                                        <h4>ARCHERY</h4>
                                    </div>
                        
                                    <div class="col-sm-4">
                                        <img src="img/gymnastics.jpg" id="icon">
                                        <h4>GYMNASTICS</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/karate.jpg" id="icon">
                                        <h4>KARATE & TAEKWONDO</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/volleyball.jpg" id="icon">
                                        <h4>VOLLEYBALL</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/weightlifting.jpeg" id="icon">
                                        <h4>WEIGHT-LIFTING</h4>
                                    </div>
                                    <div class="col-sm-4">
                                        <img src="img/swimming.jpg" id="icon">
                                        <h4>SWIMMING</h4>
                                    </div>
                                </div>
                            </div>     

                            <div align="center" style="background-color: #5E4485;">
                                <h4 text-align="center" style="color: #fff;"> &copy Shavak Nanavati Sports Academy 2018 </h>
                            </div>   
                        </div>
                          
                    </body>

</html>      