<?= $this->layout('admin/layout'); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content container-fluid">

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Админ-панель</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="">
            <div class="box-header">
              <h2 class="box-title">Изменить расценку и время работы над проектом</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-6">
                <!--                                --><?php //echo flash(); ?>
                <form action="/AliaksandrHaurylenka/price/<?= $price['id']; ?>/update" method="post">
                  <div class="form-group">
                    <label for="works">Название проекта</label>
                    <input type="text" class="form-control" name="works" id="works" value="<?= $price['works']; ?>"
                           required>
                  </div>

                  <div class="form-group">
                    <label for="price">Стоимость проекта</label>
                    <input type="number" class="form-control" name="price" id="price" value="<?= $price['price']; ?>"
                           required>
                  </div>

                  <div class="form-group">
                    <label for="time">Время работы над проектом</label>
                    <input type="number" class="form-control" name="time" id="time" value="<?= $price['time']; ?>"
                           required>
                  </div>

                  <div class="form-group">
                    <label for="service">К какому виду работ принадлежит</label>
                    <select id="service" class="form-control" name="service">
                      <option value="design">Дизайн</option>
                      <option value="verstka">Верстка</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-warning" type="submit">Изменить</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <?= $this->insert('admin/partials/box-footer'); ?>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->