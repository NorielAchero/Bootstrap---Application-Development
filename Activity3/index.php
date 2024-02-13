<!DOCTYPE html>
<html>
  <head>
    <!-- Noriel Achero | 3 BSCS 2 -->
    <title>Activity 3</title>
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
  <body>
    <h1>ACTIVITY 3</h1>

    <!-- Bootstrap Pager And Pagination -->

    <div class = "conatiner-fluid">
      <ul class = "pager">
        <li class="previous"><a href="#">Previous</a></li>
        <li class="next"><a href="#">Next</a></li>
      </ul>

      <ul class = "pagination pagination-sm">
        <li class="active"><a href="#">1</a></li>
        <li class=""><a href="#">2</a></li>
        <li class=""><a href="#">3</a></li>
        <li class=""><a href="#">4</a></li>
        <li class=""><a href="#">5</a></li>
      </ul>

      <ul class = "pagination">
        <li class=""><a href="#">1</a></li>
        <li class=""><a href="#">2</a></li>
        <li class="disabled"><a href="#">3</a></li>
        <li class=""><a href="#">4</a></li>
        <li class=""><a href="#">5</a></li>
      </ul>

      <ul class = "pagination pagination-large">
        <li class=""><a href="#">1</a></li>
        <li class=""><a href="#">2</a></li>
        <li class=""><a href="#">3</a></li>
        <li class=""><a href="#">4</a></li>
        <li class=""><a href="#">5</a></li>
      </ul>
    </div>
    <br>
    <br>
    <br>  
    <hr> 
    
    <!-- Tab and Pill In Dynamic -->

    <div class="conatiner-fluid">
      <ul class = "nav nav-pills">
        <li class="active"><a href="#p1" data-toggle="pill">Home</a></li>
        <li><a href="#p2" data-toggle="pill">About Us</a></li>
        <li><a href="#p3" data-toggle="pill">Contact Us</a></li>
        <li><a href="#p4" data-toggle="pill">Product</a></li>
      </ul>
      <div class = "tab-content">
        <div class="tab-pane fade in active" id="p1">Welcome to Home</div>
        <div class="tab-pane fade" id="p2">Welcome to AboutUs</div>
        <div class="tab-pane fade" id="p3">Welcome to ContactUS</div>
        <div class="tab-pane fade" id="p4">Welcome to Product</div>
      </div>

      <ul class = "nav nav-tabs">
        <li class="active"><a href="#t1" data-toggle="tab">Home</a></li>
        <li><a href="#t2" data-toggle="tab">About Us</a></li>
        <li><a href="#t3" data-toggle="tab">Contact Us</a></li>
        <li><a href="#t4" data-toggle="tab">Product</a></li>
      </ul>
      <div class = "tab-content">
        <div class="tab-pane fade in active" id="t1">Welcome to Home</div>
        <div class="tab-pane fade" id="t2">Welcome to AboutUs</div>
        <div class="tab-pane fade" id="t3">Welcome to ContactUS</div>
        <div class="tab-pane fade" id="t4">Welcome to Product</div>
      </div>
    </div>

    <br>
    <br>
    <br>  
    <hr> 
    <!--Bootstrap Pill-->
    
    <div class = "container-fluid">
      <ul class = "nav nav-pills">
        <li><a href="#">HOME</a></li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">JAVASCRIPT</a></li>
      </ul>



      <ul class = "nav nav-pills">
        <li class = "active"><a href="#">HOME</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PHP<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">PHP-HTML</a></li>
            <li><a href="#">PHP-PHP</a></li>
            <li><a href="#">PHP-JAVASCRIPT</a></li>
          </ul>
        </li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">JAVASCRIPT</a></li>
      </ul>


      <ul class = "nav nav-pills nav-stacked">
        <li class="active"><a href="#">HOME</a></li>
        <li><a href="#">HTML</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">JAVASCRIPT</a></li>
      </ul>

      <ul class = "nav nav-pills nav-justified">
        <li><a href="#">HOME</a></li>
        <li class="active"><a href="#">HTML</a></li>
        <li><a href="#">PHP</a></li>
        <li><a href="#">JAVASCRIPT</a></li>
      </ul>


    </div>

    <br>
    <br>
    <br>  
    <hr>


    <!--Bootstrap Tab-->
    
    <div class = "conatiner-fluid">
      <ul class = "list-inline">
        <li><a href = "#">Home</a></li>
        <li><a href = "#">HTML</a></li>
        <li><a href = "#">CSS</a></li>
        <li><a href = "#">JS</a></li>
      </ul>
      
      <ul class = "nav nav-tabs">
        <li><a href = "#">Home</a></li>
        <li class = "active"><a href = "#">HTML</a></li>
        <li><a href = "#">CSS</a></li>
        <li><a href = "#">JS</a></li>
      </ul>
      
      <ul class = "nav nav-tabs">
        <li><a href = "#">Home</a></li>
        <li class = "active"><a href = "#">HTML</a></li>
        <li class = "dropdown">
            <a class = "dropdown-toggle" href = "#" data-toggle="dropdown" >CSS<span class = "caret"></span></a>
              <ul class = "dropdown-menu">
                <li><a href = "#">CSS-Function</a></li>
                <li><a href = "#">CSS-Design</a></li>
                <li><a href = "#">CSS-Inline</a></li>
              </ul>
        </li>  
   
        <li><a href = "#">JS</a></li>
      </ul>
    
    </div>
    
    
    <br>  
    <hr>   
    
    <!--Bootstrap Accordion-->
    
    <div class = "container-fluid">
      <div class = "panel-group" id = "myAccordion">
        <div class = "panel panel-default">
          <div class = "panel-heading">
            <h4>
              <a href = "#colap1" data-toggle = "collapse" data-parent = "#myAccordion">Collapsible Accordion</a>
            </h4>
          </div>
          <div class = "collapse panel-collapse" id = "colap1">
            <div class = "panel-body">You can put anything here...</div>
          </div>
        </div>
        
        <div class = "panel panel-warning">
          <div class = "panel-heading">
            <h4>
              <a href = "#colap2" data-toggle = "collapse" data-parent = "#myAccordion">Collapsible Accordion</a>
            </h4>
          </div>
          <div class = "collapse panel-collapse" id = "colap2">
            <div class = "panel-body">You can put anything here...</div>
          </div>
        </div>
        
        <div class = "panel panel-info">
          <div class = "panel-heading">
            <h4>
              <a href = "#colap3" data-toggle = "collapse" data-parent = "#myAccordion">Collapsible Accordion</a>
            </h4>
          </div>
          <div class = "collapse panel-collapse" id = "colap3">
            <div class = "panel-body">You can put anything here...</div>
          </div>
        </div>
        <div class = "panel panel-success">
          <div class = "panel-heading">
            <h4>
              <a href = "#colap4" data-toggle = "collapse" data-parent = "#myAccordion">Collapsible Accordion</a>
            </h4>
          </div>
          <div class = "collapse panel-collapse" id = "colap4">
            <div class = "panel-body">You can put anything here...</div>
          </div>
        </div>
      </div>
    
    
    </div>
        
    <br>  
    <hr> 
    
    <!--Collapse List Group-->
    
    <div class="container-fluid">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a href="#efg" data-toggle="collapse">List of college</a>
            </h4>
          </div>
         
         
          <div class="collapse panel-collapse" id="efg">
            <ul class="list-group">
              <li class="list-group-item">CICS</li>
              <li class="list-group-item">CET</li>
              <li class="list-group-item">CBA</li>
              <li class="list-group-item">CAS</li>
            </ul>
           
            <div class="panel-footer">This is the panel footer</div>
           
          </div>
         
        </div>
      </div>
    </div>
    
    
    
    
    
    <br>  
    <hr> 
    
    
    
    <!--List Group-->
    
    <div class = "container-fluid">
      
      <div class = "list-group">
        <a href = "#" class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </a>
        <a href = "#" class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </a>
        <a href = "#" class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </a>
        <a href = "#" class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </a>
        
      </div>
      
      
      
      
      <ul class = "list-group">
        <li class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </li>
        <li class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </li>
        <li class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </li>
        <li class = "list-group-item">
          <h4 class = "list-group-item-heading">This is the heading</h4>
          <div class = "list-group-item-text">This is the paragraph</div>
        </li>
      </ul>  
      
      <ul class = "list-group">
        <li class = "list-group-item list-group-item-success">List Item</li>
        <li class = "list-group-item">List Item</li>
        <li class = "list-group-item">List Item</li>
        <li class = "list-group-item">List Item</li>
      </ul>  
  
    
      <div class = "list-group">
        <a href = "#" class = "list-group-item list-group-item-info">Div List Element</a>
        <a href = "#" class = "list-group-item">Div List Element</a>
        <a href = "#" class = "list-group-item">Div List Element</a>
        <a href = "#" class = "list-group-item">Div List Element</a>
      </div>
      <br>  
      <hr> 
    
       <!--bootstrap collapse panel-->
    
      <div class = "container">
        
          <div class = "panel panel-success">
            <div class = "panel-heading">
              <h4><a href = "#abc" data-toggle = "collapse">This is a panel heading</a></h4>
            </div>
            <div id = "abc" class = "collapse panel-collapse">
              <div class = "panel-body">
                <p>This ia panel body</p>
              </div>
              <div class = "panel-footer">
                This is a panel footer
              </div>
            </div>

          </div>
        
        
      </div>
    
    
    
    
            
      <br>  
      <hr>   
      
      <!--bootstrap collapse-->
            
      <div class = "container">
        
          <button class = "btn btn-primary" data-target="#dtx" data-toggle="collapse">Click to collapse</button>
        <button class = "btn btn-info" data-target="#dty" data-toggle="collapse">Click to collapse</button>
        <div id = "dty" class = "collapse">The data to be collapsed is in here...</div>
        <div id = "dtx" class = "collapse"><img height="400"src = "https://static.wikia.nocookie.net/0b1c376c-8479-4742-9744-597f7b1ec5e5/scale-to-width/755"></div>
            
      
            
            
      <br>  
      <hr> 
    
 
        
      <!--Panel  -->
        
      <div class = "container">
        
         <div class = "panel panel-danger">
          <div class = "panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          <div class = "panel-body">
            <p>This ia panel body</p>
          </div>
          <div class = "panel-footer">
            This is a panel footer
          </div>
        </div>
        
        <div class = "panel panel-warning">
          <div class = "panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          <div class = "panel-body">
            <p>This ia panel body</p>
          </div>
          <div class = "panel-footer">
            This is a panel footer
          </div>
        </div>
         
        
        <div class = "panel panel-info">
          <div class = "panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          <div class = "panel-body">
            <p>This ia panel body</p>
          </div>
          <div class = "panel-footer">
            This is a panel footer
          </div>
        </div>
        
    
        
        <div class = "panel panel-success">
          <div class = "panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          <div class = "panel-body">
            <p>This ia panel body</p>
          </div>
          <div class = "panel-footer">
            This is a panel footer
          </div>
        </div>
      
        
      
        
        <div class = "panel panel-default">
          <div class = "panel-heading">
            <h4>This is a panel heading</h4>
          </div>
          <div class = "panel-body">
            <p>This ia panel body</p>
          </div>
          <div class = "panel-footer">
            This is a panel footer
          </div>
        </div>
        

      </div>
        

</html>