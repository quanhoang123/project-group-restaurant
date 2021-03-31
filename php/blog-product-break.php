<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Product Slider Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/style-blog-product.css">
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="page-header">
            <h1>Product Slider <small>.</small></h1>
        </div>

        <!-- Product Slider - START -->
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-9">
                        <h3>Products Showcase using carousel and Bootstrap</h3>
                    </div>
                    <div class="col-md-3">
                        <!-- Controls -->
                        <div class="controls pull-right hidden-xs">
                            <a class="left fa fa-chevron-left btn btn" href="#carousel-example" data-slide="prev"></a><a class="right fa fa-chevron-right btn" href="#carousel-example" data-slide="next"></a>
                        </div>
                    </div>
                </div>
                <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <?php
                                require_once "../modal//connect.php";
                                $dt = new database();
                                $dt->connect();
                                $sql = 'select * from products';
                                $getAll = $dt->read_product_break($sql);
                                foreach ($getAll as $product) {
                                ?>
                                    <div class="col-sm-3">
                                        <div class="col-item">
                                            <div class="info">
                                                <div class="row">
                                                    <div class="price col-md-6">
                                                        <h5><?php echo $product['name_product']; ?></h5>
                                                        <h5 class="price-text-color">$<?php echo $product['price']; ?></h5>
                                                    </div>
                                                    <div class="rating hidden-sm col-md-6">
                                                        <i class="price-text-color fa fa-star"></i>
                                                        <i class="price-text-color fa fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="photo">
                                                <img src="<?php echo $product['image'] ?>" class="img-responsive" alt="a" ; />
                                            </div>
                                            <div class="info">
                                                <div class="separator clear-left">
                                                    <p class="btn-add">
                                                        <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Add to cart</a>
                                                    </p>
                                                    <p class="btn-details">
                                                        <i class="fa fa-list"></i><a href="#" class="hidden-sm">More details</a>
                                                    </p>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Slider - END -->

    </div>

</body>

</html>