<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="fr">
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Blog Jean FORTEROCHE</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/vendor.css">
    <link rel="stylesheet" href="./public/css/main.css">

    <!-- script
    ================================================== -->
    <script src="./public/js/modernizr.js"></script>
    <script src="./public/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="./public/images/fav.png" type="image/x-icon">
    <link rel="icon" href="./public/images/fav.png" type="image/x-icon">

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">
        
        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li class="current"><a href="/blog/listPosts" title="home">Home</a></li>
                <li><a class="smoothscroll"  href="#blog" title="blog">Blog</a></li>
                <li><a class="smoothscroll"  href="#contact" title="contact">Contact</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="./public/assets/img/bg4.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Hello There</h3>

                <h2 class="admin">
                    Jean Forteroche. <br>
                    Je suis un écrivain  <br>
                    basé en Alaska
                </h2>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#"><em class="im im-facebook" aria-hidden="true" ></em><span>Facebook</span></a>
            </li>
            <li>
                <a href="#"><em class="im im-twitter" aria-hidden="true"></em><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#"><em class="im im-instagram" aria-hidden="true"></em><span>Instagram</span></a>
            </li>
            <li>
                <a href="#"><em class="im im-behance" aria-hidden="true"></em><span>Behance</span></a>
            </li>
            <li>
                <a href="#"><em class="im im-pinterest" aria-hidden="true"></em><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->
  
    <!-- blog
    ================================================== -->
    <section id="blog" class="s-blog target-section">
    <?= $content ?>
    </section> <!-- end s-blog -->
    <!-- s-stats
    ================================================== -->
   
    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="col-full">

                <div class="footer-logo">
                    <a class="footer-site-logo" href="#0"><img src="./public/images/logo.png" alt="Homepage"></a>
                </div>

                <ul class="footer-social">
                    <li><a href="#0">
                        <em class="im im-facebook" aria-hidden="true"></em>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href="#0">
                        <em class="im im-twitter" aria-hidden="true"></em>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href="#0">
                        <em class="im im-instagram" aria-hidden="true"></em>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href="#0">
                        <em class="im im-behance" aria-hidden="true"></em>
                        <span>Behance</span>
                    </a></li>
                    <li><a href="#0">
                        <em class="im im-pinterest" aria-hidden="true"></em>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class="row footer-bottom">

            <div class="col-twelve">
                <div class="copyright">
                    <span>© Copyright Hola 2017</span> 
                    <span>Design by <a href="https://www.styleshout.com/">styleshout</a></span>	
                </div>

                <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"><em class="im im-arrow-up" aria-hidden="true"></em></a>
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

    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="./public/js/jquery-3.2.1.min.js"></script>
    <script src="./public/js/plugins.js"></script>
    <script src="./public/js/main.js"></script>

</body>

</html>