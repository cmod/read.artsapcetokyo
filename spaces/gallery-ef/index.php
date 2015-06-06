<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Gallery éf — Asakusa — Art Space Tokyo';
  $head_desc  = 'Information about Gallery éf by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/gallery-ef/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'gallery-ef';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Gallery éf</h1>
            <h2 class="location">Asakusa</h2>

            <img src="/images/spaces/ef.png" alt="Gallery éf" />            

            <div class="about_float left" style="top:300px;">
              <div class="about">
                <h3>About the space</h3>
                <p>Simply passing by on the street without noticing Gallery éf’s name, it would be easy to assume that this is just another café. In fact, not only does this gallery have a great café in the front that hides the exhibition space from the street, but since its opening in 1998, it has been by far one of Tokyo’s most unusual art spaces.</p>
                <p>To enter the gallery, you stoop low and pass through a small door, where you remove your shoes before stepping up onto the raised floor. Looking around, you find yourself inside an old Japanese warehouse, the antithesis of the white cube. The walls are earthen, the floor is a deep lacquered red and the entire space is cast in dark, rich hues, accented only by the occasional point light. The gallery focuses on unknown artists, and exhibitions here often respond directly to the space’s physical or historical setting.</p>
                <p>More so than any other gallery, this space invites you not just to look but to touch. Its cool walls—many of them original—have witnessed a remarkable history. At over 140 years old, this building has survived two fires, the Great Kanto Earthquake of 1923 and the firebombing of Tokyo in 1945. The mere fact that it exists in a city so intent on relentless demolition and reconstruction is reason alone to celebrate. That it has been beautifully restored and is now a free art space open to the public is all the more reason to make this gallery a must-see for any art or architecture lover visiting Tokyo.</p>
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
            <strong>Station:</strong> Asakusa<br />
            <strong>Lines:</strong> Asakusa, Ginza<br />
            <strong>Access:</strong> 10 second walk from exit A5 (Asakusa Line), or 1 minute walk from exit 2 (Ginza Line).<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> Gallery 12PM – 7PM; Café 11AM – 7PM; Bar 6PM – 12AM (until 10PM on national holidays; until 2AM on Fridays and the day before national holidays) Closed on Tuesdays.<br />
            <strong>Tel:</strong> +81-(0)3-3841-0442<br />
            <strong>Fax:</strong> +81-(0)3-3841-9079<br />
            <strong>URL:</strong> <a href="http://gallery-ef.com">http://gallery-ef.com</a><br />
            <strong>Email:</strong> <a href=mailto:mail@gallery-ef.com">mail@gallery-ef.com</a><br />
            <strong>Address:</strong> 2-19-18 Kaminarimon, Taito-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb5f145d08ccdf4b4&amp;ie=UTF8&amp;t=m&amp;ll=35.71221,139.794792&amp;spn=0.009417,0.011008&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb5f145d08ccdf4b4&amp;ie=UTF8&amp;t=m&amp;ll=35.71221,139.794792&amp;spn=0.009417,0.011008&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Asakusa – Gallery éf</a> in a larger map</figcaption>

            <p>Go grab an <em>onigiri</em> and some <em>miso shiru</em> at <strong>Yadoroku</strong>, one of the oldest <em>onigiri</em> shops in Tokyo. Or if you’re a ramen fan, <strong>Bazoku</strong> hand-rolls fresh noodles with every order. After a long day of gallery trotting, nothing beats a cold beer in a smokey <em>izakaya</em>: <strong>Kakurenbo</strong> delivers on all fronts. Operating since 1907, <strong>Hatsuogawa</strong> serves up some of the tastiest <em>unagi</em> in town. If Maisen in Omotesando didn’t satisfy your <em>tonkatsu</em> cravings, one of the fifty varieties of <em>tonkatsu</em> at <strong>Katsukichi</strong> should hit the spot. In case you haven’t noticed, those living around Asakusa are well fed.</p>
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