 <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/jquery.easing.min.js" type="text/javascript"></script>
    <script>
        $(function () {

            //jQuery time
            var current_fs, next_fs, previous_fs; //fieldsets
            var left, opacity, scale; //fieldset properties which we will animate
            var animating; //flag to prevent quick multi-click glitches

            $(".next").click(function () {
                if (animating) return false;
                animating = true;

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = 1 - (1 - now) * 0.2;
                        //2. bring next_fs from the right(50%)
                        left = (now * 50) + "%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({
                            'transform': 'scale(' + scale + ')'
                        });
                        next_fs.css({
                            'left': left,
                            'opacity': opacity
                        });
                    },
                    duration: 800,
                    complete: function () {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: 'easeInOutBack'
                });
            });

            $(".previous").click(function () {
                if (animating) return false;
                animating = true;

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //de-activate current step on progressbar
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale previous_fs from 80% to 100%
                        scale = 0.8 + (1 - now) * 0.2;
                        //2. take current_fs to the right(50%) - from 0%
                        left = ((1 - now) * 50) + "%";
                        //3. increase opacity of previous_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({
                            'left': left
                        });
                        previous_fs.css({
                            'transform': 'scale(' + scale + ')',
                            'opacity': opacity
                        });
                    },
                    duration: 800,
                    complete: function () {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
                    easing: 'easeInOutBack'
                });
            });

            $(".submit").click(function () {
                return false;
            })

        });
    </script>
     <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <!-- menu navigation -->
    <script type="text/javascript" src="js/bootsnav.js"></script>
    <script type="text/javascript" src="js/jquery.nav.js"></script>
    <!-- animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="js/page-scroll.js"></script>
    <!-- swiper carousel -->
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <!-- counter -->
    <script type="text/javascript" src="js/jquery.count-to.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.js"></script>
    <!-- magnific popup -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <!-- portfolio with shorting tab -->
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <!-- images loaded -->
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <!-- pull menu -->
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/hamburger-menu.js"></script>
    <!-- counter  -->
    <script type="text/javascript" src="js/counter.js"></script>
    <!-- fit video  -->
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <!-- equalize -->
    <script type="text/javascript" src="js/equalize.min.js"></script>
    <!-- skill bars  -->
    <script type="text/javascript" src="js/skill.bars.jquery.js"></script>
    <!-- justified gallery  -->
    <script type="text/javascript" src="js/justified-gallery.min.js"></script>
    <!--pie chart-->
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <!-- instagram -->
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    <!-- retina -->
    <script type="text/javascript" src="js/retina.min.js"></script>
    <!-- revolution -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="js/login.js"></script>
    <!-- setting -->