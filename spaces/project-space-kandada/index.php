<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'Project Space Kandada — Jinbocho / Kanda — Art Space Tokyo';
  $head_desc  = 'Information about Project Space Kandada by Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/spaces/project-space-kandada/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'project-space-kandada';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="space">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row">
        <div class="twelvecol">
          <div class="content_head">
            <h1>Project Space Kandada</h1>
            <h2 class="location">Jinbocho / Kanda</h2>

            <img src="/images/spaces/kandada.png" alt="Project Space Kandada" />

            <div class="about_float left" style="top:300px;">
              <div class="about">
                <h3>About the space</h3>
                <p>Sitting on the edge of Jinbocho, Project Space Kandada occupies a renovated printing warehouse and feels like a rough cut of the typical white cubes that are so prevalent in the city.</p>
                <p>Kandada’s simple configuration — the main space with its high ceiling, subdivided by a smaller box—affords it the versatility to stage ambitious large-scale installations together with smaller, more enclosed displays.</p>
                <p>Project Space Kandada is founded on a more fluid idea of an art space than most. Run by the nonprofit art collective commandN, the current space moved here in 2005 after several relocations. Deriving its name from the surrounding Kanda area and the Dada art movement of the early 20th century, Project Space Kandada functions as a base of operations for activities that engage with public space and communities in Tokyo and elsewhere in Japan. This approach is neatly summed up in an artwork by Hiroko Ichihara that you may notice on the counter: a small backlit sign on which three characters read <em>‘bijutsuchu’</em> —‘Art in Progress.’</p>
              </div>
            </div>
          </div>          
        </div>
      </div>
      
      <div class="row">
        <div class="eightcol">
        <h3>Notice</h3>
          <p style="color: #f00;">Project Space Kandada closed in April 2010.<br /> However, we still highly recommend you explore the neighborhood. You can also visit commandN's latest initiative, <a href="http://www.3331.jp/en/">3331 Arts Chiyoda</a>, in the former Rensei Junior High School in nearby Akihabara.</p>            
          <div class="gallery_info">
            <h3>General Information</h3>
            <p>
            <strong>Station:</strong> Jinbocho<br />
            <strong>Lines:</strong> Hanzomon, Mita, Shinjuku<br />
            <strong>Access:</strong> 3 minute walk from exit A9<br />
            <strong>Entry:</strong> Free<br />
            <strong>Hours:</strong> 12PM – 7PM; Closed on Sundays, Mondays.<br />
            <strong>Tel:</strong> +81-(0)3-3518-6176<br />
            <strong>Fax:</strong> +81-(0)3-3518-6177<br />
            <strong>URL:</strong> <a href="http://commandn.net">http://commandn.net</a><br />
            <strong>Email:</strong> <a href="mailto:kandada@commandn.net">kandada@commandn.net</a><br />
            <strong>Address:</strong> Seikosha 1F, 3-9 Kanda Nishikicho, Chiyoda-ku, Tokyo<br />
            </p>
          </div>
        
          <div class="map">
            <h3>In the neighborhood</h3>
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb4ba3e75d5e58d84&amp;ie=UTF8&amp;t=m&amp;iwloc=0004bb5f035915b834ebf&amp;ll=35.695524,139.756287&amp;spn=0.009745,0.025513&amp;output=embed"></iframe>
            <figcaption>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=212278466448341545058.0004bb4ba3e75d5e58d84&amp;ie=UTF8&amp;t=m&amp;iwloc=0004bb5f035915b834ebf&amp;ll=35.695524,139.756287&amp;spn=0.009745,0.025513&amp;source=embed" style="color:#0000FF;text-align:left">Art Space Tokyo – Jinbocho – Project Space Kandada</a> in a larger map</figcaption>

            <p>Jinbocho, a jungle of used Japanese books, is a bibliophile’s utopia. Head into <strong>Book Brother</strong> for used art and design tomes, or wander in and out of the <strong>back-alley shops</strong> displaying their wares on the street. <strong>Café Brazil</strong> will delight any coffee lover looking for a serious cuppa joe, and <strong>Café Saboru</strong> is worth a stop for the wild scribbles on the walls. If you’re hungry, one of the <strong>Imoya</strong> branches for <em>tendon</em> or <em>tonkatsu</em> is never a bad idea. Time permitting it’s just a short walk up to the controversial but stunning <strong>Yasukuni Shrine</strong>. Should you start to feel tired, the benches along the lake at <strong>Kitanomaru Park</strong> offer a welcome respite from all the hard edges of city life.</p>
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