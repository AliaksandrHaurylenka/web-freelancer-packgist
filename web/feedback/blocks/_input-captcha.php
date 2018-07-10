<!-- Капча -->
<div class="captcha">
  <img class="img-captcha text-hide" src="<?= $path; ?>captcha/captcha.php" data-src="<?= $path; ?>captcha/captcha.php">
  <div class="btn btn-secondary refresh-captcha">
    <img src="<?= $path; ?>img/refreshing.png" alt="">
    <span>Обновить</span>
  </div>
  <div class="form-group has-feedback">
    <label for="captcha" class="control-label">Код с картинки</label>
    <input type="text" name="captcha" maxlength="6" required="required" id="captcha" class="form-control captcha" placeholder="*****" autocomplete="off" value="">
  </div>
</div>