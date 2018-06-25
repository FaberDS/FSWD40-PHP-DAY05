<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <form action="server-side.php" method="POST" id="myForm">
        <div class="form-group">
            <input type="text" name="name" placeholder="name">

        </div>
        <div class="form-group">
            <input type="text" name="position" placeholder="position">
            
        </div>
        <div class="form-group">
            <input type="text" name="salary" placeholder="salary">
            
        </div>
        <div class="form-group">
            <Button type="button" id="submit" value="senden">senden</Button>
            
        </div>
            
            



        </form>
    <table class="table">

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>
</body>
</html>
