<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <a href="<?= base_url('guru/add') ?>" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>add</a>
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
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Pendidikan</th>
                            <th>Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($guru as $key => $value) { ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td class="text-center">
                                    <img src="<?= base_url('foto_guru/' .$value->foto)?>"  width="100px" height="100px">
                                </td>
                                <td>
                                    <?= $value->nama; ?>
                                </td>
                                <td>
                                    <?= $value->gender; ?>
                                </td>
                                <td>
                                    <?= $value->tempat_lahir; ?>
                                </td>
                                <td>
                                    <?= $value->tanggal_lahir; ?>
                                </td>
                                <td>
                                    <?= $value->pendidikan; ?>
                                </td>
                                <td>
                                    <?= $value->bagian; ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('guru/edit/' . $value->id) ?>"
                                        onclick="return confirm('Apakah data akan mau di edit?')"
                                        class="btn btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                    <a href="<?= base_url('guru/delete/' . $value->id) ?>"
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