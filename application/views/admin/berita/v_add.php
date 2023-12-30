<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            Add Data Berita
        </div>
        <div class="panel-body">
            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            echo form_open_multipart("berita/add");
            ?>

            <div class="col-md-9">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" type="text" name="judul" placeholder="masukkan Judul berita" required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Gambar</label>
                    <input class="form-control" type="file" name="gambar" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Isi</label>
                    <textarea class="ckeditor" id="ckeditor" name="isi" 
                        placeholder="masukkan Isi" required></textarea>
                </div>
            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <a href="<?= base_url('berita'); ?>" type="submit" class="btn btn-danger">kembali</a>
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
</div>