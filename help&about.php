<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Help and about</title>
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
            *{
                box-sizing: border-box;
            }
            #about{
                background-color: #c6c6c6;
                height: 180px;
                margin-left: 250px;
                margin-right: 200px;
                font-size: 20px;
            }
            #about1{
                background-color: #c6c6c6;
                height: 300px;
                margin-left: 250px;
                margin-right: 200px;
                font-size: 20px;
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
   	      <b><a href="help&about.php">Help & About</a></b>
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
        <div id="about">
            <h3 align="center">ABOUT US</h3>
            <p style="font-family: cursive;font-size: 20px;">
                ITTACH was commenced in 2020. <br>
                ITTACH is a web application that helps students and graduates
                in finding attachment and internship ooportunities. <br>
                ITTACH also offers a communication platform for companies and employees. 
            </p>
        </div> 
        <div id="about1">
            <h3 align="center">HELP</h3>
            <p style="font-family: cursive;font-size: 20px;">
                If you saw a post that is not there anymore, the vacancy might
                be full and the post taken down. <br>
                <p style="color: #702329;margin-left: 50PX;font-weight: bold;">
                    Beware of fake vacancy posts. Here are some ways that you can identify fake posts: <br>
                    1. The company has no online presence.(Do some research about the company) <br>
                    2. The recruiter's email doesn't match their company. <br>
                    3. They claim “No experience necessary.” <br>
                    4. They ask for an interview via chat or text.(DO NOT attend the interview if the venue does not match the company location)
                </p>
                Experiencing any problems with our system? <a href="report problem.php">Report problem</a>  
            </p>
        </div> 
    </body>
</html> 