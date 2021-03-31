<!DOCTYPE html>
<html lang="en">

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
                <li>
                    <form>
                        <div class="input-group">
                            <input type="text" id="search" name="find" placeholder="Search" value="" style="width:250px;" />
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary" name="search" style="width:5px; border-radius:10px;"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li>
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


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <?php
                         require_once "../modal//connect.php";
                         $dt = new database();
                         $dt->connect();  
                         $sql='select * from products';
                         $getAllProducts=$dt->read_product_break($sql);  

                    foreach ($getAllProducts as $product) { 
                            // $imgUrl = PRODUCT_IMG_URL . str_replace(' ', '-', strtolower($product['product_name'])) . "/" . $product['img'];
                        ?>
                        <div class="col-md-3  mt-2">
                            <div class="card">
                                <a href="single-product.php?product=<?php echo $product['id_product'] ?>">
                                    <img class="card-img-top" src="<?php echo $imgUrl ?>" alt="<?php echo $product['product_name'] ?>">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="single-product.php?product=<?php echo $product['id'] ?>">
                                            <?php echo $product['product_name']; ?>
                                        </a>
                                    </h5>
                                    <strong>$ <?php echo $product['price'] ?></strong>

                                    <p class="card-t">
                                        <?php echo substr($product['short_description'], 0, 50) ?>'...
                                    </p>
                                    <p class="card-text">
                                        <!-- <a href="single-product.php?product=<?php echo $product['id_product'] ?>" class="btn btn-primary btn-sm"> -->
                                            View
                                        <!-- </a> -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>                            
                </div>
            </div>
        </div>
    </div>
</body>

</html>