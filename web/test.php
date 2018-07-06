<?php defined("_JEXEC") or die();?>
<?php
$templateparams = JFactory::getApplication()->getTemplate(true)->params;

$doc = JFactory::getDocument();

//print_r($doc->params->get('site_name'));
//print_r(JUri::base());

//stylesheets
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/libs.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/main.min.css');
//scripts
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/scripts.min.js');
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/common.min.js');
?>
<!DOCTYPE html>
<html class="no-js" lang="ru">

<head>



  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta property="og:image" content="/path/to/image.jpg">
  <link rel="shortcut icon" href="/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-touch-icon-114x114.png">

  <!-- Chrome, Firefox OS and Opera -->
  <meta name="theme-color" content="#000">
  <!-- Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#000">
  <!-- iOS Safari -->
  <meta name="apple-mobile-web-app-status-bar-style" content="#000">

  <jdoc:include type="head" />

  <meta http-equiv="cleartype" content="on"><!--сглаживание шрифтов-->
  <!-- Обратная связь -->
  <link rel="stylesheet" href="/feedback/vendors/jgrowl/jquery.jgrowl.min.css">
  <!-- =================== -->

</head>

<body><script id="__bs_script__">//<![CDATA[
  document.write("<script async src='/browser-sync/browser-sync-client.js?v=2.23.6'><\/script>".replace("HOST", location.hostname));
  //]]></script>


