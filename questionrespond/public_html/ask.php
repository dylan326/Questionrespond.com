<?php
session_start();
include('controller/checker.php');
?>
    <html>
    <head><title>Ask a Question</title>
    <link rel="stylesheet" type="text/css" href="./view/css/style.css">
    <link rel="stylesheet" type="text/css" href="./view/css/icon.css">
    <link rel="shortcut icon" href="images/qmarkicon.ico" type="image/x-icon">
    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./view/logout.js"></script>
    <script type="text/javascript"
                src = "../public_html/controller/askJSONcall.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <br /> 
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" >Questionrespond.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="ask.php">Ask a Question</a></li>
     
      
      <li><a href="search.php">Search or Answer</a></li>
      <li><a href="yourqs.php">Your Questions</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.html" style = "color: #00FFFF;"><span class="glyphicon glyphicon-log-in" style ="color: #00FFFF;"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  

    
    <center><h2><b>Hi <?php echo $_SESSION['username']; ?> </b></h2></center>
    
       <div class="askbar"> <form action='model/subq.php' method='post'>
          
            <center><input   type='text' name='question' size='100' style="height: 30px;" placeholder='Ask a Question...'><span><input type ='submit'value = 'Submit' style="height: 30px; background-color: black; color: white;"></span></center>
            <input type='hidden' name='username' value='<?= $_SESSION['username']; ?>' >
           <!-- <input type ='submit'value = 'Submit'>-->
        </form></div>
    
    <br>
    <!--<center><h1 id ="fq" onMouseOver="change();" >?</h1></center>-->
    <div id="askquestionsheader"><h4>Recent Questions</h4></div>
    <br>
    <div id="putquestionask"></div>
    
   
    </body>
</html>