<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SIGNUP</title>
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
            input[type=text]{
               width: 20%;
               padding: 12px 20px;
               margin: 8px 0;
               box-sizing: border-box;
               border: 2px solid black;
               border-radius: 4px;
            }
            input[type=password]{
               width: 20%;
               padding: 12px 20px;
               margin: 8px 0;
               box-sizing: border-box;
               border: 2px solid black;
               border-radius: 4px;
            }
            input[type=email]{
               width: 20%;
               padding: 12px 20px;
               margin: 8px 0;
               box-sizing: border-box;
               border: 2px solid black;
               border-radius: 4px;
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
        </style>
    </head>
    <body>
        <div id="first">&#9770 ITTACH</div>
        <div id="cont">
            <a href="welcome.php">HOME</a>
            <a href="login.php">LOGIN</a>
        </div>
        <h2 align="center">SIGNUP</h2>
        <form action="signup.php" method="POST" align="center">
             <label for="Firstname" style="font-size: 25px;"><b>First name</b></label><br>
            <input type="text" name="Firstname" required><br>
            <label for="Lastname" style="font-size: 25px;"><b>Last name</b></label><br>
            <input type="text" name="Lastname" required><br>
            <label for="Email" style="font-size: 25px;"><b>Email</b></label><br>
            <input type="email" placeholder="example@gmail.com" name="Email" required><br>
            <label for="Category" style="font-size: 25px;"><b>Category</b></label><br>
            <input type="text" name="Category" required><br>
            
            <!--<label for="Category" style="font-size: 25px;"><b>Category</b></label><br><br>
            <input type="radio" name="Category" value="Student/graduate">
            <label for="Student" style="font-size: 18px;">Student/graduate</label>
            <input type="radio" name="Category" value="Company/employer">
            <label for="company" style="font-size: 18px;">Company/employer</label><br><br>-->
            <label for="Password" style="font-size: 25px;"><b>Password</b> </label><br>
            <input type="Password" name="Password" required><br>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
        </form>
    </body>
    </html>    