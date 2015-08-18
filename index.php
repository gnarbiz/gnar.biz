<?php require_once('inc/fuck.caching.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta property="og:description" content="<?php echo trim(file_get_contents('inc/meta.description')); ?>" />
    <title>gnar.biz</title>
    <link href='css/gnar.biz.css' rel='stylesheet' type='text/css'>
  </head>
  <body>
  <?php require_once('inc/ga.php'); ?>
  <div class='gnar'>
    <div class='biz'>
    <?php echo file_get_contents('ascii/gnar.biz.txt'); ?>
    </div>
  </div>
  <div class='github'>
    <a href='//github.com/gnarbiz'>github</a>
  </div>
  </body>
</html>

