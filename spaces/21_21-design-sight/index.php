<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = '21_21 Design Sight — Roppongi — Art Space Tokyo';
  $head_desc  = 'Information on 21_21 Design Sight by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/21_21-design-sight/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = '21_21-design-sight';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1><span class="sc">21_21</span> Design Sight</h1>
            <h2 class="location">Roppongi</h2>
            <img src="/images/spaces/21_21.png" alt="21_21 Design Sight" />
          </div>          
        </div>
      </div>
      
      <div class="row">
        <div class="eightcol">  
          <div class="about">
            <h3>About the space</h3>
            <p>Opened in 2007, this sleek, angular Tadao Ando-designed building is now one of Tokyo’s signature works of architecture: two triangular shards of steel-reinforced concrete and glass that rise up out of the ground, conveying lightness and poise.</p>
            <p><span class="sc">21_21</span> Design Sight is one of the more restrained additions to the ongoing redevelopment of Roppongi, a thoughtful contemporary transition between the monolithic shopping utopia of the Tokyo Midtown complex and the low-rise residential areas that surround it. Furthermore, whereas its seamless steel roof and concrete walls could have made for a cold and overbearing interior, its trapezoidal spaces manage to be both futuristic and intimate. Despite seventy percent of the building being located below ground level, a large lightwell lets in natural light. Exhibitions are ambitious, installation-like environments.</p>
            <p>Given the international renown of Japanese design, it comes as a surprise that <span class="sc">21_21</span> Design Sight is Japan’s first design ‘museum.’ However, directed by three of Japan’s most famous designers—Issey Miyake, Taku Satoh and Naoto Fukasawa—its ambitious exhibitions, events and workshops strive to transcend preconceived categories and expectations of what design should be.</p>
          </div>
          
          <div class="gallery_info">
            <h3>General Information</h3>
            <p>
            <strong>Station:</strong> Roppongi<br />
            <strong>Lines:</strong> Hibiya, Oedo<br />
            <strong>Access:</strong> 3 minute walk from exit 4A (Hibiya), or 1 minute from exit 7 (Oedo)<br />
            <strong>Entry:</strong> Adults ¥1000, university students ¥800, middle and high school students ¥500<br />
            Free for elementary school students and younger.<br />
            Hours: 11AM – 8PM (entry until 7:30PM). Closed on Tuesdays and from December 30 to January 2<br />
            <strong>Tel:</strong> +81-(0)3-3475-2121<br />
            <strong>URL:</strong> <a href="http://2121designsight.jp">http://2121designsight.jp</a><br />
            <strong>Email:</strong> <a href="mailto:info@2121designsight.jp">info@2121designsight.jp</a><br />
            <strong>Address:</strong> Tokyo Midtown, 9-7-6 Akasaka, Minato-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004ba86feaf2cab0c600&amp;ie=UTF8&amp;ll=35.662379,139.740685&amp;spn=0.017122,0.044468&amp;t=m&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004ba86feaf2cab0c600&amp;ie=UTF8&amp;ll=35.662379,139.740685&amp;spn=0.017122,0.044468&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Roppongi – <span class="sc">21_21</span> Design Sight</a> in a larger map</figcaption>

            <p>As more developments continue to bulldoze their way into Roppongi, the startling mix of old and new becomes increasingly complex. Strolling around the neighborhoods just west of Roppongi Hills will give you a sense of what the area felt like ten years ago. Lose a few hours in the free <strong>art library</strong> at The National Art Center. A stop at <strong>Tahiti</strong> will reward you with excellent curry lunch sets that include dessert and coffee. Publishing house Switch runs the well-stocked <strong>Rainy Day Bookstore & Café</strong> down a quaint back street in Nishi Azabu. The nearby temple is also a great place to meditate for those shell-shocked by Roppongi’s urban intensity.</p>
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