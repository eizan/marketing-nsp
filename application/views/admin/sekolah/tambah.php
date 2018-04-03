<?php 
// notifikasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

// open form
echo form_open(base_url('admin/sekolah/tambah'));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Sekolah <?php echo form_error('nama') ?></label>
		<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo set_value('nama') ?>" required>
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo set_value('alamat') ?>" required>
	</div>
	<div class="form-group">
		<label>Kecamatan</label>
		<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo set_value('kecamatan') ?>" required>
	</div>
	<div class="form-group">
		<label>Kabupaten</label>
		<input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="<?php echo set_value('kabupaten') ?>" required>
	</div>
	<div class="form-group">
		<label>Jumlah Siswa</label>
		<input type="number" name="jumlah_siswa" class="form-control" placeholder="Jumlah Siswa" value="<?php echo set_value('jumlah_siswa') ?>" required>
	</div>


</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Kontak Person</label>
		<input type="text" name="kontak_person" class="form-control" placeholder="Nama" value="<?php echo set_value('kontak_person') ?>" required>
	</div>

	<div class="form-group">
		<label>Jabatan</label>
		<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo set_value('jabatan') ?>" required>
	</div>

	<div class="form-group">
		<label>Telpon</label>
		<input type="text" name="telp" class="form-control" placeholder="Telpon" value="<?php echo set_value('telp') ?>" required />
	</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-plus"></i> Tambah</button>
		<button type="reset" name="reset" class="btn btn-default btn-lg"><i class="fa fa-repeat"></i> Reset</button>
		<a href="<?php echo base_url('admin/sekolah') ?>" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Cancel</a>
	</div>
</div>

<?php
//form close
echo form_close(); 
?>