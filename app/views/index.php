<?php $this->layout('layout',
    [
        'title' => 'Белросстрах - online оформление страховки',
        'description' => 'Страхование online - это удобный способ без особых усилий застраховать себя, имущество.'
    ])
?>

<?// $this->insert('blocks/feedback'); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?/* foreach ($slides as $li): */?><!--
      <li data-target="#myCarousel" data-slide-to="<?/*= $li['id']-1; */?>" class="<?/*= $li['class']; */?>"></li>
    --><?/* endforeach; */?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <? foreach ($slides as $slide): ?>
      <div class="carousel-item <?= $slide['class']; ?>">
        <img src="img/main/<?= $slide['image']; ?>" alt="<?= $slide['alt']; ?>">
      </div>
    <? endforeach; ?>
  </div>

 <!-- <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>



<div class="container">

  <div class="row icon mt-2">
    <div class="col col-sm-3 d-flex align-items-center justify-content-center">
      <a href="" data-toggle="modal" data-target="#modal_feedback" class="feedback">
        <img src="/img/main/email.png" class="img-fluid" alt="">
      </a>
    </div>

    <div class="col col-sm-3 d-flex align-items-center justify-content-center">
      <a role="button" tabindex="0" class="transfer">
        <img src="/img/main/transfer.png"  class="img-fluid" alt="">
      </a>
    </div>

    <div class="col col-sm-3 d-flex align-items-center justify-content-center">
      <a href="https://calc.stravita.by/#/" class="calc" target="_blank">
        <img src="/img/main/calc.png" class="img-fluid" alt="">
      </a>
    </div>

    <div class="col-12 col-sm-3 d-flex align-items-center justify-content-center">
      <blockquote class="blockquote agent">
        <p class="mb-0 h6 lead mb-3">Ваш персональный страховой агент</p>
        <img src="/img/main/agent.png" class="img-fluid mb-3" alt="">
        <p class="mb-0 h5 lead">Наталья</p>
      </blockquote>
    </div>
  </div>
  <h1>Страховка online</h1>
  <p class="lead">
    Мы уже давно покупаем бытовую технику через интернет-магазины, заказываем еду домой и в офис, оплачиваем онлайн за квартиру, мобильную связь, детский садик, курсы, покупаем билеты в кино, не посещая кассы, бронируем столик в кафе и в ресторане через компьютер или смартфон – и все это мы делаем онлайн. Для нас это уже стали привычные вещи.
  </p>
  <p class="lead">
    Теперь можно смело добавить в этот ряд и страховку онлайн. На улице и дома, в общественном транспорте и в авто, в аэропорту и на вокзале – в любом месте и в любое время можно купить страховку с компьютера, смартфона или планшета.
  </p>
  <h2>Как купить страховку online?</h2>
  <p class="lead">Все просто. Для этого нужно:</p>
  <ol class="mb-5 lead">
    <li>Выбрать вид страхования;</li>
    <li>Нажать кнопку "Застраховаться";</li>
    <li>Заполнить нужные поля;</li>
    <li>Отправить форму для принятия заявки;</li>
    <li>Дождаться связи с персональным страховым агентом.</li>
  </ol>
  <? $this->insert('blocks/views-insurance'); ?>
</div><!-- /.container -->