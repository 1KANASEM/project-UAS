<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            Add Data Foto Fasilitas
        </div>
        <div class="panel-body">
            <?php

            if (isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', $error_upload . '</div>';
            }

            echo validation_errors('<div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }

            echo form_open_multipart('fasilitas/add_fasilitas/' . $gallery_fasilitas->id_gallery);
            ?>

            <div class="col-md-9">
                <div class="form-group">
                    <label>Keterangan Foto</label>
                    <input class="form-control" type="text" name="keterangan" placeholder="Masukkan Keterangan Foto"
                        required>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label>Foto</label>
                    <input class="form-control" type="file" name="foto" required>
                </div>
            </div>


            <div class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <a href="<?= base_url('fasilitas'); ?>" type="submit" class="btn btn-danger">kembali</a>
                </div>
                <hr>
            </div>

            <?php echo form_close(); ?>


            <?php foreach ($fasilitas as $key => $value) { ?>
                <div class="col-md-3 text-center">
                    <div class="thumbnail" style="height: 260px; overflow: hidden;">
                        <label>
                            <?= $value->keterangan ?>
                        </label>
                        <img src="<?= base_url('foto_fasilitas/' . $value->foto) ?>"
                            style="width: 75%; height: 75%; object-fit: cover;" alt="<?= $value->keterangan ?>">
                        <div class="caption" style="margin-top: 5px;">
                            <a href="<?= base_url('fasilitas/delete_fasilitas/') . $value->id_gallery . '/' . $value->id_fasilitas ?>"
                                onclick="return confirm('Apakah data akan dihapus?')"
                                class="btn btn-danger btn-xs btn-block" style="width: 80%; margin: 0 auto;"><i
                                    class="fa fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>

        <!-- /.table-responsive -->
    </div>
</div>
</div>