



<head>

<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Shohan Rahman"> 
        <title> US Weather App </title>


        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

        

</head>



<style>
h1{
    margin-top:10px;
}
body {
  padding-top: 0px;
  background-color: #362057;  
}
body * {
    color:white;
}
input{
    background-color: black;
}
#screen{
    background-color: black;
    border-radius:7px;
    max-width:30rem;
    border: 12px solid grey;
    
  }
.container h3{
    color: #c25925;
    font-family: 'Share Tech Mono', monospace;
    font-size: 1.5rem;
    font-weight:none;
}
select{
    color: black;
}


</style>

<body>


    <div  id="top">
        <h1 class="text-center">Global Weather Kit</h1>
        <p class="text-center">Get weather data about anywhere in the world</p>
    </div>

    <br>    



    <div class="text-center">

        <form action="" method="GET">


        <label for="State">Enter City Name: </label>
        <input type="text" name="city" placeholder="e.g. 'Dhaka'">

        <br>

        <label for="State">Enter Country Name: </label>
        <input type="text" name="country" placeholder="e.g.'bangladesh'">

        <br>
        <label for="units">Select Unit Type:</label>
        <select name="units" id="units">
            <option value="standard">Standard</option>
            
            <option value="metric">Metric</option>
            
            <option value="imperial">Imperial</option>
        </select>

        

        <input name= "submit" type="submit" value="Get Weather Data">


        </form>
        
        <?php include 'formHandler.php';?>

    </div>

    <br>

    <div class="container text-center" id="screen">

        <div id= "box" class="text-left" >
            <br>
            <h3>Temperature (actual): <?php echo $tempActual;?> </h3> <br>
            
            <h3>Temperature (feels like): <?php echo $tempFeel;?> </h3> <br>
            
            <h3>Temperature (min): <?php echo $tempMin;?> </h3> <br>
            
            <h3>Temperature (max): <?php echo $tempMax;?> </h3> <br>
        </div>
        
    </div>

    <br>

    <div class="container text-center" id="screen">

        <div id= "box" class="text-left" >
            <br>
            <h3>Visibility: <?php echo $visibility;?> </h3> <br>
            
            <h3>Wind Speed: <?php echo $windSpeed;?> </h3> <br>
            
            <h3>Wind Direction: <?php echo $windDirection;?> </h3> <br>
        </div>
        
    </div>


    
</body>
</html>