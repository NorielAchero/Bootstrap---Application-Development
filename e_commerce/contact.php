<!DOCTYPE html>
<html>
  <head>
    <!-- Noriel Achero | 3 BSCS 2 -->
    <title>E-Commerce</title>
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
    <style>
        body {
          background-color: #f8f9fa;
        }
        .contact-form {
          max-width: 500px;
          margin: 50px auto;
          background-color: #fff;
          padding: 30px;
          border-radius: 5px;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
      </style>

    </head>
    <body>
      

        <nav class = "navbar navbar-inverse">
            <div class = "container-fluid">
                <div class = "navbar-header">
                    <button type = "button" class = "navbar-toggle" data-toggle="collapse" data-target = "#myNavbar">
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                        <span class = "icon-bar"></span>
                    </button>
                    <a class = "navbar-brand" href = "#">E-Commerce</a>
                </div>
                <div class = "collapse navbar-collapse" id = "myNavbar">
                    <ul class = "nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="games.php">Games</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="contact-form">
                  <h2>Contact Us</h2>
                  <form>
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address:</label>
                      <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                      <label for="message">Message:</label>
                      <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
  
    </body>
</html>