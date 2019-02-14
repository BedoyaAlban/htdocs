<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Jean Forteroche</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../../public/css/base.css">
    <link rel="stylesheet" href="../../public/css/vendor.css">
    <link rel="stylesheet" href="../../public/css/main.css">
    <!--<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->

    <!-- TinyMCE
    ================================================== 
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=9ybes16a7zeyi6rct2bacjeq9m9ooph3k4tdch9fyclr9l96"></script>
    <script>tinymce.init({ selector:'textarea' });</script> -->

    <!-- script
    ================================================== -->
    <script src="../../public/js/modernizr.js"></script>
    <script src="../../public/js/pace.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="../../public/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../public/favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="../../indexx.php"><img src="../../public/images/logo.png" alt="Homepage"></a>
        </div>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="../../public/images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Hello There</h3>

                <h1>
                    I am Jonathan Doe. <br>
                    I am a graphic & UI/UX <br>
                    designer based in Somewhere.
                </h1>

                <div class="home-content__buttons">
                    <a href="#works" class="smoothscroll btn btn--stroke">
                        Latest Projects
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Me
                    </a>
                </div>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-pinterest" aria-hidden="true"></i><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->

    <section id="blog" class="s-blogs target-section">
        <div class="photo-container">
          <img src="../../now-ui-kit-html-v1.2.0/assets/img/ryan.jpg" alt="">
        </div>
        <h3 class="title">Jean Forteroche</h3>
        <p class="category">Writer&Blogger</p>
      </div>
    </section>
    
    
        <?= $content ?>
    
    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href=""><img src="../../public/images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <i class="im im-facebook" aria-hidden="true"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-twitter" aria-hidden="true"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-instagram" aria-hidden="true"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-behance" aria-hidden="true"></i>
                        <span>Behance</span>
                    </a></li>
                    <li><a href="#0">
                        <i class="im im-pinterest" aria-hidden="true"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Jean Forteroche 2017</span> 
                    <span>Design by <a href="https://www.webagency-france.fr/">WebAgency</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <!--<div id="preloader">
        <div id="loader"></div>
    </div> -->


    <!-- Java Script
    ================================================== -->
    <script src="../../public/js/jquery-3.2.1.min.js"></script>
    <script src="../../public/js/plugins.js"></script>
    <script src="../../public/js/main.js"></script>

</body>

</html>