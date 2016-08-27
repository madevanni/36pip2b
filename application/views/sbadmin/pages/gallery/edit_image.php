<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit image</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <?php if (validation_errors() || isset($error)) : ?>
                    <div class="alert alert-danger" role="alert" align="center">
                        <?= validation_errors() ?>
                        <?= (isset($error) ? $error : '') ?>
                    </div>
                <?php endif; ?>

                <div class="panel panel-default">
                    <div class="panel-heading">Image File description</div>
                    <div class="panel-body">
                        <?= form_open_multipart('gallery/edit/' . $image->id) ?>

                        <div class="form-group">
                            <div class="row" style="margin-bottom:5px">
                                <div class="col-md-3">
                                    <?= img(['src' => $image->img_path, 'width' => '200%']) ?>
                                </div>
                            </div>
                            <input type="file" name="userfile">
                        </div>

                        <div class="form-group">
                            <label for="caption">Caption</label>
                            <input type="text" class="form-control" name="caption" value="<?= $image->img_caption ?>">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description"><?= $image->img_desc ?></textarea>
                        </div>

                        </form>
                    </div>
                    <div class="panel-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <?= anchor('gallery/manage_images', 'Cancel', ['class' => 'btn btn-warning']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>