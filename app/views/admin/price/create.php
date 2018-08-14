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
              <h2 class="box-title">Добавить проект и расценки</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-6">
                <?//= flash(); ?>
                <form action="/admin/price/store" method="post">
                  <div class="form-group">
                    <label for="works">Название работы</label>
                    <input type="text" class="form-control" id="works" name="works">
                  </div>

                  <div class="form-group">
                    <label for="price">Стоимость</label>
                    <input type="text" class="form-control" id="price" name="price">
                  </div>

                  <div class="form-group">
                    <label for="time">Время на выполнение, дней</label>
                    <input type="text" class="form-control" id="time" name="time">
                  </div>


                  <div class="form-group">
                    <label for="service">К какому виду работ принадлежит</label>
                    <select id="service" class="form-control" name="service">
                      <option value="design">Дизайн</option>
                      <option value="verstka">Верстка</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-success" type="submit">Добавить</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          По вопросам к главному администратору.
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
