<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            Edit Data Guru
        </div>
        <div class="panel-body">
            <?php

            echo validation_errors('<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

            if(isset($error_upload)) {
                echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', $error_upload.'</div>';
            }

            echo form_open_multipart('guru/edit/'.$guru->id);
            ?>

            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama</label>
                    <input class="form-control" value="<?= $guru->nama ?>" type="text" name="nama"
                        placeholder="masukkan nama guru" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input class="form-control" value="<?= $guru->tempat_lahir ?>" type="text" name="tempat_lahir"
                        placeholder="masukkan Tempat Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input class="form-control" value="<?= $guru->tanggal_lahir ?>" type="date" name="tanggal_lahir"
                        placeholder="masukkan Tanggal Lahir" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Departemen</label>
                    <select name="id_bagian" class="form-control">
                        <option value="<?= $guru->id_bagian ?>">
                            <?= $guru->bagian ?>
                        </option>
                        <?php foreach($bagian as $key => $value) { ?>
                            <option value="<?= $value->id_bagian ?>">
                                <?= $value->bagian ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label>Pendidikan</label>
                    <select name="pendidikan" class="form-control">
                        <option value="<?= $guru->pendidikan ?>">
                            <?= $guru->pendidikan ?>
                        </option>
                        <option value="SD">SD Sedarajat</option>
                        <option value="SMP">SMP Sedarajat</option>
                        <option value="SMA">SMA Sedarajat</option>
                        <option value="D3">D3 Sedarajat</option>
                        <option value="S1">S1 Sedarajat</option>
                        <option value="S2">S2 Sedarajat</option>
                        <option value="S3">S3 Sedarajat</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Ganti Foto</label>
                    <input class="form-control" type="file" value="<?= $guru->foto ?>" name="foto">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="gender" class="form-control">
                        <option value="<?= $guru->gender ?>">
                            <?= $guru->gender ?>
                        </option>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <label>Gambar Guru</label>
                    <div>
                        <img src="<?= base_url('foto_guru/'.$guru->foto) ?>" width="150px">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <p></p>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="<?= base_url('guru'); ?>" type="submit" class="btn btn-danger">kembali</a>
                </div>
            </div>

            <?php echo form_close(); ?>
        </div>
        <!-- /.table-responsive -->
    </div>
</div>
</div>