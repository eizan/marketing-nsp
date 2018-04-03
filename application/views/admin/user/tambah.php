<?php 
// notifikasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

// open form
echo form_open(base_url('admin/user/tambah'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama</label>
		<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama') ?>" required>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email') ?>" required>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo set_value('username') ?>" required>
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="password" value="<?php echo set_value('password') ?>" required>
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Level Hak ases</label>
		<select type="text" name="akses_level" class="form-control">
			<option value="Admin">Admin</option>}
			<option value="User">User</option>}
			option
		</select>
	</div>

	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" placeholder="keterangan" value="<?php echo set_value('nama') ?>"></textarea>
	</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-pencil-square-o"></i> Update</button>
		<button type="reset" name="reset" class="btn btn-default btn-lg"><i class="fa fa-repeat"></i> Reset</button>
		<a href="<?php echo base_url('admin/user') ?>" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Cancel</a>
	</div>
</div>

<?php
//form close
echo form_close(); 
?>