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

    <script>
        jQuery(window).scroll(function(){
            const vscroll = jQuery(this).scrollTop()
            console.log(vscroll)
        })
    </script>
    </body>
</html>