<?php $this->layout('layout', [
          "title" => 'Вход в админку',
          'description' => 'Выполнить вход в административную панель'
        ]
    );
?>
    <div class="container">

      <div class="row justify-content-center mt-5">
        <form action="/login" method="post" class="col-6">
            <?= flash(); ?>
          <label for="login">User</label>
          <div class="input-group mb-3">
            <div class="input-group-addon"><i class="fa fa-user"></i></i></div>
            <input type="text" class="form-control" id="login" placeholder="User" name="admin">
          </div>
          <label for="password">Password</label>
          <div class="input-group">
            <div class="input-group-addon"><i class="fa fa-lock"></i></i></div>
            <input type="password" class="form-control" id="password" placeholder="******" name="pass">
          </div>


          <div class="form-check mt-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>

          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>

    </div>


