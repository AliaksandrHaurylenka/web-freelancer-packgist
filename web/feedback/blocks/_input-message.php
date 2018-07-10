<!-- Сообщение пользователя -->
<div class="form-group has-feedback">
	<label for="message" class="control-label">Сообщение (не менее 20 символов)</label>
	<textarea id="message" name="message" class="form-control" rows="3" minlength="20" maxlength="500" required><?= generatePassword(30); ?></textarea>
</div>