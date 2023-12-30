<div class="col-lg-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <button class="btn btn-success btn-sm " data-toggle="modal" data-target="#myModal"><i
                    class="fa fa-plus"></i>add</button>
        </div>
        <div class="panel-body">
            <?php
            if($this->session->flashdata('pesan')) {
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
                            <th>Nama Departemen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach($bagian as $key => $value) { ?>
                            <tr>
                                <td>
                                    <?= $no++; ?>
                                </td>
                                <td>
                                    <?= $value->bagian; ?>
                                </td>
                                <td>
                                    <button class="btn btn-xs btn-success" data-toggle="modal"
                                        data-target="#edit<?= $value->id_bagian ?>"><i class="fa fa-pencil"></i>  </button>
                                    <a href="<?= base_url('bagian/delete/'.$value->id_bagian) ?>"
                                        onclick="return confirm('Apakah data departemen akan dihapus?')"
                                        class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i>  </a>
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


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">add departemen</h4>
            </div>

            <div class="modal-body">
                <?php echo form_open('bagian/add'); ?>
                <div class="form-group">
                    <label>departemen</label>
                    <input class="form-control" name="bagian" placeholder="masukkan departemen" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Save</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php foreach($bagian as $key => $value) { ?>

    <!-- Modal -->
    <div class="modal fade" id="edit<?= $value->id_bagian ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">edit departemen</h4>
                </div>

                <div class="modal-body">
                    <?php echo form_open('bagian/edit/' .$value->id_bagian); ?>
                    <div class="form-group">
                        <label>departemen</label>
                        <input class="form-control" name="bagian" value="<?= $value->bagian ?>" placeholder="masukkan departemen"
                            required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                <?php echo form_close(); ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<?php } ?>