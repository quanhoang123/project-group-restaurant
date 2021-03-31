<!DOCTYPE html>
<html>

<head>
    <title>QuanTrungQuan</title>
    <!-- link bootstrap-nav -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- link bootstrap header -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- link bootstrap thuần -->
    <link rel="stylesheet" href="../css/pageHome.css" />
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- link  API -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

</head>
<?php
require_once('../modal/connect.php')
?>
<style>
    #content-section {
        margin: 0 auto;
        width: 95%;
    }

    #content-section img {
        display: inline-block;
        border-right: 2px dashed black;
        margin-left: 20px;
    }

    .imgright {
        float: left !important;
    }
</style>

<body>
    <script src="../js/sticky.js"></script>
    <header>
        <nav>
            <a href="#"><img class="logo" src="../img/interface/logoquan.png" alt=""></a>
            <ul class="main-nav">
                <li> <a href="#" class="nav-item nav-link active">Home</a></li>
                <li> <a href="#aboutus" class="nav-item nav-link">About us</a></li>
                <li><a href="#contact" class="nav-item nav-link">Contact</a></li>
                <li>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Product</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">sea foods</a>
                            <a href="#" class="dropdown-item">jungle foods</a>
                        </div>
                    </div>
                </li>
                <!-- <li>
                    <form>
                        <div class="input-group">
                            <input type="text" id="search" name="find" placeholder="Search"
                                value="" style="width:250px;" />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary" name="search" style="width:5px; border-radius:10px;"><i
                                        class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li> -->
                <li> <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal">Account <i class="fa fa-user"></i></a> </li>
                <li>
                    <div class="navbar-nav">
                        <ul class="icon-card">

                            <li> <a href="#" class="nav-item nav-link"><span class="fa fa-shopping-cart">
                                    </span>Cart</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="clearfix"></div>
        <div class="row">
            <div class="heading-main-text">
                <h1>
                    We have <br> Many food.<br>
                </h1>
                <a href="#" class="btn">Tell me more</a>
                <a href="#" class="btn">Quanne</a>
            </div>
        </div>
    </header>

    <!-- section about product -->
    <!-- ------------------------ -->
    <!-- ------------------------------ -->


    <section class="about-section" id="content-section">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">

    </section>

    <!-- about us -->
    <div id="aboutus">
        <div>
            <h2 class="title-text">About Us</h2>
            <section class="about-section" id="info-content">
        </div>
        <div class="about-center">

            <article class="aboutus">
                <div class="about-icon"><i class="fas fa-mug-hot"></i></div>
                <div class="about-text">
                    <h2 class="about-subtitle">Drinks</h2>
                    <p class="about-info">Từng bừng giải khát</p>
                </div>
            </article>

            <article class="aboutus">
                <div class="about-icon"><i class="fas fa-utensils"></i></div>
                <div class="about-text">
                    <h2 class="about-subtitle">Healthy Food</h2>
                    <p class="about-info">Thơm ngon từng miếng</p>
                </div>
            </article>

            <article class="aboutus">
                <div class="about-icon"><i class="fas fa-mortar-pestle"></i></div>
                <div class="about-text">
                    <h2 class="about-subtitle">Organic Food</h2>
                    <p class="about-info">Tất cả chỉ có ở chúng Tôi!</p>
                </div>
            </article>

            <article class="aboutus">
                <div class="about-icon"><i class="fas fa-drumstick-bite"></i></div>
                <div class="about-text">
                    <h2 class="about-subtitle">White Meat</h2>
                    <p class="about-info">Vui là chính!</p>
                </div>
            </article>

            <article class="aboutus">
                <div class="about-icon"><i class="fas fa-fish"></i></div>
                <div class="about-text">
                    <h2 class="about-subtitle">Sea Food</h2>
                    <p class="about-info">Đủ thể loại món ăn</p>
                </div>
            </article>

            <article class="aboutus">
                <div class="about-icon"><i class="fas fa-pepper-hot "></i></div>
                <div class="about-text">
                    <h2 class="about-subtitle">Hot & Spicy</h2>
                    <p class="about-info">Aloxo</p>
                </div>
            </article>

        </div>
    </div>

    <!-- our menu -->
    <div class="menu" id="menu">
        <article class="menu-image"></article>
        <article class="menu-text">
            <div class="menu-text-center">
                <h1>Our Menu</h1>
                <p>Kính mời quý khách lựa chọn những món ăn tuyệt vời đến từ nhà hàng chúng tôi.</p>
                <a href="#">ORDER</a>
            </div>
        </article>
    </div>

    <!--=======-----------Card Section-----====================-->
    <div id="food">
        <div>
            <h2 class="title-text"> Food Fusion</h2>
        </div>
        <div class="food-container">
            <!--======Card Start ----============-->
            <article class="food-card">
                <img src="../img/img-product/baba.jpg" class="food-img" alt="">
                <div class="img-text">
                    <h1>Breakfast</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-dollar-sign">25</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button" class="food-btn" onclick="window.location.href='blog-product-break.php'">Order Now</button>
                    </div>
                </div>
            </article>
            <article class="food-card">
                <img src="../img/img-product/baba.jpg" class="food-img" alt="">
                <div class="img-text">
                    <h1>Lunch</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-dollar-sign">35</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button" class="food-btn"  onclick="window.location.href='blog-product-break.php'">Order Now</button>
                    </div>
                </div>
            </article>
            <article class="food-card">
                <img src="../img/img-product/baba.jpg" class="food-img" alt="">
                <div class="img-text">
                    <h1>Dinner</h1>
                </div>
                <div class="img-footer">
                    <div class="footer-icon">
                        <i class="fas fa-dollar-sign">45</i>
                    </div>
                    <div class="footer-btn">
                        <button type="button" class="food-btn"  onclick="window.location.href='blog-product-break.php'">Order Now</button>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <!-- -------------modal SIGN IN - SIGN UP -->
    <!-- ------------------------------------- -->
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="text-center"><i class="fa fa-user-circle-o" aria-hidden="true"></i> User <span id="action_title">Login</span></h3>
                </div>
                <div class="modal-body bodySign">
                    <div class="modalSign">
                        <div class="card">
                            <div class="card-title">
                            </div>
                            <div class="card-body">
                                <div class="card-body-top">
                                    <button id="login" class="btn" name="login" onclick="login1()">login</button>
                                    <button id="register" class="btn" name="register" onclick="register1()">register</button>
                                    <div id="pointer-btn"></div>
                                </div>
                                <div class="card-body-login">
                                    <form id="login-form">
                                        <input class="input-form" type="email" id="named" placeholder="Enter your email"><br><br>
                                        <input class="input-form" type="password" id="password" placeholder="Enter your password">
                                        <button class="btn btn-secondary" type="button" id="btnPassword" style="position: absolute; right:0px;">
                                            <span class="fas fa-eye"></span>
                                        </button><br><br><br>
                                        <input class="input-checkbox" type="checkbox" name="" id="checkbox"> <span style="color:white"> Remember Password</span><br><br>

                                        <input class="submit-form" type="button" value="Login" required onclick="signin()"><br><br>
                                        <input class="submit" type="submit" id="confimpassword" value="Forgot password">
                                    </form>
                                    <form id="register-form">
                                        <input class="input-form" type="name" id="fullname" placeholder="Enter your full name"><br><br>
                                        <input class="input-form" type="email" id="email" placeholder="Enter your email"><br><br>
                                        <input class="input-form" type="password" id="passworded" placeholder="Enter your password">
                                        <button class="btn btn-secondary" type="button" id="btnPasswordd" style="position: absolute; right:0px;">
                                            <span class="fas fa-eye"></span>
                                        </button>

                                        <br><br>
                                        <input class="input-form" type="password" id="passwordedd" placeholder="Enter confirm your password">
                                        <button class="btn btn-secondary" type="button" id="bPassworddd" style="position: absolute; right:0px;">
                                            <span class="fas fa-eye"></span>
                                        </button>
                                        <br><br>
                                        <input class="input-form" type="number" id="phoned" placeholder="Enter your phone" required><br><br>
                                        <input class="input-checkbox" type="checkbox" name="" id="checkbox2" required>
                                        <span style="color:white"> I agree tot the Restaurant app</span> <br><br>
                                        <input class="submit-form" type="button" value="Register" required onclick="signup()">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <script src="../JS/user.js"></script>
            </div>
        </div>
    </div>
    <div id="gallery">
        <div>
            <h2 class="title-text">Main Cuisines</h2>
        </div>
        <div id="gallery-center">
            <article class="gallery-item">
                <video autoplay="autoplay" controls="controls" width="320" height="240">
                    <source src="../img/video/video1.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </article>
            <article class="gallery-item">
                <video autoplay="autoplay" controls="controls" width="320" height="240">
                    <source src="../img/video/video2.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </article>
            <article class="gallery-item">
                <video autoplay="autoplay" controls="controls" width="320" height="240">
                    <source src="../img/video/video.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </article>
            <article class="gallery-item">
                <video autoplay="autoplay" controls="controls" width="320" height="240">
                    <source src="../img/video/video4.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </article>
        </div>
    </div>

    <!-- ----------------------session body------------------ -->
    <section class="customer-section" id="about">
        <h2>CUSTOMER</h2>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Tôi đã sử dụng nó và thấy đây đúng là một trang web tuyệt vời và hơn cả tuyệt với. Nếu các bạn muốn
                    tận hưởng một bữa ăn ấm cúng và tuyệt vời hãy tới với Nhà hàng Group4</p>
                    <cite>
                        <img src="../img/img_customer/batgioi.jpg" alt="person1"> Nguyen Bat Gioi
                    </cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Tôi đã sử dụng nó và thấy đây đúng là một trang web tuyệt vời và hơn cả tuyệt với. Nếu các bạn muốn
                    tận hưởng một bữa ăn ấm cúng và tuyệt vời hãy tới với Nhà hàng Group4</p>
                    <cite>
                        <img src="../img/img_customer/obama.jpg" alt="person1"> Tran Obama
                    </cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Tôi đã sử dụng nó và thấy đây đúng là một trang web tuyệt vời và hơn cả tuyệt với. Nếu các bạn muốn
                    tận hưởng một bữa ăn ấm cúng và tuyệt vời hãy tới với Nhà hàng Group4
                    <cite>
                        <img src="../img/img_customer/batgioi.jpg" alt="person1">Le Bat Gioi
                    </cite>
                </blockquote>
            </div>
        </div>
    </section>


    <!-- -----------------footer------------------- -->
    <!-- -------------------------------------------- -->
    <footer class="bg-light text-center text-lg-start footerHomePage">
        <div id="foot">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <ul>
                                <li><i class="fa fa-volume-control-phone" aria-hidden="true"></i> + (+84) 0355 739 816
                                </li>
                                <li>|</li>
                                <li><a href="mailto:"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        amthucvietnam@qvvd.vn.com</a></li>
                                <li>|</li>
                                <li><i class="fa fa-clock-o" ari a-hidden="true"></i> 24/7 Hours Working</li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="social-icon">
                                <li class="followus-label">Follow Us:</li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2)">

            © 2021 Copyright:
            <a class="text-dark" href="#">Group4-Restaurent.com</a>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
</body>

</html>