<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>kgbook</title>

    <!-- Bootstrap 4 CSS. This is for the alpha 3 release of Bootstrap 4. This should be updated when Bootstrap 4 is officially released. -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- For icons -->
    <link href="css/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Navigation -->
<nav id="topNav" class="navbar navbar-full navbar-static-top navbar-dark bg-inverse m-b-1">
    <button class="navbar-toggler hidden-md-up pull-right" type="button" data-toggle="collapse" data-target="#navbar">
        &#9776;
    </button>
    <a class="navbar-brand" href="#">KGBOOK</a>
    <div class="collapse navbar-toggleable-sm" id="navbar">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>

            <li class="nav-item">
{{--                <a class="nav-link" href="{{ route('main.index') }}">Блог</a>--}}
            </li>

        </ul>
        <!-- Search -->
        <form class="form-inline pull-xs-right">
            <input class="form-control" type="text" placeholder="Search">
            <button class="btn btn-secondary" type="submit">Search</button>
        </form>

        </ul>
    </div>
</nav>


<div class="container-fluid">

    <!-- Left Column -->
    <div class="col-sm-3">

        <!-- List-Group Panel -->
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title"><i class="fa fa-random" aria-hidden="true"></i> Категории</h5>
            </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action">Нейро Скачак</a>

            </div>
        </div>



        <!-- Text Panel -->
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i>
                    Тэги
                </h5>
            </div>
            <div class="card-block">
                    <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-secondary">Resource</button>
                    <button type="button" class="btn btn-secondary">Envision</button>
                    <button type="button" class="btn btn-secondary">Niche</button>
                </div>
            </div>
        </div>

    </div><!--/Left Column-->


    <!-- Center Column -->
    <div class="col-sm-6">

        <!-- Alert -->

        <!-- Articles -->
        <div class="row">


            <div class="card-body table-responsive p-0">
                 </div>



            <article class="col-xs-12">
                <h2>Книга 1</h2>
                <p>text</p>
                <p><button class="btn btn-outline-success">Read More</button></p>
                <p class="pull-right"><span class="tag tag-default">keyword</span> <span class="tag tag-default">tag</span> <span class="tag tag-default">post</span></p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Today</a></li>
                    <li class="list-inline-item"><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
                    <li class="list-inline-item"><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
                </ul>
            </article>

            <article class="col-xs-12">
                <h2>Книга 2</h2>
                <p>text</p>
                <p><button class="btn btn-outline-success">Read More</button></p>
                <p class="pull-right"><span class="tag tag-default">keyword</span> <span class="tag tag-default">tag</span> <span class="tag tag-default">post</span></p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Today</a></li>
                    <li class="list-inline-item"><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
                    <li class="list-inline-item"><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
                </ul>
            </article>

            <article class="col-xs-12">
                <h2>Книга 2</h2>
                <p>text</p>
                <p><button class="btn btn-outline-success">Read More</button></p>
                <p class="pull-right"><span class="tag tag-default">keyword</span> <span class="tag tag-default">tag</span> <span class="tag tag-default">post</span></p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#">Today</a></li>
                    <li class="list-inline-item"><a href="#"><span class="glyphicon glyphicon-comment"></span> 2 Comments</a></li>
                    <li class="list-inline-item"><a href="#"><span class="glyphicon glyphicon-share"></span> 8 Shares</a></li>
                </ul>
            </article>


        </div>
        <hr>
    </div><!--/Center Column-->


    <!-- Right Column -->
    <div class="col-sm-3">

        <!-- Form -->
        <div class="card">
            <div class="card-header p-b-0">
                <h5 class="card-title">
                    <i class="fa fa-sign-in" aria-hidden="true"></i>
                    Log In
                </h5>
            </div>
            <div class="card-block">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
            </div>
        </div>

        <!-- Progress Bars -->
        <div class="card">
        </div>

        <!-- Carousel -->

        <div id="side-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#side-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#side-carousel" data-slide-to="1"></li>
                <li data-target="#side-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <a href="#">
                        <img class="img-responsive" src="holder.js/400x300?bg=FF8C00&text=Image%201" alt="">
                    </a>
                    <div class="carousel-caption">
                        <h3>Dramatically Engage</h3>
                        <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="img-responsive" src="holder.js/400x300?bg=FF8C00&text=Image%202" alt="">
                    </a>
                    <div class="carousel-caption">
                        <h3>Efficiently Unleash</h3>
                        <p>Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="img-responsive" src="holder.js/400x300?bg=FF8C00&text=Image%203" alt="">
                    </a>
                    <div class="carousel-caption">
                        <h3>Proactively Pontificate</h3>
                        <p>Holistically pontificate installed base portals after maintainable products.</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#side-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#side-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div><!--/Right Column -->

</div><!--/container-fluid-->

<footer>
    <div class="footer-blurb">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 footer-blurb-item">
                    <h3><i class="fa fa-text-height" aria-hidden="true"></i> Книга 1</h3>
                    <p>Текст</p>
                    <p><a class="btn btn-primary" href="#">Кнопка</a></p>
                </div>

                <div class="col-sm-3 footer-blurb-item">
                    <h3><i class="fa fa-text-height" aria-hidden="true"></i> Книга 2</h3>
                    <p>Текст</p>
                    <p><a class="btn btn-primary" href="#">Кнопка</a></p>
                </div>


                <div class="col-sm-3 footer-blurb-item">
                    <h3><i class="fa fa-text-height" aria-hidden="true"></i> Книга 3</h3>
                    <p>Текст</p>
                    <p><a class="btn btn-primary" href="#">Кнопка</a></p>
                </div>

                <div class="col-sm-3 footer-blurb-item">
                    <h3><i class="fa fa-text-height" aria-hidden="true"></i> Книга 4</h3>
                    <p>Текст</p>
                    <p><a class="btn btn-primary" href="#">Кнопка</a></p>
                </div>


                <div class="col-sm-3 footer-blurb-item">


                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
    </div>

    <div class="small-print">
        <div class="container">
            <p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
            <p>Copyright &copy; Example.com 2015 </p>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

<!-- Tether -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- Bootstrap 4 JavaScript. This is for the alpha 3 release of Bootstrap 4. This should be updated when Bootstrap 4 is officially released. -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

<!-- Initialize Bootstrap functionality -->
<script>
    // Initialize tooltip component
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

<!-- Placeholder Images -->
<script src="js/holder.min.js"></script>

</body>

</html>
