<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RESTAURANT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   

    <!-- Nav Bar Start -->
    <div class="nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="#" class="nav-item nav-link">Contact</a>
                        
                        <a href="#" class="nav-item nav-link">About us</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Product</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">sea foods</a>
                                <a href="#" class="dropdown-item">jungle foods</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="navbar-nav ml-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                            <div class="dropdown-menu">
                                <a href="login.html" class="dropdown-item">Login</a>
                                <a href="#" class="dropdown-item">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Bottom Bar Start -->
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="index.html">
                            <img src="../img/interface/logoquan.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Search">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <a href="wishlist.html" class="btn wishlist">
                            <i class="fa fa-heart"></i>
                            <span>(0)</span>
                        </a>
                        <a href="cart.html" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>(0)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Bar End -->

    <!-- Main Slider Start -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <nav class="navbar bg-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-mug-hot"></i>Drinks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-utensils"></i>Healthy Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-mortar-pestle"></i>Organic Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-table"></i>Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-drumstick-bite"></i>White Meat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-fish"></i>Sea Food</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-pepper-hot"></i>Hot & Spicy</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-6">
                    <div class="header-slider normal-slider">
                    <?php
                                require_once "../modal//connect.php";
                                $dt = new database();
                                $dt->connect();
                                $sql = 'select * from rooms';
                                $getAll = $dt->read_product_break($sql);
                                foreach ($getAll as $slider) {
                                ?>
                        <div class="header-slider-item">
                            <img src="<?php echo $slider['image_room']?>" alt="Slider Image" width="100%" height="500px;"/>
                            <div class="header-slider-caption">
                                <p><?php echo $slider['name_room']?></p>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i><?php echo $slider['description']?></a>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-img">
                        <div class="img-item">
                            <img src="../img/img-room/room1.jpg" />
                            <a class="img-text" href="">
                                <p>Sang trọng quý phái</p>
                            </a>
                        </div>
                        <div class="img-item">
                            <img src="../img/img-room/room2.jpg" />
                            <a class="img-text" href="">
                                <p>Sang trọng quý phái</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Brand Companies Start -->
    <div class="brand">
        <div class="container-fluid">
            <div class="brand-slider">
                <div class="brand-item"><img src="../img/img-brand/axon.png" alt="" width="50%" ></div>
                <div class="brand-item"><img src="../img/img-brand/kms.png" alt="" width="50%" ></div>
                <div class="brand-item"><img src="../img/img-brand/orient.jpg" alt="" width="50%" ></div>
                <div class="brand-item"><img src="../img/img-brand/bap.png" alt="" width="50%" ></div>
                <div class="brand-item"><img src="../img/img-brand/mgm.jfif" alt="" width="50%" ></div>
                <div class="brand-item"><img src="../img/img-brand/ht.png" alt="" width="50%" ></div>
                <div class="brand-item"><img src="../img/img-brand/pn.png" alt="" width="50%" ></div>
            </div>
        </div>
    </div>
    <!-- Brand End -->

    <!-- Category Start-->
    <div class="category">
        <div class="container-fluid">
            <div class="row">
            <?php
                require_once "../modal//connect.php";
                $dt = new database();
                $dt->connect();
                $sql = 'select * from room_interface';
                $getAll = $dt->read_product_break($sql);
                foreach ($getAll as $room) {
            ?>                    
                <div class="col-md-3">
                    <div class="category-item ch-400">
                        <img src="<?php echo $room['img_room']?>" style="margin-left:5px;" />
                        <a class="category-name" href="">
                            <p><?php echo $room['room_name']?></p>
                        </a>
                    </div>
                </div>
            <?php } ?>

            </div>
        </div>
    </div>
    <!-- Category End-->



    <!--  Product Start -->
    <div class="featured-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1> Product</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                
                            <?php
                                require_once "../modal//connect.php";
                                $dt = new database();
                                $dt->connect();
                                $sql = 'select * from products';
                                $getAll = $dt->read_product_break($sql);
                                foreach ($getAll as $product) {
                                ?>
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#"><?php echo $product['name_product']; ?></a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="<?php echo $product['image'] ?>" alt="Product Image" width="150px;" height="150px">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="product-price">
                            <h3><span>$</span><?php echo $product['price'] ?></h3>
                            <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Buy Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Featured Product End -->

     
    <!-- Feature Start-->
    <div class="feature">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fab fa-cc-mastercard"></i>
                        <h2> Payment</h2>
                        <p>
                            Thoải mái thanh toán với chúng tôi
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-truck"></i>
                        <h2>Worldwide Delivery</h2>
                        <p>
                            Vận chuyển quý khách đến và đi theo yêu cầu
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-sync-alt"></i>
                        <h2>90 Days Return</h2>
                        <p>
                            Đặt bàn trong tích tắc
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 feature-col">
                    <div class="feature-content">
                        <i class="fa fa-comments"></i>
                        <h2>24/7 Support</h2>
                        <p>
                            Hỗ trợ quý khách 24/7
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End-->                               



    <!-- Discount Product Start -->
    <div class="recent-product product">
        <div class="container-fluid">
            <div class="section-header">
                <h1>Discount Product</h1>
            </div>
            <div class="row align-items-center product-slider product-slider-4">
                
                <?php
                    require_once "../modal//connect.php";
                    $dt = new database();
                    $dt->connect();
                    $sql = 'select * from discount_product';
                    $getAll = $dt->read_product_break($sql);
                    foreach ($getAll as $discount) {
                ?>                    
                <div class="col-lg-3">
                    <div class="product-item">
                        <div class="product-title">
                            <a href="#"><?php echo $discount['name_product']?></a>
                            <div class="ratting">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                        </div>
                        <div class="product-image">
                            <a href="product-detail.html">
                                <img src="<?php echo $discount['image']?>" alt="Product Image" width="150px;" height="150px">
                            </a>
                            <div class="product-action">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#"><i class="fa fa-heart"></i></a>
                                <a href="#"><i class="fa fa-search"></i></a>
                               
                            </div>
                        </div>
                        <div class="product-price">          
                            <a class="btn" href=""> <strike><?php echo $discount['old_price'] ?></strike></a>
                            <h3><span></span><?php echo $discount['price'] ?></h3>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Recent Product End -->

    <!-- Review Start -->
    <div class="review">
    <div><h1 class="text-center" >CUSTOMER</h1></div>
        <div class="container-fluid">
            <div class="row align-items-center review-slider normal-slider">
                <?php
                    require_once "../modal//connect.php";
                    $dt = new database();
                    $dt->connect();
                    $sql = 'select * from image_cuss';
                    $getAllImage = $dt->read_product_break($sql);
                    foreach ($getAllImage as $image) {
                    ?>                            
                        <div class="col-md-6">
                            <div class="review-slider-item">
                                <div class="review-img">
                                    <img src="<?php echo $image['image_cus'] ?>" alt="Image">
                                </div>
                                <div class="review-text">
                                    <h2><?php echo $image['name_cus']?></h2>
                                    <h3>Profession</h3>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <p>
                                        <?php echo $image['Note'] ?>
                                    </p>
                                </div>
                            </div>
                        </div> 
                <?php } ?>           
            </div>
        </div>
    </div>
    <!-- Review End -->

    <!-- Footer Start -->
    <div class="footer">
        <div class="col-lg-12 text-center">
        <h3>ABOUT US</h3>                                     
        </div>
        <div class="row payment align-items-center">
                <div class="col-md-6">
                    <div class="payment-method">
                        <h2>We Accept:</h2>
                        <img src="img/payment-method.png" alt="Payment Method" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-security">
                        <h2>Secured By:</h2>
                        <img src="img/godaddy.svg" alt="Payment Security" />
                        <img src="img/norton.svg" alt="Payment Security" />
                        <img src="img/ssl.svg" alt="Payment Security" />
                    </div>
                </div>
            </div>                  
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="footer-widget">
                        <h2>Aloxo</h2>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>99To Hien Thanh, Da Nang, VietNam</p>
                            <p><i class="fa fa-envelope"></i>amthucvietnam@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <h2>Follow Us</h2>
                        <div class="contact-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
    </div>
    <!-- Footer End -->

 
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

                        
    <script src="js/main.js"></script>
</body>

</html>





