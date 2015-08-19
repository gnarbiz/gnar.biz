<?php 
  require_once('inc/fuck.caching.php'); 
  require_once('inc/kludge.theme.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" /> 
    <meta property="og:description" content="<?php echo trim(file_get_contents('inc/meta.description')); ?>" />
    <title>gnar.biz</title>
    <link href='css/gnar.biz.css' rel='stylesheet' type='text/css'>
    <link href='css/theme.css' rel='stylesheet' type='text/css'>
  </head>
  <body class='<?=$theme?>'>
  <?php require_once('inc/ga.php'); ?>
  <div class='gnar'>
    <div class='biz'><?=$random_ascii?></div>
  </div>
  <?php require_once 'inc/footer.php'; ?>
  </body>
</html>

