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
              <h2 class="box-title">Услуги</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Услуга</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($services as $s): ?>
                  <tr>
                    <td><?= $s['id']; ?></td>
                    <td><h3><?= $s['name']; ?></h3></td>
                    <td>
                      <a href="/AliaksandrHaurylenka/services/<?= $s['id']; ?>/edit" class="btn btn-warning"
                         style="margin-bottom: .5rem">
                        <i class="fa fa-pencil"></i>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Услуга</th>
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