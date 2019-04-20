<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link href="css/home.css" rel="stylesheet">
<script>
     $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 400){
            $('.fixed-top').css('background', 'rgba(0,0,255,0.1)');
        } else{
            $('.fixed-top').css('background', 'black');
        }
    });
</script>
</head>
<body>
  <?php
  if(!isset($_SESSION['use'])){
    header("Location:login.php");
  }
  $session= $_SESSION['use'];
  $_SESSION['use']= $session;
  ?>

  <nav class="navbar navbar-expand-md fixed-top navcss">
  <a class="navbar-brand" href="#"><img src="images/onlineexam.png" height="40px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"><i class="fas fa-braille"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link dropco" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Categories
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item dropco" href="#">History</a>
        <a class="dropdown-item dropco" href="#">Aptitude</a>
        <a class="dropdown-item dropco" href="#">Geography</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link dropco" href="#">Mocktest</a>
      </li>    
      <li class="nav-item">
        <a class="nav-link dropco" href="#">About</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
         <a class="nav-link dropco" href="#"><i class="fas fa-user"></i>Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link dropco" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </li>
    </ul>

  </div>  
</nav>


<div id="video-carousel-block1" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#video-carousel-block1" data-slide-to="0" class="active"></li>
    <li data-target="#video-carousel-block1" data-slide-to="1"></li>
    <li data-target="#video-carousel-block1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4"/>
        </video>
        <div class="mask rgba-indigo-light"></div>
      </div>

      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">Perseverance is failing 19 times and succeeding the 20th</h3>
          <p>Julie Andrews</p>
        </div>
      </div>
    </div>


    <div class="carousel-item">
      <div class="view">
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-purple-slight"></div>
      </div>


      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">"Education is all a matter of building bridges"</h3>
          <p>Ralph Ellison</p>
        </div>
      </div>
    </div>


    <div class="carousel-item">
      <div class="view">
        <video class="video-fluid" autoplay loop muted>
          <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
        </video>
        <div class="mask rgba-black-strong"></div>
      </div>


      <div class="carousel-caption">
        <div class="animated fadeInDown">
          <h3 class="h3-responsive">"When you know better you do better"</h3>
          <p>Maya Angelou</p>
        </div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#video-carousel-block1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#video-carousel-block1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<br/>



<div class="bgimg-1">
  <div class="caption">
  <span class="border">"Education is the most powerful weapon in the world"</span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <div class="container-fluid block1">
    <center><h1 class="heading">Trending Tests</h1></center><br/>
    <div class="row">
      <div class="block1_1 col-md-4 col-sm-6 col-xs-12">
        <div class="test1">
          <h1>Slave Dynasty</h1>
          <img src="images/history.jpg" height="100px" width="200px">
          <p>The Slave Dynasty or Ilbari Dynasty of Delhi Sultanate was the first dynasty of the Sultanate. Qutub-ud-Din Aibak was the founder who was bought by Muhammad Ghori and gradually rose to be his trusted general on account of his soldierly abilities. Here, we are giving 10 GK Questions with Answers on Ilbari Dynasty or Slave Dynasty of Delhi Sultanate </p>
          <pre>No of questions: 20           Time: 20 min</pre>
          <button><a href="test1.php">Take Test</a></button>
        </div>

      </div>
      <div class="block1_2 col-md-4 col-sm-6 col-xs-12">
        <div class="test1">
          <h1><u>Lodhi Dynasty</u></h1>
          <img src="images/history1.jpg" height="100px" width="200px">
          <p>The Lodhi Dynasty restores the greatness of Delhi Sultanate under Bahlol Lodhi. Sikandar Lodhi was the ablest among other three Lodhi rulers. Here, we are giving 10 GK Questions with Answers on the Lodhi Dynasty of Delhi Sultanate that will attune and equipped the aspirants according to the new trends of different competitive examination.</p>
          <pre>No of questions: 20           Time: 20 min</pre>
          <button>Take Test</button>
        </div>
      </div>
      <div class="block1_3 col-md-4 col-sm-6 col-xs-12">
        <div class="test1">
          <h1>Mughal Dynasty</h1>
          <img src="images/history3.jpg" height="100px" width="200px">
          <p>Mughal Empire Online Test : Important questions regarding the Mughal Empire are given in the answer given in India Medieval History with 20 objective Mughal Empire questions with answers. In India History GK, you will get the same which is more likely to question the General Knowledge of Mughal Empire in the upcoming examinations.</p>
          <pre>No of questions: 20           Time: 20 min</pre>
          <button>Take Test</button>
        </div>
      </div>
    </div>

  </div>


</div>

<div class="bgimg-2">
  <div class="caption">
  <span class="border" style="">"Knowledge is CONSTRUCTED not transferred"</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <h1>What are Aptitude Tests?</h1>
  <p>Aptitude tests assess a person’s core capability of common skills, such as numerical, verbal and diagrammatic reasoning. They offer a very effective mechanism for selecting candidates so have become increasingly involved in the recruitment process.

At Practice Aptitude Tests, we provide industry standard psychometric tests for banking, accountancy, finance, law, engineering, business, marketing & vocational fields.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  <span class="border">"The roots of education are bitter,but fruit is sweet"</span>
  </div>
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <div class="container double">
    <div class="row">
      <div class="col-md-7 col-sm-7 col-xs-7 reaimg">
        <div class="container img">
        <img src="images/reading.jpg" id="reading">
      </div>
      </div>
      <div class="col-md-5 col-sm-5 col-xs-5 reatext">
        <br/>
        <h3> "The tests were well suited to the job that I've applied for. They are easy to do and loads of them"</h1>
        <p>Sophie and many more used Practise Aptitude Tests to help pass her aptitude tests for Deloitte</p>
        <input type="button" id="transbutton" value="10 tips for success">
      </div>
  </div>
</div>
</div>
</div>

<div class="bgimg-1">
  <div class="caption">
  <span class="border">"Education is a gift that none can take away"</span>
  </div>
</div>

</body>
</html>

<!--footer-->
<div class="footer">
  <div class="container foo">
    <div class="row">
      <div class="col-md-8 col-sm-8 foocontent"><br/>
        <h3>Objective</h3>
        <p>This website is built with the help of bootstrap and php by Vimal Upreti.kjasbdkjbas kddjakndjkanjk sdnkland knakndkand nasn,dm sndlandknsd 
        aslndkanskdnasnd,ansdm ds msm,a sdnsklnakl dkaskld sdssjndk sfkndkn fsdnf
      slnsdknf sdkfnklsdnfkl fdnksdnfkl fkdsnfklnsdklf fklsdnflknsd fsdfsd</p>
      </div>
      <div class="col-md-2 col-sm-2 fooexam"><br/>
        <a href="">Aptitude</a><br/>
        <a href="">History</a><br/>
        <a href="">Geography</a><br/>
        <a href="">Civics</a><br/>
        <a href="">Political Science</a>
      </div>
      <div class="col-md-2 col-sm-2 fooicon"><br/>
        <i class="fab fa-facebook" style="font-size:25px;"></i><br/>
        <i class="fab fa-twitter-square" style="font-size:25px;"></i><br/>
        <i class="fab fa-linkedin" style="font-size:25px;"></i><br/>
        <i class="fab fa-pinterest-square" style="font-size:25px;"></i><br/>
        <i class="fab fa-google-plus" style="font-size:25px;"></i>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href=""> vimalupreti.com</a>
  </div>
</div>



  
