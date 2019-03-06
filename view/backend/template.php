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
    ================================================== -->
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=9ybes16a7zeyi6rct2bacjeq9m9ooph3k4tdch9fyclr9l96"></script>
    <script>tinymce.init({ selector:'textarea', plugins: 'image media link tinydrive imagetools', toolbar: 'insertfile image link ' });</script> 

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

<body id="top" class=" pace-done">
     <!-- header
    ================================================== -->
    <header class="s-header">
        
        <nav class="header-nav-wrap">
            <ul class="header-nav">
                <li><a href="../../index.php?action=adminView" class="admin" >Home</a></li>
                <li><a href="../../index.php?action=View" class="admin" >Create</a></li>
                <li><a href="../../index.php?action=viewCommentsAdmin" class="admin" >Moderate</a></li>
            </ul>
        </nav>

        <nav class="header-nav-wrapleft">
            <ul class="header-navleft">
                <li><a href="../../index.php?action=connexion" class="admin" >Connexion</a></li>
                <li><a href="../../index.php?action=deconnexion" class="admin" >Déconnexion</a></li>
            </ul>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->
    <!-- end s-home -->
    <section id="home" class="page-hero target-section"></section>
    <section id="works" class="target-section"></section>
    <section id="blog" class="s-blogadmin target-section">
            <?= $content ?>
    </section>
    
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