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
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum culpa iure voluptates porro officiis alias saepe ab sit odio nesciunt? Quisquam rem beatae ab velit itaque eligendi ea repellat assumenda.
            Totam consequatur quisquam dolorem repudiandae repellendus quam placeat veritatis vero iusto praesentium enim in veniam deleniti aliquid omnis aliquam cupiditate esse explicabo, fugit eos autem? Dicta, voluptatum? Iste, rerum voluptatum.
            Voluptate neque ipsam laboriosam repellat voluptates possimus, laborum dolor velit eligendi, adipisci unde illo repudiandae fuga repellendus maiores corrupti dolore in dignissimos cumque aliquam alias, itaque odit. Non, a modi.
            Corporis nihil harum voluptates hic fuga officia repellat libero quidem sequi omnis fugit similique error perspiciatis eveniet suscipit natus eius, veniam ab nulla! Fugiat nisi cupiditate, laborum accusamus omnis officia!
            Alias, in, modi animi sunt aperiam hic eius quia nulla, repellendus ab architecto obcaecati nisi dignissimos minus nobis quasi vitae fuga laudantium impedit! Corrupti natus quae dicta, architecto vel autem!
            Repudiandae autem ipsum nisi itaque, dignissimos fugit saepe velit reprehenderit. Quam eveniet officiis perferendis! Assumenda, quo, dicta esse adipisci saepe impedit minus, obcaecati praesentium atque alias placeat. Recusandae, consectetur aspernatur?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, vero consequatur harum quasi, laudantium beatae praesentium repellendus quidem ducimus voluptates quibusdam eligendi magnam incidunt perspiciatis sint quam esse libero? Facilis.
            Similique necessitatibus, rerum accusantium error veniam quos placeat repellendus eum. Quaerat veritatis doloremque autem in, voluptatibus itaque, corporis placeat quia nostrum non aliquam ipsa nemo pariatur earum consequatur voluptates illum.
            Nisi aspernatur quidem recusandae consequuntur ullam unde. Quam laboriosam quaerat adipisci. Pariatur architecto, necessitatibus hic quod accusantium aliquam maiores ipsa animi perspiciatis debitis soluta, cupiditate eius inventore consectetur placeat veniam.
            Magni odit minus facere quod pariatur obcaecati vel accusamus. Quos beatae minima, molestiae ipsa commodi cum consectetur distinctio incidunt ab soluta eos voluptates aperiam hic aliquid porro est dolor! Error?
            Beatae voluptatum eum perspiciatis, dolorum temporibus amet iure reiciendis soluta quia corrupti nesciunt, modi accusamus blanditiis, repellat dignissimos. Quo commodi ratione saepe excepturi dicta earum aliquam reprehenderit, facere repellat soluta.
            Animi corporis accusantium nam repellat eaque aliquam sunt iure officiis assumenda mollitia inventore, quasi, iste vero! Laudantium saepe optio doloribus vero nesciunt explicabo atque facere ab. Aliquam ipsum neque nam?
            Possimus ex accusantium, tempore consectetur corrupti odio nesciunt sunt qui expedita culpa. Architecto eligendi laboriosam molestias alias? Nam, a ut at distinctio, dolorum eligendi quidem doloremque dolor autem ipsam dolores?
            Nihil numquam, obcaecati accusamus laudantium ipsa libero dolor molestiae quo. Beatae nisi enim nobis saepe repudiandae id mollitia, molestias eveniet at asperiores quas nihil temporibus voluptatibus eos, explicabo dolores culpa?
            Nesciunt cum amet adipisci ullam ex tenetur repudiandae similique laboriosam perspiciatis commodi voluptas magnam doloremque, laborum repellat quo impedit sunt harum tempore error accusamus quaerat deleniti at! Distinctio, labore debitis.
            Iste omnis perspiciatis ducimus culpa error, eveniet dolor officiis natus tenetur nihil voluptatem cumque recusandae quibusdam, aliquam quo voluptate porro voluptatibus nisi accusantium voluptates libero, voluptas minus. Maiores, quaerat fuga.
        </p>

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