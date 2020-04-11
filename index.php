<html>
<head>
    <title>5 Star Rating System In PHP, MySql & jQuery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <input type="hidden" value="HERE COME THE PRODUCT ID" id="product_id">
    <div class="container">
        <h1>Movie Rating </h1>
         <b> <h3>Welcome User Please Give Rating</h3></b>
        
        <hr>
       <b> <h4>Movie :Bahubali</h4></b>
        <div id="star-container">
            <i class="fa fa-star fa-3x star" id="star-1"></i>
            <i class="fa fa-star fa-3x star" id="star-2"></i>
            <i class="fa fa-star fa-3x star" id="star-3"></i>
            <i class="fa fa-star fa-3x star" id="star-4"></i>
            <i class="fa fa-star fa-3x star" id="star-5"></i>
        </div>
        <div id="result"></div>
<br>
<hr>
         <b><h4>Movie :SpiderMan</h4></b>
        <div id="star-container">
            <i class="fa fa-star fa-3x star" id="star-1"></i>
            <i class="fa fa-star fa-3x star" id="star-2"></i>
            <i class="fa fa-star fa-3x star" id="star-3"></i>
            <i class="fa fa-star fa-3x star" id="star-4"></i>
            <i class="fa fa-star fa-3x star" id="star-5"></i>
        </div>
        <div id="result"></div>
<br>
<hr>
        <b> <h4>Movie :EndGame</h4></b>
        <div id="star-container">
            <i class="fa fa-star fa-3x star" id="star-1"></i>
            <i class="fa fa-star fa-3x star" id="star-2"></i>
            <i class="fa fa-star fa-3x star" id="star-3"></i>
            <i class="fa fa-star fa-3x star" id="star-4"></i>
            <i class="fa fa-star fa-3x star" id="star-5"></i>
        </div>
        <div id="result"></div>
        <br>
<hr>

        <button type="button" class="btn btn-success">Submit</button>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>