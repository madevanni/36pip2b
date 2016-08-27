<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add new image</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">

                <div class="panel panel-default">
                    <div class="panel-heading">Please select a file</div>
                    <div class="panel-body">
                        <?php if (validation_errors() || isset($error)) : ?>
                            <div class="alert alert-danger" role="alert" align="center">
                                <?= validation_errors() ?>
                                <?= (isset($error) ? $error : '') ?>
                            </div>
                        <?php endif; ?>

                        <?= form_open_multipart('gallery/upload') ?>

                        <div class="form-group">
                            <label for="userfile">Image File</label>
                            <input type="file" name="userfile">
                        </div>

                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" class="form-control" name="caption" value="">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Upload</button>
                        <?= anchor('gallery/manage_images', 'Cancel', ['class' => 'btn btn-warning']) ?>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>