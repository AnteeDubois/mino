<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PHPBB | Mino</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="assets/css/style.css">

       <!--  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script> -->
       <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js"></script> -->
       <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/modernizr-ck.js"><\/script>')</script> -->
    </head>
    <body class="silver-light">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
            <![endif]-->
            <header class="navbar">
                <?php include("includes/nav.php"); ?>
            </header>
            <?php include("includes/sidenav.php"); ?>
            <div class="outer-wrap">
                <section class="breadcrumbs-wrap grid">
                    <?php include("includes/breadcrumbs.php"); ?>
                </section>
                <div class="content inner-wrap">

                    <?php include("includes/forumlist.php"); ?>
                    
                </div>
                <footer class="footbar grid text-center">
                    <?php include("includes/info.php"); ?>
                    <?php include("includes/copyright.php"); ?>
                </footer>
            </div>
            
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
       <!--  // <script src="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script> -->
        
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="assets/js/vendor/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

