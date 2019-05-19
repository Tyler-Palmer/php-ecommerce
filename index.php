<!DOCTYPE html>
<html>
    <head>
        <title>Shaunta's Boutique</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body id="bootstrap-override">
        <!-- Top Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand">Shaunta's Boutique</a>
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Shirts</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Header --> 
        <div id="headerWrapper">
            <div id="back-flower"></div>
            <div id="logo-text"></div>
            <div id="fore-flower"></div>
        </div>
        
        <div class="container-fluid">
            <!-- Left Sidebar -->
            <div class="row">
                <div class="col-md-2">
                    Left Sidebar
                </div>
                <!-- Main Content -->
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        <h2 class="text center">Featured Products</h2>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <h4>Men's Jeans</h4>
                            <img class="img-thumbnail product" src="images/products/men4.png" alt="Levis Jeans" />
                            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
                            <p class="price">Our Price: $19.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                        <div class="col-md-3">
                            <h4>Men's Shirt</h4>
                            <img class="img-thumbnail product" src="images/products/men1.png" alt="Hollister Shirt" />
                            <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                            <p class="price">Our Price: $14.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                        <div class="col-md-3">
                            <h4>Fancy Shoes</h4>
                            <img class="img-thumbnail product" src="images/products/women6.png" alt="Fancy Shoes" />
                            <p class="list-price text-danger">List Price: <s>$69.99</s></p>
                            <p class="price">Our Price: $49.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                        <div class="col-md-3">
                            <h4>Boy's Hoodie</h4>
                            <img class="img-thumbnail product" src="images/products/boys1.png" alt="Boy's Hoodie" />
                            <p class="list-price text-danger">List Price: <s>$24.99</s></p>
                            <p class="price">Our Price: $18.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <h4>Girl's Dress</h4>
                            <img class="img-thumbnail product" src="images/products/girls3.png" alt="Girl's Dress" />
                            <p class="list-price text-danger">List Price: <s>$34.99</s></p>
                            <p class="price">Our Price: $22.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                        <div class="col-md-3">
                            <h4>Women's Shirt</h4>
                            <img class="img-thumbnail product" src="images/products/women7.png" alt="Women's Shirt" />
                            <p class="list-price text-danger">List Price: <s>$45.99</s></p>
                            <p class="price">Our Price: $29.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                        <div class="col-md-3">
                            <h4>Women's Skirt</h4>
                            <img class="img-thumbnail product" src="images/products/women3.png" alt="Women's Skirt" />
                            <p class="list-price text-danger">List Price: <s>$29.99</s></p>
                            <p class="price">Our Price: $19.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                        <div class="col-md-3">
                            <h4>Purse</h4>
                            <img class="img-thumbnail product" src="images/products/women5.png" alt="Purse" />
                            <p class="list-price text-danger">List Price: <s>$69.99</s></p>
                            <p class="price">Our Price: $49.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar -->
                <div class="col-md-2">
                    Right Sidebar
                </div>

                <footer class="container text-center" id="footer">&copy; Copyright 2019 Shaunta's Boutique</footer>
                
                <!-- Details Modal -->
                <div class="modal" id="details-1" tabindex="-1" role="dialog" aria-labelled-by="details-1" aria-hidden="true">
                    <div class="modal-dialogue modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Levi's Jeans</h4>
                                <button class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="center-block">
                                                <img src="images/products/men4.png" alt="levi's jeans" class="details img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h4>Details</h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas officiis ratione doloremque deserunt, fugit esse mollitia sit quis! Sequi explicabo nesciunt sint ratione unde sit eos placeat debitis maxime minima!</p>
                                            <hr>
                                            <p>Price: $34.99</p>
                                            <p>Brand: Levi's</p>
                                            <form action="add_cart.php" method="post" class="form ml-2">
                                                <div class="form-group row">
                                                    <div class="col-xs-1">
                                                        <label for="quantity">Quantity: </label>
                                                        <input type="text" class="form-control" id="quantity" name="quantity">                                                        
                                                    </div>
                                                    <p>Available: 3</p>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xs-2">
                                                        <label for="size">Size: </label>
                                                        <select name="size" id="size" class="form-control">
                                                            <option value=""></option>
                                                            <option value="28">28</option>
                                                            <option value="32">32</option>
                                                            <option value="38">38</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <script>
        jQuery(window).scroll(function(){
            const vscroll1 = jQuery(this).scrollTop()
            jQuery('#logo-text').css({
                "transform" : "translate(0px, "+vscroll1/2+"px)"
            })

            const vscroll2 = jQuery(this).scrollTop()
            jQuery('#back-flower').css({
                "transform" : "translate("+vscroll2/5+", -"+vscroll2/12+"px)"
            })

            const vscroll3 = jQuery(this).scrollTop()
            jQuery('#fore-flower').css({
                "transform" : "translate(0px, -"+vscroll3/2+"px)"
            })
        })
    </script>
    </body>
</html>