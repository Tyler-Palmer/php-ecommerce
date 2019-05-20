</div><br><br>

                <footer class="container text-center" id="footer">&copy; Copyright 2019 Shaunta's Boutique</footer>

            </div>
        </div>

    <script>

        //Header parallax
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

        //Modal function
        function detailsModal(id){
            var data = {"id" : id};
            jQuery.ajax({
                url : <?=BASEURL;?>+'/www/includes/detailsmodal.php',
                method : "post",
                data : data,
                success : function(data){
                    jQuery('body').append(data);
                    jQuery('#details-modal').modal('toggle');
                },
                error : function(){
                    alert('Something went wrong');
                }  
            });
        }
    </script>
    </body>
</html>