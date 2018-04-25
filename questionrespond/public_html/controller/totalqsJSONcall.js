window.onload = function()
{
    var obj, dbParam, xmlhttp, myObj, x, txt = "", q_id = document.getElementById("q_id_grab");
obj = { "table":"answers"};
dbParam = JSON.stringify(obj);
xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
       
        for (x in myObj) {

            if(q_id.innerHTML == myObj[x].q_id)
            {
            txt += "<div id='totalqsstyle'><img src='view/images/user.jpg' style='height: 50; width: 50;' >"  
            +"<b style='color: blue'>" + myObj[x].cuser +  "</b> <q>" + myObj[x].answer + "</q>  Answered on: "+ myObj[x].a_date +"</div><br />" ;
            }
            
            
        }
        document.getElementById("otheruseranswers").innerHTML = txt;
    }
    
};
xmlhttp.open("GET", "model/totalqsdbcall.php?x="  + dbParam, true);
xmlhttp.send();
};