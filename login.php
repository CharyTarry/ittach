<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>
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
        </div>
        <h2 align="center">LOGIN</h2>
        <form action="server.php" method="POST" align="center">
            <label for="Email" style="font-size: 25px;"><b>Email</b></label><br><br>
            <input type="email" placeholder="example@gmail.com" name="email" required><br><br>
            <label for="Password" style="font-size: 25px;"><b>Password</b> </label><br><br>
            <input type="password" name="password" required><br> <br>
            <input type="submit" name="submit" value="LOGIN"><br> <br>
            <a href="#" style="font-size: 18px;">Forgot password?</a> <br>
            <p align="center" style="font-size: 18px;">
                Do not have an account? <a href="signup.php">Create account</a>
            </p>
        </form>
    </body>
    </html>    