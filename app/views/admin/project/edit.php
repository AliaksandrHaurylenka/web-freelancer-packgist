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
              <h2 class="box-title">Обновить проект</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-8">
                <?= flash(); ?>
                <form action="/AliaksandrHaurylenka/project/<?= $project['id']; ?>/update" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="project">Название проекта</label>
                    <input type="text" class="form-control" id="project" name="title" value="<?= $project['name']; ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="type_project">Тип проекта</label>
                    <input type="text" class="form-control" id="type_project" name="type_project"
                           value="<?= $project['type_project']; ?>" required>
                  </div>

                  <div class="form-group">
                    <label for="description">Краткое описание</label>
                    <textarea name="description" class="form-control"
                              id="description" required><?= $project['description']; ?></textarea>
                    <script>
                      CKEDITOR.replace('description', {height: 200});
                    </script>
                  </div>

                  <div class="form-group">
                    <label for="technology">Используемые технологии</label>
                    <textarea name="technology" class="form-control"
                              id="technology" required><?= $project['technology']; ?></textarea>
                    <script>
                      CKEDITOR.replace('technology', {height: 200});
                    </script>
                  </div>

                  <div class="form-group">
                    <label for="link_site">Ссылка на сайт</label>
                    <input type="text" class="form-control" id="link_site" name="link_site"
                           value="<?= $project['link_site']; ?>" required>
                  </div>
                  
                  
                  <div class="row" style="margin-bottom: 1rem">
                    <img src="/img/works/<?= $project['img']; ?>" alt="<?= $project['name']; ?>" class="col-md-6">
                    <div class="form-group col-md-6">
                      <label for="images">Изображение для портфолио</label>
                      <input type="file" id="images" name="image">
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 1rem">
                    <img src="/img/works/<?= $project['img_site']; ?>" alt="<?= $project['name']; ?>" class="col-md-6">
                    <div class="form-group col-md-6">
                      <label for="image_site">Изображение сайта</label>
                      <input type="file" id="image_site" name="image_site">
                    </div>
                  </div>

                  <div class="form-group">
                    <button class="btn btn-success" type="submit">Обновить</button>
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
