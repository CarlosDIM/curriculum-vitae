<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>cv </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
    {!!Html::script('js/jquery-1.10.2.min.js')!!}

    <link href="css/flipping_gallery.css" rel='stylesheet' type='text/css'>

    {!!Html::script('js/jquery.flipping_gallery.js')!!}

    <script>
        $(document).ready( function() {
            $(".gallery").flipping_gallery({
                enableScroll:false,
                direction: "forward",
                flipDirection: "bottom",
                spacing: 50,
                autoplay: 3000
            });
        });

    </script>
    {!!Html::script('js/jquery.easing.min.js')!!}
    <!--<script type="text/javascript" src="js/jquery.easing.min.js"></script>-->
    {!!Html::script('js/jquery.mixitup.min.js') !!}
   <!--<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>-->
    <script type="text/javascript">
        $(function() {

            var filterList = {

                init : function() {

                    // MixItUp plugin
                    // http://mixitup.io
                    $('#portfoliolist').mixitup({
                        targetSelector : '.portfolio',
                        filterSelector : '.filter',
                        effects : ['fade'],
                        easing : 'snap',
                        // call the hover effect
                        onMixEnd : filterList.hoverEffect()
                    });

                },

                hoverEffect : function() {

                    // Simple parallax effect
                    $('#portfoliolist .portfolio').hover(function() {
                        $(this).find('.label').stop().animate({
                            bottom : 0
                        }, 200, 'easeOutQuad');
                        $(this).find('img').stop().animate({
                            top : -30
                        }, 500, 'easeOutQuad');
                    }, function() {
                        $(this).find('.label').stop().animate({
                            bottom : -40
                        }, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({
                            top : 0
                        }, 300, 'easeOutQuad');
                    });

                }
            };

            // Run the show!
            filterList.init();

        });
    </script>

    <link href="css/magnific-popup.css" rel='stylesheet' type='text/css'>
    {!!Html::script('js/jquery.magnific-popup.js') !!}
    <!--<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>-->
    <script>
        $(document).ready(function() {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
    </script>
</head>
<body>
@yield('content')

{!! Html::script('js/jquery.scrollTo.js') !!}
<!--<script src="js/jquery.scrollTo.js"></script>-->

{!! Html::script('js/jquery.nav.js') !!}
<!--<script src="js/jquery.nav.js"></script>-->
<script type="text/javascript">
    $(document).ready(function() {
        $('#nav').onePageNav({
            begin: function() {
                console.log('start')
            },
            end: function() {
                console.log('stop')
            }
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>

</body>
</html>



