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

    /* 
    #info-content {

        position: relative;
    }

    #info-content fill {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        right: 0;
        bottom: 0;
        padding: 0 !important;
        margin: 0 !important;
    } */
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

    <!-- <section class="about-section" id="about">
        <div class="row">
            <h2>PRODUCT</h2>
            <br><br><br>
            <?php

            ?>
      </div>
    </section> -->
    <section class="about-section" id="content-section">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">
        <img src="../img/images_content/15.jpg" / width="200px;">

    </section>
    <section class="about-section" id="info-content">
        <p>
            <img src="../img/img-product/backgroundd.jpg" style="width: 200px; height: auto" class="imgright" />
            Sun Homes BBQ (Quán thịt nướng Hàn Quốc) sẽ đưa bạn đến Seoul, nơi những con phố bình dị,
            những quán ăn dân dã đã trở nên quen thuộc và gắn bó với người dân xứ Hàn.
            Nếu đã một lần thưởng thức thịt nướng tại Sun Homes BBQ, bạn sẽ không thể quên được hương
            vị “ngất ngây” của những món sườn non bò Mỹ, nạc vai bò Mỹ, dẻ sườn tươi….
            khi hòa quyện vào với các loại gia vị đặc trưng của xứ sở Kimchi đã trở nên hấp dẫn đến thế nào.
            Bí quyết của Sun Homes BBQ nằm ở nước sốt tẩm ướp thịt được chế biến từ nguyên liệu hoàn toàn tự nhiên,
            theo công thức bí truyền, do Bếp Trưởng Park Sung Min hơn 40 năm kinh nghiệm nghiên cứu và chế biến.
            Sun Homes BBQ có 2 dạng thực đơn để Quý Khách lựa chọn là: Chọn Combo và Gọi Món.
        </p>       
           <img src="../img/images_content/15.jpg" / width="200px;" >
   
    </section>




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
    <section class="about-section" id="about">
        <div class="row">
            <h2>About Us</h2>
            <p class="p-long">
                Our restaurant builds our brand based on the reputation and reviews from customers. With the slogan of
                food safety first. We always want to bring the best food to everyone.
            </p>
        </div>
        <!-- <div class="row">
            <div class="col span-1-of-4 about-picture">
                <img src="../img/img_member/diem.jpg" alt="activities1" ;>
                <p class="picture-title">Diem said</p>

            </div>
            <div class="col span-1-of-4 about-picture">
                <img src="../img/img_member/quan.jpg" alt="activities2">
                <p class="picture-title">Quan said</p>

            </div>
            <div class="col span-1-of-4 about-picture">
                <img src="../img/img_member/vuong.jpg" alt="activities3">
                <p class="picture-title">Vuong said</p>
            </div>
            <div class="col span-1-of-4 about-picture">
                <img src="../img/img_member/vi.jpg" alt="activities4">
                <p class="picture-title">Vĩ said</p>
            </div> -->
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