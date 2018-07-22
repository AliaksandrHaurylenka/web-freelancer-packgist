<?php $this->layout('layout', ['title'=>'Web-freelancer.Контакты', 'description'=>'Контакты']);

$phone1='+375(29)348-76-88';
$phone2='+375(29)377-51-08';
// Таблица контактов
$contactInfo=[['communication'=>'Телефон:', 'number'=>"$phone1"], ['communication'=>'', 'number'=>"$phone2"], ['communication'=>'Skype:', 'number'=>"SITE"], ['communication'=>'Группа ВК:', 'number'=>"<a  href='http://vk.com/'>Мы тут</a>"]];

$timetable=[['day'=>'ПН - ПТ', 'time'=>'с 10:00 до 18:00'], ['day'=>'СБ', 'time'=>'с 10:00 до 16:00'], ['day'=>'ВС', 'time'=>'выходной']];
// ====================
?>
<div class="container">
  <div class="breadcrumbs">
    // <a href="/">Главная</a> / Контакты
  </div>

  <h1>Контакты</h1>
  <p><img class="img-fluid" src="/img/services/contacts.png" alt="Контакты"></p>
  <p>Мы всегда рады ответить на все Ваши вопросы, выслушать Ваши предложения или мнения.</p>

  <!-- Screen >991px -->
  <div class="row">
    <div class="col-lg-4 layout_contacts_tables">
      <div class="row justify-content-center">
        <table class="col-10 col-sm-6 col-lg-12 table table-responsive contact_table">
          <caption>Контактная информация</caption>
          <tbody>
          <?php foreach($contactInfo as $value): ?>
            <tr>
              <td>
                <strong><?= $value['communication']; ?></strong>
              </td>
              <td><?= $value['number']; ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>

        <table class="col-10 col-sm-6 col-lg-12 table table-responsive contact_table">
          <caption>Часы работы</caption>
          <tbody class="day-week">
          <?php foreach($timetable as $value): ?>
            <tr>
              <td>
                <strong><?= $value['day']; ?></strong> - <?= $value['time']; ?>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <a href="#" name="feedback"></a>
    <?php include 'feedback/index.php'; ?>
  </div><!--row-->

</div><!--container-->

<div class="container-fluid no-gutters">
  <script type="text/javascript" charset="utf-8" async
          src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A13cb8ea96322d774ef0ddeb9cdce28c414287d33acd523b1ced9535bba2bbf4e&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
</div>