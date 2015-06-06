<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'SCAI The Bathhouse — Yanaka / Ueno — Art Space Tokyo';
  $head_desc  = 'Information about SCAI The Bathhouse by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/scai-the-bathhouse/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'scai-the-bathhouse';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>SCAI The Bathhouse</h1>
            <h2 class="location">Yanaka / Ueno</h2>

            <img src="/images/spaces/scai.png" alt="SCAI the Bathhouse" />

            <div class="about_float right" style="top:300px;">
              <div class="about">
                <h3>About the space</h3>
                <p>In its previous life, SCAI The Bathhouse was just that: a bathhouse where the Japanese came to soak, and it stayed that way for two full centuries. The current building, constructed in 1951, is an eyecatching combination of old and new architectural design.</p>
                <p>Although its interior has been renovated into a sleek, whitewalled contemporary art gallery, one can still sense its past in a number of subtle details. The sudden curvature of the entrance hall once served the purpose of hiding bathers from outside view, and the wooden lockers in which patrons stored their geta remain.</p>
                <p>The gallery’s layout as a smaller antechamber opening up into the larger exhibition room allows for both intimate pieces and larger installations to find comfortable footing. It’s not uncommon to find that the dimensions of the space have been rearranged to accommodate installations of varying complexity. Since its opening in 1993, this space has seen exhibitions by internationally renowned artists such as Genpei Akasegawa, Louise Bourgeois, Anish Kapoor, Tatsuo Miyajima, Kohei Nawa, Julian Opie and Tadanori Yokoo. The skylights in SCAI’s eight-meter-high ceiling lend this space a refreshing sense of airiness that other galleries rarely have: where they once filtered afternoon light onto Yanaka residents enjoying an afternoon soak, they now free this gallery’s exhibitions from total dependence on artificial lighting.</p>
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
            <strong>Station:</strong> Nippori<br />
            <strong>Lines:</strong> Yamanote, Joban, Keihin-Tohoku<br />
            <strong>Access:</strong> 8 minute walk from west exit<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> 12PM – 7PM; Closed on Sundays, Mondays, national holidays.<br />
            <strong>Tel:</strong> +81-(0)3-3821-1144<br />
            <strong>Fax:</strong> +81-(0)3-3821-3553<br />
            <strong>URL:</strong> <a href="http://scaithebathhouse.com">http://scaithebathhouse.com</a><br /> 
            <strong>Email:</strong> <a href="mailto:info@scaithebathhouse.com">info@scaithebathhouse.com</a><br />
            <strong>Address:</strong> Kashiwayu-Ato 6-1-23 Yanaka, Taito-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004ba89cfb5770ba56bf&amp;ie=UTF8&amp;ll=35.720252,139.767754&amp;spn=0.016276,0.01387&amp;t=m&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004ba89cfb5770ba56bf&amp;ie=UTF8&amp;ll=35.720252,139.767754&amp;spn=0.016276,0.01387&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Yanaka – SCAI The Bathhouse</a> in a larger map</figcaption>

            <p>Head to the roof of the <strong>Asakura Choso Museum</strong> to get a quick overview of the neighborhood. Meander down the curiously twisted <strong>Hebi Michi</strong> and grab a bowl of homemade soba at <strong>Nezu Takajo</strong>. If it’s cherry blossom season, spend more time than you normally would walking around <strong>Yanaka Cemetery</strong>, and even if it’s not cherry blossom season, do the same—the light is unbelievably beautiful in the late afternoon. A stop by the <strong>Bossa Café</strong>, just around the corner from SCAI, is great for a spot of organic coffee and cheesecake. Or pop by long-term resident artist <strong>Alan West’s glass-walled studio</strong> housing modern interpretations of traditional screen paintings.</p>
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