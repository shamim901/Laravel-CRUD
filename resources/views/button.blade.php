<html>
<head>
 <title>Botstrap Button </title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 </head>
<body>

    <div class="container">

       <nav class="navbar navbar-expand-md bg-dark navbar-dark">
           <a href="" class="navbar-brand"> NavBand </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#vanbercollapse">
          <span class="navbar-toggler-icon"></span>
          </button>
           <div class="collapse navbar-collapse navbar-right" id="vanbercollapse">
           <ul class="navbar-nav ml-auto">
               <li class="nav-item"> <a href=""  class="nav-link"> link </a> </li>
               <li class="nav-item"> <a href=""  class="nav-link"> link </a> </li>
               <li class="nav-item"> <a href=""  class="nav-link"> link </a> </li>
               <li class="nav-item dropdown"> <a href=""  class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"> DropDown </a>
                 <div class="dropdown-menu dropdown">
                     <a href=""  class="dropdown-item"> link </a>
                     <a href=""  class="dropdown-item"> link</a>
                     <a href=""  class="dropdown-item"> link </a>
                 </div>
               </li>
               <li class="nav-item"> <a href=""  class="nav-link"> link </a> </li>
               <li class="nav-item"> <a href=""  class="nav-link" data-toggle="modal" data-target="#logInModal"> LOGIN </a> </li>
           </ul>
           </div>
       </nav>


        <!-- The Modal -->

        <div class="modal fade" id="logInModal">
            <div class="modal-dialog">
                <div class="modal-content">

                   <div class="modal-header">
                       Log In Form
                   </div>

                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="" for="">Email</label>
                                <input class="form-control" id="" type="email">
                            </div>
                            <div class="form-group">
                                <label class="" for="">Email</label>
                                <input class="form-control" id="" type="password">
                            </div>
                            <div class="form-group form-check">
                                <label class="" for="">
                                <input class="form-check-input" id="" type="checkbox">Remember me
                                </label>
                            </div>
                        </form>

                        <div class="modal-footer">
                            <button class="btn btn-primary"> ADD</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/la.jpg" alt="Los Angeles">
                </div>
                <div class="carousel-item">
                    <img src="img/chicago.jpg" alt="Chicago">
                </div>
                <div class="carousel-item">
                    <img src="img/ny.jpg" alt="New York">
                    <div class="carousel-caption">
                        <h3>Dhaka, Bangladesh</h3>
                        <p>Dhaka is most beutitiful contry</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <br>

{{--        <nav class="navbar navbar-expand-md bg-dark navbar-dark">--}}
{{--            <a class="navbar-brand" href="#">Navbar</a>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse" id="collapsibleNavbar">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">Link</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}

        <br>
        <br>

        <form class="form-inline">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="password" id="pass" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="form-check-input">Remember me</label>
                <input type="checkbox" id="email" class="form-check-input"/>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>

    </div>

    <div class="card-columns">
        <div class="card bg-secondary">
            <img src="" class="card-img-top" alt="Image">
            <div class="card-body text-center">
              <h4 class="card-title">T-Shirt</h4>
            </div>
            <div class="card-footer text-center">Fotter</div>
        </div>
        <div class="card bg-primary">
            <div class="card-body text-center">
                <p class="card-text">Some text inside the first card</p>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <p class="card-text">Some text inside the second card</p>
            </div>
        </div>

    </div>

    <br>
    <br>
    <br>
    <div class="breadcrumb btn-group btn-group-lg ">
    <button class="btn btn-success">Button success</button>
    <button class="btn btn-primary">Button primary</button>
    <button class="btn btn-warning">Button warning</button>
    <button class="btn btn-info">Button 1</button>
    <button class="btn btn-danger">Button 1</button>
    <button class="btn btn-success btn-link">Button 1</button>
    </div>
</body>
</html>