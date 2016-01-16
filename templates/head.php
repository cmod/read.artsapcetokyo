<html lang="<?=$lang;?>">
  <head>
    <meta charset="utf-8" />
    <title><?=$head_title;?></title>
    <meta name="description" content="<?=$head_desc;?>" />

    <!-- iOS FUN -->
    <!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS ICONS AND START SCREENS -->
    <link rel="apple-touch-icon" href="/images/misc/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/images/misc/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/images/misc/apple-touch-icon-114x114.png" />
    
    
    <!-- iPhone/iPod Touch Portrait – 320 x 460 (standard resolution) -->
    <link rel="apple-touch-startup-image" href="/images/misc/splash-screen-320x460.png" media="screen and (max-device-width: 320px)" />
    
    <!-- iPhone/iPod Touch Portrait – 640 x 920 pixels (high-resolution) -->
    <link rel="apple-touch-startup-image" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" href="/images/misc/splash-screen-640x920.png" />

    <!-- iPhone/iPod Touch Portrait – 640 x 1096 pixels (iPhone5) -->
    <link rel="apple-touch-startup-image" href="/images/misc/splash-screen-640x1096.png" />
    

    <!-- For iPad Landscape 1024x748 -->
    <link rel="apple-touch-startup-image" sizes="1024x748" href="/images/misc/splash-screen-1024x748.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />

    <!-- For iPad Landscape 2048x1496 -->
    <link rel="apple-touch-startup-image" sizes="1024x748" href="/images/misc/splash-screen-2048x1496.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio: 2)" />

    
    <!-- For iPad Portrait 768x1004 -->
    <link rel="apple-touch-startup-image" sizes="768x1004" href="/images/misc/splash-screen-768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)"/>

    <!-- For iPad Portrait 768x1004 (high-resolution) -->
    <link rel="apple-touch-startup-image" sizes="1536x2008" href="/images/misc/splash-screen-1536x2008.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) and (-webkit-min-device-pixel-ratio: 2)"/>

    
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="http://prepostbooks.com/images/favicon.png" />

    <!-- CSS -->       
    <link href="/css/1140.css" rel="stylesheet" type="text/css" />
    <link href="/css/master.css" rel="stylesheet" type="text/css" />
    
    
    <!-- TYPOTHEQUE -->
    <link rel="stylesheet" href="http://fonts.typotheque.com/WF-003749-001839.css" type="text/css" />

    <!-- TYPEKIT -->
    <script type="text/javascript" src="http://use.typekit.com/ojq6wnv.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/saleslinks.php'); ?>

    <script>
    // Janky little script to keep the nav at the top stolen shamelessly from a stackoverflow answer. 
    function moveScroller() {
      var a = function() {
        var b = $(window).scrollTop();
        var d = $(".scrolly").offset().top;
        var c = $(".scroller");
        if (b>d) {
          c.css({position:"fixed",top:"0px", 'box-shadow':"0px 1px 1px #efefef"});
        } else {
          if (b<=d) {
            c.css({position:"relative",top:"", padding:"", 'box-shadow':""})
          }
        }
      };
      $(window).scroll(a);a()
    }

     $(function() {
        moveScroller();
      });

    </script>

    <!-- GOOGLE ANALYTICS -->
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-98891-11']);
      _gaq.push(['_setDomainName', 'artspacetokyo.com']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.stayInWebApp.min.js"></script>
    <script type="text/javascript">
       $(function() {
         $.stayInWebApp();
        });
    </script>  

    <script src="http://artspacetokyo.com/mint/?js" type="text/javascript"></script>  

    </head>