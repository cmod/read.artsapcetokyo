<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'GA Gallery — Yoyogi — Art Space Tokyo';
  $head_desc  = 'Information about GA Gallery by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/ga-gallery/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'ga-gallery';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="gallery">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>GA Gallery</h1>
            <h2 class="location">Yoyogi / Kitasando</h2>

            <img src="/images/spaces/ga.png" alt="GA Gallery" />

            <div class="about_float right">
              <div class="about" style="text-shadow: 1px 1px 0px #fff;">
                <h3>About the space</h3>
                <p>Designed and constructed in 1974 by Makoto Suzuki and Yukio Futagawa, GA Gallery is a well-weathered building dedicated to the display of architecture, and is directed by Futagawa’s son, Yoshio. Despite Japanese architects having achieved several decades of acclaim both at home and abroad, Tokyo only has two specialist architecture galleries of this kind.</p>
                <p>GA Gallery is located between Yoyogi and Harajuku Station in one of those overlooked city recesses. The building sits in between the constant rush of traffic on Meiji Dori and the busy tracks of Yamanote line, and yet somehow this street manages to retain a sense of calm.</p>
                <p>Once you have walked up the cantilevered stairs leading to the gallery, you find yourself in an uncompromising concrete cube of an exhibition space. GA Gallery’s displays aim to illuminate the complexity of the process architects go though in order to design and realize their structures. While you look at schematics and maquettes, the gallery’s bare concrete walls are a constant, tangible reminder of the physicality of the end result.</p>
                <p>Even when the gallery is between exhibitions, it is worth a visit for its bookshop. There you’ll find a comprehensive range of publications, with of course many from the ‘Global Architecture’ range of books and magazines distributed by the architectural publishing house behind the gallery.</p>
              </div>
            </div>
          </div>          
        </div>
      </div>
      
      <div class="row">
        <div class="eightcol">            
          <div class="gallery_info">
            <h3>General Gallery Information</h3>
            <p>
            <strong>Station:</strong> Yoyogi<br />
            <strong>Lines:</strong> Yamanote, Chuo, Oedo<br />
            <strong>Access:</strong> 10 minute walk from west exit (JR) or subway exit A2 (Oedo)<br />
            <strong>Entry:</strong> Adults ¥500<br />
            <strong>Hours:</strong> 12PM – 6:30PM. Closed on national holidays.<br />
            <strong>Tel:</strong> +81-(0)3-3403-1581<br />
            <strong>Fax:</strong> +81-(0)3-3403-1462<br />
            <strong>URL:</strong> <a href="http://ga-ada.co.jp">http://ga-ada.co.jp</a><br />
            <strong>Email:</strong> <a href="mailto:news@ga-tbc.co.jp">news@ga-tbc.co.jp</a><br />
            <strong>Address:</strong> 3-12-14 Sendagaya, Shibuya-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004ba81b2db41a59ef2e&amp;ie=UTF8&amp;t=m&amp;ll=35.680642,139.705476&amp;spn=0.008096,0.013559&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004ba81b2db41a59ef2e&amp;ie=UTF8&amp;t=m&amp;ll=35.680642,139.705476&amp;spn=0.008096,0.013559&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Yoyogi / Harajuku – GA Gallery</a> in a larger map</figcaption>

            <p><strong>Shinjuku Gyoen</strong> and <strong>Meiji Jingu Shrine</strong> are two obvious points of interest in this area. Just be careful: Shinjuku Gyoen, while beautifully maintained, closes bizarrely early. <strong>The narrow road</strong> on the outskirts of the park, with its crumbling old homes and small shops, makes for a particularly pleasant walk. Follow it north into the heart of Shinjuku. Murakami Haruki fans must visit <strong>Jamaica Udon</strong>, located in the same space as young Murakami’s famous Jazz bar, <strong>Peter Cat</strong>. For an old-school Tokyo drip coffee, head to <strong>Coffee House Tom</strong>; for an iced coffee and some snacks in a more laid-back atmosphere, try the goldfish-themed <strong>Kingyo Café</strong> around the corner. For dinner, if you’re really into all the subtle variations of sake and sashimi, you’ll find them at <strong>Chotto Gobu</strong>.</p>
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