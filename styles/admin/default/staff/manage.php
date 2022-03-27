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
                <strong> Staffs</strong>
            </li>
        </ol>

    </div>

</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Staffs Directory  </h3>
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
                <label class="col-sm-2 control-label" for="field-1">Full Name </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Full Name" name="name"
                           value="<?php echo set_value('name', $item->name) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Position </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Position" name="position"
                           value="<?php echo set_value('position', $item->position) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Department </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Department" name="department"
                           value="<?php echo set_value('department', $item->department) ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            
            
            
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Description</label>

                <div class="col-sm-10">
                    <textarea style="height: 250px;"class="form-control" placeholder="Description" name="description"><?php echo set_value('description', $item->description) ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
 <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Telephone </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Phone No." name="phone"
                           value="<?php echo set_value('phone', $item->phone) ?>">
                </div>
            </div>
          <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Image</label>

                <div class="col-sm-10">
                    <input class="form-control" type="file" name="image" >
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

