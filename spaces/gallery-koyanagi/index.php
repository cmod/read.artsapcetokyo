<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Gallery Koyanagi — Ginza — Art Space Tokyo';
  $head_desc  = 'Information about Gallery Koyanagi by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/gallery-koyanagi/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'gallery-koyanagi';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Gallery Koyanagi</h1>
            <h2 class="location">Ginza</h2>

            <img src="/images/spaces/koyanagi.png" alt="Gallery Koyanagi" />
                        
            <div class="about_float left" style="top:300px; text-shadow: 1px 1px 0px #fff;">
              <div class="about">
                <h3>About the space</h3>
                <p>Ginza is well known as the original seat of Tokyo’s elegance and exclusivity, where luxury designer brands flock to open flagship stores on some of the world’s most expensive real estate.</p>
        				<p>Ginza’s intellectual history is rich too, and it was here that Tokyo’s contemporary art scene began. Although once avantgarde, Ginza largely caters to more conservative tastes these days . Nevertheless, the area is still home to a few forward-looking art spaces. Internationally renowned, Gallery Koyanagi is one of the leading lights of the Tokyo contemporary art world; during the 1990s, Director Atsuko Koyanagi was instrumental in bringing together young gallery owners to kick-start the gallery scene. Here, you will find exhibitions by some of the world’s top artists: Sophie Calle, Marlene Dumas, Olafur Eliasson, Kengo Kito, Mariko Mori, Rika Noguchi, Hiroshi Sugimoto, Tabaimo and Koichi Tabata, to name but a few.</p>
        				<p>Like most of its peers in Ginza, Gallery Koyanagi is located in a typical, nondescript office building. However, as the elevator doors open on the eighth floor, a sleek, discreetly lit cavern of contemporary art stretches out before you. You are about to step into one of the largest commercial gallery spaces in Tokyo. This is the consummate white cube, and Gallery Koyanagi wears this look better than any other art space in the city.</p>
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
            <strong>Access:</strong> 5 minute walk from exit A13<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> 11AM – 7PM; Closed on Sundays, Mondays, national holidays<br />
            <strong>Tel:</strong> +81-(0)3-3561-1896<br />
            <strong>Fax:</strong> +81-(0)3-3563-3236<br />
            <strong>URL:</strong> <a href="http://gallerykoyanagi.com">http://gallerykoyanagi.com</a><br /> 
            <strong>Email:</strong> <a href="mailto:mail@gallerykoyanagi.com">mail@gallerykoyanagi.com</a><br />
            <strong>Address:</strong> Koyanagi Bldg. 8F, 1-7-5, Ginza, Chuo-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=209085621022509820972.0004b957957fbae91c417&amp;ie=UTF8&amp;t=m&amp;ll=35.675766,139.766935&amp;spn=0.013596,0.017263&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=209085621022509820972.0004b957957fbae91c417&amp;ie=UTF8&amp;t=m&amp;ll=35.675766,139.766935&amp;spn=0.013596,0.017263&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Ginza – Gallery Koyanagi</a> in a larger map</figcaption>

            <p>For a trip back in time and a plate of delicious curry, be sure to stop by <strong>New Castle</strong> curry shop. Under the tracks of Yurakucho Station, you’ll find an inexhaustible array of <strong>hole-in-the-wall <em>izakaya</em>, <em>yakitoriya</em> and other assorted shops of dubious nature</strong>. For something different, try a quick <strong>shoe-shine</strong> on weekday afternoons. In the evening we recommend <strong>Aroina Tabeta</strong> for an authentic back-alley Bangkok-style Thai fix. If you’re in the mood for more art, then a visit to the <strong>Le Forum Gallery</strong> is a must: located on the top floor of the glass-walled Maison Hermès building, this vast, naturally lit gallery space is frequently home to excellent exhibitions.</p>
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