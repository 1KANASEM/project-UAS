<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Data Gallery Fasilitas
        </div>
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if(isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', $error_upload.'</div>';
            }

            echo form_open_multipart('fasilitas/edit/'.$gallery_fasilitas->id_gallery);
            ?>

            <div class="col-md-8">
                <div class="form-group">
                    <label>Nama Gallery</label>
                    <input class="form-control" value="<?= $gallery_fasilitas->nama ?>" type="text" name="nama"
                        placeholder="masukkan Nama Gallery" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2">
                    <label>Sampul Gallery Fasilitas</label>
                    <div>
                        <img src="<?= base_url('sampul_fasilitas /'.$gallery_fasilitas->sampul) ?>" width="150px">
                    </div>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input class="form-control" type="file" value="<?= $gallery_fasilitas->sampul ?>" name="sampul">
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-6">
                    <p></p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('fasilitas'); ?>" type="submit" class="btn btn-danger">kembali</a>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
</div>