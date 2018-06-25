function fetchContent(){

var ajax = new XMLHttpRequest();
var method = "GET";
var url = "data.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);
//sending ajax request
ajax.send();
//receiving response from data.php
ajax.onreadystatechange = function (){
    if(this.readyState == 4 && this.status == 200){
        //Converting JSON back to array
        var data = JSON.parse(this.responseText);
        console.log(data);

        var html = "";

        for(var a = 0; a < data.length; a++){
            var name = data[a].name;
            var position = data[a].position;
            var salary = data[a].salary;

            //append at html
            html += "<tr>";
                html += "<td>" + name + "</td>";
                html += "<td>" + position + "</td>";
                html += "<td>" + salary + "</td>";
            html += "</tr>";
        }
        document.getElementById("data").innerHTML = html;
    }
}
}
fetchContent();
//Insert Content


$("#insert").click(function(){
    $.post( $("#insertForm").attr("action"),
    $("#insertForm :input").serializeArray(),
    function(info){ $("#msg").html(info);
    });
    clearInput();
    fetchContent();
});
$("#insertForm").submit( function(){
    return false;
});
function clearInput(){
    $("#insertForm :input").each( function() {
        $(this).val('');
    });
}
