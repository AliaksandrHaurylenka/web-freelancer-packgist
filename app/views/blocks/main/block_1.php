<!--1-й блок-->
<div class="container marketing">
  <h2 class="h2">К ВАШИМ УСЛУГАМ</h2>
  <div class="line"></div>
  <div class="row">

    <? foreach(all('services') as $service): ?>
      <div class="col-md-4 d-flex flex-column justify-content-between main-service">
        <a href="<?= $service['link'] ?>">
          <img class="img-thumbnail"
               id="<?= $service['img'] ?>"
               src="/img/<?= $service['img'] ?>.png"
               onmouseover="this.src='/img/<?= $service['img'] ?>_h.png'"
               onmouseout="this.src='/img/<?= $service['img'] ?>.png'"
               alt="<?= $service['name'] ?>">
        </a>

        <div>
          <h2><?= $service['name'] ?></h2>
          <p class="description_small">
            <a href="<?= $service['link'] ?>"
               onmouseover="document.getElementById('<?= $service['img'] ?>').src='/img/<?= $service['img'] ?>_h.png';"
               onmouseout="document.getElementById('<?= $service['img'] ?>').src='/img/<?= $service['img'] ?>.png';">
              <?= $service['technology']; ?>
            </a>
          </p>
        </div>

        <p>
          <a class="btn btn-secondary"
             href="<?= $service['link']; ?>"
             onmouseover="document.getElementById('<?= $service['img'] ?>').src='/img/<?= $service['img'] ?>_h.png';"
             onmouseout="document.getElementById('<?= $service['img'] ?>').src='/img/<?= $service['img'] ?>.png';"
             role="button">Посмотреть &raquo;
          </a>
        </p>
      </div><!--main-service-->
    <? endforeach; ?>

  </div><!-- /.row -->
</div>