<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Ghibli Museum — Mitaka / Kichijoji — Art Space Tokyo';
  $head_desc  = 'Information about Ghibli Museum by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/ghibli-museum/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'ghibli-museum';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Ghibli Museum</h1>
            <h2 class="location">Kichijoji / Mitaka</h2>
            <img src="/images/spaces/ghibli.png" alt="Ghibli Museum" />
          </div>          
        </div>
      </div>
      
      <div class="row">
        <div class="eightcol">  
          <div class="about">
            <h3>About the space</h3>
            <p>The Ghibli Museum, opened in 2001, is quite possibly the most attractively placed art space in Tokyo. The museum recommends arriving via Mitaka Station, but we suggest approaching from Kichijoji Station. The walk from the bustling park exit of Kichijoji, down its crowded, narrow shopping alleys and into the woods of Inokashira Park is as enchanting as the animated works of Studio Ghibli. Founded by Hayao Miyazaki in 1985, Studio Ghibli is the production company behind anime classics such as <em>My Neighbor Totoro</em>, <em>Princess Mononoke</em> and <em>Howl’s Moving Castle</em>. Fans of these fantastical works will smile as they wander past the old wooden structures hidden away at the end of the lake or make their way through the almost pathless woods—classic Miyazaki territory brought to life.</p>
            <p>Tucked into the far end of the park, the museum slowly emerges from the woods. Inside you’ll find a world of narrow spiral staircases, elevated walkways and stained-glass windows. We highly recommend spending a full day taking in the museum and the surrounding neighborhoods. Maybe it’s just us, but the museum brings out that childlike wonder that Miyazaki’s films are famous for.</p>
          </div>
          
          <div class="gallery_info">
            <h3>General Information</h3>
            <p>
            <strong>Station:</strong> Kichijoji<br />
            <strong>Lines:</strong> Keio Inokashira, JR Chuo<br />
            <strong>Access:</strong> 15-20 minute walk through Inokashira Park from the Koen (Park) exit of Kichijoi Station.<br />
            <strong>Entry:</strong> Adults ¥1000, middle & high school students ¥700, elementary school students ¥400,<br /> 
            Preschoolers 4 and older ¥100, children under 4 free.<br />
            Free for museum members and students through high school every Saturday during school terms.<br />
            <strong>Hours:</strong> 10AM to 6PM; Closed on Tuesdays. Advanced ticket sales through kiosks at Lawson Convenience Stores only.<br />
            <strong>Tel:</strong> +81-(0)570-055777<br />
            <strong>Fax:</strong> +81-(0)3-3473-0104<br />
            <strong>URL:</strong> <a href="http://www.ghibli-museum.jp/">http://www.ghibli-museum.jp/</a><br />
            <strong>Email:</strong> <a href="mailto:post@ghibli-museum.jp">post@ghibli-museum.jp</a><br />
            <strong>Address:</strong> The West Park of Inokashira Park, 1-1-83 Shimorenjaku, Mitaka-shi, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb4ac6cfa80ae4f46&amp;ie=UTF8&amp;ll=35.699817,139.574895&amp;spn=0.007754,0.009546&amp;t=m&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb4ac6cfa80ae4f46&amp;ie=UTF8&amp;ll=35.699817,139.574895&amp;spn=0.007754,0.009546&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Kichijoji / Mitaka – Ghibli Museum</a> in a larger map</figcaption>

            <p>Sundays are best for seeing <strong>Inokashira Park</strong> at its liveliest—the park teems with street performers, musicians, manga readers and flea markets. The <strong>neighborhood just south of the park</strong>, where the suburbs eventually turn into farmland, is a wonderful place to stroll and house-gaze on a sunny afternoon. Food stops include a cold beer and some <em>yakitori</em> at <strong>Iseya</strong>, a Japanese take on Indian curry at <strong>Oh! India</strong>, Thai eats in the park at <strong>Pepacafé</strong> or a galette in the woods at <strong>Café Du Lièvre</strong>. Don’t be deceived by the gaudiness of the <strong>covered shopping streets</strong> just north of the station: nestled within their jumble are bars, jazz cafés and small galleries worth searching out.</p>
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