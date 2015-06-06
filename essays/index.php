<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = 'TOC — Essays — Art Space Tokyo';
  $head_desc  = 'A list of essays in the book Art Space Tokyo';
  $fburl      = 'read.artspacetokyo.com/essays/changes-in-tokyo/';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'home';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="toc">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">
      
      <div class="row essaybg">
        <div class="fivecol">
            <h1>Essays</h1>
            
            <ol>
              <li>
                <em><a href="/essays/changes-in-tokyo/">Changes in Tokyo’s Contemporary Art Scene Since the 1990s</a></em><br />
                <span>Fumihiko Sumitomo</span>
              </li>
              <li>
                <em><a href="/essays/art-journalism/">The State of Art Journalism &amp; Criticism in Tokyo</a></em><br />
                <span>Tetsuya Ozaki</span>
              </li>
              <li>
                <em><a href="/essays/tokyo-graffiti/">Under the Influence: The Syntax of Tokyo Graffiti</a></em><br />
                <span>Ian Lynam</span>
              </li>
              <li>
                <em><a href="/essays/pulsating-tokyo/">A Huge, Ever-Growing, Pulsating Brain that Rules from the Empty Center of a City Called Tokyo</a></em><br />
                <span>Roger McDonald</span>
              </li>
              <li>
                <em><a href="/essays/power-napping/">Tokyo’s Art Scene Today: The Power Napping of Art Showing</a></em><br />
                <span>Eric Van Hove</span>
              </li>
              <li>
                <em><a href="/essays/tokyo-impresario/">Takashi Murakami: Tokyo Impresario</a></em><br />
                <span>Roland Kelts</span>
              </li>

            </ol>
        </div>
      </div>      
    </div>
    
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'); ?>
  </body>
</html>