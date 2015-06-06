<!doctype html>
<?php 
  /* HEAD */
  $lang       = 'en';
  $head_title = '404 Content Not Found!';
  $head_desc  = 'Oh, no, a 404!';
  $fburl      = 'artspacetokyo.com';
  $fbimg      = '';
  
  /* MENU */
  $current_page = 'home';
?>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/head.php'); ?>

  <body class="preface">
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'); ?>

    <div class="container content">      
      <div class="row">
        <div class="twelvecol">
          <div class="prefaceblock" style="border: 0px;">
            <h1 style="text-align: center; font-size: 3.5em;">
              ヽ(●ﾟ´Д｀ﾟ●)ﾉﾟ<br /><br />
              Broken link?!
            </h1>
            <h2 style="text-align: center;">
              <a href="javascript:history.back()">back</a> or <a href="/">home</a>
            </h2>
          </div>
        </div>
      </div>
    </div>
    
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'); ?>
  </body>
</html>