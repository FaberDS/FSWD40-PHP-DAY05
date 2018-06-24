<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP-Day05</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <h2>Get data as JSON from a PHP file on the server.</h2>
    <p id="placeholder"></p>
    <script>
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                myObj = JSON.parse(this.responseText);
                text = 'My name is ' + myObj.name + ' and I am from ' + myObj.city;
                document.getElementById("placeholder").innerHTML = text;
            }
        };
        xmlhttp.open("GET", "server-side.php", true);
        xmlhttp.send();
    </script>
</body>
</html>