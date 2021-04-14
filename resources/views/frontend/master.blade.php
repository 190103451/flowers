<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Flowers - Online Store </title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link href="css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

</head>
<body>
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <h2 class="text-dark">Flowers</h2>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="slider-main">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to Flowers Online Store</h3>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Beautiful Garden</h3>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Welcome to Flowers Online Store</h3>
                </div>
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
</header>
<!-- Page Content -->
<div class="container">
    <div id="shadowbox"></div>
    <div id="banner">
        <h1>This is ad</h1>
        <div id="close">
            <img class="img-fluid"
                 src="https://media.istockphoto.com/vectors/spring-sale-banner-with-blooming-flowers-background-template-design-vector-id1135013103"
                 alt="">
        </div>
    </div>
    <div class="services-bar">
        <h1 class="my-4">Our Best Services </h1>
        <!-- Services Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header" onmouseover="hoverOn(this)" onmouseout="hoverOut(this)">Garden Fence</h4>
                    <div class="card-img click">
                        <img class="img-fluid" src="images/services-img-01.jpg" alt=""/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary" onclick="moreClicked()">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header" onmouseover="hoverOn(this)" onmouseout="hoverOut(this)">Garden Watering</h4>
                    <div class="card-img click">
                        <img class="img-fluid" src="images/services-img-02.jpg" alt=""/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header" onmouseover="hoverOn(this)" onmouseout="hoverOut(this)">Garden Supplies</h4>
                    <div class="card-img click">
                        <img class="img-fluid" src="images/services-img-03.jpg" alt=""/>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse
                            necessitatibus neque.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- About Section -->
    <div class="about-main">
        <div class="row">
            <div class="col-lg-6">
                <h2><strong>Welcome to Flowers</strong></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</p>
                <h5><b>Our smart approach</b></h5>
                <ul>
                    <li>Sed at tellus eu quam posuere mattis.</li>
                    <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li>Duis porttitor odio pellentesque mollis vulputate.</li>
                    <li>Quisque ac eros non ex hendrerit vehicula.</li>
                </ul>
                <p>
                    <bdi>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id
                        reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis
                        quia dolorum ducimus unde.
                    </bdi>
                </p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="images/about-img.jpg" alt=""/>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- Portfolio Section -->
    <div class="portfolio-main">
        <h2>Our Portfolio</h2>
        <div class="row">
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-img click">
                        <a href="#">
                            <img class="card-img-top" src="images/portfolio-img-01.jpg" alt=""/>
                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Lawn & garden care</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-img click">
                        <a href="#">
                            <img class="card-img-top" src="images/portfolio-img-02.jpg" alt=""/>
                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Lawn renovation</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-img click">
                        <a href="#">
                            <img class="card-img-top" src="images/portfolio-img-03.jpg" alt=""/>
                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Tree planting</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-img click">
                        <a href="#">
                            <img class="card-img-top" src="images/portfolio-img-04.jpg" alt=""/>
                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Water Baganig</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-img click">
                        <a href="#">
                            <img class="card-img-top" src="images/portfolio-img-05.jpg" alt=""/>
                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Growing plants</a>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100">
                    <div class="card-img click">
                        <a href="#">
                            <img class="card-img-top" src="images/portfolio-img-01.jpg" alt=""/>
                            <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#">Snow removal</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <hr>
    <!-- Get In Touch Now Section -->
    <div class="container mb-5">
        <div class="row">
            <div class="embed-responsive embed-responsive-16by9 mb-4">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LjCzPp-MK48"></iframe>
            </div>
        </div>
        <div class="row">
            <div >
                <audio controls class="embed-responsive-item">
                    <source src="Years%20%20Years%20-%20Sanctify.ogg" type="audio/ogg">
                    <source src="Years%20%20Years%20-%20Sanctify.mp3" type="audio/mpeg">
                </audio>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-md-8">
            <p><bdo dir="ltr">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero
                rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</bdo></p>
        </div>
        <div class="col-md-4">
            <a class="btn btn-lg btn-secondary btn-block" href="#">Get In Touch Now</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">Contact us</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="fname" name="name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="lname" name="name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="email" name="email" type="text" placeholder="Email Address"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <textarea class="form-control" id="message" name="message"
                                          placeholder="Enter your massage for us here. We will get back to you within 2 business days."
                                          rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-10 text-center">
                                <button type="submit" class="btn btn-primary btn-md">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                            <address>
                                Auezov District,Kabanbay Batyr 38<br/>
                                Almaty<br/>
                                +7 (705) 123 41 234<br/>
                                info@company.com<br/>
                            </address>
                        </div>
                        <hr/>
                        <div id="map1" class="map mb-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<!--footer starts from here-->
