<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Second Example PHP Day 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Get data as JSON from a PHP file on the server.</h2>
    <p>The JSON received from the PHP file:</p>
    <p id="demo"></p>
    <script>
        
        var obj, dbParam, xmlhttp, myObj, i, store="";

        obj = { "table":"employees",
                "position":"'android developer'"};

        dbParam = JSON.stringify(obj);

        xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200){
                myObj = JSON.parse(this.responseText);
                for (i in myObj){
                    store += myObj[i].name + "<br>";
                }
                document.getElementById("demo").innerHTML = this.responsiveText;
            }
        }
        xmlhttp.open("POST", "server-side.php?x=" + dbParam, true);

        xmlhttp.send();
    </script>
</body>
</html>