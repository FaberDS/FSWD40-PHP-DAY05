<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <table>

        <tr>
            <th>First Name</th>
            <th>Position</th>
            <th>Salary</th>
        </tr>
        <tbody id="data">

        </tbody>
    </table>
    <div id="tol"></div>
    <script>
    
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
    
    </script>
</body>
</html>
