<!-- Модальное окно "ОБРАТНАЯ СВЯЗЬ" -->
<!--noindex-->
<div class="modal fade" id="modal_stravita" tabindex="-1" role="dialog">
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
              <form id="feedbackStravita" action="/feedback/process/stravita.php" enctype="multipart/form-data" novalidate>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- Имя пользователя -->
                    <div class="form-group has-feedback">
                      <label for="name_s" class="control-label">Ф.И.О.</label>
                      <input id="name_s" type="text" name="name" class="form-control"
                             value=""
                             minlength="2"
                             required="required">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- Возраст -->
                    <div class="form-group has-feedback">
                      <label for="age_s" class="control-label">Возраст</label>
                      <input id="age_s" type="text" name="age" required="required"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Пол страхуемого -->
                    <div class="form-group has-feedback">
                      <label for="sex" class="control-label">Пол</label>
                      <select class="form-control" id="sex" name="sex">
                        <option>Женский</option>
                        <option>Мужской</option>
                      </select>
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- Работа -->
                    <div class="form-group has-feedback">
                      <label for="work" class="control-label">Кем и где работаете</label>
                      <input id="work"
                             type="text"
                             name="work"
                             required="required"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <!-- Спортивные интересы -->
                    <div class="form-group has-feedback">
                      <label for="sport_s" class="control-label">Занимаетелись спортом? Если да, то каким?</label>
                      <input id="sport_s"
                             type="text"
                             name="sport"
                             required="required"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group has-feedback">
                      <label for="type_s" class="control-label">Вид страхования</label>
                      <select class="form-control" id="type_s" name="type">
                        <option>Страхование детей</option>
                        <option>Страхование жизни</option>
                        <option>Защищенный кредит</option>
                        <option>Пенсия</option>
                        <option>Пенсия+</option>
                      </select>
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- Сумма страхования -->
                    <div class="form-group has-feedback">
                      <label for="sum_s" class="control-label">Сумма страхования</label>
                      <input id="sum_s"
                             type="text"
                             name="sum"
                             required="required"
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
                      <label for="phone_s" class="control-label">Моб. телефон</label>
                      <input id="phone_s" type="tel" name="phone" required="required"
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
                      <label for="email_s" class="control-label">E-mail</label>
                      <input id="email_s" type="email" name="email"
                             class="form-control"
                             value="">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div>
                </div>

                <!-- Сообщение пользователя -->
                <div class="form-group has-feedback">
                  <label for="message_s" class="control-label">Дополнительные пожелания (не менее 10 символов)</label>
                  <textarea id="message_s" name="message" class="form-control"
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
                    <label for="captcha_s" class="control-label">Код с картинки</label>
                    <input type="text" name="captcha" maxlength="6" required="required" id="captcha_s"
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