<?php
/**
 * Массив вывода меню
 * Передача данных методом GET
 * Настройка в файле bootstrap.php
 */
$menu =
    [
        ['href'=>"/portfolio", 'link'=>'Портфолио'],
        ['href'=>"/service", 'link'=>'Услуги'],
        ['href'=>'/contact', 'link'=>'Контакты'],
    ];
?>

<footer class="mt-3">
    <div class="container d-flex pt-3 pb-5 justify-content-between">

      <ul class="d-flex flex-column align-items-start menu-footer">
        <? foreach($menu as $li): ?>
          <li>
            <a href="<?= $li['href']; ?>">
              <i id='<?= $li['id_i']; ?>' class='fa fa-lg <?= $li['i']; ?>' aria-hidden='true'></i>
              <?= $li['link']; ?>
            </a>
          </li>
        <? endforeach; ?>
      </ul>


      <div class="d-flex flex-column align-items-center">
        <div class="copy">
          &copy; Web-freelancer<br>2017 - <?= strftime("%Y") ?>
        </div>
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
</footer>