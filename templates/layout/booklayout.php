<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo $this->Url->css('bootstrap.min.css'); ?>" rel="stylesheet" >
    <link href="<?php echo $this->Url->css('style.css'); ?>" rel="stylesheet" >

    <title><?php echo isset($title) ? $title : "hiii" ?></title>
  </head>
  <body>
    <div class="container wrapper">
        <?=$this->Flash->render(); ?>
        <?php echo $this->fetch('content'); ?>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?php echo $this->Url->script('bundle.min.css'); ?>"></script>

  </body>
</html>
