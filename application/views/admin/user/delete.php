<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $user->id_user ?>"><i class="fa fa-trash"></i> Delete</button>
<div class="modal fade" id="myModal<?php echo $user->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus User: <strong><?php echo $user->nama ?></strong></h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-warning"><i class="fa fa-warning"></i> Yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <a href="<?php echo base_url('admin/user/delete/'.$user->id_user) ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                <a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
            </div>
        </div>
    </div>
</div>
