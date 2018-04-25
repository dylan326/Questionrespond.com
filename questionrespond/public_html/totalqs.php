<?php
session_start();
include('controller/checker.php');


?>
<html>
    <head><title>Question Details</title>
    <link rel="stylesheet" type="text/css" href="view/css/style.css">
   
    <link rel="shortcut icon" href="view/images/qmarkicon.ico" type="image/x-icon">
    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./scripts/logout.js"></script>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="controller/totalqsJSONcall.js"></script>
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
  
          
            <center><h2>Question: "<?php echo $_GET['question']; ?>" asked by <?php echo $_GET['username']; ?></h2></center>
   

    <center>
        <h3>Answer the Question</h3>
    </center>
    <center> 
        <form action="model/suba.php" method="post"><br> 
            <input type="text" name="answer" size="70" style="height: 30px;box-shadow: 10px 10px 5px #888888;" placeholder='Answer'><br/>
            <input type="hidden" name="type" value="<?php echo $_GET['q_id']; ?>" ><br />
            <input type="hidden" name = "qa_username" value = "<?php echo $_GET['username']; ?>"><br />
            <input type="hidden" name = "qa_question" value = "<?php echo $_GET['question']; ?>"><br />
            <input type ="submit">
        </form>
    </center> 
    <br />
    <div id="q_id_grab" style ="visibility: hidden;"><?php echo $_GET['q_id']; ?></div>
 <h4 id="totalqsh4">Answers by other users</h4>
 <br />

     <div id="otheruseranswers"></div>

    </body>
</html>