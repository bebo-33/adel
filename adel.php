<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='css/bootstrap.css'/>
        <link rel='stylesheet' href='css/bebo1.css'/>
        <link rel='stylesheet' href='css/style.css'/>
        <title>#15 bootstrap about section</title>

        <script src="js/html5shiv.js"></script>

    </head>
    <body>

        <!-- start our navbar -->
        <nav class="navbar  navbar-inverse navbar-fixed-top ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Abo jaga <span>BEBO.</span></a>
                </div>
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">COMPANY</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">PROGRAMING</a></li>
                                <li><a href="#">WEB DESIGN</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">WEB HOSTING</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Map</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div> <!-- /.container-flui  -->
        </nav>
        <!-- end our navbar -->

        <div class="container-fluid" style="padding-top: 70px">

            <div class="row">
                <!--<div class="col-xs-12">-->
                <!-- start carousel-->
                <div id="bebo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <li data-target="#bebo" data-slide-to="0" class="active"></li>
                        <li data-target="#bebo" data-slide-to="1"></li>
                        <li data-target="#bebo" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="item active"  >
                            <img class="img-responsive" src="imeg/g/x1.jpg" alt="p1">
                            <div class="carousel-caption">
                                <h1> pragraf </h1>
                                <p class="lead">The Landon Hotel - London was recently renovated
                                    , and we considered the impact on the earth the entire way. From
                                    green building materials, to solar power, to energy-friendly lighting

                                    .</p>
                                <div class="btn btn-primary">read more</div>

                            </div>
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="imeg/g/x1.jpg" alt="p2">
                            <div class="carousel-caption">
                                <h1> welcom </h1>
                                <p class="lead">The Landon Hotel - London was recently renovated
                                    , and we considered the impact on the earth the entire way. From</p>
                                <div class="btn btn-danger">radyo</div>
                            </div>
                        </div>


                        <div class="item">
                            <img class="img-responsive" src="imeg/g/x1.jpg" alt="p3">
                            <div class="carousel-caption">
                                <h1> lodang jnaral  </h1>
                                <p class="lead">The Landon Hotel - London was recently renovated
                                    , and we considered the impact on the earth the entire way. From
                                    green building materials, to solar power, to energy-friendly lighting
                                    .</p>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#bebo" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#bebo" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--end carousel -->
                <!--</div>-->
            </div>

            <!--****start section features**-->
            <div class="row our features text-center">
                <div class="col-xs-12">
                    <h1>فندق عادل </h1>
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="feat">
                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                <h3> الاختيار الامثل  </h3>
                                <p> this is our paragraph</p>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="feat">
                                <span class="glyphicon glyphicon-eye-open"></span>
                                <h3> مصداقية في العمل </h3>
                                <p> this is our paragraph</p>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="feat">
                                <span class="glyphicon glyphicon-phone"></span>
                                <h3> كل ما تتمناه ستجده </h3>
                                <p> this is our paragraph</p>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="feat">
                                <span class="glyphicon glyphicon-ok"></span>
                                <h3> لا تتردد</h3>
                                <p> this is our paragraph</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!--****end section features**-->

            <!-- start testimonials section -->
            <div class=" row testimonials text-center">
                <div class="col-xs-12">
                    <h1> ماذا يقول عننا العملاء ؟</h1>

                    <!-- start carousel-testimonials -->

                    <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->


                        <div class="carousel-inner" >

                            <div class="item active" >
                                <p class="lead">The Landon Hotel - London was recently renovated
                                    , and we considered the impact on the earth the </p>
                                <span>ahmad jafar</span>
                            </div>

                            <div class="item ">
                                <p class="lead">The Landon Hotel - London was recently renovated
                                    , and we considered the impact on the earth the </p>
                                <span>hasan hamza</span>
                            </div>

                            <div class="item">
                                <p class="lead">The Landon Hotel - London was recently renovated
                                    , and we considered the impact on the earth the </p>
                                <span>ali salah</span>
                            </div>

                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-testimonials" data-slide-to="0" class="active">
                                <img src="imeg/b1.jpg" alt="ahmad"/>
                            </li>
                            <li data-target="#carousel-testimonials" data-slide-to="1"><img src="imeg/b2.jpg" alt="hasan"/></li>
                            <li data-target="#carousel-testimonials" data-slide-to="2"><img src="imeg/b3.jpg" alt="ali"/></li>
                        </ol>
                        <!-- Controls -->
                    </div>
                    <!--end carousel-testimonials -->
                </div>
            </div>

            <div class="row price_table">
                <div class="col-xs-12">
                    <h1>amazing price</h1>
                    <div class="row">

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="price_box">
                                <h1 class="text-primary">normal</h1>
                                <p class="center-block">$100</p>
                                <ul class="list-unstyled">
                                    <li>wifi</li>
                                    <li>skan10</li>
                                    <li>shhy</li>
                                    <li>btanya50</li>
                                    <li>5admat</li>
                                </ul>
                                <a href="#" class="btn btn-primary">Now</a>

                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="price_box">
                                <h1 class="text-success">VIP</h1>
                                <p class="center-block">$200</p>
                                <ul class="list-unstyled">
                                    <li>wifi</li>
                                    <li>skan20</li>
                                    <li>shhy</li>
                                    <li>btanya100</li>
                                    <li>5admat</li>
                                </ul>
                                <a href="#" class="btn btn-success">Now</a>

                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="price_box">
                                <h1 class="text-danger">3rsan</h1>
                                <p class="center-block">$300</p>
                                <ul class="list-unstyled">
                                    <li>wifi</li>
                                    <li>skan30</li>
                                    <li>shhy</li>
                                    <li>btanya150</li>
                                    <li>5admat</li>
                                </ul>
                                <a href="#" class="btn btn-danger">Now</a>

                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-xs-12">
                            <div class="price_box">
                                <h1 class="text-info">homy</h1>
                                <p class="center-block">$400</p>
                                <ul class="list-unstyled">
                                    <li>wifi</li>
                                    <li>skan40</li>
                                    <li>shhy</li>
                                    <li>btanya200</li>
                                    <li>5admat</li>
                                </ul>
                                <a href="#" class="btn btn-info">Now</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end sction price table -->


            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-info">
                    <div class="panel-heading text-center text-capitalize">
                        <h4>اي حاجة</h4>
                    </div>
                    <div class="panel-body">
                        <div class="thumbnail">
                            <img src="http://localhost/adel/themes/iocare-iocare-bootstrap/assets/images/a2.jpg">
                            <div class="caption">
                                <h3>Dhjghvblkn</h3>
                                <p>gyuf kugfuyf fyyf kugughpjihg lugug</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <!--start section about-->
            <div class="row" >
                <div class="col-xs-12">
                    <footer class="text-center about">
                        <h1> فندق عادل احمد عبدالله  <span> adil.</span></h1>
                        <p class="lead">جميع الحقوق محفوظة لمصلحة <strong> فندق عادل </strong> بعطبرة 2016</p>
                    </footer>
                </div>

            </div>
            <!--end section about -->
        </div>

        <script type="text/javascript" src="js/jquery.js" ></script>
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
    </body>
</html>
