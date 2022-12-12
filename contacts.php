<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contacts</title>
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
   	      <b><a href="contacts.php">Contacts</a></b>
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
        <h2 align="center">CONTACT US AT: </h2>
        <table align="center">
            <tr>
                <td><img src="wire/phone.jpg" alt="phone" height="50" width="50"></td>
                <td style="width: 20px;"></td>
                <td style="font-size: 25px;">+254 712 345 678</td>
            </tr>
            <tr>
                <td><img src="wire/gmail.png" alt="gmail" height="50" width="50"></td>
                <td></td>
                <td style="font-size: 25px;">ittachinternships@gmail.com</td>
            </tr>
            <tr>
                <td><img src="wire/facebook.png" alt="phone" height="50" width="50"></td>
                <td></td>
                <td style="font-size: 25px;">ittachinternships</td>
            </tr>
            <tr>
                <td><img src="wire/insta.jpg" alt="phone" height="50" width="50"></td>
                <td></td>
                <td style="font-size: 25px;">ittach_internships</td>
            </tr>
            <tr>
                <td><img src="wire/twitter.png" alt="phone" height="50" width="50"></td>
                <td></td>
                <td style="font-size: 25px;">@ittachinternships</td>
            </tr>
        </table>
    </body>
</html> 