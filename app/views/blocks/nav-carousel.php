<!--Меню более 992 px-->
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-primary hidden-md-down">
  <div class="container">
    <a class="navbar-brand" href="/"><?= config('logo'); ?></a>
    <? $this->insert('blocks/menu'); ?>
  </div>
</nav>

<!--Меню менее 992 px-->
<nav class="navbar navbar-toggleable-sm navbar-inverse fixed-top bg-primary hidden-lg-up">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
          data-target="#navbarSmall" aria-expanded="false"
          aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <a class="navbar-brand" href="/"><?= config('logo'); ?></a>
  <div class="collapse navbar-collapse" id="navbarSmall">
    <? $this->insert('blocks/menu'); ?>
  </div>
</nav>