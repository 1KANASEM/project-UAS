<div class="col-lg-10">
    <div class="panel panel-success">
        <div class="panel-heading">
            Add Data Gallery fasilitas
        </div>
        <div class="panel-body">
            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            echo form_open_multipart("fasilitas/add");
            ?>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama Gallery</label>
                    <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama Gallery" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Sampul Gallery</label>
                    <input class="form-control" type="file" name="sampul" required>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('fasilitas'); ?>" type="submit" class="btn btn-danger">kembali</a>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
</div>