<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                <!--headin5_amrc-->
                <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s</p>
                <p><i class="fa fa-location-arrow"></i>9878/25 sec 9 rohini 35</p>
                <p><i class="fa fa-phone"></i> +91-9999878398 </p>
                <p><i class="fa fa fa-envelope"></i> info@example.com </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->
                <ul class="footer_ul2_amrc">
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy printing...<a href="#">https://www.lipsum.com/</a></p>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy printing...<a href="#">https://www.lipsum.com/</a></p>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Lorem Ipsum is simply dummy printing...<a href="#">https://www.lipsum.com/</a></p>
                    </li>
                </ul>
                <!--footer_ul2_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="#">Default Version</a></li>
                    <li><a href="#">Boxed Version</a></li>
                    <li><a href="#">Our Team </a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Get In Touch</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <h5 class="headin5_amrc col_white_amrc pt2">Recent posts</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="images/post-img-01.jpg" alt=""/>
                        </div>
                        <div class="media-body">
                            <p>How to find best dog food?</p>
                            <span>22 Sep 2020</span>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="images/post-img-02.jpg" alt=""/>
                        </div>
                        <div class="media-body">
                            <p>How to find best dog food?</p>
                            <span>34 Sep 2020</span>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="images/post-img-03.jpg" alt=""/>
                        </div>
                        <div class="media-body">
                            <p>How to find best dog food?</p>
                            <span>30 Sep 2020</span>
                        </div>
                    </li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-logo">
            <a href="#">
                <h1 class="text-light">Flowers</h1>
            </a>
        </div>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="copyright text-center"></p>
        <ul class="social_footer_ul">
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
        <!--social_footer_ul ends here-->
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>

<div style="top:4100px; left:10px; width:700px; height:350px;">
<canvas id="myChart" width="400" height="200"></canvas>
     <script type="text/javascript">
     var ctx=document.getElementById("myChart");
     var myChart = new Chart(ctx,{
       type:'bar',
       data :{
         labels: ["2017","2018","2019","2020"],
         datasets: [
           {label:'Revenue from sales',
          data:[50,80,91,98],
        backgroundColor:['rgba(255,129,102,1)', 'rgba(234,162,235,1)', 'rgba(255,206,36,1)','rgba(75,192,192,1)'], }
         ]
       },
       options:{
         scales:{
           yAxes:[{
             ticks:{
              beginAtZero:true
             }
           }]
         }
       }
     });
</script>
    </div>

<div style="margin-top:-220px;margin-left:900px; width:700px; height:10px;">
        <canvas id="polar-chart" width="500" height="450"></canvas>
        <script>
            new Chart(document.getElementById("polar-chart"), {
                type: 'polarArea',
                data: {
                labels: ["Aktau", "Astana", "Almaty", "Shymkent", "Aktobe"],
                datasets: [
                    {
                    label: "Population (cities)",
                    backgroundColor: ['rgba(234,162,235,1)', 'rgba(255,206,36,1)','rgba(75,192,192,1)',"#FDB5DE","#9AD4F3"],
                    data: [12,41,33,21,52]
                    }
                    ]
                },
                options: {
                title: {
                display: true,
                text: 'Percentage of sales in projected cities of Kazakhstan in 2021'
                }
                }
            });
        </script>
        </div>

<div style="margin-top:200px;margin-left:10px; width:700px; height:200px;">
<canvas id="myChart2" width="400" height="200"></canvas>
<script type="text/javascript">
     var ctx=document.getElementById("myChart2");
     var myChart2 = new Chart(ctx,{
       "type":"line",
       "data":{
         "labels": ["January","February","March","April","May","June","July"],
         datasets: [{label:'Percentage of flowers sold each month',
          "data":[40,30,88,73,59,74,83],
          "fill":false,"borderColor":"rgb(75, 192, 192)","LineTension":0.1}]},
       "options":{}});
</script>
</div>
</body>
<script>
    document.getElementsByClassName('copyright')[0].innerHTML = "&copy; " + (new Date()).getFullYear() + "  All Rights Reserved ";
    $('#close').click(function () {
        $(this).parent().hide();
        $('#shadowbox').hide();
    });



    function hoverOn(x) {
        x.style.color = "#fff";
    }

    function hoverOut(x) {
        x.style.color = "#00203FFF";
    }

    function moreClicked() {
        alert('Button learn more clicked!!!');
    }

    $('.click').click(function () {
        $('#shadowbox, #banner').show();
    });


    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(43.238949, 76.889709);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }

        init_map1();
    });


</script>

</html>