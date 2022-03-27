<div class="page-title">
    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="<?php echo site_url('admin/dashboard') ?>"><i class="fa-home"></i>Home</a>
            </li>
            <li class="active">
                <strong> Update Course</strong>
            </li>
        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Update Course</h3>
    </div>
    <div class="panel-body">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <?php echo validation_errors() ?>
                </div>
            </div>
        <?php endif ?>
        <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Course Title </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Course Title" name="title"
                           value="<?php echo set_value('title', $item->title) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Course Code </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Course Code" name="code"
                           value="<?php echo set_value('code', $item->code) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
              <div class="form-group">
                <label class="col-sm-2 control-label">School</label>

                <div class="col-sm-10">
                    <?php echo form_dropdown('category_id', dd2menu('categories', array('category_id' => 'title')), set_value('category_id', $item->category_id), 'class="form-control"') ?>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Description</label>

                <div class="col-sm-10">
                    <textarea style="height: 250px;"class="form-control" placeholder="Description" name="description" id="editor1"><?php echo set_value('description', $item->description) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
 <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Duration </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Duration" name="duration"
                           value="<?php echo set_value('duration', $item->duration) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
             <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Title </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Lecturar Incharge" name="lecturar"
                           value="<?php echo set_value('lecturar', $item->lecturar) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Submit">
                    <a href="<?php echo site_url('admin/news/index'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </div>


        </form>

    </div>
</div>

<script src="<?php echo STYLE_JS ?>/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('editor1');
    });
</script>

