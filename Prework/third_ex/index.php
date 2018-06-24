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

            <input type="submit" id="submit" id="sub">


        </form>

        <span id="message"></span>
        <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script-ajax.js" type="text/javascript"></script>
   </body>
</html>