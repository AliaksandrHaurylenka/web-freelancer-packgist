<?php $this->layout('layout',
    [
        'title' => 'Title',
        'description' => 'Страхование online - это удобный способ без особых усилий застраховать себя, имущество.'
    ])
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <? foreach ($slides as $li): ?>
      <li data-target="#myCarousel" data-slide-to="<?= $li['id']-1; ?>" class="<?= $li['class']; ?>"></li>
    <? endforeach; ?>
  </ol>

  <div class="carousel-inner" role="listbox">
    <? foreach ($slides as $slide): ?>
      <div class="carousel-item <?= $slide['class']; ?>">
        <!--        <img src="img/main/--><?//= $slide['image']; ?><!--" alt="--><?//= $slide['alt']; ?><!--">-->
        <img src="<?= $slide['image']; ?>" alt="<?= $slide['alt']; ?>">
        <div class="container">
          <div class="carousel-caption d-none d-md-block text-center">
            <h1><?= $slide['name']; ?></h1>
            <p><?= $slide['description']; ?></p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
    <? endforeach; ?>
  </div>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="container marketing">
  <? $this->insert('blocks/main/block_1'); ?>
  <hr class="featurette-divider">
  <? $this->insert('blocks/main/block_2'); ?>
</div>


