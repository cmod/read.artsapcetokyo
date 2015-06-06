<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Aoyama | Meguro — Nakameguro — Art Space Tokyo';
  $head_desc  = 'Information about Aoyama | Meguro by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/aoyama-meguro/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'aoyama-meguro';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Aoyama | Meguro</h1>
            <h2 class="location">Nakameguro</h2>

            <img src="/images/spaces/aoyama.png" alt="Aoyama | Meguro" />

            <div class="about_float left" style="top:300px;">
              <div class="about">
                <h3>About the space</h3>
                <p>Aoyama | Meguro occupies a former shipping company’s warehouse on Komazawa Dori. Its large glass doors make it easy for passers by to catch a glimpse of exhibitions and venture in.</p>
                <p>Inside, the broad, unpolished space is partitioned by rough chipboard walls that separate the exhibition space from the office. Even when the gallery is between exhibitions it feels as though it is already occupied by an architectural installation. Indeed, this structure was built by architectural office Sschemata, which shares the space with Aoyama | Meguro under the collective name ‘happa.’</p>
                <p>Aoyama | Meguro is one of a number of so-called ‘next generation’ galleries that have opened in Tokyo since 2004. Their young directors have all worked for the major commercial galleries that were established in the 1990s and have tried to reinvigorate the Tokyo art world. Thus, they have opened their galleries with the training and experience required to push the contemporary art scene to the next level. Aoyama | Meguro shows the work of young but increasingly well-known artists like Koki Tanaka and Junya Sato.</p>
                <p>Down the road from Aoyama | Meguro, the Nakameguro neighborhood is well known as a place to walk along the peaceful treelined river, where you can enjoy trendy cafés, bars, restaurants and design shops.</p>
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
            <strong>Station:</strong> Nakameguro<br />
            <strong>Lines:</strong> Tokyu Toyoko, Hibiya<br />
            <strong>Access:</strong> 8 minute walk from station<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> 11AM – 7PM; Closed on Sundays, national holidays.<br />
            <strong>Tel:</strong> +81-(0)3-3711-4099<br />
            <strong>Fax:</strong> +81-(0)3-3711-4099<br />
            <strong>URL:</strong> <a href="http://aoyamahideki.com"> http://aoyamahideki.com</a><br />
            <strong>Email:</strong> <a href="mailto:a@aoyamahideki.com">a@aoyamahideki.com</a><br />
            <strong>Address:</strong> 2-30-6 Kamimeguro, Meguro-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb4a444aa36d0f90f&amp;ie=UTF8&amp;ll=35.643406,139.70452&amp;spn=0.009892,0.019483&amp;t=m&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb4a444aa36d0f90f&amp;ie=UTF8&amp;ll=35.643406,139.70452&amp;spn=0.009892,0.019483&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Nakameguro – Aoyama   Meguro</a> in a larger map</figcaption>

            <p>The whole of Meguro River is worth a slow, leisurely look, but if your time is limited, check out <strong>Cow Books’</strong> eclectic selection. Close by the station, <strong>Café Façon</strong> roasts and serves some of the best cloth-dripped coffee in Tokyo. And don’t miss their bacon sandwiches. Make sure to stop by <strong>Mizuma Action</strong>, the project space for Mizuma Art Gallery, where Aoyama-san of Aoyama | Meguro cut his teeth. The <strong>Jakuzuregawa Walking Path</strong> will take you through the back end of Yutenji and toward Sangenjaya.</p>
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