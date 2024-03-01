<!DOCTYPE html>
<html>
  <head>
    <!-- Noriel Achero | 3 BSCS 2 -->
    <title>Activity 5</title>
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
    <h1>ACTIVITY 5</h1>

 

    <div class="container">
         <!-- POOPOVER -->
        <ul class="list-inline"> 
            <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some content here in popover">Top</a></li> 
            <li><a href="#" data-toggle="popover" data-placement="bottom" title="bottom popover" data-trigger="focus" data-content="Some content here in popover">Bottom</a></li> 
            <li><a href="#" data-toggle="popover" data-placement="left" title="left popover" data-trigger="hover" data-content="Some content here in popover" >Left</a></li> 
            <li><a href="#" data-toggle="popover" data-placement="right" title="right popover" data-content="">Right</a></li>
        </ul>

         <!--TOOL TIP -->
        <ul class="list-inline"> 
            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li> 
            <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="bottom Tool Tip">Bottom</a></li> 
            <li><a href="#" data-toggle="tooltip" data-placement="left" title="left Tool Tip">Left</a></li> 
            <li><a href="#" data-toggle="tooltip" data-placement="right" title="right Tool Tip">Right</a></li>
        </ul>
    </div> 
    
    <script>
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
    </script>

    <br>
    <br>
    <br>
    <hr>
     <!---CAROUSEL-->

     <div class = "container">
        <div id = "myCarousel" class = "carousel slide" data-ride="carousel">
            <ol class = "carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class = "active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class = "carousel-inner">
                <div class = "item active">
                    <img src="https://i.pinimg.com/originals/3b/03/a3/3b03a33a63bcdf64750eaa0a3f0aaae0.gif" width="1000px" height="1000px">
                    <div class="carousel-caption">
                        <h3>My First Pic</h3>
                        <p>Caption of 1st Picture</p>
                    </div>
                </div>

                <div class = "item">
                    <img src="https://steamuserimages-a.akamaihd.net/ugc/766099315125620328/EF11A987AFB5518370D75FD2F31BCF0987D19D37/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" width="1000px" height="1000px">
                    <div class="carousel-caption">
                        <h3>My Second Pic</h3>
                        <p>Caption of 2nd Picture</p>
                    </div>
                </div>

                <div class = "item">
                    <img src="https://i.pinimg.com/originals/07/03/65/070365068f69bf730c9d3b558dba1fb9.gif" width="1000px" height="1000px">
                    <div class="carousel-caption">
                        <h3>My Third Pic</h3>
                        <p>Caption of 3rd Picture</p>
                    </div>
                </div>
                <div class = "item">
                    <img src="https://i.pinimg.com/originals/e0/65/a0/e065a0149ede3019bfe7864ade1e39e7.gif" width="1000px" height="1000px">
                    <div class="carousel-caption">
                        <h3>My Fourth Pic</h3>
                        <p>Caption of 4th Picture</p>
                    </div>
                
                
                </div>

                <a class = "left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class = "glyphicon glyphicon-chevron-left"></span>
                </a>

                <a class = "right carousel-control" href="#myCarousel" data-slide="next">
                    <span class = "glyphicon glyphicon-chevron-right"></span>
                </a>

            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr>

    <!---MODAL-->

    <div class = "container">
        <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
        <div class = "modal fade" id="myModal">
            <div class = "modal-dialog">
                <div class = "modal-content">
                    <div class="modal-header">
                        <button class = "close" data-dismiss="modal" >&times;</button>
                        <h4>This is my modal headear</h4>
                    </div>
                    <div class="modal-body">
                        <p>This is modal content</p>
                    </div>
                    <div class="modal-footer">
                        <button class = "btn btn-info" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
    </body>
</html>