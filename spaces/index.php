<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'TOC — Art Spaces — Art Space Tokyo';
  $head_desc  = 'A list of art spaces in the book Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'home';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="toc">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row spacebg">
        <div class="fivecol">
            <h1>Art Spaces</h1>
            <ol>
              <li>
                <a href="/spaces/hara-museum/">Hara Musem of Contemporary Art</a><br />
                <span>Shinagawa</span>
              </li>
              <li>
                <a href="/spaces/gallery-koyanagi/">Gallery Koyanagi</a><br />
                <span>Ginza</span>
              </li>
              <li>
                <a href="/spaces/nakaochiai-gallery/">Nakaochiai Gallery</a><br />
                <span>Nakaochiai</span>
              </li>
              <li>
                <a href="/spaces/watari-museum/">Watari Museum of Contemporary Art</a><br />
                <span>Gaienmae</span>
              </li>
              <li>
                <a href="/spaces/ga-gallery/">GA Gallery</a><br />
                <span>Yoyogi / Kitasando</span>
              </li>
              <li>
                <a href="/spaces/21_21-design-sight/">21_21 Design Sight</a><br />
                <span>Roppongi</span>
              </li>
              <li>
                <a href="/spaces/scai-the-bathhouse/">SCAI the Bathhouse</a><br />
                <span>Yanaka / Ueno</span>
              </li>
              <li>
                <a href="/spaces/tokyo-gallery/">Tokyo Gallery + BTAP</a><br />
                <span>Ginza</span>
              </li>
              <li>
                <a href="/spaces/gallery-ef/">Gallery éf</a><br />
                <span>Asakusa</span>
              </li>
              <li>
                <a href="/spaces/aoyama-meguro/">Aoyama | Meguro</a><br />
                <span>Nakameguro</span>
              </li>
              <li>
                <a href="/spaces/project-space-kandada/">Project Space Kandada</a><br />
                <span>Jinbocho / Kanda</span>
              </li>
              <li>
                <a href="/spaces/ghibli-museum/">Ghibli Museum</a><br />
                <span>Kichijoji / Mitaka</span>
              </li>
            </ol>
        </div>
      </div>      
    </div>
    
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'); ?>
  </body>
</html>