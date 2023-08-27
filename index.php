<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="clgflex.css">
    <title>flex boxt</title>


    <style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 850px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 80%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}

}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body style="background-image: url(cl.jpg);">
    <div id="a">
        <header class="header">
            <aside class="aside1">
                    <img src="logo.JPG" height="210">
                    
            </aside>
            <aside class="aside2">

            <!--<img align="right"src="cl.JPG" height="350" width="800">-->
                <h1 id="h1" >Lady Shri Ram college</h1>
                
            </aside>
            <aside class="aside3">
                <!--    -->
                <from method="post" action="a.php">
                <h4>
                    <h3>To view more <a href="sign in.html">click</a> log in:</h3>
                                        </h4>
                </from>
            </aside>
                
        </header>
        <article class="index">

            <aside class="aside11" ><a href="hostel.html">hostel</a> </aside>
            <aside class="aside22" ><a href="library.html">library</a></aside>
            <aside class="aside33" ><a href="The Innovation Council at LSR.html">Innovation Council </a></aside>
            <aside class="aside44" ><a href="course details.html">About course</a></aside>
          <aside class="aside55">  <a href="contact.html">contact us</a></aside>

            
            </article>
        

        <artical id="main">
            <aside id="left"><br><br>
<button type="button"
    onclick="document.getElementById('time').innerHTML=Date()">
<b id="time">click me to see the time </b>
</button><br>
<button type="button"
    onclick="document.getElementById('time').style.fontSize='50px'">
  
change size
</button><br>
                <h2>Welcome To Lady Shri Ram College</h2>
    <marquee> 
    The Admission From for session 2023-24 will be available from 1st july 2023</marquee>
    <marquee direction="right"
             behavior="alternate"
             style="border:BLACK 2px SOLID">
                &diams;stay in touch</marquee>
<h2>this college provide :  </h2>
<h2 id="list">                 
                     <li id="l" id="list">
                     
                     science,arts,comerce </li>
                </h2>
                <img align="right" src="p.jpg" height="300" width="350" class="img-responsive center-block mar-t-top1" alt="">
            <h3 class="text-center"><a href="principal"><b>Message from Teacher-in-charge </b></a></h3>
                  <!-- <div class="divide-lg"></div> -->
                  <p class="p-size text-justify" style="color:white;"><h3>
                    I am proud to inform that our college website has been developed in responsive mode to facilitate the students and teachers surf the website easily from any gadget, specially from their smart phone.  The college admission process is fully  automatized and processed online without any manual intervention. ...
				            <a href=principal><b>more</b></a></h3>
                  </p>
                  <h2 class="text-justify">Dr. Sudipa Bandopadhyay
 <br> Teacher-in-charge
</h2>

            </aside>
            <aside id="right">
            <br>
            
            <p><a href=#sec6>click here to go img section(footer)</a></p>
            <p>
                <!--    -->



                <h2>Engaging Talent Discovering Ideas</h2>
<p>One of the best college in India</p>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="s1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="cl.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="s4.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>




<hr><hr>


<section class="page-row page-row3" style="float: left;"><p class="panorama"><h2>Lady Shri Ram College</h2></p><div class="fee-details common-section white"><div class="container"><div class="row_inner_wrapper"><img src="graph.jpg"></div></div></div></section>

     
                <!--  -->
        </aside>
        </artical>
        
<footer class="footer" style="background-color:white;">
    <h5 id="sec6"><img src="flex1.JPG" height="200">
        <img src="flex2.JPG" height="200">
    <img src="flex3.JPG" height="200" width="300">
        <img src="flex4.JPG" height="200"width="280">
        <h5 id="sec6"><img src="s1.JPG" height="200" width="350">
        <img src="cl.JPG" height="200">
    <img src="d1.JPG" height="200" width="300">
        <img src="d.JPG" height="200"width="280"><br>
        <h1>copyright &copy sathi paul</h1>
    </h5>
</footer>
    </div>
 
    <script src="script1.js"></script>   
</body>
</html>