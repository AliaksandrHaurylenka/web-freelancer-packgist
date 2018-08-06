<a name="feedback"></a>
<div class="col col-lg-8 mb-4">
  <div class="card">

    <div class="card-header">Обратная связь</div>

    <div class="card-block">
      <!-- Форма обратной связи -->
      <form id="feedbackForm" action="<?= $path; ?>process/process.php" enctype="multipart/form-data" novalidate>
        <div class="row">            
          <div class="col-md-6">
            <?php include ('_input-name.php'); ?>
          </div>

          <div class="col-md-6">
            <?php include ('_input-mail.php'); ?>
          </div>
        </div><!--<div class="row">-->

        <?php include ('_input-message.php'); ?>
        <?php include ('_input-file.php'); ?>
        <?php include ('_input-captcha.php'); ?>
        <?php include ('_input-agreement.php'); ?>

        <!-- Кнопка для отправки формы -->
        <button type="submit" class="btn float-right button btn-feedback" disabled>Отправить
          сообщение
        </button>

        <?php include ('_input-display.php'); ?>
      </form>
    </div><!--div class="card-block"-->

    <!-- Сообщение об успешной отправки формы -->
    <div class="card-footer text-muted d-none">
      <!-- Сообщение об успешной отправки формы -->
      Сообщение успешно отправлено. Нажмите на <a class="show-form" href="#">ссылку</a>, чтобы отправить ещё одно сообщение.        
    </div>

  </div><!--div class="card"-->
</div><!--div class="col-lg-8"-->
