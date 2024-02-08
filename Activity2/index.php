<!DOCTYPE html>
<html>
  <head>
    <!--Noriel Achero | 3 BSCS 2 | Activity 2-->
    <title>CCl311-18</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-3.7.1.js"
  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body style=" background-image: url(https://i.gifer.com/68o.gif); color: white;">
    
    <!--Bagdes-->
    
    <div class = "container-fluid">
      <a href = "#">Messages<span class = "badge"> 10<span></a><br>
      <a href = "#">Notification<span class = "badge"> 30<span></a>
      <button class = "btn btn-primary">Click to see notification<span class = "badge">500</span></button>
    
      <div class = "page-header">
          <h3>Download <span class = "label label-default"> Version 10.1 </span> </h3>
      </div>
      
    </div>
    
    <hr>
    
    <!--Alert-->
    
    
    <div class = "container-fluid">
        <div class = "alert alert-danger fade in"><a href="#" class = "close" data-dismiss="alert">&times;</a> Record already Exists!!!</div>
        <div class = "alert alert-success"><a href="#" class = "close" data-dismiss="alert">&times;</a> Record already Exists!!!</div>
        <div class = "alert alert-warning"><a href="#" class = "close" data-dismiss="alert">&times;</a> Record already Exists!!!</div>
        <div class = "alert alert-info"><a href="#" class = "close" data-dismiss="alert">&times;</a> Record already Exists!!!</div>
    </div>
    
    
    <hr>

    <!--Headings-->
    
    
    <div class = "container-fluid">
      <div class = "jumbotron" style = "color: black;">
        <h1>Heading in jumbotron</h1>
      </div>
        <h1>Heading in jumbotron</h1>
        
      <div class = "page-header" >
        <h1> Welcome </h1>
      </div>
      
      <p class = "well well-sm" style = "color: black;">This is the wall</p>
      <p class = "well" style = "color: black;">This is the wall</p>
      <p class = "well well-lg" style = "color: black;">This is the wall</p>
    
    </div>
    
    <hr>
  
    
    <!--Glyphicon-->
    
    <div class = "container-fluid">
        <span class = "glyphicon glyphicon-trash"></span>:Trash Can <br>
        <span class = "glyphicon glyphicon-pencil"></span>:Pencil <br>
        <button class = "btn btn-success"><span class = "glyphicon glyphicon-search"></span>Find</button>
        <button class = "btn btn-success"><span class = "glyphicon glyphicon-education"></span>Graduate</button>
        <button class = "btn btn-success"><span class = "glyphicon glyphicon-apple"></span>IOS</button>
    
    </div>
    
    <hr>
    
    <!--Dropdown menus-->
    <div class = "container-fluid">
        <div class = "dropdown">
            <button class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">College<span class = "caret"></span></button>
        <ul class = "dropdown-menu">
            <li><a href = "#">CICS</a></li>
            <li><a href = "#">CET</a></li>
            <li><a href = "#">CBA</a></li>
            <li class = "divider"></li>
            <li class = "dropdown-header">Exit</li>
            <li><a href = "#">Logout</a></li>
        </ul>
        </div>
        
        <div class = "dropdown">
            <button class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">College<span class = "caret"></span></button>
        <ul class = "dropdown-menu dropdown-menu-right">
            <li><a href = "#">CICS</a></li>
            <li><a href = "#">CET</a></li>
            <li><a href = "#">CBA</a></li>
            <li class = "divider"></li>
            <li class = "dropdown-header">Exit</li>
            <li><a href = "#">Logout</a></li>
        </ul>
        </div>

        <div class = "dropup">
            <button class = "btn btn-primary dropdown-toggle" data-toggle ="dropdown">College<span class = "caret"></span></button>
        <ul class = "dropdown-menu">
            <li><a href = "#">CICS</a></li>
            <li><a href = "#">CET</a></li>
            <li><a href = "#">CBA</a></li>
            <li class = "divider"></li>
            <li class = "dropdown-header">Exit</li>
            <li><a href = "#">Logout</a></li>
        </ul>
        </div>
        
   
    </div>
    
    
    <hr>
    
    
    
    <!--Button Color and Attributes-->
    
    <div class = "container-fluid">
      <button class="btn btn-default">Click Me</button>
      <button class="btn btn-primary btn-xs">Click Me</button>
      <button class="btn btn-info btn-lg">Click Me</button>
      <button class="btn btn-success btn-md">Click Me</button>
      <button class="btn btn-warning">Click Me</button>
      <button class="btn btn-danger btn-sm">Click Me</button>
      <button class="btn btn-link">Click Me</button>
      <button class="btn btn-danger btn-block">Click Me</button>
      <button class="btn btn-danger disabled">Click Me</button>
      <button class="btn btn-danger active">Click Me</button>
    </div>
    
    <!--Button Group Vertical-->
    
    <div class = "btn-group">
      <button class="btn btn-info">Home</button>
      <button class="btn btn-info">About Us</button>
      <button class="btn btn-info">Contact Us</button>
      <button class="btn btn-info">Products</button>
    </div>
    
    <div class = "btn-group-vertical">
      <button class="btn btn-info">Home</button>
      <button class="btn btn-info">About Us</button>
      <button class="btn btn-info">Contact Us</button>
      <button class="btn btn-info">Products</button>
    </div>
    
    <!--Button Group-->
    
    <div class = "btn-group btn-group-justified">
          <div class = "btn-group">
            <button class="btn btn-danger">Home</button>
          </div>
          <div class = "btn-group">
            <button class="btn btn-success">About Us</button>
          </div>
          <div class = "btn-group">
            <button class="btn btn-success">Contact Us</button>
          </div>
          <div class = "btn-group">
            <button class="btn btn-success">Products</button>
          </div>
    </div>    
    
    <hr>
    
    <!--Image Classes-->
    
     <div class = "container-fluid">
        <img src = "https://media1.tenor.com/m/aF0ipAtOk9cAAAAC/spy-x-family-anya.gif" style = "height: 200px; width: 250px;">
       <img src = "https://media1.tenor.com/m/aF0ipAtOk9cAAAAC/spy-x-family-anya.gif" class = "img-thumbnail" style = "height: 200px; width: 250px;">
       <img src = "https://media1.tenor.com/m/aF0ipAtOk9cAAAAC/spy-x-family-anya.gif" class = "img-circle" style = "height: 200px; width: 250px;">
       <img src = "https://media1.tenor.com/m/aF0ipAtOk9cAAAAC/spy-x-family-anya.gif" class = "img-rounded" style = "height: 200px; width: 250px;">
       
      </div>
      
      

  </body>
</html>