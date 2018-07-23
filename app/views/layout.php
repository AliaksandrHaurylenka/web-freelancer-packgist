<!doctype html>
<html class="no-js" lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $this->e($title) ?></title>
  <meta name="description" content="<?= $this->e($description) ?>">
  <meta name="keywords" content="веб разработка, верстка сайтов">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
<!--  <link href='https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans' rel='stylesheet' type='text/css'>-->
  <link rel="stylesheet" href="css/libs.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="wrap">
  <div class="content">
    <div class="container">
      <? $this->insert('blocks/header') ; ?>
    </div>
    <?= $this->section('content') ?>
  </div><!--/.content-->

  <? $this->insert('blocks/footer'); ?>
</div><!--wrap-->


<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>-->
<script>
  $(function () {
    Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
  });
</script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
<script src="js/scripts.min.js"></script>

<!-- Обратная связь -->
<script src="/feedback/js/main.js"></script>

<script src="/js/config.min.js"></script>
</body>
</html>