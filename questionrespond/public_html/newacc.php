<html>
    <head> 
        <title>Sign-Up</title> 
        <link rel="stylesheet" type="text/css" href="./view/css/style.css">
        <link rel="shortcut icon" href="view/images/qmarkicon.ico" type="image/x-icon">
    <style>
        body {background-image: url(view/images/ocoast.jpg);
        background-size: cover;}
    </style>
    </head>
    <body>
    <br /><br />
    <center> 
        <h1>Questionrespond.com</h1><h4>Knowledge is power</h4>
    </center>
    <br /><br /><br />
    <center>
        <fieldset style="width:30%">
            <form action="model/add_newacc.php" method="post">SIGN UP HERE<br><br />
                Pick Username:<br> 
                <input type="text" name="username"><br>
                Pick Password:<br>
                <input type="password" name="password"><br>
                Enter your email:<br> 
                <input type="text" name = "email"><br><br />
                <input type="submit" name="submit" value="Create Account">
            </form>
        </fieldset>
    </center>
    </body>
</html>