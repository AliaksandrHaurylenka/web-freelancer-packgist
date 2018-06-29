<!-- FOOTER -->
<div class="footer pb-4">
  <footer class="container">
<!--    <p class="float-right mt-2"><a href="#" class="company">Наверх</a></p>-->

    <div class="row">
      <p class="col-sm-4 mt-2">&copy; 2017 - <?= strftime('%Y'); ?> <a href="/" class="company"><?= config('logo'); ?></a></p>

      <div class="col">
        <nav class="nav flex-column">
          <?php $menuDrop = menuDrop('menu', 'name_en', 'belrosstrah'); ?>
          <?php foreach ($menuDrop as $company): ?>
          <p class="lead my-2 pb-2"><?= $company['name']; ?></p>
          <?php endforeach; ?>

          <?php
          $drop = menuDrop('menu-dropdown','attachment','belrosstrah');
            foreach ($drop as $item) {
              echo '<a class="nav-link pl-0" href="' . $item['link'] . '">' . $item['name'] . '</a>';
            }
          ?>
        </nav>
      </div>

      <div class="col">
        <nav class="nav flex-column">
          <?php $menuDrop = menuDrop('menu', 'name_en', 'stravita'); ?>
          <?php foreach ($menuDrop as $company): ?>
            <p class="lead my-2 pb-2"><?= $company['name']; ?></p>
          <?php endforeach; ?>

          <?php
          $drop = menuDrop('menu-dropdown','attachment','stravita');
          foreach ($drop as $item) {
            echo '<a class="nav-link pl-0" href="' . $item['link'] . '">' . $item['name'] . '</a>';
          }
          ?>
        </nav>
      </div>

      <div class="col mt-3">
        <div class="float-right">
          <div class="counter mb-3">
            Счетчики
          </div>
        </div>
      </div>
    </div>

  </footer>
</div>