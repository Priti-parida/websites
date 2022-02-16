<!doctype html>
<html lang="en">
  <head>
  <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css" class="rel">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;700&family=Redressed&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
   
  </head>
  <body>

  <nav class="navbar navbar-expand-lg dark-light bg-dark">
  <a class="navbar-brand" href="index.php">websites</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto"> <!--mleft-->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="servide.php">services</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link disabled" href="about.php">about us</a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link disabled" href="userinfo.php">contact</a>
      </li>
    </ul>
   <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search"  placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit ">Search</button>
    </form>-->
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5"><!--margin and padding from top to bottom-->
    <div class="py-5">
        <h2 class="text-center"><b>About us</h2>
    </div>
    
<div class="container-fluids"><!--for no scrolling inscreen-->
        <div class="row"><!--grid system two equals parts divide-->
            <div class="col-lg-6 col-md-6 col-12">
              <img src="images/2.jpg"  class="img-fluid aboutimg">
            </div>
             

      <div class="col-lg-6 col-md-6 col-12">
           <h2 class="display-4">about us content</h2><!--for large form-->
           <p class="py-3">Carousels don’t automatically normalize slide dimensions.
                As such, you may need to use
                 additional utilities or custom 
                 styles to appropriately size content. While carousels support previous/next controls and indicators, they’re not explicitly required. Add and customize as you see fit.

            The .active class needs to be added to one of the slides otherwise the carousel will not be
             visible. Also be sure to set a unique id on the .carousel for optional controls, especially if you’re using multiple carousels on a single page. Control and indicator elements must have a data-target attribute (or href for links) 
            that matches the id of the .carousel element.
            Please be aware that nested carousels are
             not supported, and carousels are generally not compliant with accessibility standards.</p>
           <a href="about.php" class="btn btn-danger"> check more</a>
            
        </div>

        </div>
</div>
</section>


<section class="my-5"><!--margin and padding from top to bottom-->
    <div class="py-5">
        <h2 class="text-center"><b>OUR SERVICES</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick content</p>
                    </div>
                  </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick content</p>
                    </div>
                  </div>

            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="card" >
                    <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">Some quick content</p>
                    </div>
                  </div>

            </div>
        </div>
    </div>
    </section>

    
<section class="my-5"><!--margin and padding from top to bottom-->
    <div class="py-5">
        <h2 class="text-center"><b>GALLERY</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class=" img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class=" img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class=" img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class=" img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class=" img-fluid pb-4">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/1.jpg" class=" img-fluid pb-4">
            </div>
        </div>

    </div>
    </section>


    <section class="my-5"><!--margin and padding from top to bottom-->
      <div class="py-5">
          <h2 class="text-center"><b>GALLERY</h2>
      </div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>username</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label>email</label>
      <input type="email" name="email" id="email" class="form-control">
    </div>

    <div class="form-group">
      <label>phone number</label>
      <input type="text" name="mobile" id="mobile" class="form-control">
    </div>

    <div class="form-group">
      <label>comments</label>
      <textarea class="form-control " name="comments" id="comments"></textarea>
    </div>

    <button type="submit" class="btn btn-danger mb-3">submit</button>

 



  </form>

 

</div>

      </section>

      <footer>
        <p class="p-3 bg-dark text-white text-center">@gmail.com</h3>
      </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>