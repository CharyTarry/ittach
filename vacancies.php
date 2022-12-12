<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vacancies</title>
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
            #block1{
                margin-left: 300px;
                float: left;
                }
            #block2{
                margin-left:1000px;
                text-decoration: none;
                color: black;
                margin: 5px 20px;
                padding: 20px;
                width: 300px;
                float: right;
                }
            a{
                color: black;
            }
            a:hover{
                color:purple;
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
   	      <b><a href="vacancies.php">Vacancies</a></b>
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
        <div>
            <h2 id="block1"><a href="vacancies.php">VACANCIES</a></h2>
            <h2 id="block2"><a href="my applications.php" style="text-decoration: none;">MY APPLICATIONS</a></h2> 
        </div>
    </body>
</html>  