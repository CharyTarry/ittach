<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Report problem</title>
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
            input[type=checkbox]{
                width: 15px;
                height: 15px;
                color: #702329;
                text-align: right;
            }
            .fom{
                width: 500px;
            }
            input[type=submit]:hover{
                color: purple;
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
        <div align="center" style="width: 100;">
            <form action="" align="center" >
                <p style="font-size: 20px;">
                    Experiencing problems with our site? <br>
                    Here are some common problems. Choose the ones that apply <br>
                </p>
                <input type="checkbox" id="problem1" name="problem1" value="problem1">
                <label for="problem1" style="font-size: 20px;"> Denied access to some pages</label><br><br>
                <input type="checkbox" id="problem2" name="problem2" value="problem2">
                <label for="problem2" style="font-size: 20px;"> User abuse</label><br><br>
                <input type="checkbox" id="problem3" name="problem3" value="problem3">
                <label for="problem3" style="font-size: 20px;"> Wrong information</label><br><br>
                <input type="checkbox" id="problem4" name="problem4" value="problem4">
                <label for="problem4" style="font-size: 20px;"> No feedback</label><br><br>
                <input type="checkbox" id="problem5" name="problem5" value="problem5">
                <label for="problem5" style="font-size: 20px;"> Fake vacancy</label><br><br>
                <p style="font-size: 20px;">
                    Report your problem here
                </p>
                <textarea name="problem" id="problem" cols="55" rows="5"></textarea><br>
                <input type="submit" value="REPORT" style="font-size: 20px;font-weight: bold;">
            </form><br>
            <input type="submit" onclick="location.href='help&about.php';" value="BACK" style="font-size: 20px;font-weight: bold;">
        </div> 
        
    </body>
</html> 