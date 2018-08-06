<?php $this->layout('layout-services',
    ['title'=>'Web-freelancer.Услуги',
        'description'=>'Услуги',
      'service'=>'Наши услуги'
    ]);
?>

<h1>Наши услуги</h1>
	

	<?php foreach ($services as $service): ?>
		<div class="line"></div>
	  <div class="row service">
			<!-- 1-й блок -->
			<div class="col-md-5 no-gutters">      
	      <h2 class="h2-service"><a href="<?= $service['link'] ?>"
								onmouseover="document.getElementById('<?= $service['img'] ?>').src='/img/<?= $service['img'] ?>_h.png';"
               	onmouseout="document.getElementById('<?= $service['img'] ?>').src='/img/<?= $service['img'] ?>.png';">
               	<?= $service['name'] ?>
	      		</a>
	      </h2>
	      <a href="<?= $service['link'] ?>">
	      	<img src="/img/<?= $service['img'] ?>.png"
	      			id="<?= $service['img'] ?>"
	      			class="img-fluid img-service"
              onmouseover="this.src='/img/<?= $service['img'] ?>_h.png'"
              onmouseout="this.src='/img/<?= $service['img'] ?>.png'"
              alt="<?= $service['name'] ?>">
	      </a>
			</div><!--class="col-sm-5 no-gutters"-->

			<!-- 2-й блок -->
			<ul class="col-md-3 pt-5">
      	<?= $service['what_we_do']; ?>   
    	</ul>

    	<!-- 3-й блок -->
    	<div class="col-md-4 no-gutters pt-5 text-service">      
      	<?= $service['description']; ?> 
			</div>

		</div><!--class="d-flex service"-->	
	<?php endforeach; ?>
	<div class="line"></div>
