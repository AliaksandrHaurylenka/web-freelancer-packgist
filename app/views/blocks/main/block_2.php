<!--3-й блок-->
<div class="container marketing">
  <h2 class="h2">Портфолио</h2>
  <div class="line"></div>
  <div class="row works">
    <? foreach(limit('portfolio_full', 'id DESC', 9) as $work): ?>
      <div class="col-md-4 flex-column justify-content-center">
        <a href="<?= $work['link']; ?>" class="shrink">
          <img class="img-thumbnail"
               src="/img/works/<?= $work['img']; ?>"
               alt="<?= $work['name']; ?>">
        </a>
        <div class="work-main">
          <h2><a href="<?= $work['link']; ?>"><?= $work['name']; ?></a></h2>
        </div>
      </div><!-- /.col-lg-3 -->
    <? endforeach; ?>
  </div><!-- /.row -->
</div>