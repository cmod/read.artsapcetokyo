<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Watari Museum of Contemporary Art — Gaienmae — Art Space Tokyo';
  $head_desc  = 'Information about Watari Museum of Contemporary Art by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/watari-museum/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'watari-museum';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="gallery">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Watari Museum of Contemporary Art</h1>
            <h2 class="location">Gaienmae</h2>
            
            <img src="/images/spaces/watari.png" alt="Watari Museum" />
            
            <div class="about_float left" style="top:300px;">
              <div class="about">
                <h3>About the space</h3>
                <p>Designed by Swiss architect Mario Botta and opened in September 1990, the Watari Museum of Contemporary Art (Watari-um) cuts a striking profile on the edge of Harajuku and Gaienmae. The abbreviated ‘Watari-um’ derives from the combination of ‘Watari,’ the family name of the founders, and ‘Museum.’</p>
                <p>Although spread out over several floors, Watari-um’s exhibition spaces all pivot around the cavernous second floor gallery. The lightwell on the fourth floor affords you a bird’s eye view of works displayed below, and the glass-walled mezzanine of the third floor makes for visual correspondence between artworks displayed in physically separate spaces. Among many thematic exhibitions held at the museum, artists shown here include Japanese and international figures at all stages in their careers.</p>
                <p>The first floor is devoted entirely to the museum shop, an emporium of designer gadgetry, stationery, secondhand art postcards, Freitag bags and leather products. The basement houses both a café and the revered On Sundays bookshop. While located in the Watari-um, this very well-stocked bookshop is run independently by Kisato Kusano, a true bibliophile.</p>
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
            <strong>Station:</strong> Gaienmae<br />
            <strong>Lines:</strong> Ginza<br />
            <strong>Access:</strong> 5 minute walk from exit 3<br />
            <strong>Entry:</strong> Adults ¥1000, students under 25 ¥800, members free.<br />
            Tickets are valid for unlimited entry during the exhibition period.<br />
            <strong>Hours:</strong> 11AM – 7PM; 11AM – 9PM on Wednesdays. Closed on Mondays (except national holidays). Closed December 31 to January 4<br />
            <strong>Tel:</strong> +81-(0)3-3402-3001<br />
            <strong>Fax:</strong> +81-(0)3-3405-7714<br />
            <strong>URL:</strong> <a href="http://watarium.co.jp">http://watarium.co.jp</a><br />
            <strong>Email:</strong> <a href="mailto:official@watarium.co.jp">official@watarium.co.jp</a><br />
            <strong>Address:</strong> 3-7-6 Jingumae, Shibuya-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004adb441de939e196a6&amp;ie=UTF8&amp;ll=35.667109,139.713432&amp;spn=0.0128,0.020455&amp;t=m&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004adb441de939e196a6&amp;ie=UTF8&amp;ll=35.667109,139.713432&amp;spn=0.0128,0.020455&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Gaienmae – Watari Museum of Contemporary Art</a> in a larger map</figcaption>
            
            <p>The cobblestone lanes of <strong>Aoyama Cemetery</strong> offer surprisingly relaxing strolls, especially during the festive cherry blossom season. For a coffee break, you won’t find a more serious or intimately poured cup than at <strong>Daibou Coffee</strong>. <strong>Maisen</strong> serves some of Tokyo’s most delicious <em>tonkatsu</em> sets. If you just want to read a book and gaze out over rooftops, <strong>Nid Café</strong> is a fine choice. For those seeking a contemporary art lunch fix, head to <strong>A-Z Café</strong>, established by Yoshitomo Nara and built in the style of his wooden-shack studios. But perhaps the best cure for those with wanderlust is simply to stroll down the <strong>backstreets</strong> between Omotesando and Harajuku. Independent shops and small galleries intermingling with low-rise offices and unusually designed residences form a complex but quiet, quintessentially Tokyo neighborhood.</p>
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