<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <a href="<?= base_url('Kegiatan/add') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>add</a>
        </div>
        <div class="panel-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Gallery</th>
                            <th>Sampul Gallery</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($gallery_kegiatan as $key => $value) { ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $value->nama; ?>
                                </td>
                                <td class="text-center">
                                    <img src="<?= base_url('sampul_kegiatan/' .$value->sampul)?>" width="100px" height="100px"><br>
                                    <i class="fa fa-image"> <?= $value->jml ?> Foto</i><br>
                                    <a href="<?= base_url('kegiatan/add_kegiatan/' .$value->id_gallery); ?>" class="btn btn-success btn-xs"><i class="fa fa-plus">Tambah</i></a>
                                </td> 
                                
                                <td>
                                    <a href="<?= base_url('kegiatan/edit/' . $value->id_gallery) ?>"
                                        onclick="return confirm('Apakah data akan mau di edit?')"
                                        class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url('kegiatan/delete/' . $value->id_gallery) ?>"
                                        onclick="return confirm('Apakah data akan dihapus?')"
                                        class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
    </div>
</div>