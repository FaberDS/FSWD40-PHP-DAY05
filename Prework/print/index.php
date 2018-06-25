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
                alert(this.responseText);
            }
        }
    
    </script>
</body>
</html>
