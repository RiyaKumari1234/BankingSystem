<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Online Banking System</title>


  <!-- -->
<style>
  * {box-sizing: border-box}
  body {font-family: Verdana, sans-serif; margin:0}
  .mySlides {display: none}
  img {vertical-align: middle;}

  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }

  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }

  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
    transition-duration: 0.6s;
  }

  .active, .dot:hover {
    background-color: #717171;
  }

  /* Fading animation */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 10.5s;
  }

  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }

  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next, .text {font-size: 11px}
  }

</style>

</head>
  <!-- -->
  <body>
  <?php
  include 'navbar.php';
  ?>
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :#001A1A;">
            
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <!--<h3 style="text-shadow: 1px 2px 2px #CE5937;">Welcome to</h3>-->
                  
                    <h1 style="text-shadow: 1px 3px 3px #85fa78; color:white"><b></br><u>ONLINE BANK</u></b></h1>
                    <p style="color:white">ONLINE BANKING is an initiative to help the upcoming people with online transaction of money. This will provide a safe and sound transaction between the users.</p>
                    
                  </div>
              </div>
              <!--   <div class="col-sm-12 col-md img text-center">
                <img src="image/bank1.jpg" class="img-fluid pt-2">
              </div>         -->
        <div class="col-sm-12 col-md img text-center">
          <div class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
                <img src="image/slide1.jpg" style="width:100%">
              <div class="text">Online Banking</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
                <img src="image/slide2.jpg" style="width:100%">
              <div class="text">Online Banking</div>
            </div>

            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
               <img src="image/slide3.jpg" style="width:100%">
              <div class="text">Online Banking</div>
            </div>
              
          </div>
          <br>

          <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
      </div>
              <script>
              var slideIndex = 1;
              showSlides(slideIndex);

              function plusSlides(n) {
                showSlides(slideIndex += n);
              }

              function currentSlide(n) {
                showSlides(slideIndex = n);
              }

              function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
              }
              </script>
           
    </div>
</br> </br> </br>
        <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="image/user.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="color : white;background-color:#3d3d3d;box-shadow: 2px 2px 7px 1px #85fa78;"><b>Create a User</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="image/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="color : white;background-color:#3d3d3d;box-shadow: 2px 2px 7px 1px #85fa78;"><b>Make a Transaction</b></button></a>
                  </div>
                  <div class="col-md act">
                    <img src="image/history1.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="color : white;background-color:#3d3d3d;box-shadow: 2px 2px 7px 1px #85fa78;"><b>Transaction History</b></button></a>
                  </div>
            </div>
      </div>
</br></br></br>
</div>
	<div style="Padding:30px";>
<hr>
<marquee Style="text-align:Left;color:purple;font-size:25px;"><b>Create Account --> Store Money --> Transact --> Check History</b></marquee>
<hr style="color:white;width:100%;">
</div>

      <!--<footer class="text-center mt-5 py-2">
        <p>@copy made by<b> PRETTY JOYCE G</b> <br> Joyce Foundation</p>
      </footer>-->
      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify"><i>ONLINE BANKING</i> is an initiative  to help the upcoming people with online transaction of money. This will provide a safe and sound transaction between the users. </p>
          </div>
          <div class="col-xs-6 col-md-3">
            <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="index.php">Home</a></li>
              <li><a href="createuser.php">Create User</a></li>
              <li><a href="transfermoney.php">Transfer Money</a></li>
              <li><a href="transactionhistory.php">Transfer History</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">@Copyright Pretty Joyce .</br> Pretty Joyce Foundation
            </p>
          </div>

          
        </div>
      </div>
</footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>