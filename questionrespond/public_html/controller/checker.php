<?php
//this file is included in all top level pages.  It checks if a session is started.  If not it re-directs to index.  
//this is a safety feature so only users with usernames  can use the site. 
if($_SESSION['username'] == "")
{
    header("refresh:0; url=index.html");
    
}
?>
