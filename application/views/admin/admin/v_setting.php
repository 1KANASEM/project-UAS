
<?php
echo form_open_multipart('setting');
if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
    echo $this->session->flashdata('pesan');
    echo '</div>';
}
?>

<div class="col-sm-1">
</div>

<div class="col-sm-2" style="position: relative; text-align: center; padding-top: 40px; margin-right: 100px;">
    <label> Foto Pimpinan RTQ</label><br>
    <img src="<?= base_url('foto_pimpinan/' . $setting->foto_pimpinan) ?>" style="width: 200px; height:250px;">
    <br>

    <div class="form-group col-sm-10">
        <br>
        <label>Ganti Foto</label>
        <input type="file" class="form-control" name="foto_pimpinan">
    </div>
</div>

<div class="col-sm-7">
    <br><br>
    <div class="form-group">
        <label>Nama Sekolah</label>
        <input type="text" class="form-control" value="<?= $setting->nama_rtq ?>" name="nama_rtq">
    </div>

    <div class="form-group">
        <label>Nama Pimpinan</label>
        <input type="text" class="form-control" value="<?= $setting->pimpinan ?>" name="pimpinan">
    </div>

    <div class="form-group">
        <label>No HP</label>
        <input type="text" class="form-control" value="<?= $setting->no_hp ?>" name="no_hp">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" value="<?= $setting->alamat ?>" name="alamat">
    </div>

    <div class="form-group">
        <label>Motto</label>
        <input type="text" class="form-control" value="<?= $setting->motto ?>" name="motto">
    </div>
</div>


<div class="col-md-11">
    <div class="form-group">
        <label>Visi</label>
        <input class="form-control" id="ckeditor" name="visi" value="<?= $setting->visi ?>" 
            required>
    </div>
</div>

<div class="col-md-11">
    <div class="form-group">
        <label>Misi</label>
        <textarea class="ckeditor" id="ckeditor" name="misi"
            required><?= $setting->misi?></textarea>
    </div>
</div>

<div class="col-md-11">
    <div class="form-group">
        <label>Sejarah</label>
        <textarea class="ckeditor" id="ckeditor" name="sejarah"
            required><?= $setting->sejarah?></textarea>
    </div>
</div>

<div class="col-md-11">
    <div class="form-group">
        <label>Progaram</label>
        <textarea class="ckeditor" id="ckeditor" name="program"
            required><?= $setting->program ?></textarea>
    </div>
</div>

<div class="col-md-11">
    <div class="form-group">
        <label>Tujuan</label>
        <textarea class="ckeditor" id="ckeditor" name="tujuan"
            required><?= $setting->tujuan?></textarea>
    </div>
</div>

<div class="col-md-11">
    <div class="form-group">
        <label>Muasofat</label>
        <textarea class="ckeditor" id="ckeditor" name="muasofat"
            required><?= $setting->muasofat ?></textarea>
    </div>
</div>
<br>

<div class="col-md-6">
    <div class="form-group"><br><br>
        <button type="submit" class="btn btn-success btn-sm">Update</button>
    </div><br><br><br>  <hr><br>
</div>

<?php form_close(); ?>