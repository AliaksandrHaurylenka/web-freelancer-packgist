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
              <h2 class="box-title">Проекты</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="/AliaksandrHaurylenka/project/create" class="btn btn-success btn-lg">Добавить</a> <br> <br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Название проекта</th>
                  <th>Скрин в портфолио</th>
                  <th>Скрин сайта</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($project as $p):?>
                  <tr>
                    <td><?= $p['id'];?></td>
                    <td><h3><?= $p['name'];?></h3></td>
                    <td><img src="/img/works/<?= $p['img'];?>" height="200px"></td>
                    <td><img src="/img/works/<?= $p['img_site'];?>" height="200px"></td>
                    <td>
                      <a href="#" class="btn btn-info">
                        <i class="fa fa-eye"></i>
                      </a>
                      <a href="/AliaksandrHaurylenka/project/<?= $p['id'];?>/edit" class="btn btn-warning">
                        <i class="fa fa-pencil"></i>
                      </a>
                      <a href="/AliaksandrHaurylenka/project/<?= $p['id'];?>/delete" class="btn btn-danger" onclick="return confirm('Вы уверены?');">
                        <i class="fa fa-remove"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach;?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Название проекта</th>
                  <th>Скрин в портфолио</th>
                  <th>Скрин сайта</th>
                  <th>Действия</th>
                </tr>
                </tfoot>
              </table>
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