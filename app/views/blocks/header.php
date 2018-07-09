<?php
/**
 * Массив вывода меню
 * Передача данных методом GET
 * Настройка в файле bootstrap.php
 */
$menu =
    [
        ['href'=>"/portfolio", 'link'=>'Портфолио', 'i'=>'fa-briefcase', 'id_i'=>'portfolio'],
        ['href'=>"/service", 'link'=>'Услуги', 'i'=>'fa-cog', 'id_i'=>'service'],
        ['href'=>'/contact', 'link'=>'Контакты', 'i'=>'fa-address-card', 'id_i'=>'contact'],
    ];
?>
<!-- Меню >768px -->
<header class="d-flex flex-row justify-content-between align-items-center mt-3 hidden-sm-down">
  <a href="/" class="shadow-radial"><img src="<?= config('logo'); ?>" class="img-fluid" alt="Web-freelancer"></a>
  <ul class="d-flex flex-row menu">
    <? foreach($menu as $li): ?>
      <li>
        <a href="<?= $li['href']; ?>">
          <i id='<?= $li['id_i']; ?>' class='fa fa-lg <?= $li['i']; ?>' aria-hidden='true'></i>
          <?= $li['link']; ?>
        </a>
      </li>
    <? endforeach; ?>
  </ul>
</header>


<!-- Меню <768px -->
<header class="mt-2">

  <nav class="navbar navbar-toggleable-md navbar-light hidden-md-up">
    <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="/" class="navbar-brand">
      <img src="<?= config('logo'); ?>" class="img-fluid" alt="Web-freelancer">
    </a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto menu">
        <? foreach($menu as $li): ?>
          <li>
            <a href="<?= $li['href']; ?>" class="nav-link">
              <i id='<?= $li['id_i']; ?>' class='fa fa-lg <?= $li['i']; ?>' aria-hidden='true'></i>
              <?= $li['link']; ?>
            </a>
          </li>
        <? endforeach; ?>
      </ul>
    </div>
  </nav>

</header>