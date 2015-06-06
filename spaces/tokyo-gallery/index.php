<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Tokyo Gallery + BTAP — Ginza — Art Space Tokyo';
  $head_desc  = 'Information about Tokyo Gallery + BTAP by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/tokyo-gallery/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'tokyo-gallery';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Tokyo Gallery + BTAP</h1>
            <h2 class="location">Ginza</h2>
            
            <img src="/images/spaces/tokyo.png" alt="Tokyo Gallery" />
            
            <div class="about_float left" style="top:300px;">
              <div class="about">
                <h3>About the space</h3>
                <p>Tokyo Gallery was founded in 1950 by Takashi Yamamoto, the man largely responsible for introducing contemporary art to Japan. As Japan’s first commercial contemporary art gallery, Tokyo Gallery has been at the center of the Tokyo art world for several decades and has continuously exhibited groundbreaking works by Japanese, Asian and Western artists.</p>
                <p>During the 1950s and ’60s, the gallery exhibited the cuttingedge work of some of Japan’s first major contemporary artists, such as Yoshihige Saito and Jiro Yoshihara. It was also the first to introduce Western artists such as Yves Klein and Lucio Fontana. Ever since the late 1960s, it has been a staunch supporter of the Mono-ha artists. While the 1990s saw new galleries emerging in other areas of the city, displacing Ginza as the center of the Tokyo art world, Tokyo Gallery has managed to remain consistently at the forefront and has extended its influence well beyond Tokyo. In 2002, it opened Beijing Tokyo Art Projects (<span class="sc">BTAP</span>) in the Dashanzi (798) area of Beijing, an abandoned factory and warehouse district that has since become the epicenter of the booming Chinese contemporary art scene.</p>
                <p>Renamed Tokyo Gallery + <span class="sc">BTAP</span> and run by Takashi Yamamoto’s sons Hozu Yamamoto and Yukihito Tabata, the gallery now focuses primarily on contemporary artists from Japan, Korea and China.</p>
              </div>
            </div>
          </div>          
        </div>
      </div>
      
      <div class="row">
        <div class="eightcol">  
          <div class="gallery_info">
            <h3>General Information</h3>
            <p>
            <strong>Station:</strong> Ginza<br />
            <strong>Lines:</strong> Ginza, Marunouchi, Hibiya<br />
            <strong>Access:</strong> 5 minute walk from exit A3<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> 11AM – 7PM; 11AM – 5PM on Saturdays. Closed on Sundays, Mondays, national holidays.<br />
            <strong>Tel:</strong> +81-(0)3-3571-1808<br />
            <strong>Fax:</strong> +81-(0)3-3571-7689<br />
            <strong>URL:</strong> <a href="http://www.tokyo-gallery.com/">http://www.tokyo-gallery.com/</a><br /> 
            <strong>Email:</strong> <a href="mailto:info@tokyo-gallery.com">info@tokyo-gallery.com</a><br />
            <strong>Address:</strong> 7F, Dai-yon Shuwa Bldg., 8-10-5 Ginza, Chuo-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msid=212278466448341545058.0004b967976d2c660fec7&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=35.669378,139.764183&amp;spn=0.016892,0.0265&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msid=212278466448341545058.0004b967976d2c660fec7&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=35.669378,139.764183&amp;spn=0.016892,0.0265&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Ginza – Tokyo Gallery + BTAP</a> in a larger map</figcaption>

            <p>If you happen to be in the area around lunch time, the <strong>Ginza Green building</strong> offers an amazing array of restaurants. After stuffing yourself with organic greens or pulled pork, <strong>Morimae</strong>, a bonsai shop just around the corner has a beautiful (and affordable!) selection on display. They even offer a service to tend to your bonsai if you take off for a monthlong trip to Tibet. For a ‘perfect own roast hand drip’ cup of coffee, <strong>L’ambre</strong>, which has been pouring since 1948, can’t be beat. And if you like your art to be provocative, the exhibitions of erotic art at <strong>Vanilla Gallery</strong> are usually just that.</p>
          </div>
        </div>
        
        <div class="threecol submenu last">
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/submenu-spaces.php'); ?>
          <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/purchase.php'); ?>
        </div>
      </div>
    </div>
    
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'); ?>
  </body>
</html>