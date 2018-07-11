<?
$works = selectServicesPortfolio('`portfolio_full`');
if(!is_array($works)){
  echo "Произошла ошибка при выводе работ";
  exit;
}
?>

<div class="container">
  <div class="breadcrumbs">
    // <a href="/">Главная</a> / Портфолио
  </div>
  <h1>Наши работы</h1>

  <div class="row works">
    <? foreach($works as $work): ?>
      <div class="col-lg-4 flex-column justify-content-center">
        <a href="<?= $work['link']; ?>" class="shrink">
          <img class="img-thumbnail"
               src="/img/works/<?= $work['img']; ?>"
               alt="<?= $work['name']; ?>">
        </a>
        <div class="work-main">
          <h2><a href="<?= $work['link']; ?>"><?= $work['name']; ?></a></h2>
        </div>
      </div><!-- /.col-lg-4 -->
    <? endforeach; ?>
  </div><!-- /.row -->

</div><!--<div class="content">-->