<?php $this->layout('layout',
    [
        'title'=>'Туризм',
        'description'=>'Жизнь полна случайностей. Многие происходят тогда, когда их не ждешь, когда к ним не готов семейный бюджет.'
    ])
?>

<div class="container">
  <ol class="breadcrumb mt-4">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    <li class="breadcrumb-item active">Туризм</li>
  </ol>

  <section>
    <div class="well mt-3">
      <h1 class="pb-2">СТРАХОВАНИЕ ОТ НЕСЧАСТНОГО СЛУЧАЯ</h1>
    </div>

    <div class="description">
      <p>Жизнь полна случайностей. Многие происходят тогда, когда их не ждешь, когда к ним не готов семейный бюджет.
        Если вы не хотите зависеть от помощи государства, своего работодателя или родственников, вам необходима надежная
        и недорогая финансовая защита.</p>
    </div>
    <p><strong>Страхование от несчастных случаев и болезней на время поездки за границу</strong> в страховой компании
      «Белросстрах» — надежная защита от финансовых потерь при наступлении неприятных случайностей во время отдыха или
      командировки за пределами Беларуси.</p>
    <p>Страховая компания «Белросстрах» предлагает следующие варианты страхования:</p>
    <p>Полис страхования от несчастных случаев и болезней на время поездки за границу позволит вам избежать
      дополнительных финансовых расходов, если во время нахождения за границей вам понадобится, например:</p>

    <ul>
      <li>срочная медицинская помощь в случае болезни или зубной боли;</li>
      <li>доставка до клиники в случае травмы или несчастного случая;</li>
      <li>возвращение домой ваших детей в случае, если вы будете находиться в клинике длительное время.</li>
    </ul>

    <div class="row">
      <div class="col-md-4 d-flex align-items-center justify-content-center">
        <?php $this->insert('blocks/standard'); ?>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center">
        <?php $this->insert('blocks/optima'); ?>
      </div>
      <div class="col-md-4 d-flex align-items-center justify-content-center">
        <?php $this->insert('blocks/prestige'); ?>
      </div>
    </div>

    <div class="d-flex align-items-center justify-content-center">
      <button class="button" data-toggle="modal" data-target="#modalTourism">Застраховаться</button>
    </div>

  </section>


</div>
