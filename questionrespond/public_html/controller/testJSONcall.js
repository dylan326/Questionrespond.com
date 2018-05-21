          var obj, dbParam, xmlhttp, myObj, x, txt = "";
obj = { "table":"questions"};
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        for (x in myObj) { 
          
          
            txt += myObj[x].username +": " + "<b><a href='totalqs.php?q_id=" + myObj[x].q_id + "&question=" + myObj[x].question + "&username="+myObj[x].username +"'" + ">" + myObj[x].question + "</a></b> Asked on " + myObj[x].q_date + "<br />" ;
          
        }
              //puts JSON in all questions page
        document.getElementById("test").innerHTML = txt;
    }
};
//grabs file that converted database call to JSON
xmlhttp.open("GET", "../public_html/model/testdbcall.php?x="  + dbParam, true);
xmlhttp.send();
