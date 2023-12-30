<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Data Berita
        </div>
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if(isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', $error_upload.'</div>';
            }

            echo form_open_multipart('berita/edit/'.$berita->id);
            ?>

            <div class="col-md-8">
                <div class="form-group">
                    <label>Judul</label>
                    <input class="form-control" value="<?= $berita->judul ?>" type="text" name="judul"
                        placeholder="masukkan judul berita" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-2">
                    <label>Gambar Guru</label>
                    <div>
                        <img src="<?= base_url('foto_berita /'.$berita->gambar) ?>" width="150px">
                    </div>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input class="form-control" type="file" value="<?= $berita->gambar ?>" name="gambar">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Isi</label>
                    <textarea class="form-control" name="isi" cols="30" rows="10"
                        required><?= $berita->isi ?> </textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <p></p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('berita'); ?>" type="submit" class="btn btn-danger">kembali</a>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
</div>