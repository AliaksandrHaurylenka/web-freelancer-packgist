<ul class="navbar-nav mr-auto">
  <? foreach(menu() as $li): ?>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
         aria-haspopup="true" aria-expanded="false"><?= $li['name']; ?></a>
      <div class="dropdown-menu">
        <?php
        if($li['name_en'] == "belrosstrah"){
          $drop=menuDrop('menu-dropdown', 'attachment', 'belrosstrah');
          foreach($drop as $item){
            echo '<a class="dropdown-item" href="'.$item['link'].'">'.$item['name'].'</a>';
            echo "<div class=\"dropdown-divider\"></div>";
          }
        } elseif($li['name_en'] == 'stravita'){
          $drop=menuDrop('menu-dropdown', 'attachment', 'stravita');
          foreach($drop as $item){
            echo '<a class="dropdown-item" href="'.$item['link'].'">'.$item['name'].'</a>';
            echo "<div class=\"dropdown-divider\"></div>";
          }
        }
        ?>
      </div>
    </li>
  <? endforeach; ?>
</ul>

<div class="contact my-2 hidden-md-down">
  <p class="d-inline mr-sm-4">Тел: +375(29)835-15-16</p>
  <p class="d-inline my-2 mr-3 mail" data-toggle="modal" data-target="#modal_feedback">E-mail: tasha_rub@mail.ru</p>
</div>

<div class="contact my-2 hidden-lg-up">
  <p class="d-inline mr-sm-4">+375(29)835-15-16</p>
  <p class="d-inline my-2 mr-3 mail" data-toggle="modal" data-target="#modal_feedback">tasha_rub@mail.ru</p>
</div>
