<?php 
// notifikasi kalau input error
echo validation_errors('<div class="alert alert-danger"><i class="fa fa-warning"></i> ','</div>');

// open form
echo form_open(base_url('admin/sekolah/edit/'.$sekolah->id_sekolah));
?>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Sekolah <?php echo form_error('nama') ?></label>
		<input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $sekolah->nama ?>" required>
	</div>
	<div class="form-group">
		<label>Alamat <?php echo form_error('alamat') ?></label>
		<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $sekolah->alamat ?>" required>
	</div>
	<div class="form-group">
		<label>Kecamatan <?php echo form_error('kecamatan') ?></label>
		<input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo $sekolah->kecamatan ?>" required>
	</div>
	<div class="form-group">
		<label>Kabupaten <?php echo form_error('kabupaten') ?></label>
		<input type="text" name="kabupaten" class="form-control" placeholder="Kabupaten" value="<?php echo $sekolah->kabupaten ?>" required>
	</div>
	<div class="form-group">
		<label>Jumlah Siswa <?php echo form_error('jumlah_siswa') ?></label>
		<input type="number" name="jumlah_siswa" class="form-control" placeholder="Jumlah Siswa" value="<?php echo $sekolah->jumlah_siswa ?>" required>
	</div>


</div>

<div class="col-md-6">
	<div class="form-group">
		<label>Nama Kontak Person <?php echo form_error('kontak_person') ?></label>
		<input type="text" name="kontak_person" class="form-control" placeholder="Nama" value="<?php echo $sekolah->kontak_person ?>" required>
	</div>

	<div class="form-group">
		<label>Jabatan <?php echo form_error('jabatan') ?></label>
		<input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="<?php echo $sekolah->jabatan ?>" required>
	</div>

	<div class="form-group">
		<label>Telpon <?php echo form_error('telp') ?></label>
		<input type="text" name="telp" class="form-control" placeholder="Telpon" value="<?php echo $sekolah->telp ?>" required />
	</div>

	<div class="form-group">
		<button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-pencil-square-o"></i> Update</button>
		<button type="reset" name="reset" class="btn btn-default btn-lg"><i class="fa fa-repeat"></i> Reset</button>
		<a href="<?php echo base_url('admin/sekolah') ?>" class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Cancel</a>
	</div>
</div>

<?php
//form close
echo form_close(); 
?>