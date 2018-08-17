<?php $this->layout('layout', [
        "title" => 'Регистрация',
        'description' => 'Регистрация'
    ]
);
?>
<div class="container">

  <div class="row justify-content-center mt-5">
    <form action="/register" method="post" class="col-6">
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
      <button type="submit" class="btn btn-primary mt-3">Register</button>
    </form>
  </div>

</div>


