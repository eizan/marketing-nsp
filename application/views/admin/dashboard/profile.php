<?php 
// notifikasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');


// Notifikasi
if ($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success"><i class="fa fa-check"></i>';
	echo $this->session->flashdata('sukses');
	echo "</div>";
}


// open form
echo form_open(base_url('admin/dashboard/profile/'.$user->id_user));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Sekolah</label>
		<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $user->nama ?>" required>
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $user->email ?>" required>
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control" placeholder="username" value="<?php echo $user->username ?>" disable readonly>
	</div>
	<div class="form-group">
		<label>Password <span class="text-danger"><small>(Password minimal 6 untuk mengganti atau biarkan kosong)</small></span></label>
		<input type="password" name="password" class="form-control" placeholder="password" value="<?php echo set_value('password') ?>" >
	</div>
</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Level Hak ases</label>
		<select type="text" name="akses_level" class="form-control">
			<option value="<?php echo $user->akses_level ?>"><?php echo $user->akses_level ?></option>}
		</select>
	</div>

	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" placeholder="keterangan" ><?php echo $user->keterangan ?></textarea>
	</div>

	<div class="form-group">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Update">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
	</div>
</div>

<?php
//form close
echo form_close(); 
?>