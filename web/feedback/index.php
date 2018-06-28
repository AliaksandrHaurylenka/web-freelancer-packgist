<!-- https://itchief.ru/lessons/php/feedback-form-for-website -->
<div class="col col-lg-8">
  <div class="panel panel-success">
    <div class="panel-heading">
        <h2 class="h3 panel-title">Обратная связь</h2>
    </div>
    <div class="panel-body">

      <!-- Форма обратной связи -->
      <form id="feedbackForm" action="/feedback/process/process.php" enctype="multipart/form-data" novalidate>
        <div class="row">
            <div class="col-sm-6">

                <!-- Имя пользователя -->
                <div class="form-group has-feedback">
                    <label for="name" class="control-label">Имя</label>
                    <input id="name" type="text" name="name" class="form-control"
                           value="" minlength="2" required="required">

                </div>

            </div>
            <div class="col-sm-6">

                <!-- Email пользователя -->
                <div class="form-group has-feedback">
                    <label for="email" class="control-label">Email-адрес</label>
                    <input id="email" type="email" name="email" required="required"
                           class="form-control"
                           value="">
                    <span class="glyphicon form-control-feedback"></span>
                </div>

            </div>
        </div>

        <!-- Сообщение пользователя -->
        <div class="form-group has-feedback">
            <label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
            <textarea id="message" name="message" class="form-control"
                      rows="5" minlength="20"
                      maxlength="500" required="required"></textarea>
        </div>

        <!-- Файлы, для прикрепления к форме -->
        <div class="form-group">
            <p style="font-weight: 700; margin-bottom: 0;">Прикрепить к сообщению файлы (до <span
                    class="countFiles"></span>):</p>
            <p class="small success">jpg, jpeg, gif, png (до 512 Кбайт)</p>
            <div class="attachments">
                <input type="file" name="attachment[]">
                <p style="margin-top: 3px; margin-bottom: 3px; color: #ff0000;"></p>
            </div>
        </div>

        <!-- Капча -->
        <div class="row captcha">
          <div class="col-sm-3 d-flex flex-column">
            <img class="img-captcha" src="/feedback/captcha/captcha.php"
                 data-src="/feedback/captcha/captcha.php">
            <div class="btn btn-default refresh-captcha"><i class="fa fa-refresh" aria-hidden="true"></i>
                Обновить
            </div>
          </div>
          <div class="col form-group has-feedback">
              <input type="text" name="captcha" maxlength="6" required="required" id="captcha"
                     class="form-control captcha" placeholder="Код, показанный на изображении" autocomplete="off" value="">
              <span class="glyphicon form-control-feedback"></span>
          </div>
        </div>

        <!-- Пользовательское солашение -->
        <div class="checkbox">
            <label>
                <input type="checkbox" name="agree"> Нажимая кнопку, я принимаю условия
                <a href="#">Пользовательского соглашения</a> и даю своё согласие на обработку моих
                персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О
                персональных
                данных».
            </label>
        </div>

        <!-- Кнопка для отправки формы -->
        <button type="submit" class="btn pull-right button btn-feedback" disabled="disabled">Отправить
            сообщение
        </button>

        <!-- Индикация загрузки данных формы на сервер -->
        <div class="clearfix"></div>
        <div class="progress" style="display:none; margin-top: 20px;">
            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                 aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0">
                <span class="sr-only">0%</span>
            </div>
        </div>
        <div class="clearfix"></div>

      </form>

      <!-- Сообщение об успешной отправки формы -->
      <div class="alert alert-warning success-message hidden">
          Форма успешно отправлена. Нажмите на <a class="show-form" href="#">ссылку</a>, чтобы отправить ещё одно сообщение.
      </div>

    </div>
  </div>
</div>
