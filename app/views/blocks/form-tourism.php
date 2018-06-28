<!--noindex-->
<div class="modal fade" id="modalTourism" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Оставить заявку</h4>
      </div>
      <div class="modal-body">

<div class="col">
  <div class="panel panel-success">
    <div class="panel-body">

      <!-- Форма обратной связи -->
      <form id="feedbackTourism" action="/feedback/process/tourism.php" novalidate>
        <div class="row">
          <div class="col-sm-6">
            <!-- Имя пользователя -->
            <div class="form-group has-feedback">
              <label for="name_t" class="control-label">Ф.И.О. (старше 14 лет)</label>
              <input id="name_t" type="text" name="name" class="form-control"
                     value="" minlength="2" required="required">

            </div>
          </div>
          <div class="col-sm-6">
            <!-- Возраст -->
            <div class="form-group has-feedback">
              <label for="number" class="control-label">Количество человек</label>
              <input id="number" type="text" name="number" required="required"
                     class="form-control"
                     value="">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Пол страхуемого -->
            <div class="form-group has-feedback">
              <label for="children" class="control-label">Количество детей до 14 лет</label>
              <input id="children" type="text" name="children" required="required"
                     class="form-control"
                     value="">

            </div>
          </div>
          <div class="col-sm-6">
            <!-- Работа -->
            <div class="form-group has-feedback">
              <label for="city" class="control-label">Пункт назначения</label>
              <input id="city" type="text" name="city" required="required"
                     class="form-control"
                     value="">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Спортивные интересы -->
            <div class="form-group has-feedback">
              <label for="date1" class="control-label">Дата отъезда</label>
              <input id="date1" type="date" name="date1" required="required"
                     class="form-control">

            </div>
          </div>

          <div class="col-sm-6">
            <!-- Спортивные интересы -->
            <div class="form-group has-feedback">
              <label for="date2" class="control-label">Дата приезда</label>
              <input id="date2" type="date" name="date2" required="required"
                     class="form-control">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group has-feedback">
              <label for="sport_t" class="control-label">Будете ли заниматься активным отдыхом? Каким?</label>
              <input id="sport_t" type="text" name="sport" required
                     class="form-control"
                     value="">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group has-feedback">
              <label for="type_t" class="control-label">Вид страховки</label>
              <select id="type_t" class="form-control" name="type">
                <option>Стандарт</option>
                <option>Оптима</option>
                <option>Престиж</option>
              </select>

            </div>
          </div>

          <div class="col-sm-6">
            <!-- Сумма страхования -->
            <div class="form-group has-feedback">
              <label for="sum_t" class="control-label">Сумма страхования</label>
              <input id="sum_t" type="text" name="sum" required="required"
                     class="form-control"
                     value="">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <!-- Мобильный телефон -->
            <div class="form-group has-feedback">
              <label for="phone_t" class="control-label">Моб. телефон</label>
              <input id="phone_t" type="tel" name="phone" required="required"
                     class="form-control"
                     placeholder="+375 (29) 123-45-67"
                     pattern="\+375\s?[\(]{0,1}[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}"
                     value="">

            </div>
          </div>
          <div class="col-sm-6">
            <!-- E-mail -->
            <div class="form-group has-feedback">
              <label for="email_t" class="control-label">E-mail</label>
              <input id="email_t" type="email" name="email"
                     class="form-control"
                     value="">

            </div>
          </div>
        </div>

        <!-- Сообщение пользователя -->
        <div class="form-group has-feedback">
          <label for="message_t" class="control-label">Дополнительные пожелания (не менее 10 символов)</label>
          <textarea id="message_t" name="message" class="form-control"
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
            <label for="captcha_t" class="control-label">Код с картинки</label>
            <input type="text" name="captcha" maxlength="6" required="required" id="captcha_t"
                   class="form-control captcha" placeholder="*******" autocomplete="off" value="">

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
      <!--КОНЕЦ ФОРМЫ-->

      <!-- Сообщение об успешной отправки формы -->
      <div class="mt-3 alert alert-warning success-message d-none">
        Сообщение успешно отправлено.
      </div>

    </div><!--panel-body-->
  </div><!--panel panel-success-->
</div><!--col subtype-->

      </div><!--modal-body-->
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<!--/noindex-->