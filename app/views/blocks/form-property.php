<!-- Модальное окно "ОБРАТНАЯ СВЯЗЬ" -->
<!--noindex-->
<div class="modal fade" id="modalProperty" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Оставить заявку</h4>
      </div>
      <div class="modal-body">

        <!--НАЧАЛО ФОРМЫ-->
        <!-- https://itchief.ru/lessons/php/feedback-form-for-website -->
        <div class="col">
          <div class="panel panel-success">
            <div class="panel-body">

              <!-- Форма обратной связи -->
              <form id="feedbackProperty" action="/feedback/process/property.php" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Имя пользователя -->
                    <div class="form-group has-feedback">
                      <label for="name_p" class="control-label">Ф.И.О.</label>
                      <input id="name_p" type="text" name="name" class="form-control"
                             value="" minlength="2" required="required">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- Что страхуем? -->
                    <div class="form-group has-feedback">
                      <label for="housing" class="control-label">Что страхуем?</label>
                      <select class="form-control" id="housing" name="housing">
                        <option>Квартира</option>
                        <option>Дом</option>
                      </select>

                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Стоимость жилья -->
                    <div class="form-group has-feedback">
                      <label for="price" class="control-label">Стоимость жилья</label>
                      <input id="price" type="text" name="price" class="form-control"
                             value="" minlength="2" required="required">

                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- Количество комнат -->
                    <div class="form-group has-feedback">
                      <label for="room" class="control-label">Количество комнат, если дом - этажей</label>
                      <input id="room" type="text" name="room" required="required"
                             class="form-control"
                             minlength="1"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <!-- Спортивные интересы -->
                    <div class="form-group has-feedback">
                      <label for="sum_p" class="control-label">Сумма страхования</label>
                      <input id="sum_p" type="text" name="sum" required="required"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-sm-6">
                    <!-- Мобильный телефон -->
                    <div class="form-group has-feedback">
                      <label for="phone_p" class="control-label">Моб. телефон</label>
                      <input id="phone_p" type="tel" name="phone" required="required"
                             class="form-control"
                             placeholder="+375 (29) 123-45-67"
                             pattern="\+375\s?[\(]{0,1}[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- E-mail -->
                    <div class="form-group has-feedback">
                      <label for="email_p" class="control-label">E-mail</label>
                      <input id="email_p" type="email" name="email"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <!-- Сообщение пользователя -->
                <div class="form-group has-feedback">
                  <label for="message_p" class="control-label">Дополнительные пожелания (не менее 10 символов)</label>
                  <textarea id="message_p" name="message" class="form-control"
                            rows="5" minlength="10"
                            maxlength="500"></textarea>
                </div>

                <!-- Капча -->
                <div class="captcha">
                  <div class="refresh-captcha">
                    <img class="img-captcha img-responsive" src="/feedback/captcha/captcha.php"
                         data-src="/feedback/captcha/captcha.php" alt="">
                    <span>* Нажмите на картинку, чтобы обновить.</span>
                  </div>
                  <div class="form-group has-feedback">
                    <label for="captcha_p" class="control-label">Код с картинки</label>
                    <input type="text" name="captcha" maxlength="6" required="required" id="captcha_p"
                           class="form-control captcha" placeholder="*******" autocomplete="off" value="">
                    <span class="glyphicon form-control-feedback"></span>
                  </div>
                </div>

                <!-- Кнопка для отправки формы -->
                <button type="submit" class="btn btn-primary pull-right">Отправить
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
              <div class="alert alert-warning success-message d-none">
                Ваше сообщение успешно отправлено.
              </div>

            </div>
          </div>
        </div>
        <!--КОНЕЦ ФОРМЫ-->


      </div>
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<!--/noindex-->