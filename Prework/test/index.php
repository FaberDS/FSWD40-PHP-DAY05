<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Insert DATA into MySQL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        
        <form action="server-side.php" method="POST" id="myForm">

            <input type="text" name="name" placeholder="name">
            
            <input type="text" name="position" placeholder="position">
            
            <input type="text" name="salary" placeholder="salary">

            <Button type="button" id="submit" value="senden">senden</Button>


        </form>

        <span id="message"></span>
        <span id="output"></span>
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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script-ajax.js" type="text/javascript"></script>
   </body>
</html>