<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PHP DAY 5 Challenge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
    <!-- <div class="jumbotron bg-cover">
       
        <form id="searchForm" action="server-side.php" method="POST">
            <div class="col-lg-4 mx-auto input-group md-form form-sm form-1 pl-0">
                
                <div class="input-group-prepend">
                    <button class="p-0" id="submit"><span class="input-group-text cyan lighten-2" id="basic-text1"><i class="fas fa-search"></i></span></button>
                </div>
                <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" name="name">
            </div>
        </form>
    </div>
    <div class="row">

        <div class="col-lg-6 mx-auto border" >
            <h2>Result:</h2>
            <p id="msg"></p>

        </div>

    </div> -->

        <form action="server-side-input.php" method="POST" id="inputForm">

            <input type="text" name="name" placeholder="name">
            
            <input type="text" name="position" placeholder="position">
            
            <input type="text" name="salary" placeholder="salary">

            <Button type="button" id="inputBtn" >senden</Button>


        </form>
        <p id="output"></p>
    
    <script src="js/main.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>