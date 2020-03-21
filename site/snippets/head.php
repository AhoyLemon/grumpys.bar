<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= $page->title(); ?> | <?= $site->title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="last-modified" content="2018-06-22@13:19:31">
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700|Signika:400,600,700" rel="stylesheet">
    <?php echo css('assets/css/grumpys.css?updated=2020-03-20T17:44') ?>

    <?php snippet('meta') ?>
    
  </head>
  
  <body class="<?= $page->template(); ?>">
    <div id="app">