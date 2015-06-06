<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Nakaochiai Gallery — Nakaochiai — Art Space Tokyo';
  $head_desc  = 'Information about Nakaochiai Gallery by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/nakaochiai-gallery/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'nakaochiai-gallery';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="gallery">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Nakaochiai Gallery</h1>
            <h2 class="location">Nakaochiai</h2>

            <img src="/images/spaces/nakaochiai.png" alt="Nakochiai Gallery" />
            
            <div class="about_float right">
              <div class="about">
                <h3>About the space</h3>
                <p>Located in a serene residential neighborhood on the outskirts of the Yamanote line in northwestern Tokyo, Nakaochiai Gallery occupies a renovated Japanese house. Having passed through former incarnations as a garage, a store selling <em>kakigori</em> (shaved ice) and a Japanese sweets shop, the house was turned into a gallery in 2004. Since its latest transformation, it has showcased the work of young, innovative artists from Japan and abroad. The gallery also boasts a diverse range of programs and activities, including children’s workshops and projects that explore the potential of the Internet.</p>
                <p>With the garage door open, Nakaochiai Gallery’s exhibitions are laid out for the whole neighborhood to see. It is not unusual to share your viewing experience with curious locals who have ventured in to make their way around the eye-catching installations as they chat with the gallery’s director, curator and artists.</p>
                <p>It is this willingness to engage with the local community that gives Nakaochiai Gallery its distinctive character within the Tokyo art world. Unlike galleries in other fashion-driven, commercial parts of the city, where a strong sense of community is often difficult to foster amongst so much urban chaos, the connection between this gallery and the community that surrounds it is both intimate and genuine.</p>
              </div>
            </div>
          </div>          
        </div>
      </div>
      
      <div class="row">
        <div class="eightcol">
          <h3>Notice</h3>
          <p style="color: #f00;">Nakaochiai Gallery closed in November 2010.<br /> However, we still highly recommend that you explore the neighborhood.</p>   
          <div class="gallery_info">
            <h3>General Information</h3>
            <p>
            <strong>Station:</strong> Nakai<br />
            <strong>Lines:</strong> Oedo, Seibu Shinjuku<br />
            <strong>Access:</strong> 10 minute walk from exit A2 (Oedo)<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> Depends on exhibition. Also open by appointment.<br />
            <strong>Tel:</strong> +81-(0)3-5988-7830<br />
            <strong>Fax:</strong> +81-(0)3-3821-3553<br />
            <strong>URL:</strong> <a href="http://nakaochiaigallery.com">http://nakaochiaigallery.com</a><br />
            <strong>Email:</strong> <a href="mailto:info@nakaochiaigallery.com">info@nakaochiaigallery.com</a><br />
            <strong>Address:</strong> 4-13-5, Nakaochiai, Shinjuku-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004b96db32b418b6cd9e&amp;ie=UTF8&amp;t=m&amp;ll=35.717568,139.688638&amp;spn=0.006575,0.010004&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004b96db32b418b6cd9e&amp;ie=UTF8&amp;t=m&amp;ll=35.717568,139.688638&amp;spn=0.006575,0.010004&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Nakaochiai – Nakaochiai Gallery</a> in a larger map</figcaption>
            
            <p>A visit to the Nakaochiai area is a great chance to experience a bit of small-town Tokyo. Pickings look sparse from the map but all the more reason to meander—don't miss the riverside, lined with delightfully ramshackle houses. <strong>Café Hiyokonosu</strong> is so small it can barely accommodate more than two people, but if you're the lucky one who gets to sit at the table, then their coffee is to be savored. For a refreshingly at-home Thai experience, try <strong>Sawasdee</strong>, close to the station. Just a bit further down the road is <strong>Aspen Coffee</strong>, excellent for an afternoon stop off. For those ready for something a little stronger, stop by the strangely named <strong>Rarara Bar</strong> for a cocktail or two. Lose yourself in the gardens of the <strong>Fumiko Hayashi Memorial Museum</strong>, the beautiful a mid-20th-century wooden home of the late novelist and poet (1903–1951). And if you’re keen for a hike, making your way to <strong>Saeki Park</strong> will reward you with another oasis of greenery and the preserved studio of Western-style painter, Yuzo Saeki (1898 – 1928).</p>
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