<div class="wrap">

  <div class="content">
    <!--[if lt IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
      your browser</a> to improve your experience.</p>
    <![endif]-->      <div class="container">
      <!-- Меню >768px -->
      <header class="d-flex flex-row justify-content-between align-items-center mt-3 hidden-sm-down">
        <a href="index.php" class="shadow-radial"><img src="/img/logo.png" class="img-fluid" alt="Web-freelancer"></a>
        <ul class="d-flex flex-row menu">
          <li><a href='//localhost:3002/index.php?page=portfolio' class=''><i id='portfolio' class='fa fa-lg fa-briefcase' aria-hidden='true'></i>Портфолио</a></li><li><a href='//localhost:3002/index.php?page=service' class=''><i id='service' class='fa fa-lg fa-cog' aria-hidden='true'></i>Услуги</a></li><li><a href='//localhost:3002/index.php?page=contacts' class=''><i id='contacts' class='fa fa-lg fa-address-card' aria-hidden='true'></i>Контакты</a></li>  </ul>
      </header>


      <!-- Меню <768px -->
      <header class="mt-2">

        <nav class="navbar navbar-toggleable-md navbar-light hidden-md-up">
          <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="index.php" class="navbar-brand">
            <img src="/img/logo.png" class="img-fluid" alt="Web-freelancer">
          </a>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto menu">
              <li><a href='//localhost:3002/index.php?page=portfolio' class='nav-link'><i id='portfolio' class='fa fa-lg fa-briefcase' aria-hidden='true'></i>Портфолио</a></li><li><a href='//localhost:3002/index.php?page=service' class='nav-link'><i id='service' class='fa fa-lg fa-cog' aria-hidden='true'></i>Услуги</a></li><li><a href='//localhost:3002/index.php?page=contacts' class='nav-link'><i id='contacts' class='fa fa-lg fa-address-card' aria-hidden='true'></i>Контакты</a></li>      </ul>
          </div>
        </nav>

      </header>      </div>
    <!-- Основной контент -->
    <!-- Слайдер -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item">
          <img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg button" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg button" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg button" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div><!--<div class="carousel-inner" role="listbox">-->

      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--1-й блок-->
    <div class="container marketing">
      <h2 class="h2">К ВАШИМ УСЛУГАМ</h2>
      <div class="line"></div>
      <div class="row">

        <div class="col-md-4 d-flex flex-column justify-content-between main-service">
          <a href="index.php?page=site-design">
            <img class="img-thumbnail"
                 id="service_id"
                 src="/img/service_id.png"
                 onmouseover="this.src='/img/service_id_h.png'"
                 onmouseout="this.src='/img/service_id.png'"
                 alt="Дизайн сайтов">
          </a>

          <div>
            <h2>Дизайн сайтов</h2>
            <p class="description_small">
              <a href="index.php?page=site-design"
                 onmouseover="document.getElementById('service_id').src='/img/service_id_h.png';"
                 onmouseout="document.getElementById('service_id').src='/img/service_id.png';">
                Дизайн – это лицо сайта, благодаря которому у поситителей ресурса формируется первое впечатление о самой компании. Таким образом. Грамотно продуманный и воплощенный в реальность дизайн сайта – это прекрасное средство, которое позволяет привлечь новых клиентов.
              </a>
            </p>
          </div>

          <p>
            <a class="btn btn-secondary"
               href="index.php?page=site-design"
               onmouseover="document.getElementById('service_id').src='/img/service_id_h.png';"
               onmouseout="document.getElementById('service_id').src='/img/service_id.png';"
               role="button">Посмотреть &raquo;
            </a>
          </p>
        </div><!--main-service-->
        <div class="col-md-4 d-flex flex-column justify-content-between main-service">
          <a href="index.php?page=site-creation">
            <img class="img-thumbnail"
                 id="service_dev"
                 src="/img/service_dev.png"
                 onmouseover="this.src='/img/service_dev_h.png'"
                 onmouseout="this.src='/img/service_dev.png'"
                 alt="Верстка сайтов">
          </a>

          <div>
            <h2>Верстка сайтов</h2>
            <p class="description_small">
              <a href="index.php?page=site-creation"
                 onmouseover="document.getElementById('service_dev').src='/img/service_dev_h.png';"
                 onmouseout="document.getElementById('service_dev').src='/img/service_dev.png';">
                Сдедующий этап после дизайна сайта - это верстка. Т.е. далее рисованный макет переносится в рабочее состояние из составных частей, на которые разбивается макет — это может быть текст, картинки, таблицы и другие элементы.
              </a>
            </p>
          </div>

          <p>
            <a class="btn btn-secondary"
               href="index.php?page=site-creation"
               onmouseover="document.getElementById('service_dev').src='/img/service_dev_h.png';"
               onmouseout="document.getElementById('service_dev').src='/img/service_dev.png';"
               role="button">Посмотреть &raquo;
            </a>
          </p>
        </div><!--main-service-->
        <div class="col-md-4 d-flex flex-column justify-content-between main-service">
          <a href="index.php?page=site-analytics">
            <img class="img-thumbnail"
                 id="service_analytics"
                 src="/img/service_analytics.png"
                 onmouseover="this.src='/img/service_analytics_h.png'"
                 onmouseout="this.src='/img/service_analytics.png'"
                 alt="SEO-продвижение">
          </a>

          <div>
            <h2>SEO-продвижение</h2>
            <p class="description_small">
              <a href="index.php?page=site-analytics"
                 onmouseover="document.getElementById('service_analytics').src='/img/service_analytics_h.png';"
                 onmouseout="document.getElementById('service_analytics').src='/img/service_analytics.png';">
                Третий этап определяющий популярность интернет ресурса - это SEO-оптимизация.
                Т.е. комплекс мер по внутренней и внешней оптимизации для поднятия позиций сайта в результатах выдачи поисковых систем по определённым запросам пользователей.
              </a>
            </p>
          </div>

          <p>
            <a class="btn btn-secondary"
               href="index.php?page=site-analytics"
               onmouseover="document.getElementById('service_analytics').src='/img/service_analytics_h.png';"
               onmouseout="document.getElementById('service_analytics').src='/img/service_analytics.png';"
               role="button">Посмотреть &raquo;
            </a>
          </p>
        </div><!--main-service-->

      </div><!-- /.row -->
    </div>


    <!-- 2-й блок -->

    <!--2-й блок-->
    <div class="stat hidden-sm-down">
      <div class="container d-flex justify-content-between">
        <div class="num">
          <span>32</span>
          <br>
          клиентов      </div>
        <div class="num">
          <span>142</span>
          <br>
          страницы создано      </div>
        <div class="num">
          <span>2&nbsp;946</span>
          <br>
          строк кода      </div>
        <div class="num">
          <span>224</span>
          <br>
          чашек кофе      </div>
      </div>
    </div>
    <!--3-й блок-->
    <div class="container marketing">
      <h2 class="h2">Портфолио</h2>
      <div class="line"></div>
      <div class="row works">
        <div class="col-md-4 flex-column justify-content-center">
          <a href="index.php?page=one-work&work=sportkostukovka" class="shrink">
            <img class="img-thumbnail"
                 src="/img/works/sportkostukovka.jpg"
                 alt="Спорт-Костюковка">
          </a>
          <div class="work-main">
            <h2><a href="index.php?page=one-work&work=sportkostukovka">Спорт-Костюковка</a></h2>
          </div>
        </div><!-- /.col-lg-3 -->
        <div class="col-md-4 flex-column justify-content-center">
          <a href="index.php?page=one-work&work=belstekloprom" class="shrink">
            <img class="img-thumbnail"
                 src="/img/works/belstekloprom.jpg"
                 alt="БелСтеклоПром">
          </a>
          <div class="work-main">
            <h2><a href="index.php?page=one-work&work=belstekloprom">БелСтеклоПром</a></h2>
          </div>
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->
    </div>

    <!-- Основной контент -->
  </div><!--content-->

  <div class="container-fluid no-gutters footer">
    <footer>
      <div class="container d-flex pt-3 pb-5 justify-content-between">

        <ul class="d-flex flex-column align-items-start menu-footer">
          <li><a href='//localhost:3002/index.php?page=portfolio' class=''><i id='portfolio' class='fa fa-lg fa-briefcase' aria-hidden='true'></i>Портфолио</a></li><li><a href='//localhost:3002/index.php?page=service' class=''><i id='service' class='fa fa-lg fa-cog' aria-hidden='true'></i>Услуги</a></li><li><a href='//localhost:3002/index.php?page=contacts' class=''><i id='contacts' class='fa fa-lg fa-address-card' aria-hidden='true'></i>Контакты</a></li>      </ul>


        <div class="d-flex flex-column align-items-center">
          <div class="copy">
            &copy; Web-freelancer<br>2017 - 2018        </div>
          <div class="d-flex social mt-3">
            <a href="https://plus.google.com/" rel="publisher" target="_blank"><span id="g"></span></a>
            <a href="https://www.facebook.com/" target="_blank"><span id="fb"></span></a>
            <a href="http://vk.com/" target="_blank"><span id="vk"></span></a>
            <a href="https://twitter.com/" target="_blank"><span id="tw"></span></a>
            <div class="clear"></div>
          </div>
        </div>


        <div class="counter">
          Счетчики
        </div>

      </div>
    </footer>    </div>
</div><!--wrap-->



<!-- Обратная связь -->
<script src="/feedback/js/jquery.jgrowl.min.js"></script>
<script src="/feedback/js/scriptsfeedback.min.js"></script>
<!-- =================== -->

</body>
</html>