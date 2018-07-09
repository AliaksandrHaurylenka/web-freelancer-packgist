<?
$status =
  [
    ['int'=>'32', 'description'=>'клиентов'],
    ['int'=>'142', 'description'=>'страницы создано'],
    ['int'=>'2&nbsp;946', 'description'=>'строк кода'],
    ['int'=>'224', 'description'=>'чашек кофе'],
  ];

?>

<!--2-й блок-->
<div class="stat hidden-sm-down">
  <div class="container d-flex justify-content-between">
    <? foreach($status as $stat): ?>
      <div class="num">
        <span><?= $stat['int'] ?></span>
        <br>
        <?= $stat['description'] ?>
      </div>
    <? endforeach; ?>
  </div>    
</div>