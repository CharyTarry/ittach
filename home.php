<?php
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
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
            .sidenav{
                top: 95px;
                left:0;
                height: 100%;
                position: fixed;
                padding-top: 60px;
                z-index: 1;
                overflow-x: hidden;
                width: 0px;
                background-color: #702329;
                transition: 0.5s;
                font-family: cursive;
                }
            .sidenav a{
                padding: 9px 8px 8px 32px;
                display: block;
                font-size: 25px;
                color: black;
                text-decoration: none;
                transition: 0.7s;
                }
            .sidenav a:hover{
                color: pink;
                box-shadow: 0 0 45 45 red;
                border-radius: 10%;
                }
            .sidenav .closebtn{
                position: absolute;
                top: 0;
                right: 25px;
                font-size: 50px;
                margin-left: 50px;
                }
            #openbtn{
                position: block;
                cursor: pointer;
                font-size: 40px;
                }
            button{
				border-color:#ca17ff;
				padding:10px;
				width:90px;
				height:90px;
				border-radius:50%;
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
                background-color: #c6c6c6;
                color: black;
                height: 100%;
                width: 50%;
                text-align: right;
                background-size: auto;
                font-size: 20px;
                font-family: 'Courier New', Courier, monospace;
            }
            #left {
                width: 70%;
                float: left;
                text-align: center;
                height: 100%;
                } 
            #right {
                width: 25%;
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
            <a href="home.php">HOME</a>
            <a href="welcome.php">LOGOUT</a>
        </div>
        <div id="Nav" class="sidenav">
   	   	  <a href="javascript:void(0)" class="closebtn" onclick="closeb()">&#9776</a>
   	      <a href="vacancies.php">Vacancies</a>
   	      <a href="post vacancy.php">Post vacancy</a>
   	      <a href="help&about.php">Help & About</a>
   	      <a href="contacts.php">Contacts</a>
   	      <a href="#">Delete account</a>
        </div>
        <span id="openbtn" onclick="openb()">&#9776</span>
        <script type="text/javascript">
            function openb(){
                var lol=document.getElementById("Nav");
                lol.style.width="250px"; 
                document.getElementById("openbtn").style.display="none";
            }
            function closeb(){
                document.getElementById("Nav").style.width="0px";
              document.getElementById("openbtn").style.display="block";
            }
        </script> 
          <table align="center" style="width: 80%;height: 50%;position:fixed;text-align: center;align-self: center;border-right: 20px solid white;border-left: 200px solid white;">
            <tr align="center">
                <td id="left"> 
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                          <div class="numbertext"></div>
                          <img src="wire/int1.jpg" style="width:100%" height="100%">
                          <div class="text"></div>
                        </div>
                      
                        <div class="mySlides fade">
                          <div class="numbertext"></div>
                          <img src="wire/co1.jpeg" style="width:100%"height="100%" >
                          <div class="text"></div>
                        </div>
                      
                        <div class="mySlides fade">
                          <div class="numbertext"></div>
                          <img src="wire/int3.jpg" style="width:100%" height="100%">
                          <div class="text"></div>
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext"></div>
                            <img src="wire/int4.jpg" style="width:100%" height="100%">
                            <div class="text"></div>
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
                    Here are some benefits of internships: <br>
                    - Gain skills and experience <br>
                    -Achieve goals <br>
                    -Open opportunities <br>
                    -Learning <br>
                    -Training <br>
                </td>
            </tr>
        </table>                  
    </body>
</html>