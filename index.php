<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fast Splash</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="newcss.css">
        <style>
            .imgs{position: absolute;
                  left:71%;
            margin:  13em;}
            .ss {font-size: 60px; margin-right: 35px;position:relative; left:-15ex; color:lightskyblue;}
            .sa{margin-left: 14em;}
            .comment{position:relative; left:6em; top: -23em;text-align:right; padding-bottom: 10px;background-image: url("KD.png");}
        </style>
        
    </head>

    <body id="page-top">
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class='navbar-brand' style='font-size:40px; margin-right:30px;margin-left:-200;margin-top:10px'><ion-icon name="cart-outline"></ion-icon></a>
                <a class='navbar-brand' href='Login.html' style=" font-size:35px; margin-right:30px;margin-top:10px"><ion-icon name="person-outline"></ion-icon></a>
                <a class="navbar-brand" href="#page-top">Fast Splash</a>	
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#Home">الصفحة الرئيسية</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">خدماتنا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#MAZAYA">مزايانا</a></li>
                        <li class="nav-item"><a class="nav-link" href="#Whous">من نحن</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">اراء العملاء</a></li>
                    </ul>
                    
                </div>
                 
            </div>
            <p class="imgs"><img src="SPLASH33.png" width="350px" height="350px" alt="Pic logo"></p>
        </nav>
        <!-- Masthead-->
        <header id= "Home" class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                      <!--  <h1 class="mx-auto my-0 text-uppercase">Nature's Beauty &nbsp;</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome to Nature Beauty Blog.</h2>-->
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5" style='text-align: center;'>
                <!-- Featured Project Row-->  <!--  <div class="row gx-0 mb-4 mb-lg-5 align-items-center">    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>  <div class="col-xl-4 col-lg-5"> <div class="featured-text text-center text-lg-left"><h4>How can nature benefit my mental health?</h4> <p class="text-black-50 mb-0">pending time in green space or bringing nature into your everyday life can benefit both your mental and physical wellbeing. For example, doing things like growing food or flowers, exercising outdoors or being around animals can have lots of positive effects.</p></div></div>-->
                 <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                   <img src="M1.jpeg" alt="pic">
                </div>
                <div class="slide">
                   <img src="M2.jpeg" alt="pic">
                   </div>
                <div class="slide">
                   <img src="M3.jpeg" alt="pic">
                   </div>
                <div class="slide">
                   <img src="M1.jpeg" alt="pic">
                   </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label> 
                    <label for="radio2" class="manual-btn"></label> 
                    <label for="radio3" class="manual-btn"></label> 
                    <label for="radio4" class="manual-btn"></label> 
                </div>
        </div>
        </div>
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter > 4){
                    counter = 1;
                }
            }, 5000);
        </script>
               <img src="KD.png" width="750px" height="350px" alt="pic">
                <h2 style='margin-bottom:50px; font-size:25px; text-align: right;margin-right:-20px'>خدماتنا<a style="font-size:50px; margin-left:10px">|</a></h2>
                <a href="h2.html"> <img src="tmez.jpg" width="400px" height="400px" alt="pic" style="margin-right:150px; margin-bottom: 200px; margin-left:110px;"></a>
                <img src="sate.jpg" width="400px" height="400px" alt="pic" style="margin-right:150px; margin-bottom: 200px"><br>
                <img src="sign.jpg" width="400px" height="400px" alt="pic" style="margin-right:150px; margin-bottom: 200px;margin-left:110px;">
                <img src="gasel.jpg" width="400px" height="400px" alt="pic" style="margin-right:150px; margin-bottom: 200px">
                
            </div>
            <section class="projects-section bg-light" id="MAZAYA">
            <div class="container px-4 px-lg-5" style='text-align: center;'>
             <img src="MZ.png" width="750px" height="350px" alt="pic">
             <h2 style='margin-bottom:50px; font-size:25px; text-align: right;margin-right:-20px'>مزايانا<a style="font-size:50px; margin-left:10px">|</a></h2>
             <div>
                 <img src="MAZAYA.jpg" width="85%" height="40%" alt="pic">
                 
             </div>
                </div>
                
                <section class="projects-section bg-light" id="Whous">
            <div class="container px-4 px-lg-5" style='text-align: center;'>
                <img src="Mo.png" width="750px" height="350px" alt="pic">
               <h2 style='margin-bottom:50px; font-size:25px; text-align: right;margin-right:-20px'>من نحن<a style="font-size:50px; margin-left:10px">|</a></h2>
                <div> 
                    <img src="mn.jpg" width="600px" height="300" alt="pic" style='border-radius:80px ;position:relative; left:-20ex;'>
                    <img src="mn1.jpg" width="400px" height="400" alt="pic" style="border-radius:50px ;"> <br>
                    
                    <a class="ss" href="http://www.snapchat.com/"><ion-icon name="logo-snapchat"></ion-icon></a><a class="ss" href="http://twitter.com/"><ion-icon name="logo-twitter"></ion-icon></a><a class="ss" href="http://instgram.com/"><ion-icon name="logo-instagram"></ion-icon></a><a class="ss" href="http://whatsapp.com/"><ion-icon name="logo-whatsapp"></ion-icon></a>
                    
                </div>
               <img src="SN.png" width="750px" height="350px" alt="pic">
               <div>
                   <img src="stc.jpg" width="300px" height="300px" alt="pic stc" style="margin-right:7em; margin-bottom:7em;">
                   <img src="ksu.jpg" width="300px" height="300px" alt="pic stc" style="margin-bottom:7em; margin-left:7em;">
                   <br>
                   <img src="raghi.jpg" width="300px" height="300px" alt="pic stc"/>
                   <img  class= 'sa' src="aramco.jpg" width="300px" height="300px" alt="pic stc"/>
                   
               </div>
               
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <h2 style='margin-bottom:50px; font-size:25px; text-align: right;margin-right:-20px;position:relative;top:-1em; left:8em'>أراء العملاء<a style="font-size:50px; margin-left:10px">|</a></h2>
                        <img src="AR.png" width="750px" height="350px" alt="pic" style="position:relative; top:-25em">
             




                     

                        </div>
                        
                        
                            <!--Start comment-->
                            <?php
    include 'DB-CONFIG.php';
    $con= mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
if(mysqli_connect_errno()){
    die("Error while connecting");
}
$query= "SELECT * FROM dbuser";
$result = mysqli_query($con, $query);
    ?>
    
        <?php 
        
        
        while($row= mysqli_fetch_assoc($result)){
            echo "<div class='comment'>".$row['fname']."|<br>".$row['comments']."</div><br>";
        }
        mysqli_close($con);
        
        ?>
       <!-- End comment--><div>
   <h3 style='position:relative; left:3em; top: -3em; color: black;'>شاركنا رأيك  |</h3>
   <form Style="background-color:none;" action="handleuser.php" method="post"> 
  <div class="text-black" > <input type="text" name="fname" style='margin-right:1em;' >الاسم  </div>
   <div class ="text-black" >التعليق<br> <textarea name="comments" rows="3" cols="35"> </textarea></div>
     <div> <button type="submit" style='width:100px'>ارسل</button> </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Fast Spalsh 2023</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>