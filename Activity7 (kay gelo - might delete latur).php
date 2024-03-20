<html>
<head>
	<title>Portfolio</title>
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
        section{
        width: 100vw;
        height: 100vw;
        padding: 50px;
        }
        .cl_white{
            color: white;
        }
        img{
            width:300px;
            transition: opacity 1s ease-in-out;
        }
        img:hover{
            opacity:.10;
        }
        .col-text{
        -webkit-column-count: 3;
        column-count: 3;
}

    </style>
</head>

<body data-spy="scroll" data-target=".navbar">
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
        <ul class="nav navbar-nav">
            <li><a href="#home">Home</a></li>
            <li><a href="#work">What I Do</a></li>
            <li><a href="#about">What about Me</a></li>
            <li><a href="#contact">Contact Me</a></li>
        </ul>
    </nav>

    <section id="home" style="background: url(image/background.gif) ; background-size:100% 100%;" class="cl_white text-center">
        <h1>My Portfolio</h1>
        <p class="lead">Welcome to my world, The life of a Programmer</p>
        <button class="btn btn-default" disable>Contact Me</button>
    </section>

    <section id="work" class="containter">
        <div class="page-header">
            <h1 class="text-center">My Work</h1>
        </div>
        <div class="text-center">
            <img src="image/port1.png" class="img-thumbnail"/>
            <img src="image/port2.png" class="img-thumbnail"/>
            <img src="image/port3.png" class="img-thumbnail"/>
            <img src="image/port4.jpg" class="img-thumbnail"/>
            <img src="image/port5.png" class="img-thumbnail"/>
        </div>
    </section>

    <section id="about" class="container">
        <h2 class="text-center">My Skills</h2>
        <div class="col-text">Dapat mo nang malaman na wala lang ang mga sinasabi ng makakating labi
At bababaero pangalan ko sa kwento
Nilang walang pruweba puro lamang imbento
Oh bababaero bababaero bababaero daw ako
'Di naman totoo yeah hindi naman totoo 'di naman totoo
Bago ka maniwala d'yan sa walang alam
Siguraduhin mo muna 'di 'yung puro bintang
Ka na lang sasamaan pa ng ugali sabay
Tapik sa aking kamay oh 'di mapalagay
Pero 'di ibig sabihin na meron pa akong iba
'Wag kang makinig d'yan puro sila salita
Puro bintang sila nang 'di ginawa
Ako kampante at sa karma handa
'Di dumipensa sa paratang ako na 'yung mali
Kung mali ka sa kanila sinong mas madali
Na makuha loob ang ako babaero
'Yun ang hindi totoo hindi totoo
Dapat mo nang malaman na wala lang ang mga sinasabi ng makakating labi
At bababaero pangalan ko sa kwento
Nilang walang pruweba puro lamang imbento
Oh bababaero bababaero bababaero daw ako
'Di naman totoo yeah hindi naman totoo 'di naman totoo
Dapat mo nang malaman na wala lang ang mga sinasabi ng makakating labi
At bababaero pangalan ko sa kwento
Nilang walang pruweba puro lamang imbento
Oh bababaero bababaero bababaero daw ako
'Di naman totoo yeah hindi naman totoo 'di naman totoo
            
        </div>
    </br>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>PHP Programmer</h4>
                </div>
                <div class="panel-body">
                    <img src="image/me.png" class="img-circle center-block">
                    <p class="lead text-center">I Do PHP Programming</p>
                </div>
                <div class="panel-footer">

                </div>

            </div>

        </div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4>Web Designer</h4>
                </div>
                <div class="panel-body">
                    <img src="image/me2.png" class="img-circle center-block">
                    <p class="lead text-center">I Do CSS Bootsrap Designing</p>
                </div>
                <div class="panel-footer">

                </div>

            </div>

        </div>

    </div>
    </section>

    <section id="contact" style="background: silver;">
        <div class="page-header">
            <h2 class="text-center">Contact Me</h2>
        </div>
        <form class="col-md-5 col-md-offset-3">
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your Name" type="text"></input>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Enter Your E-mail" type="email"></input>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Subject" type="text"></input>
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="10">Comments</textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-success btn-block"  type="submit"></input>
            </div>
        </form>

    </section>
 
</body>
</html>