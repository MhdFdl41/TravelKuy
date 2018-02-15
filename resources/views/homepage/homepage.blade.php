<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Travel kuy</title>
    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- SmartAddon.com Verification -->
    <meta name="smartaddon-verification" content="936e8d43184bc47ef34e25e426c508fe" />
	<meta name="keywords" content="Flat UI Design, UI design, UI, user interface, web interface design, user interface design, Flat web design, Bootstrap, Bootflat, Flat UI colors, colors">
	<meta name="description" content="An overview of Bootflat, why we built it, how to use it, and what you should know along the way.">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/site.min.js"></script>
  </head>
  <body>
    <div class="docs-header">
      <!--nav-->
      <nav class="navbar navbar-default navbar-custom" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h4><a class="navbar-brand">Travel Kuy</a></h4>
          </div>
          <div class="collapse navbar-collapse">
          @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
            <li><a class="nav-link current" href="{{ url('/') }}">Home</a></li>
            @auth
              @else
              <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
              <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              <li><a class="nav-link" href="{{url('/cek')}}">Cek order</a></li>
            </ul>
            @endauth
            @endif
          </div>
        </div>
      </nav>

      <!-- Selecter====-->
      <br>
      <div class="container theme-showcase" role="main">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
          <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner" >
          <div class="item active left">
            <img src="img/carousel1.jpg">
          </div>
          <div class="item next left">
            <img src="img/carousel2.jpg">
          </div>
          <div class="item">
            <img src="img/carousel3.png">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>   
    </div>
    <!---Data search-->
    <div class="example">
        <h4 class="example-title"><center>Cari/Pesan Tiket</center></h4>
    
    <div class="col-md-12">
            <div class="panel">
              <ul id="myTab1" class="nav nav-tabs nav-justified">
                <li class=""><a href="#home1" data-toggle="tab">Single Trip</a></li>
                <li class="active"><a href="#profile1" data-toggle="tab">Round Trip</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade" id="home1">
  <form class="form-inline">
    <div class="input-group col-md-3">
    <input class="search-query form-control" placeholder="Stasiun Awal" type="text">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
        <span class=" glyphicon glyphicon-search"></span> 
          </button>
        </span>
    </div>
    <div class="input-group col-md-3">
    <input class="search-query form-control" placeholder="Stasiun Akhir" type="text">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
        <span class=" glyphicon glyphicon-search"></span> 
          </button>
        </span>
    </div>
    </form>
    
    <center><button type="submit" class="btn btn-primary" style="width:400px;">Submit</button></center>
    </div>
          
         

                <div class="tab-pane fade active in" id="profile1">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.  </p>
                </div>
              </div>
            </div>
          </div> 
</div>

<!---penawaran-->
<div class="example">
        <center><h2 class="example-title">Kenapa Harus Tiket kuy?</h2></center>
        <div class="row">
            <div class="col-md-4">
              <div class="thumbnail">
                <img class="img-rounded" src="img/thumbnail-1.png">
                <div class="caption text-center">
                  <h3>Harga tidak membohongi </h3>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <img class="img-rounded" src="img/thumbnail-2.png">
                <div class="caption text-center">
                  <h3>Berbagai pilihan pembayaran</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="thumbnail">
                <img class="img-rounded" src="img/thumbnail-3.png">
                <div class="caption text-center">
                  <h3>Ulasan Terpercaya</h3>
                </div>
              </div>
            </div>
          </div>
      </div> 

      <div class="footer">
              <div class="container">
                <div class="clearfix">
                  <div class="footer-logo"><a href="#"><img src="img/footer-logo.png">Bootflat</a></div>
                  <dl class="footer-nav">
                    <dt class="nav-title">PORTFOLIO</dt>
                    <dd class="nav-item"><a href="#">Web Design</a></dd>
                    <dd class="nav-item"><a href="#">Branding &amp; Identity</a></dd>
                    <dd class="nav-item"><a href="#">Mobile Design</a></dd>
                    <dd class="nav-item"><a href="#">Print</a></dd>
                    <dd class="nav-item"><a href="#">User Interface</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">ABOUT</dt>
                    <dd class="nav-item"><a href="#">The Company</a></dd>
                    <dd class="nav-item"><a href="#">History</a></dd>
                    <dd class="nav-item"><a href="#">Vision</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">GALLERY</dt>
                    <dd class="nav-item"><a href="#">Flickr</a></dd>
                    <dd class="nav-item"><a href="#">Picasa</a></dd>
                    <dd class="nav-item"><a href="#">iStockPhoto</a></dd>
                    <dd class="nav-item"><a href="#">PhotoDune</a></dd>
                  </dl>
                  <dl class="footer-nav">
                    <dt class="nav-title">CONTACT</dt>
                    <dd class="nav-item"><a href="#">Bas ic Info</a></dd>
                    <dd class="nav-item"><a href="#">Map</a></dd>
                    <dd class="nav-item"><a href="#">Conctact Form</a></dd>
                  </dl>
                </div>
                <div class="footer-copyright text-center">Copyright © 2018 Travelkuy.com</div>
              </div>
            </div>
  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48721682-1', 'bootflat.github.io');
	  ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script>
  </body>
</html>
