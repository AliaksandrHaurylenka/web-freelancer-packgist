<?php $this->layout('layout-work',
    [
        'title' => 'Портфолио.' . $one_work['name'],
        'description' => 'Портфолио',
      'work' => $one_work['name']
    ])
?>


  <div class="row one_work">
    <div class="col-lg-8 col-md-7 one_work_img">
      <img class="img-fluid" src="/img/works/<?= $one_work['img_site']; ?>" alt="<?= $one_work['name']; ?>">
    </div>

    <!--Видимый до 768px-->
    <div class="col-lg-4 col-md-5 hidden-sm-down one_work_desc">
      <div class="one_work_h">
        <h2>Проект</h2>
        <p><?= $one_work['name']; ?></p>
      </div>

      <div class="one_work_h">
        <h2>Тип проекта</h2>
        <p><?= $one_work['type_project']; ?></p>
      </div>

      <div class="d-flex flex-column one_work_to_do">
        <h2>Выполненные работы</h2>
        <span><img class="img-fluid" src="/img/icons/design.png" alt="Разработка дизайна">Разработка дизайна</span>
        <span><img class="img-fluid" src="/img/icons/develop.png" alt="Разработка сайта">Разработка сайта</span>
        <span><img class="img-fluid" src="/img/icons/layout.png" alt="Вёрстка страниц">Вёрстка страниц</span>
        <span><img class="img-fluid" src="/img/icons/support.png" alt="Поддержка сайта">Поддержка сайта</span>
      </div>

      <div class="row">
        <a class="col button button-one-work" href="http://<?= $one_work['link_site']; ?>" target="_blank">Перейти на сайт</a>
      </div>
      

      <div class="row one_work_h">
        <a class="col button button-order" href="/contact#feedback">Заказать проект</a>
      </div>
    </div><!--<div class="one_work_desc">-->

    




    <!--Видимый ниже 768px-->
    <div class="hidden-md-up one_work_desc_mobile col">

      <div class="d-flex justify-content-around one_work_h_mobile">
        <div class="one_work_h">
          <h2>Проект</h2>
          <p><?= $one_work['name']; ?></p>
        </div>

        <div class="one_work_h">
          <h2>Тип проекта</h2>
          <p><?= $one_work['type_project']; ?></p>
        </div>
      </div>

      <h2>Выполненные работы</h2>
      <div class="d-flex one_work_to_do one_work_h_mobile">
        <div class="one_work_to_do_mobile"><img class="img-fluid" src="/img/icons/design.png" alt="Разработка дизайна"><p>Разработка дизайна</p></div>
        <div class="one_work_to_do_mobile"><img class="img-fluid" src="/img/icons/develop.png" alt="Разработка сайта"><p>Разработка сайта</p></div>
        <div class="one_work_to_do_mobile"><img class="img-fluid" src="/img/icons/layout.png" alt="Вёрстка страниц"><p>Вёрстка страниц</p></div>
        <div class="one_work_to_do_mobile"><img class="img-fluid" src="/img/icons/support.png" alt="Поддержка сайта"><p>Поддержка сайта</p></div>
      </div>

      <div class="d-flex justify-content-around align-items-center">
        <a class="button button-one-work" href="http://<?= $one_work['link_site'];; ?>" target="_blank">Перейти на сайт</a>
        <div class="one_work_h">
          <a class="button button-order" href="<?= $menu[2]['href']; ?>#feedback">Заказать проект</a>
        </div>
      </div>

      <!-- screen < 480px -->
      <a class="button button-one-work hidden_768" href="http://<?= $one_work['link_site']; ?>" target="_blank">Перейти на сайт</a>
      <a class="button button-order hidden_768" href="<?= $menu[2]['href']; ?>#feedback">Заказать проект</a>
      
    </div><!--<div class="one_work_desc_mobile">-->
  </div><!--<div class="one_work">-->

  <div class="mt-4 quote">
    <?= $one_work['description']; ?>
    <p class="bold">Используемые технологии:</p>
    <ol>
      <?= $one_work['technology']; ?>
    </ol>
  </div>