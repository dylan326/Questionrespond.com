  var obj, dbParam, xmlhttp, myObj, x, txt = "";
obj = { "table":"questions"};
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        for (x in myObj) { 
          
          //Grab the user image to put in every loop.  and make the  question linked.
            txt += "<div class='askquestions'><img src='view/images/user.jpg' style='height: 50; width: 50;' > <b>" + myObj[x].username +":</b> "
            + "<b><a href='totalqs.php?q_id=" + myObj[x].q_id + "&question=" + myObj[x].question + "&username="+myObj[x].username +"'" + ">" + myObj[x].question + "</a></b> Asked on " 
            + myObj[x].q_date + "</div><br />" ;
          
        }
      //this puts the JSON into the ask.php top level file
        document.getElementById("putquestionask").innerHTML = txt;
    }
};
//grabs the PHP file that turns the database call into JSON
xmlhttp.open("GET", "../public_html/model/testdbcall.php?x="  + dbParam, true);
xmlhttp.send();
