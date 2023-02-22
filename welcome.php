<?php
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <style type="text/css">
           #first{
            text-align: center;
            min-height: 90px;
            min-width:100px;
            font-size: 65px;
            margin: 0% auto;
            font-family: 'Norwegian',cursive;
            background-color: #702329;
            color: #c7ae22;
            cursor: pointer;
            }
            *{
                box-sizing: border-box;
            }
            #cont{
                text-align: right;
                color: #000;
                height: 22px;
                width:auto;
                font-weight: bold;
                font-size: 20px;
                background-color: #c6c6c6;
            }
            .welcome{
                background-color: #702329;
                color: white;
                height: 100%;
                width: 50%;
                text-align: center;
                background-size: auto;
                font-size: 30px;
                font-family: Arial, Helvetica, sans-serif;
            }
            strong{
                color: #c7ae22;
            }
            img{
                width: 50%;
                height: 70%;
                }    
            #left {
                width: 70%;
                float: left;
                text-align: center;
                height: 100%;
                } 
            #right {
                width: 30%;
                height: 100%;
                float: right;
                text-align: center;
                    }   
            .slideshow-container {
                 max-width: 1000px;
                 position: relative;
                 margin: auto;
                      }
            .prev, .next {
                cursor: pointer;
                position:inherit;
                top: 50%;
                width: auto;
                margin-top: -22px;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                transition: 0.6s ease;
                border-radius: 0 3px 3px 0;
                user-select: none;
                }
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
                }
            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
                }
            .text {
                color: black;
                font-size: 30px;
                padding: 8px 12px;
                position: absolute;
                bottom: 8px;
                width: 100%;
                text-align: center;
                font-weight: bold;
                }
            .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
                }
            @-webkit-keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
                }
            @keyframes fade {
                from {opacity: .4}
                to {opacity: 1}
                }
        </style>
    </head>
    <body>
        <div id="first">&#9770 ITTACH</div>
        <div id="cont">
            <a href="login.php">LOGIN</a>
        </div>
        <hr>
        <h2 align="center">WELCOME TO ITTACH <br>
          <i>~MAKING THINGS BETTER~</i>
        </h2>
        <table align="center" style="width: 80%;height: 50%;position:fixed;text-align: center;align-self: center;border-right: 100px solid white;border-left: 300px solid white;">
            <tr align="center">
                <td idlogin.html
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                          <div class="numbertext"></div>
                          <img src="wire/try.jpeg" style="width:100%" height="100%">
                          <div class="text">SKILLS</div>
                        </div>
                      
                        <div class="mySlides fade">
                          <div class="numbertext"></div>
                          <img src="wire/three.jpeg" style="width:100%"height="100%" >
                          <div class="text">SUCCESS</div>
                        </div>
                      
                        <div class="mySlides fade">
                          <div class="numbertext"></div>
                          <img src="wire/one.jpeg" style="width:100%" height="100%">
                          <div class="text">TRAINING</div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext"></div>
                            <img src="wire/four.jpeg" style="width:100%" height="100%">
                            <div class="text">EXPERIENCE</div>
                          </div>
                      
                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                      </div>
                      <script>
                          var slideIndex = 0;
                          showSlides();
                          function showSlides() {
                             var i;
                             var slides = document.getElementsByClassName("mySlides");
                             for (i = 0; i < slides.length; i++) {
                               slides[i].style.display = "none";
                               }
                             slideIndex++;
                             if (slideIndex > slides.length) {slideIndex = 1}
                             slides[slideIndex-1].style.display = "block";
                             setTimeout(showSlides, 2000); // Change image every 2 seconds}
                          }
                      </script>
                </td>
                <td id="right" class="welcome">
                        Looking for an internship in Kenya?<br>
                        <strong>Get an internship opportunity now!!</strong><br>
                        ITTACH allows you to: <br>
                        -Post internship vacancies <br>
                        -View internship vacancies
                </td>
            </tr>
        </table>                  
    </body>
</html>