<!DOCTYPE html>
<html>
    <head>
        <title>Shaunta's Boutique</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">
        <meta name="viewport" content="width=device-width, inital-scale=1, user-scalable=no">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
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
                            <h4>Levis Jeans</h4>
                            <img src="images/products/men4.png" alt="Levis Jeans" />
                            <p class="list-price text-danger">List Price: <s>$54.99</s></p>
                            <p class="price">Our Price: $19.99</p>
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#details-1">Details</button>
                        </div>
                    </div>
                </div>
                <!-- Right Sidebar -->
                <div class="col-md-2">
                    Right Sidebar
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