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
                <strong>About Info</strong>
            </li>
        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> About Info</h3>
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
                <label class="col-sm-2 control-label" for="field-1">Youtube Video</label>

                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Full Name" name="name" value="<?php echo set_value('name', $item->name) ?>" >
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">About <?php echo config('name') ?></label>

                <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="Short information about us " name="short_about"
                              style="height: 100px;"><?php echo set_value('short_about', $item->short_about) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Home Course</label>

                <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="Short course info" name="course"
                              style="height: 100px;"><?php echo set_value('course', $item->course) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Home Join Us</label>

                <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="Short information about gallery " name="gallery"
                              style="height: 100px;"><?php echo set_value('gallery', $item->gallery) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Full About <?php echo config('name') ?> </label>

                <div class="col-sm-10">
                    <textarea type="text" class="form-control" placeholder="About ESCAE" name="about"
                              style="height: 200px;" id="editor1"><?php echo set_value('about', $item->about) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>

                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Submit">
                    <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-danger">Cancel</a>
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
