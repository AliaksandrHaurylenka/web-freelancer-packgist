<?php $this->layout('layout-services',
    ['title'=>'Web-freelancer.Дизайн',
        'description'=>'Дизайн',
        'service'=>'Дизайн'
    ]);
?>


<h1>Дизайн сайта</h1>
<h2>Консультации по телефону <?= config('phone.phone1'); ?></h2>
<h2>Консультация <a href="http://vk.com/" class="link-consultation">online</a></h2>

<img class="img-fluid mb-3" src="/img/services/design.png" alt="Разработка дизайна" />
<p>Качественный дизайн – это половина успеха вашего бизнеса. Наша команда знает, какой дизайн сможет вызвать восторг у посетителя и будет продавать ваш продукт.</p>
<h2>Наши услуги по дизайну</h2>
<ul class="list-style">
  <li>Дизайн сайта – разработка уникального дизайна для вашего сайта или отдельной его страницы;</li>
  <li>Адаптация сайта под мобильные устройства – сделает сайт удобным для его просмотра на мобильных устройствах;</li>
  <li>Дизайн обложек – разработка дизайна обложек ваших продуктов;</li>
  <li>Дизайн визиток – создание дизайна визиток для вашего бизнеса.</li>
</ul>
<h2>Стоимость</h2>

<table class="table table-striped table-price">
  <thead class="thead-inverse">
    <tr>
      <th>Услуга</th>
      <th>Стоимость</th>
      <th>Сроки</th>
    </tr>
  </thead>
  <tbody>
  <? foreach ($design as $price): ?>
    <tr>
      <td><?= $price['works']; ?></td>
      <td>От <?= $price['price']; ?></td>
      <td>До <?= $price['time']; ?> рабочих дней</td>
    </tr>
  <? endforeach; ?>
  </tbody>
</table>

<div class="quote">
  Стоимость может быть другой в зависимости от конкретных поставленных задач.
</div>