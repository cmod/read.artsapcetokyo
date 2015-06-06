<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Hara Museum of Contemporary Art — Shinagawa — Art Space Tokyo';
  $head_desc  = 'Information about Hara Museum of Contemporary Art by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/hara-museum/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'hara-museum';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Hara Museum of Contemporary Art</h1>
            <h2 class="location">Shinagawa</h2>

            <img src="/images/spaces/hara.png" alt="Hara Museum" height="700" />            

            <div class="about_float left" style="top:300px; text-shadow: 1px 1px 0px #fff;">
              <div class="about">
                <h3>About the space</h3>
                <p>The Hara Museum of Contemporary Art is a rare example of Japanese early modern architecture. Designed by Jin Watanabe and built in 1938, this former private residence of the Hara family was converted into a contemporary art museum in 1979.</p>
                <p>With its broad staircase and elegant wooden floors, the interior of the museum still retains the air of a stylish family home. Tucked away throughout the building are intriguing, permanently installed works by artists such as Tatsuo Miyajima, Yasumasa Morimura, Nam June Paik and Yoshitomo Nara. The museum’s collection consists of about 850 works and covers the entire range of post-1950 art movements across several continents. The Hara Museum’s exhibition schedule is a litany of major artists, and yet it also holds annual exhibitions of work by young, up-and-coming artists.</p>
                <p>A glass-walled, light-filled café faces onto the former residence’s back garden. With its outdoor seating in summer, this is one of Tokyo’s very few quiet spots of green where you can escape for an afternoon.</p>
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
            <strong>Station:</strong> Shinagawa<br />
            <strong>Lines:</strong> Yamanote, Keikyu, Tokaido, Keihin-Tohoku, Yokosuka<br />
            <strong>Access:</strong> 15 minute walk from Takanawa exit<br />
            <strong>Entry:</strong> Adults ¥1000, university students ¥700, high school students and younger ¥500<br />
            Free for museum members and students through high school every Saturday during school terms.<br />
            <strong>Hours:</strong> 11AM – 5PM; 11AM – 8PM on Wednesdays (except when the Wednesday is a national holiday). Closed on Mondays. Open on national holidays but closed the following day.<br />
            <strong>Tel:</strong> +81-(0)3-3445-0651<br />
            <strong>Fax:</strong> +81-(0)3-3473-0104<br />
            <strong>URL:</strong> <a href="http://www.haramuseum.or.jp">http://www.haramuseum.or.jp</a><br /> 
            <strong>Email:</strong> <a href="mailto:info@haramuseum.co.jp">info@haramuseum.co.jp</a><br />
            <strong>Address:</strong> 4-7-25, Kita-Shinagawa, Shinagawa-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">          
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004b953f4ebf2ec53bbd&amp;ie=UTF8&amp;ll=35.624878,139.73374&amp;spn=0.007849,0.008465&amp;t=m&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004b953f4ebf2ec53bbd&amp;ie=UTF8&amp;ll=35.624878,139.73374&amp;spn=0.007849,0.008465&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Shinagawa – Hara Museum of Contemporary Art</a> in a larger map</figcaption>
            <p>The Shinagawa area is a business district with a port-town history. To truly experience this mix, head to the eastern side of the station. Meanwhile, on the Hara Museum side, if you’re on a budget, <strong>Shintatsu Ramen</strong> provides cheap noodles and <em>donburi</em>. On the other end of the noodle spectrum is <strong>Matsuzake</strong>, located just a couple of blocks from Hara. Here you’ll find not only first-rate soba, but also a chance to try <em>zako</em> (which are basically cheap, little fish). If you’ve skipped the noodles, <strong>7025 Franklin Avenue</strong>—the oddly named, highly regarded hamburger shop — will happily serve you some of the best burgers in Tokyo.</p>
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