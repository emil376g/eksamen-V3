<?php
require_once "include/connect.php";
session_start();
$description = "webshop";
?>
    <html class="no-js" lang="">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home | webshop</title>
        <meta name="description" content="<?php echo $description ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="tether-1.3.3/dist/js/tether.js"></script>
        <link rel="stylesheet" href="tether-1.3.3/dist/css/tether.css">
        <script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js"></script>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Karla|Lato|Oswald" rel="stylesheet">

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="container-fluid bg-faded p-0">

            <header class="header">
                <div class="container m-auto">
                    <div class="row col-12 pt-2">
                        <div class="header-top-left">
                            <button class="header-top-left-button d-flex" disabled="disabled"><img src="img/ikon.png" alt="Danmark's flag" class="header-top-left-img"><p class="header-top-left-p-icon-span">dansk</p></button>
                            <button class="header-top-left-button" disabled="disabled"><p class="header-top-left-p-DKK">DKK</p></button>
                        </div>
                        <div class="header-top-right ml-auto">
                            <form action="include/seachForArticles.php" class="d-flex" method="get">
                                <input type="text" class="search" name="search" placeholder="søgning i produkter">
                                <input type="submit" class="header-top-right-submit" value="søg" name="submit">
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="container m-auto">
                    <div class="row col-12">
                        <a href="index.php">
                <img src="img/homeIcon.png" class="logo" alt="tilbage til start menu"></a>
                        <?php if(isset($_COOKIE[$cookie_name])){echo "<h2>Velkommen $_COOKIE[$cookie_name]</h2>"; } ?>
                    </div>
                </div>
                <hr>
                <div class="container m-auto">
                    <div class="row col-12">
                        <nav class="navbar navbar-toggleable-md navbar-light col-sm-2 col-md-8">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
                                aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Forside <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Produkter</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Nyheder</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Handelsbetingelser</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Om os</a>
                                    </li>
                                    <?php
                                if(!isset($_COOKIE[$cookie_name])){
                         ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">login</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" href="#">register</a></li>

                                        <?php
                                }else{
?>
                                            <li class="nav-item">
                                                <a class="nav-link" href="include/logout.php">logout</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">upload</a>
                                            </li>
                                            <?php                      
                                }
?>
                                </ul>
                            </div>
                        </nav>
                        <div class="header-right-varer  ml-md-auto mt-auto">
                            <form action="varer.php" class="d-flex" method="get">
                                <input type="text" name="varer" class="header-right-varer-cart" disabled="disabled" value="din indkøbskurv er tom">
                                <button class="header-right-varer-button" disabled="disabled"><i class="fa fa-shopping-cart" aria-hidden="true" style="font"></i></button>
                            </form>
                        </div>
                    </div>
                    <div id="ajax-content"></div>
                </div>
            </header>
            <hr>
            <div class="container m-auto">
                <main class="main">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="img/slide1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="img/slide2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="img/slide3.jpg" alt="Third slide">
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
            </div>
            <hr>
            <div class="container m-auto p-0">
                <h1 class="main-title col-md-9 ml-2 col-sm-12 m-auto">Fancyclothes.DK - tøj, kvlitet, simpelt</h1>
            </div>
            <hr>
            <div class="container d-flex flex-wrap p-0">
                <div class="col-md-3 col-sm-12 m-0">
                    <aside class="aside-search">
                        <h5 class="aside-search-categori py-2 pl-3">Kategorier:</h5>
                        <form action="include/search.php" class="d-flex p-0 flex-column col-12 pt-3" method="post">
                            <input type="button" value="jakker" class="aside-categori-button pt-2" name="jakker">
                            <input type="button" value="bukser" class="aside-categori-button " name="bukser">
                            <input type="button" value="skjorter" class="aside-categori-button " name="skjorter">
                            <input type="button" value="strik" class="aside-categori-button " name="strik">
                            <input type="button" value="t-shirts" class="aside-categori-button" name="t-shirts">
                            <input type="button" value="tasker" class="aside-categori-button" name="tasker">
                        </form>
                    </aside>
                    <aside class="aside-nyhedsbrev d-flex flex-column col-12  mt-2">
                        <h5 class="h3-nyhedsbrev pl-3 pt-2">Tilmeld nyhedsbrev</h5>
                        <form action="nyhedsbrev.php" class="form-nyhedsbrev" method="post">
                            <div class="div-nyhedsbrev justify-content-center py-3 d-flex col-12 flex-column">
                                <input type="text" class="mb-2 pl-2" name="username" placeholder="Navn">
                                <input type="text" name="email" class="pl-2" placeholder="Email">
                            </div>
                            <input type="submit" class="col-4 mt-2 ml-3" value="submit">
                        </form>
                    </aside>
                </div>
                <div class="container flex-wrap col-md-9">
                    <h5 class="toj">inspiration</h5>
                    <hr>
                    <div class="row flex-grow col-md-12 justify-content-between p-0 m-0">
                        <div class="herretoj flex-1 mr-1">
                            <h3 class="pl-3 pt-2">Herretøj</h3><br><button class="toj ml-3" disabled="disabled">læs mere</button></div>
                        <div class="kvindetoj flex-1  ml-1">
                            <h3 class="pl-2 pt-2">Kvindetøj</h3><br><button class="toj ml-3" disabled="disabled">læs mere</button></div>
                    </div>
                    <div class="container col-md-12 m-0 p-0">
                        <article class="content justify-content-between col-12 p-0 d-flex">
                            <?php
                    if(isset($_SESSION["search"])){
                        include_once "include/seachOutput.php";
                    }else{
                        include_once "include/getArticle.php";
                    }
                    ?>
                        </article>
                    </div>
                </div>

            </div>

            </main>
            <hr>
            <div class="container-fluid mt-2 p-0 flex-wrap">
                <footer class="footer col-12 d-flex flex-wrap">
                    <div class="col-8 d-flex flex-wrap justify-content-around mx-auto">
                    <p class="footer-p"><strong>Fancyclothes.dk</strong></p>
                    <p class="footer-p">Skrædderstien 7</p>
                    <p class="footer-p">4321 Fredensvang</p>
                    <p class="footer-p">Email: info@fancyness@gmail.com</p>
                    <p class="footer-p">Sitemap</p>
                    </div>
                    <div class="font-awesome-footer col-12 d-flex justify-content-center">
                    <i class="fa fa-facebook-square mx-2" aria-hidden="true"></i>
                    <i class="fa fa-twitter-square mx-2" aria-hidden="true"></i>
                    <i class="fa fa-youtube-square mx-2" aria-hidden="true"></i>
                    </div>
                </footer>
            </div>
        </div>

        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')

        </script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                    function () {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');

        </script>
    </body>

    </html>
