window.onload = function()
{
 var obj, dbParam, xmlhttp, myObj, x, txt = "", username = document.getElementById("username_grab");
obj = { "table":"questions"};
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        for (x in myObj) { 
          if(username.innerHTML == myObj[x].username)
          {
            txt += "<div id='yourqspage'>" + "<b><a href='totalqs.php?q_id=" + myObj[x].q_id + "&question=" + myObj[x].question +"&username=" + username.innerHTML + "'" + ">" 
            + myObj[x].question + "</a></b> Asked on " + myObj[x].q_date + "</div><br>" ;
          }
        }
        document.getElementById("yourqs").innerHTML = txt;
    }
};
//xmlhttp.open("GET", "model/yourqsdbcall.php?x="  + dbParam, true);
xmlhttp.open("GET", "model/testdbcall.php?x="  + dbParam, true);
xmlhttp.send();
};
    
    