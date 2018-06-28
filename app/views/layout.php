<!doctype html>
<html class="no-js" lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $this->e($title) ?></title>
  <meta name="description" content="<?= $this->e($description) ?>">
  <meta name="keywords" content="страховка, страховка online, страховка онлайн, автокаско, страхование имущества, страхование туристов, страхование здоровья, страхование детей, страхование пенсионеров, стравита, белросстрах">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="yandex-verification" content="59cc2e9d53729d9f" />
  <meta name="yandex-verification" content="a84d0e3e07596769" />
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link href='https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/libs.css">
  <!-- Обратная связь -->
  <link rel="stylesheet" href="/feedback/vendors/jgrowl/jquery.jgrowl.min.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="wrap">
  <div class="content">

    <!--Модальные окна форм-->
    <?php $this->insert('blocks/feedback'); ?>
    <?php $this->insert('blocks/form-stravita'); ?>
    <?php $this->insert('blocks/form-autokasko'); ?>
    <?php $this->insert('blocks/form-property'); ?>
    <?php $this->insert('blocks/form-tourism'); ?>
    <!--================-->


    <? $this->insert('blocks/nav-carousel'); ?>

    <?= $this->section('content') ?>
  </div><!--/.content-->

  <? $this->insert('blocks/footer'); ?>
</div><!--wrap-->
<script src="js/tether.min.js"></script>
<script src="js/scripts.min.js"></script>

<!-- Обратная связь -->
<script src="feedback/vendors/jgrowl/jquery.jgrowl.min.js"></script>
<script src="feedback/js/main.js"></script>
<script src="js/config.min.js"></script>
</body>
</html>