<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Post vacancy</title>
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
            .column {
                float: left;
                width: 33.33%;
                }
            .row{
                margin-left: 250px;
                height: 25px;
                }
            .row:after {
                content: "";
                display: table;
                clear: both;
                }
                input[type=text]{
               width: 30%;
               padding: 12px 20px;
               margin: 8px 0;
               box-sizing: border-box;
               border: 2px solid black;
               border-radius: 4px;
               height: 25px;
            }
            input[type=submit]:hover{
                color: purple;
                cursor: pointer;
            }
            a{
                font-size: 20px;
                color: black;
            }
            a:hover{
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
   	      <b><a href="post vacancy.php">Post vacancy</a></b>
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
        <div class="row">
            <a href="post vacancy.php" class="column" style="font-weight: bold;">POST VACANCY</a>
            <a href="My posts.php" class="column" style="text-decoration: none;font-weight: bold;">MY POSTS</a>
            <a href="applications.php" class="column" style="text-decoration: none;font-weight: bold;">APPLICATIONS</a>
        </div>
        <form action="" align="center">
            <h2>APPLICATION FORM</h2>
            <label for="First name" style="font-size: 20px;">Company name</label><br>
            <input type="text" name="fname" required><br>
            <label for="Last name" style="font-size: 20px;">Location</label><br>
            <input type="text" name="lname" required><br>
            <label for="Course" style="font-size: 20px;">Address</label><br>
            <input type="text" name="Course" required><br>
            <label for="Category" style="font-size: 20px;">Category</label><br><br>
            <input type="radio" name="category" value="Student/graduate">
            <label for="Student" style="font-size: 15px;">Industrial</label>
            <input type="radio" name="category" value="Company/employer">
            <label for="company" style="font-size: 15px;">Community service</label><br><br>
            <label for="School" style="font-size: 20px;">Intern position</label><br>
            <input type="text" name="school" required><br>
            <label for="company" style="font-size: 20px;">Course requirement</label><br>
            <input type="text" name="Company" required><br>
            <label for="Location" style="font-size: 20px;">Contact(Phone number or email address)</label><br>
            <input type="text" name="location" required><br>
            <input type="submit" name="submit" value="APPLY" style="font-weight: bold;font-size: 17px;"><br>
         </form>
    </body>
</html> 